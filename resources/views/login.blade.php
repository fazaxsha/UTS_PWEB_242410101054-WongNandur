<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Wong Nandur</title>

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
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            background-color: var(--krem);
        }

        /* Panel kiri — ilustrasi */
        .panel-kiri {
            flex: 1;
            background: linear-gradient(160deg, var(--hijau-tua) 0%, var(--hijau-sedang) 60%, var(--hijau-muda) 100%);
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 3rem;
            position: relative;
            overflow: hidden;
        }

        @media (min-width: 992px) {
            .panel-kiri { display: flex; }
        }

        .panel-kiri::before {
            content: '';
            position: absolute;
            top: -80px; left: -80px;
            width: 300px; height: 300px;
            background: rgba(255,255,255,0.06);
            border-radius: 50%;
        }

        .panel-kiri::after {
            content: '';
            position: absolute;
            bottom: -60px; right: -60px;
            width: 250px; height: 250px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }

        .panel-kiri .emoji-besar {
            font-size: 6rem;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 8px 16px rgba(0,0,0,0.2));
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }

        .panel-kiri h2 {
            font-family: 'DM Serif Display', serif;
            color: #fff;
            font-size: 2rem;
            text-align: center;
            margin-bottom: 0.8rem;
        }

        .panel-kiri p {
            color: rgba(255,255,255,0.75);
            text-align: center;
            font-size: 0.9rem;
            max-width: 280px;
            line-height: 1.6;
        }

        .fitur-list {
            list-style: none;
            margin-top: 2rem;
            text-align: left;
        }

        .fitur-list li {
            color: rgba(255,255,255,0.85);
            font-size: 0.88rem;
            padding: 0.4rem 0;
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .fitur-list li span.dot {
            width: 8px; height: 8px;
            background-color: var(--hijau-pastel);
            border-radius: 50%;
            flex-shrink: 0;
        }

        /* Panel kanan — form */
        .panel-kanan {
            width: 100%;
            max-width: 480px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2.5rem 2rem;
            background: var(--krem);
        }

        @media (min-width: 992px) {
            .panel-kanan { padding: 3rem 3.5rem; }
        }

        .logo-mobile {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo-mobile h1 {
            font-family: 'DM Serif Display', serif;
            color: var(--hijau-tua);
            font-size: 2rem;
        }

        .form-card {
            background: #fff;
            border-radius: 20px;
            padding: 2rem 2rem;
            box-shadow: 0 4px 24px rgba(45, 80, 22, 0.1);
            border: 1px solid var(--hijau-pastel);
        }

        .form-card h3 {
            font-family: 'DM Serif Display', serif;
            color: var(--hijau-tua);
            font-size: 1.5rem;
            margin-bottom: 0.3rem;
        }

        .form-card p.subtitle {
            font-size: 0.85rem;
            color: #6B7280;
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.875rem;
            color: var(--hijau-tua);
            margin-bottom: 0.4rem;
        }

        .form-control {
            border: 1.5px solid #D4C5A9;
            border-radius: 10px;
            padding: 0.65rem 1rem;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.9rem;
            background-color: #FAFAF7;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-control:focus {
            border-color: var(--hijau-muda);
            box-shadow: 0 0 0 3px rgba(123, 174, 62, 0.18);
            background-color: #fff;
            outline: none;
        }

        .input-icon-wrapper {
            position: relative;
        }

        .input-icon-wrapper .bi {
            position: absolute;
            left: 0.85rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--hijau-muda);
            font-size: 1rem;
        }

        .input-icon-wrapper .form-control {
            padding-left: 2.5rem;
        }

        .btn-login {
            width: 100%;
            padding: 0.75rem;
            background: linear-gradient(135deg, var(--hijau-sedang), var(--hijau-tua));
            color: #fff;
            border: none;
            border-radius: 10px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 0.95rem;
            letter-spacing: 0.03em;
            cursor: pointer;
            transition: opacity 0.2s, transform 0.1s;
            margin-top: 0.5rem;
        }

        .btn-login:hover {
            opacity: 0.92;
            transform: translateY(-1px);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .divider {
            text-align: center;
            font-size: 0.8rem;
            color: #9CA3AF;
            margin: 1.2rem 0;
            position: relative;
        }

        .divider::before, .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 38%;
            height: 1px;
            background: #E5E7EB;
        }

        .divider::before { left: 0; }
        .divider::after { right: 0; }

        .footer-form {
            text-align: center;
            font-size: 0.78rem;
            color: #9CA3AF;
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>

    {{-- Panel Kiri --}}
    <div class="panel-kiri">
        <div class="emoji-besar">🪴</div>
        <h2>Selamat Datang di Wong Nandur</h2>
        <p>Platform pengelolaan kebun hidroponik modern untuk hasil panen yang optimal.</p>
        <ul class="fitur-list">
            <li><span class="dot"></span> Pantau 8+ jenis tanaman sekaligus</li>
            <li><span class="dot"></span> Monitor status pertumbuhan real-time</li>
            <li><span class="dot"></span> Data media tanam: Polibag, DWC, Bucket</li>
            <li><span class="dot"></span> Jadwal panen terorganisir</li>
        </ul>
    </div>

    {{-- Panel Kanan --}}
    <div class="panel-kanan">

        <div class="logo-mobile d-lg-none">
            <span style="font-size:2.5rem;">🪴</span>
            <h1>Wong Nandur</h1>
        </div>

        <div class="form-card">
            <h3>Masuk ke Akun</h3>
            <p class="subtitle">Masukkan nama Anda untuk mulai mengelola kebun</p>

            {{-- Form Login: POST ke /login --}}
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="username" class="form-label">
                        Nama Petani / Username
                    </label>
                    <div class="input-icon-wrapper">
                        <i class="bi bi-person"></i>
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="username"
                            placeholder="Contoh: Fajar Ilham"
                            required
                            autocomplete="off"
                        >
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        Password
                    </label>
                    <div class="input-icon-wrapper">
                        <i class="bi bi-lock"></i>
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                        >
                    </div>
                </div>

                <button type="submit" class="btn-login">
                    <i class="bi bi-box-arrow-in-right me-2"></i>
                    Masuk ke Dashboard
                </button>
            </form>

            <div class="divider">atau</div>

            <div style="text-align:center;">
                <a href="{{ route('dashboard', ['username' => 'Demo']) }}"
                   style="color: var(--hijau-muda); font-size: 0.85rem; text-decoration: none; font-weight: 500;">
                    <i class="bi bi-play-circle me-1"></i>
                    Coba Masuk sebagai Demo
                </a>    
            </div>
        </div>

        <div class="footer-form">
            &copy; {{ date('Y') }} Wong Nandur &mdash; Fajar Ilham
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
