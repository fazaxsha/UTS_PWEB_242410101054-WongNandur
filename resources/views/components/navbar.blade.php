@props(['username' => null])

<nav class="navbar navbar-expand-lg" style="background-color: #2D5016; padding: 0.8rem 0;">
    <div class="container">

        {{-- Brand / Logo --}}
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('dashboard', ['username' => $username]) }}"
           style="color: #F5F0E8; text-decoration: none;">
            <span style="font-size: 1.6rem;">🪴</span>
            <span style="font-family: 'DM Serif Display', serif; font-size: 1.4rem; letter-spacing: 0.02em;">
                Wong Nandur
            </span>
        </a>

        {{-- Toggle mobile --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMain" aria-label="Toggle navigation"
                style="border-color: rgba(245,240,232,0.4);">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        {{-- Nav links --}}
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active-nav' : '' }}"
                       href="{{ route('dashboard', ['username' => $username]) }}"
                       style="color: #C8E6A0; font-weight: 500; padding: 0.5rem 0.9rem; border-radius: 8px; transition: background 0.2s;">
                        <i class="bi bi-house-door me-1"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pengelolaan') ? 'active-nav' : '' }}"
                       href="{{ route('pengelolaan', ['username' => $username]) }}"
                       style="color: #C8E6A0; font-weight: 500; padding: 0.5rem 0.9rem; border-radius: 8px; transition: background 0.2s;">
                        <i class="bi bi-grid-3x3-gap me-1"></i> Pengelolaan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile') ? 'active-nav' : '' }}"
                       href="{{ route('profile', ['username' => $username]) }}"
                       style="color: #C8E6A0; font-weight: 500; padding: 0.5rem 0.9rem; border-radius: 8px; transition: background 0.2s;">
                        <i class="bi bi-person-circle me-1"></i> Profil
                    </a>
                </li>

                @if($username)
                <li class="nav-item ms-lg-2">
                    <a href="{{ route('logout') }}" class="btn btn-sm"
                       style="background-color: rgba(255,255,255,0.12); color: #F5F0E8; border: 1px solid rgba(255,255,255,0.25); border-radius: 8px; padding: 0.4rem 1rem;">
                        <i class="bi bi-box-arrow-right me-1"></i> Keluar
                    </a>
                </li>
                @endif

            </ul>
        </div>
    </div>
</nav>

<style>
    .active-nav {
        background-color: rgba(255,255,255,0.15) !important;
        color: #FFFFFF !important;
    }
    .nav-link:hover {
        background-color: rgba(255,255,255,0.1);
        color: #FFFFFF !important;
    }
</style>
