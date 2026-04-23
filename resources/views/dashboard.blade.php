@extends('layouts.app')

@section('title', 'Dashboard — Wong Nandur')

@section('extra-css')
    .dashboard-brand-icon { font-size: 2.5rem; }
    .dashboard-title { font-size: 1.8rem; margin-bottom: 0.2rem; }
    .dashboard-subtitle { opacity: 0.8; margin: 0; font-size: 0.9rem; }
    .stat-note { font-size: 0.8rem; color: #9CA3AF; margin-top: 0.3rem; }
    .stat-siap { color: #4A7C2F; }
    .stat-masa { color: #5B9BD5; }
    .stat-perlu { color: #E57373; }
@endsection

@section('content')

<div class="page-header">
    <div class="container">
        <div class="d-flex align-items-center gap-3">
            <div class="dashboard-brand-icon">🪴</div>
            <div>
                <h1 class="dashboard-title">
                    Selamat Datang, {{ $username }}!
                </h1>
                <p class="dashboard-subtitle">
                    <i class="bi bi-calendar3 me-1"></i>
                    {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}
                    &nbsp;·&nbsp;
                    <i class="bi bi-droplet me-1"></i>Kebun Hidroponik, Jember
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row g-3 mb-4">

        <div class="col-6 col-md-3">
            <div class="stat-card" style="border-left-color: #4A7C2F;">
                <div class="stat-number">{{ $ringkasan['total_tanaman'] }}</div>
                <div class="stat-label">Total Tanaman</div>
                <div class="stat-note">
                    <i class="bi bi-arrow-up-short text-success"></i> aktif ditanam
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="stat-card" style="border-left-color: #7BAE3E;">
                <div class="stat-number stat-siap">{{ $ringkasan['siap_panen'] }}</div>
                <div class="stat-label">Siap Panen</div>
                <div class="stat-note">
                    <i class="bi bi-check-circle text-success"></i> segera dipanen
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="stat-card" style="border-left-color: #5B9BD5;">
                <div class="stat-number stat-masa">{{ $ringkasan['masa_tanam'] }}</div>
                <div class="stat-label">Masa Tanam</div>
                <div class="stat-note">
                    <i class="bi bi-hourglass-split" style="color:#5B9BD5;"></i> sedang tumbuh
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="stat-card" style="border-left-color: #E57373;">
                <div class="stat-number stat-perlu">{{ $ringkasan['perlu_perhatian'] }}</div>
                <div class="stat-label">Perlu Perhatian</div>
                <div class="stat-note">
                    <i class="bi bi-exclamation-triangle text-danger"></i> segera ditangani
                </div>
            </div>
        </div>

    </div>

    <div class="row g-3">

        <div class="col-md-5">
            <div class="card-hydro p-4 h-100">
                <h5 style="font-family: 'DM Serif Display', serif; color: #2D5016; margin-bottom: 1.2rem;">
                    <i class="bi bi-person-circle me-2"></i>Info Sesi
                </h5>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div style="width:56px; height:56px; border-radius:50%; overflow:hidden;
                                flex-shrink:0; background:#F0F4E8;">
                        <img src="{{ asset('images/gambar-profil.jpg') }}" alt="Foto profil petani"
                             style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div>
                        <div style="font-weight:700; color:#2D5016; font-size:1.05rem;">{{ $username }}</div>
                        <div style="font-size:0.8rem; color:#7BAE3E;">Kepala Kebun Hidroponik</div>
                    </div>
                </div>
                <hr style="border-color: #C8E6A0;">
                <div style="font-size:0.85rem; color:#6B7280; line-height:2;">
                    <div><i class="bi bi-geo-alt me-2" style="color:#7BAE3E;"></i>Jember, Jawa Timur</div>
                    <div><i class="bi bi-building me-2" style="color:#7BAE3E;"></i>Kebun Hidroponik, Jember</div>
                    <div><i class="bi bi-rulers me-2" style="color:#7BAE3E;"></i>Luas Kebun: 120 m²</div>
                </div>
                <a href="{{ route('profile', ['username' => $username]) }}"
                   class="btn-hydro btn d-block mt-3 text-center text-decoration-none">
                    <i class="bi bi-person-circle me-1"></i> Lihat Profil
                </a>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card-hydro p-4 h-100">
                <h5 style="font-family: 'DM Serif Display', serif; color: #2D5016; margin-bottom: 1.2rem;">
                    <i class="bi bi-grid-3x3-gap me-2"></i>Akses Menu
                </h5>
                <div class="row g-3">
                    <div class="col-6">
                        <a href="{{ route('pengelolaan', ['username' => $username]) }}"
                           class="text-decoration-none d-block p-3 rounded-3 text-center"
                           style="background: linear-gradient(135deg, #C8E6A0, #7BAE3E20); border: 1px solid #C8E6A0;">
                            <div style="font-size:2rem;">🌱</div>
                            <div style="font-weight:600; color:#2D5016; font-size:0.9rem; margin-top:0.4rem;">
                                Pengelolaan Tanaman
                            </div>
                            <div style="font-size:0.75rem; color:#6B7280;">Lihat semua data tanaman</div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('profile', ['username' => $username]) }}"
                           class="text-decoration-none d-block p-3 rounded-3 text-center"
                           style="background: linear-gradient(135deg, #E0F0FF, #5B9BD520); border: 1px solid #B8D9F0;">
                            <div style="font-size:2rem;">👤</div>
                            <div style="font-weight:600; color:#2D5016; font-size:0.9rem; margin-top:0.4rem;">
                                Profil Petani
                            </div>
                            <div style="font-size:0.75rem; color:#6B7280;">Detail informasi akun</div>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3 text-center"
                             style="background: linear-gradient(135deg, #FFF8E1, #E8C54720); border: 1px solid #F0DFA0;">
                            <div style="font-size:2rem;">💧</div>
                            <div style="font-weight:600; color:#2D5016; font-size:0.9rem; margin-top:0.4rem;">
                                Jadwal Siram
                            </div>
                            <div style="font-size:0.75rem; color:#6B7280;">Hari ini: 2x siram</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3 text-center"
                             style="background: linear-gradient(135deg, #FFE8E8, #E5737320); border: 1px solid #F0C0C0;">
                            <div style="font-size:2rem;">⚠️</div>
                            <div style="font-weight:600; color:#2D5016; font-size:0.9rem; margin-top:0.4rem;">
                                Peringatan
                            </div>
                            <div style="font-size:0.75rem; color:#E57373;">{{ $ringkasan['perlu_perhatian'] }} tanaman butuh penanganan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
