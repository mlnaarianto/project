<nav class="navbar navbar-dark bg-dark px-3">
    <button class="btn btn-outline-light d-md-none" id="mobileToggle">
        <i class="bi bi-list"></i>
    </button>

    <button class="btn btn-outline-light d-none d-md-block" id="sidebarToggle">
        <i class="bi bi-layout-sidebar"></i>
    </button>

    <a class="navbar-brand ms-2" href="#">My App</a>

    <div class="ms-auto d-flex align-items-center gap-3">
        @auth
        {{-- Profil --}}
        <div class="d-flex align-items-center text-white">
            <img src="{{ Auth::user()->avatar }}" 
                 alt="Avatar" 
                 class="rounded-circle me-2"
                 width="35" height="35"
                 style="object-fit: cover;">

            <div class="me-3">
                <div style="font-size: 0.85rem; font-weight: 600;">
                    {{ Auth::user()->name }}
                </div>
                <div style="font-size: 0.75rem; opacity: 0.8;">
                    {{ Auth::user()->email }}
                </div>
            </div>
        </div>

        {{-- Logout --}}
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
        @endauth
    </div>
</nav>
