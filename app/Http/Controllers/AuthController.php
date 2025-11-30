<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    /**
     * SHOW LOGIN PAGE
     */
    public function showLoginForm()
    {
        return view('tampilan.login');
    }

    /**
     * REDIRECT TO GOOGLE
     */
    public function redirectToGoogle()
    {
        // Menggunakan stateless untuk menghindari masalah sesi pada login pertama
        return Socialite::driver('google')->stateless()->redirect();
    }

    /**
     * GOOGLE CALLBACK
     */
    public function handleGoogleCallback()
    {
        try {
            // Menggunakan stateless untuk konsistensi
            $googleUser = Socialite::driver('google')->stateless()->user();
        } catch (\Exception $e) {
            // Logging error untuk membantu debugging
            Log::error('Google Login Error: ' . $e->getMessage());
            return redirect()->route('login')->with('error', 'Gagal login menggunakan Google.');
        }

        // Cek user berdasarkan google_id
        $user = User::where('google_id', $googleUser->id)->first();

        if (!$user) {
            // Jika tidak ditemukan, cek berdasarkan email
            $user = User::where('email', $googleUser->email)->first();

            if ($user) {
                // Jika user ada berdasarkan email, update data Google-nya
                $user->update([
                    'google_id'      => $googleUser->id,
                    'google_avatar'  => $googleUser->getAvatar(),
                    'last_login_provider' => 'google', // Catat provider login terakhir
                ]);
            } else {
                // Jika tidak ada, buat user baru
                $user = User::create([
                    'name'           => $googleUser->name,
                    'email'          => $googleUser->email,
                    'password'       => Hash::make('google_' . uniqid()),
                    'google_id'      => $googleUser->id,
                    'google_avatar'  => $googleUser->getAvatar(),
                    'last_login_provider' => 'google', // Set provider awal
                ]);
            }
        } else {
            // Jika user ditemukan berdasarkan google_id, update avatar dan provider
            $user->update([
                'google_avatar' => $googleUser->getAvatar(),
                'last_login_provider' => 'google',
            ]);
        }

        Auth::login($user);

        return redirect('/dashboard')->with('success', 'Login Google berhasil!');
    }

    /**
     * REDIRECT TO FACEBOOK
     */
    public function redirectToFacebook()
    {
        // Menggunakan stateless untuk menghindari masalah sesi
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    /**
     * FACEBOOK CALLBACK
     */
    public function handleFacebookCallback()
    {
        try {
            // Menggunakan stateless untuk konsistensi
            $fbUser = Socialite::driver('facebook')->stateless()->user();
        } catch (\Exception $e) {
            // Logging error untuk membantu debugging
            Log::error('Facebook Login Error: ' . $e->getMessage());
            return redirect()->route('login')->with('error', 'Gagal login menggunakan Facebook.');
        }

        // Email fallback jika Facebook tidak menyediakannya
        $email = $fbUser->email ?? "fb_{$fbUser->id}@facebook.local";
        // Avatar fallback
        $avatar = $fbUser->avatar_original ?? $fbUser->avatar ?? null;

        // Cek user berdasarkan facebook_id
        $user = User::where('facebook_id', $fbUser->id)->first();

        if (!$user) {
            // Jika tidak ditemukan, cek berdasarkan email
            $user = User::where('email', $email)->first();

            if ($user) {
                // Jika user ada berdasarkan email, update data Facebook-nya
                $user->update([
                    'facebook_id'     => $fbUser->id,
                    'facebook_avatar' => $avatar,
                    'last_login_provider' => 'facebook', // Catat provider login terakhir
                ]);
            } else {
                // Jika tidak ada, buat user baru
                $user = User::create([
                    'name'            => $fbUser->name,
                    'email'           => $email,
                    'password'        => Hash::make('facebook_' . uniqid()),
                    'facebook_id'     => $fbUser->id,
                    'facebook_avatar' => $avatar,
                    'last_login_provider' => 'facebook', // Set provider awal
                ]);
            }
        } else {
            // Jika user ditemukan berdasarkan facebook_id, update avatar dan provider
            $user->update([
                'facebook_avatar' => $avatar,
                'last_login_provider' => 'facebook',
            ]);
        }

        Auth::login($user);

        return redirect('/dashboard')->with('success', 'Login Facebook berhasil!');
    }

    /**
     * LOGOUT
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda telah logout.');
    }
}