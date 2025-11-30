<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'password',

        // Social login
        'google_id',
        'facebook_id',

        // Avatar terpisah
        'google_avatar',
        'facebook_avatar',

        // Tambahkan kolom baru
        'last_login_provider',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Types for casts.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Accessor: avatar gabungan google / facebook / default.
     * Avatar akan disesuaikan dengan provider login terakhir.
     */
    public function getAvatarAttribute()
    {
        // Cek provider login terakhir
        if ($this->last_login_provider === 'google' && !empty($this->google_avatar)) {
            return $this->google_avatar;
        }

        if ($this->last_login_provider === 'facebook' && !empty($this->facebook_avatar)) {
            return $this->facebook_avatar;
        }

        // Fallback: Jika provider tidak dikenal, coba keduanya
        if (!empty($this->google_avatar)) {
            return $this->google_avatar;
        }

        if (!empty($this->facebook_avatar)) {
            return $this->facebook_avatar;
        }

        // Default avatar (ui-avatars)
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name);
    }
}