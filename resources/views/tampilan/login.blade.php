@extends('tampilan.app')

@section('title', 'Login')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center bg-light">
    <div class="login-box text-center p-4">

        {{-- Logo --}}
        <div class="mb-4">
            <h3 class="fw-bold">Welcome Back</h3>
            <p class="text-muted">Login to continue</p>
        </div>

        {{-- Google Login --}}
        <a href="{{ route('google.redirect') }}" 
           class="btn btn-google w-100 shadow-sm py-2 mb-3">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" width="22" class="me-2">
            Continue with Google
        </a>

        {{-- Facebook Login --}}
        <a href="{{ route('facebook.redirect') }}" 
           class="btn btn-facebook w-100 shadow-sm py-2">
            <img src="https://www.svgrepo.com/show/448224/facebook.svg" width="22" class="me-2">
            Continue with Facebook
        </a>

        {{-- Error --}}
        @if (session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif

    </div>
</div>
@endsection

@push('styles')
<style>
    .login-box {
        width: 100%;
        max-width: 420px;
        border-radius: 20px;
        background: white;
        border: 1px solid #eee;
    }

    .btn-google, .btn-facebook {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 500;
    }

    .btn-google:hover,
    .btn-facebook:hover {
        background: #f9f9f9;
        border-color: #ccc;
    }
</style>
@endpush
