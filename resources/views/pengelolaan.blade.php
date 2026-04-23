@extends('layouts.app')

@section('title', 'Pengelolaan Tanaman — Wong Nandur')

@section('extra-css')
    .pengelolaan-title { font-size: 1.8rem; margin-bottom: 0.2rem; }
    .pengelolaan-subtitle { opacity: 0.8; margin: 0; font-size: 0.9rem; }
    .pengelolaan-info { font-size: 0.9rem; color: #6B7280; }
    .pengelolaan-info-icon { color: #7BAE3E; }
    .media-badge { font-size: 0.78rem; }
    .media-badge-icon { font-size: 0.5rem; }
    .media-badge-polibag { background: #C8E6A0; color: #2D5016; }
    .media-badge-dwc { background: #B8D9F0; color: #1A4D7A; }
    .media-badge-bucket { background: #F0DFA0; color: #5A4A00; }
    .plant-card { border: 1px solid #E5E7EB; }
    .plant-image { height: 190px; object-fit: cover; }
    .plant-name { font-weight: 700; color: #2D5016; }
    .plant-varietas { font-size: 0.82rem; color: #9CA3AF; }
    .plant-id { font-size: 0.75rem; color: #9CA3AF; }
    .plant-media {
        font-size: 0.82rem;
        background: #F0F4E8;
        color: #4A7C2F;
        padding: 0.25rem 0.7rem;
        border-radius: 20px;
        font-weight: 500;
    }
    .plant-umur { font-size: 0.85rem; color: #6B7280; }
    .plant-umur-icon { color: #7BAE3E; }
    .plant-umur-number { color: #2D5016; }
    .kembali-link { color: #4A7C2F; text-decoration: none; font-size: 0.88rem; }
@endsection

@section('content')

<div class="page-header">
    <div class="container">
        <div>
            <h1 class="pengelolaan-title">
                <i class="bi bi-grid-3x3-gap me-2"></i>Pengelolaan Tanaman
            </h1>
            <p class="pengelolaan-subtitle">
                Halo, <strong>{{ $username }}</strong> — berikut daftar seluruh tanaman di kebun Anda
            </p>
        </div>
    </div>
</div>

<div class="container">

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-4">
        <div class="pengelolaan-info">
            <i class="bi bi-list-ul me-1 pengelolaan-info-icon"></i>
            Menampilkan <strong>{{ count($tanaman) }}</strong> tanaman terdaftar
        </div>
        <div class="d-flex gap-2">
            <span class="badge rounded-pill px-3 py-2 media-badge media-badge-polibag">
                <i class="bi bi-circle-fill me-1 media-badge-icon"></i>Polibag
            </span>
            <span class="badge rounded-pill px-3 py-2 media-badge media-badge-dwc">
                <i class="bi bi-circle-fill me-1 media-badge-icon"></i>DWC
            </span>
            <span class="badge rounded-pill px-3 py-2 media-badge media-badge-bucket">
                <i class="bi bi-circle-fill me-1 media-badge-icon"></i>Bucket
            </span>
        </div>
    </div>

    <div class="row g-3 mb-4">
        @foreach($tanaman as $item)
        @php
            $namaSlug = \Illuminate\Support\Str::slug($item['nama']);
            $namaSnake = \Illuminate\Support\Str::of($item['nama'])->lower()->replace(' ', '_')->value();
            $kataPertama = \Illuminate\Support\Str::of($item['nama'])->lower()->before(' ')->value();

            $kandidatGambar = [
                $item['nama'] . '.jpg',
                $item['nama'] . '.jpeg',
                $item['nama'] . '.png',
                $namaSnake . '.jpg',
                $namaSnake . '.jpeg',
                $namaSnake . '.png',
                $kataPertama . '.jpg',
                $kataPertama . '.jpeg',
                $kataPertama . '.png',
                $namaSlug . '.jpg',
                $namaSlug . '.jpeg',
                $namaSlug . '.png',
            ];

            $gambarTanaman = 'images/default-tanaman.jpg';
            foreach ($kandidatGambar as $namaFile) {
                if (file_exists(public_path('images/' . $namaFile))) {
                    $gambarTanaman = 'images/' . $namaFile;
                    break;
                }
            }
        @endphp
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card-hydro h-100 overflow-hidden plant-card">
                <img src="{{ asset($gambarTanaman) }}"
                     alt="{{ $item['nama'] }}"
                     class="w-100 plant-image"
                     onerror="this.onerror=null;this.src='https://via.placeholder.com/640x360?text=Tanaman';">

                <div class="p-3">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div>
                            <div class="plant-name">{{ $item['nama'] }}</div>
                            <div class="plant-varietas">{{ $item['varietas'] }}</div>
                        </div>
                        <span class="plant-id">#{{ $item['id'] }}</span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="plant-media">
                            {{ $item['media'] }}
                        </span>

                        @if($item['status'] === 'Siap Panen')
                            <span class="badge badge-siap-panen rounded-pill">{{ $item['status'] }}</span>
                        @elseif($item['status'] === 'Tumbuh')
                            <span class="badge badge-tumbuh rounded-pill">{{ $item['status'] }}</span>
                        @elseif($item['status'] === 'Berbuah')
                            <span class="badge badge-berbuah rounded-pill">{{ $item['status'] }}</span>
                        @elseif($item['status'] === 'Semai')
                            <span class="badge badge-semai rounded-pill">{{ $item['status'] }}</span>
                        @else
                            <span class="badge badge-perlu-perhatian rounded-pill">{{ $item['status'] }}</span>
                        @endif
                    </div>

                    <div class="plant-umur">
                        <i class="bi bi-calendar3 me-1 plant-umur-icon"></i>
                        Umur <strong class="plant-umur-number">{{ $item['umur'] }}</strong> hari
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="d-flex gap-2 mb-4">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="kembali-link">
            <i class="bi bi-arrow-left me-1"></i>Kembali ke Dashboard
        </a>
    </div>

</div>

@endsection
