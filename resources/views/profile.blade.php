@extends('layouts.app')

@section('title', 'Profil — Wong Nandur')

@section('content')

<div class="page-header">
    <div class="container">
        <h1 style="font-size: 1.8rem; margin-bottom: 0.2rem;">
            <i class="bi bi-person-circle me-2"></i>Profil Petani
        </h1>
        <p style="opacity: 0.8; margin: 0; font-size: 0.9rem;">
            Selamat Pagi 🌤️ <strong>{{ $username }}</strong>
        </p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card-hydro p-4 mb-4 text-center">

                <div style="width:90px; height:90px; border-radius:50%; overflow:hidden;
                             margin: 0 auto 1rem; box-shadow: 0 4px 14px rgba(74,124,47,0.3); background:#F0F4E8;">
                    <img src="{{ asset('images/gambar-profil.jpg') }}" alt="Foto profil petani"
                         style="width:100%; height:100%; object-fit:cover;">
                </div>

                <h3 style="font-family: 'DM Serif Display', serif; color:#2D5016; font-size:1.6rem;">
                    {{ $profil['nama'] }}
                </h3>
                <p style="color:#7BAE3E; font-size:0.9rem; font-weight:500; margin-bottom:0.5rem;">
                    {{ $profil['jabatan'] }}
                </p>
                <span style="background:#C8E6A0; color:#2D5016; border-radius:20px;
                              padding:0.25rem 1rem; font-size:0.8rem; font-weight:600;">
                    <i class="bi bi-patch-check-fill me-1"></i>Anggota Aktif
                </span>

            </div>

            <div class="card-hydro p-4 mb-4">
                <h5 style="font-family: 'DM Serif Display', serif; color:#2D5016; margin-bottom:1.2rem;">
                    <i class="bi bi-info-circle me-2"></i>Detail Informasi
                </h5>

                <div>
                    <div class="d-flex align-items-center py-3" style="border-bottom: 1px solid #F0EDE5;">
                        <div style="width:36px; height:36px; background:#F0F4E8; border-radius:8px;
                                     display:flex; align-items:center; justify-content:center;
                                     color:#4A7C2F; margin-right:1rem; flex-shrink:0;">
                            <i class="bi bi-person"></i>
                        </div>
                        <div>
                            <div style="font-size:0.75rem; color:#9CA3AF; text-transform:uppercase; letter-spacing:0.05em;">
                                Nama Lengkap
                            </div>
                            <div style="font-weight:600; color:#1A2E0A;">{{ $profil['nama'] }}</div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center py-3" style="border-bottom: 1px solid #F0EDE5;">
                        <div style="width:36px; height:36px; background:#F0F4E8; border-radius:8px;
                                     display:flex; align-items:center; justify-content:center;
                                     color:#4A7C2F; margin-right:1rem; flex-shrink:0;">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div>
                            <div style="font-size:0.75rem; color:#9CA3AF; text-transform:uppercase; letter-spacing:0.05em;">
                                Jabatan
                            </div>
                            <div style="font-weight:600; color:#1A2E0A;">{{ $profil['jabatan'] }}</div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center py-3" style="border-bottom: 1px solid #F0EDE5;">
                        <div style="width:36px; height:36px; background:#F0F4E8; border-radius:8px;
                                     display:flex; align-items:center; justify-content:center;
                                     color:#4A7C2F; margin-right:1rem; flex-shrink:0;">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <div style="font-size:0.75rem; color:#9CA3AF; text-transform:uppercase; letter-spacing:0.05em;">
                                Lokasi
                            </div>
                            <div style="font-weight:600; color:#1A2E0A;">{{ $profil['lokasi'] }}</div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center py-3" style="border-bottom: 1px solid #F0EDE5;">
                        <div style="width:36px; height:36px; background:#F0F4E8; border-radius:8px;
                                     display:flex; align-items:center; justify-content:center;
                                     color:#4A7C2F; margin-right:1rem; flex-shrink:0;">
                            <i class="bi bi-building"></i>
                        </div>
                        <div>
                            <div style="font-size:0.75rem; color:#9CA3AF; text-transform:uppercase; letter-spacing:0.05em;">
                                Nama Kebun
                            </div>
                            <div style="font-weight:600; color:#1A2E0A;">{{ $profil['kebun'] }}</div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center py-3" style="border-bottom: 1px solid #F0EDE5;">
                        <div style="width:36px; height:36px; background:#F0F4E8; border-radius:8px;
                                     display:flex; align-items:center; justify-content:center;
                                     color:#4A7C2F; margin-right:1rem; flex-shrink:0;">
                            <i class="bi bi-rulers"></i>
                        </div>
                        <div>
                            <div style="font-size:0.75rem; color:#9CA3AF; text-transform:uppercase; letter-spacing:0.05em;">
                                Luas Kebun
                            </div>
                            <div style="font-weight:600; color:#1A2E0A;">{{ $profil['luas'] }}</div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center py-3">
                        <div style="width:36px; height:36px; background:#F0F4E8; border-radius:8px;
                                     display:flex; align-items:center; justify-content:center;
                                     color:#4A7C2F; margin-right:1rem; flex-shrink:0;">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <div>
                            <div style="font-size:0.75rem; color:#9CA3AF; text-transform:uppercase; letter-spacing:0.05em;">
                                Bergabung Sejak
                            </div>
                            <div style="font-weight:600; color:#1A2E0A;">{{ $profil['bergabung'] }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3">
                <a href="{{ route('dashboard', ['username' => $username]) }}"
                   class="btn-hydro btn flex-grow-1 text-center text-decoration-none">
                    <i class="bi bi-house-door me-1"></i>Dashboard
                </a>
                <a href="{{ route('logout') }}"
                   class="btn flex-grow-1 text-center"
                   style="border: 2px solid #4A7C2F; color:#4A7C2F; border-radius:10px;
                          font-weight:600; transition: all 0.2s;">
                    <i class="bi bi-box-arrow-right me-1"></i>Keluar
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
