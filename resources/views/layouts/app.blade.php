<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wong Nandur')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --hijau-tua:   #2D5016;
            --hijau-sedang:#4A7C2F;
            --hijau-muda:  #7BAE3E;
            --hijau-pastel:#C8E6A0;
            --krem:        #F5F0E8;
            --coklat-muda: #D4C5A9;
            --putih:       #FFFFFF;
            --teks-gelap:  #1A2E0A;
            --teks-abu:    #6B7280;
            --kuning-aksen:#E8C547;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--krem);
            color: var(--teks-gelap);
            min-height: 100vh;
        }

        h1, h2, h3, .font-display {
            font-family: 'DM Serif Display', serif;
        }

        .app-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .main-content {
            flex: 1;
            padding: 2rem 0;
        }

        .badge-siap-panen    { background-color: var(--hijau-muda); color: #fff; }
        .badge-tumbuh        { background-color: #5B9BD5; color: #fff; }
        .badge-berbuah       { background-color: var(--kuning-aksen); color: var(--teks-gelap); }
        .badge-semai         { background-color: var(--coklat-muda); color: var(--teks-gelap); }
        .badge-perlu-perhatian { background-color: #E57373; color: #fff; }

        .card-hydro {
            background: var(--putih);
            border: 1px solid var(--hijau-pastel);
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(45, 80, 22, 0.08);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card-hydro:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(45, 80, 22, 0.14);
        }

        .stat-card {
            background: var(--putih);
            border-radius: 16px;
            padding: 1.5rem;
            border-left: 5px solid var(--hijau-muda);
            box-shadow: 0 2px 10px rgba(45, 80, 22, 0.07);
        }

        .stat-card .stat-number {
            font-family: 'DM Serif Display', serif;
            font-size: 2.5rem;
            color: var(--hijau-tua);
        }

        .stat-card .stat-label {
            font-size: 0.85rem;
            color: var(--teks-abu);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .table-hydro thead {
            background-color: var(--hijau-tua);
            color: var(--putih);
        }

        .table-hydro thead th {
            font-weight: 600;
            letter-spacing: 0.03em;
            padding: 0.9rem 1rem;
        }

        .table-hydro tbody tr:hover {
            background-color: rgba(200, 230, 160, 0.25);
        }

        .btn-hydro {
            background-color: var(--hijau-sedang);
            color: var(--putih);
            border: none;
            border-radius: 10px;
            padding: 0.6rem 1.4rem;
            font-weight: 600;
            transition: background-color 0.2s, transform 0.1s;
        }

        .btn-hydro:hover {
            background-color: var(--hijau-tua);
            color: var(--putih);
            transform: translateY(-1px);
        }

        .page-header {
            background: linear-gradient(135deg, var(--hijau-tua) 0%, var(--hijau-sedang) 100%);
            color: var(--putih);
            padding: 2.5rem 0 2rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: -30px;
            right: -30px;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }

        .page-header::after {
            content: '';
            position: absolute;
            bottom: -50px;
            right: 100px;
            width: 150px;
            height: 150px;
            background: rgba(255,255,255,0.04);
            border-radius: 50%;
        }

        @yield('extra-css')
    </style>

    @yield('extra-css-block')
</head>
<body>
    <div class="app-wrapper">

        <x-navbar :username="$username ?? null" />

        <main class="main-content">
            @yield('content')
        </main>

        <x-footer />

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('extra-js')
</body>
</html>
