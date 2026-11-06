<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#292F36">

    <title>Login Admin | DESDM SICANTIK</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* =========================================
           1. DESIGN SYSTEM SI CANTIK
        ========================================= */

        :root {
            --charcoal: #292F36;
            --charcoal-light: #3B4249;

            --copper: #C66B32;
            --copper-dark: #A95325;

            --warm-white: #F5F5F3;
            --white: #FFFFFF;

            --gray: #68717A;
            --pale-copper: #FCEBDD;

            --border: #E0E4E5;

            --danger: #B42332;
            --danger-bg: #FFF0F0;

            --success: #18794E;
            --success-bg: #EAF7EF;
        }

        /* =========================================
           2. RESET
        ========================================= */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            width: 100%;
            height: 100%;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            min-height: 100dvh;

            display: flex;
            flex-direction: column;

            overflow: hidden;

            background: var(--warm-white);
            color: var(--charcoal);

            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        button,
        input {
            font-family: inherit;
        }

        a {
            color: inherit;
        }

        /* =========================================
           3. HEADER
        ========================================= */

        .topbar {
            position: relative;
            z-index: 5;

            width: 100%;
            flex-shrink: 0;

            padding: 13px 6%;

            background: var(--charcoal);
            color: var(--white);

            border-bottom: 3px solid var(--copper);
        }

        .topbar-inner {
            width: min(1180px, 100%);
            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        /* LOGO RESMI ESDM */

        .brand-mark {
            width: 48px;
            height: 48px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 4px;

            border-radius: 10px;

            background: var(--white);
            overflow: hidden;
        }

        .brand-mark img {
            display: block;

            width: 100%;
            height: 100%;

            object-fit: contain;
        }

        .brand-name {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 15px;
            font-weight: 800;
            letter-spacing: .4px;
        }

        .brand-subtitle {
            margin-top: 3px;

            color: #D0D5D8;

            font-size: 10px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .topbar-label {
            display: flex;
            align-items: center;
            gap: 9px;

            color: #E5E8EA;

            font-size: 12px;
            font-weight: 500;
        }

        .topbar-label i {
            color: #E7A778;
        }

        /* =========================================
           4. MAIN BACKGROUND GEDUNG ESDM
        ========================================= */

        .main {
            position: relative;
            isolation: isolate;

            flex: 1;
            min-height: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 20px 24px;

            overflow: hidden;

            background:
                linear-gradient(
                    110deg,
                    rgba(245, 245, 243, .76) 0%,
                    rgba(245, 245, 243, .84) 48%,
                    rgba(255, 255, 255, .91) 100%
                ),
                url("{{ asset('images/hero-esdm-3.jpeg') }}")
                center center / cover no-repeat;
        }

        /* ORNAMEN LINGKARAN */

        .main::before,
        .main::after {
            content: "";

            position: absolute;
            z-index: -1;

            border: 1px solid rgba(198, 107, 50, .18);
            border-radius: 50%;

            pointer-events: none;
        }

        .main::before {
            width: 430px;
            height: 430px;

            top: -230px;
            right: -120px;
        }

        .main::after {
            width: 350px;
            height: 350px;

            bottom: -210px;
            left: -130px;
        }

        /* =========================================
           5. LOGIN CARD
        ========================================= */

        .login-layout {
            position: relative;
            z-index: 1;

            width: min(1000px, 100%);
            max-height: 100%;

            display: grid;

            grid-template-columns:
                minmax(0, 1fr)
                minmax(340px, .92fr);

            align-items: stretch;

            overflow: hidden;

            border: 1px solid rgba(255, 255, 255, .85);
            border-radius: 22px;

            background: rgba(255, 255, 255, .97);

            box-shadow:
                0 25px 70px rgba(41, 47, 54, .17);

            animation: cardEnter .65s ease both;
        }

        @keyframes cardEnter {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================================
           6. PANEL KIRI
        ========================================= */

        .welcome-panel {
            position: relative;
            overflow: hidden;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            min-height: 0;

            padding: 38px 38px;

            color: var(--white);

            background:
                radial-gradient(
                    circle at 95% 5%,
                    rgba(198, 107, 50, .43),
                    transparent 35%
                ),
                linear-gradient(
                    145deg,
                    rgba(41, 47, 54, .93),
                    rgba(41, 47, 54, .84)
                );

            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(3px);
        }

        .welcome-panel::before,
        .welcome-panel::after {
            content: "";

            position: absolute;

            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 50%;

            pointer-events: none;
        }

        .welcome-panel::before {
            width: 330px;
            height: 330px;

            right: -150px;
            bottom: -100px;
        }

        .welcome-panel::after {
            width: 230px;
            height: 230px;

            right: -100px;
            bottom: -50px;
        }

        .welcome-content,
        .welcome-footer {
            position: relative;
            z-index: 1;
        }

        .welcome-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 8px 13px;

            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 999px;

            background: rgba(255, 255, 255, .08);

            color: #F5D2BB;

            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.3px;
            text-transform: uppercase;
        }

        .welcome-title {
            margin-top: 28px;

            font-family: 'Plus Jakarta Sans', sans-serif;

            font-size: clamp(29px, 3vw, 39px);
            font-weight: 800;

            line-height: 1.25;
            letter-spacing: -1.1px;
        }

        .welcome-title span {
            color: #E7A778;
        }

        .welcome-description {
            max-width: 360px;

            margin-top: 17px;

            color: #E0E4E6;

            font-size: 12px;
            line-height: 1.9;
        }

        /* FITUR */

        .welcome-features {
            display: grid;
            gap: 15px;

            margin-top: 27px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 12px;

            color: #E8EBED;

            font-size: 11px;
            line-height: 1.6;
        }

        .feature-icon {
            width: 35px;
            height: 35px;

            flex-shrink: 0;

            display: grid;
            place-items: center;

            border-radius: 10px;

            background: rgba(198, 107, 50, .2);
            color: #F1B58D;

            font-size: 13px;
        }

        .welcome-footer {
            margin-top: 25px;
            padding-top: 19px;

            border-top: 1px solid rgba(255, 255, 255, .15);

            color: #C1C9CE;

            font-size: 10px;
            line-height: 1.8;
        }

        /* =========================================
           7. PANEL FORM LOGIN
        ========================================= */

        .form-panel {
            position: relative;

            min-width: 0;

            display: flex;
            flex-direction: column;
            justify-content: center;

            padding: 34px 36px;

            background: rgba(255, 255, 255, .98);

            border-top: 3px solid var(--copper);
        }

        .form-heading {
            margin-bottom: 24px;
        }

        .form-eyebrow {
            color: var(--copper-dark);

            font-family: 'Plus Jakarta Sans', sans-serif;

            font-size: 10px;
            font-weight: 800;

            letter-spacing: 1.8px;
            text-transform: uppercase;
        }

        .form-heading h1 {
            margin-top: 9px;

            color: var(--charcoal);

            font-family: 'Plus Jakarta Sans', sans-serif;

            font-size: 27px;
            font-weight: 800;

            letter-spacing: -.8px;
        }

        .form-heading p {
            margin-top: 9px;

            color: var(--gray);

            font-size: 12px;
            line-height: 1.8;
        }

        /* =========================================
           8. ALERT
        ========================================= */

        .alert {
            display: flex;
            align-items: flex-start;
            gap: 10px;

            padding: 12px 13px;
            margin-bottom: 18px;

            border-radius: 10px;

            font-size: 11px;
            line-height: 1.7;

            overflow-wrap: anywhere;
        }

        .alert i {
            margin-top: 3px;
            flex-shrink: 0;
        }

        .alert-error {
            background: var(--danger-bg);
            border: 1px solid #F2D0D3;
            color: var(--danger);
        }

        .alert-success {
            background: var(--success-bg);
            border: 1px solid #CBE8D5;
            color: var(--success);
        }

        /* =========================================
           9. INPUT FORM
        ========================================= */

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;

            margin-bottom: 8px;

            color: var(--charcoal);

            font-size: 12px;
            font-weight: 700;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;

            left: 15px;
            top: 50%;

            transform: translateY(-50%);

            color: #87929A;

            font-size: 14px;

            pointer-events: none;
        }

        .form-input {
            display: block;

            width: 100%;
            min-width: 0;
            height: 47px;

            padding: 0 45px;

            border: 1px solid #D9DEE1;
            border-radius: 10px;

            outline: none;

            background: var(--white);
            color: var(--charcoal);

            font-family: 'Inter', sans-serif;
            font-size: 12px;

            transition:
                border-color .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }

        .form-input::placeholder {
            color: #A0A8AE;
        }

        .form-input:hover {
            border-color: #B9C0C5;
        }

        .form-input:focus {
            border-color: var(--copper);

            background: var(--white);

            box-shadow: 0 0 0 4px rgba(198, 107, 50, .12);
        }

        .form-input.is-invalid {
            border-color: var(--danger);
        }

        /* =========================================
           10. TOGGLE PASSWORD
        ========================================= */

        .toggle-password {
            position: absolute;

            right: 9px;
            top: 50%;

            transform: translateY(-50%);

            width: 34px;
            height: 34px;

            display: grid;
            place-items: center;

            border: 0;
            border-radius: 8px;

            background: transparent;
            color: #78838B;

            cursor: pointer;

            transition: background .2s ease, color .2s ease;
        }

        .toggle-password:hover {
            background: var(--pale-copper);
            color: var(--copper-dark);
        }

        .field-error {
            margin-top: 6px;

            color: var(--danger);

            font-size: 11px;
        }

        /* =========================================
           11. INGAT SAYA
        ========================================= */

        .options {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 12px;

            margin: 2px 0 20px;
        }

        .remember {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            color: var(--gray);

            font-size: 12px;

            cursor: pointer;
        }

        .remember input {
            width: 15px;
            height: 15px;

            accent-color: var(--copper);

            cursor: pointer;
        }

        /* =========================================
           12. TOMBOL LOGIN
        ========================================= */

        .login-button {
            width: 100%;
            min-height: 47px;

            display: flex;
            justify-content: center;
            align-items: center;

            gap: 10px;

            border: 1px solid var(--copper);
            border-radius: 10px;

            background: linear-gradient(
                120deg,
                var(--copper),
                #D47A43
            );

            color: var(--white);

            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 12px;
            font-weight: 800;

            cursor: pointer;

            box-shadow: 0 7px 18px rgba(198, 107, 50, .2);

            transition:
                background .2s ease,
                transform .2s ease,
                box-shadow .2s ease;
        }

        .login-button:hover {
            background: linear-gradient(
                120deg,
                var(--copper-dark),
                var(--copper)
            );

            box-shadow: 0 10px 23px rgba(198, 107, 50, .27);

            transform: translateY(-2px);
        }

        .login-button:active {
            transform: translateY(0);
        }

        .login-button:focus-visible,
        .toggle-password:focus-visible,
        .back-link:focus-visible {
            outline: 3px solid rgba(198, 107, 50, .4);
            outline-offset: 3px;
        }

        /* =========================================
           13. CATATAN KEAMANAN
        ========================================= */

        .security-note {
            display: flex;
            align-items: flex-start;
            gap: 9px;

            margin-top: 17px;
            padding: 11px 12px;

            border: 1px solid #F0EFEC;
            border-radius: 9px;

            background: var(--warm-white);

            color: var(--gray);

            font-size: 10px;
            line-height: 1.8;
        }

        .security-note i {
            margin-top: 3px;
            color: var(--copper);
        }

        /* =========================================
           14. KEMBALI KE BERANDA
        ========================================= */

        .back-link {
            display: flex;
            align-items: center;
            justify-content: center;

            gap: 8px;

            margin-top: 18px;

            color: var(--gray);

            font-size: 11px;
            font-weight: 700;

            text-decoration: none;

            transition: color .2s ease;
        }

        .back-link:hover {
            color: var(--copper-dark);
        }

        /* =========================================
           15. FOOTER
        ========================================= */

        .page-footer {
            position: relative;
            z-index: 2;

            flex-shrink: 0;

            padding: 7px 20px 10px;

            text-align: center;

            color: var(--gray);

            font-size: 10px;
            line-height: 1.7;
        }

        .page-footer strong {
            color: var(--charcoal);

            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* =========================================
           16. RESPONSIVE LAPTOP KECIL
        ========================================= */

        @media (max-height: 720px) and (min-width: 761px) {
            .topbar {
                padding-top: 9px;
                padding-bottom: 9px;
            }

            .brand-mark {
                width: 40px;
                height: 40px;
            }

            .main {
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .welcome-panel {
                padding: 25px 30px;
            }

            .welcome-title {
                margin-top: 18px;
                font-size: 30px;
            }

            .welcome-description {
                margin-top: 10px;
                font-size: 11px;
            }

            .welcome-features {
                gap: 10px;
                margin-top: 17px;
            }

            .feature-icon {
                width: 31px;
                height: 31px;
            }

            .welcome-footer {
                margin-top: 15px;
                padding-top: 12px;
            }

            .form-panel {
                padding: 23px 30px;
            }

            .form-heading {
                margin-bottom: 17px;
            }

            .form-heading h1 {
                font-size: 24px;
            }

            .form-group {
                margin-bottom: 13px;
            }

            .form-input {
                height: 43px;
            }

            .options {
                margin-bottom: 15px;
            }

            .login-button {
                min-height: 44px;
            }

            .security-note {
                margin-top: 12px;
                padding: 9px;
            }

            .back-link {
                margin-top: 13px;
            }
        }

        /* =========================================
           17. RESPONSIVE TABLET DAN HP
        ========================================= */

        @media (max-width: 760px) {
            html,
            body {
                height: auto;
                min-height: 100%;
            }

            body {
                min-height: 100vh;
                min-height: 100dvh;

                overflow-x: hidden;
                overflow-y: auto;
            }

            .topbar {
                padding: 12px 20px;
            }

            .topbar-inner {
                gap: 12px;
            }

            .brand-mark {
                width: 42px;
                height: 42px;
            }

            .brand-name {
                font-size: 13px;
            }

            .brand-subtitle {
                font-size: 9px;
            }

            .login-layout {
                width: 100%;
                max-width: 470px;
                max-height: none;

                grid-template-columns: minmax(0, 1fr);

                border-radius: 18px;
            }

            .main {
                flex: 1;

                min-height: auto;

                padding: 25px 15px;

                overflow: visible;

                background-position: center center;
            }

            .welcome-panel {
                min-height: auto;
                padding: 28px 27px;
            }

            .welcome-title {
                margin-top: 20px;
                font-size: 29px;
            }

            .welcome-description {
                margin-top: 12px;
                font-size: 12px;
            }

            .welcome-features {
                display: none;
            }

            .welcome-footer {
                margin-top: 21px;
                padding-top: 14px;
            }

            .form-panel {
                min-height: auto;
                padding: 29px 27px;
            }

            .form-heading {
                margin-bottom: 22px;
            }

            .form-heading h1 {
                font-size: 25px;
            }

            .form-input {
                height: 47px;
            }

            .page-footer {
                padding: 12px 15px 16px;
            }
        }

        /* =========================================
           18. RESPONSIVE HP KECIL
        ========================================= */

        @media (max-width: 380px) {
            .topbar {
                padding: 11px 15px;
            }

            .topbar-label {
                font-size: 0;
                gap: 0;
            }

            .topbar-label i {
                font-size: 16px;
            }

            .brand-mark {
                width: 39px;
                height: 39px;
            }

            .brand-name {
                font-size: 12px;
            }

            .brand-subtitle {
                font-size: 8px;
            }

            .welcome-panel {
                padding: 24px 20px;
            }

            .welcome-title {
                font-size: 26px;
            }

            .form-panel {
                padding: 25px 20px;
            }

            .form-heading h1 {
                font-size: 23px;
            }
        }

        /* =========================================
           19. AKSESIBILITAS
        ========================================= */

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition: none !important;
            }
        }

    </style>
</head>

<body>

    <!-- =========================================
         HEADER SI CANTIK
    ========================================= -->

    <header class="topbar">

        <div class="topbar-inner">

            <div class="brand">

                <!-- LOGO RESMI ESDM -->

                <div class="brand-mark">
                    <img
                        src="{{ asset('images/logo-sulawesi-tengah.png') }}"
                        alt="Logo ESDM"
                    >
                </div>

                <div>
                    <div class="brand-name">
                        DESDM SICANTIK
                    </div>

                    <div class="brand-subtitle">
                        Layanan Digital ESDM
                    </div>
                </div>

            </div>

            <div class="topbar-label">

                <i class="fa-solid fa-shield-halved"
                   aria-hidden="true"></i>

                Area Administrator

            </div>

        </div>

    </header>


    <!-- =========================================
         MAIN LOGIN
    ========================================= -->

    <main class="main">

        <div class="login-layout">

            <!-- PANEL KIRI -->

            <section class="welcome-panel">

                <div class="welcome-content">

                    <div class="welcome-badge">

                        <i class="fa-solid fa-lock"
                           aria-hidden="true"></i>

                        Akses Terbatas

                    </div>

                    <h2 class="welcome-title">

                        Selamat Datang di<br>

                        <span>Panel Admin.</span>

                    </h2>

                    <p class="welcome-description">

                        Kelola informasi, pengaduan masyarakat,
                        bantuan, dan layanan digital melalui satu
                        sistem terpadu Dinas Energi dan Sumber
                        Daya Mineral Provinsi Sulawesi Tengah.

                    </p>

                    <div class="welcome-features">

                        <div class="feature">

                            <div class="feature-icon">

                                <i class="fa-solid fa-shield-halved"
                                   aria-hidden="true"></i>

                            </div>

                            <span>
                                Akses sistem sesuai hak dan peran admin
                            </span>

                        </div>


                        <div class="feature">

                            <div class="feature-icon">

                                <i class="fa-solid fa-list-check"
                                   aria-hidden="true"></i>

                            </div>

                            <span>
                                Pengelolaan layanan dalam satu platform
                            </span>

                        </div>


                        <div class="feature">

                            <div class="feature-icon">

                                <i class="fa-solid fa-clock"
                                   aria-hidden="true"></i>

                            </div>

                            <span>
                                Informasi dan aktivitas terorganisasi
                            </span>

                        </div>

                    </div>

                </div>


                <div class="welcome-footer">

                    Sistem Informasi Dinas Energi dan Sumber Daya Mineral

                    <br>

                    Provinsi Sulawesi Tengah

                </div>

            </section>


            <!-- PANEL FORM LOGIN -->

            <section class="form-panel">

                <div class="form-heading">

                    <div class="form-eyebrow">
                        Administrator
                    </div>

                    <h1>
                        Masuk ke Akun
                    </h1>

                    <p>
                        Silakan masukkan email dan password akun admin
                        untuk melanjutkan.
                    </p>

                </div>


                <!-- PESAN ERROR -->

                @if ($errors->any())

                    <div class="alert alert-error" role="alert">

                        <i class="fa-solid fa-circle-exclamation"
                           aria-hidden="true"></i>

                        <div>
                            {{ $errors->first() }}
                        </div>

                    </div>

                @endif


                <!-- PESAN BERHASIL -->

                @if (session('success'))

                    <div class="alert alert-success" role="status">

                        <i class="fa-solid fa-circle-check"
                           aria-hidden="true"></i>

                        <div>
                            {{ session('success') }}
                        </div>

                    </div>

                @endif


                <!-- FORM LOGIN -->

                <form method="POST" action="{{ route('admin.login') }}">

                    @csrf


                    <!-- EMAIL -->

                    <div class="form-group">

                        <label for="email" class="form-label">
                            Email Admin
                        </label>

                        <div class="input-wrapper">

                            <i class="fa-regular fa-envelope input-icon"
                               aria-hidden="true"></i>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-input {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                value="{{ old('email') }}"
                                placeholder="nama@email.com"
                                autocomplete="username"
                                inputmode="email"
                                maxlength="254"
                                required
                                autofocus
                                aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}"
                                aria-describedby="{{ $errors->has('email') ? 'email-error' : '' }}"
                            >

                        </div>

                        @if ($errors->has('email'))

                            <div class="field-error" id="email-error">
                                {{ $errors->first('email') }}
                            </div>

                        @endif

                    </div>


                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label for="password" class="form-label">
                            Password
                        </label>

                        <div class="input-wrapper">

                            <i class="fa-solid fa-lock input-icon"
                               aria-hidden="true"></i>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-input"
                                placeholder="Masukkan password"
                                autocomplete="current-password"
                                required
                                aria-describedby="password-help"
                            >

                            <button
                                type="button"
                                class="toggle-password"
                                id="togglePassword"
                                aria-label="Tampilkan password"
                                aria-controls="password"
                                aria-pressed="false"
                            >

                                <i class="fa-regular fa-eye"
                                   aria-hidden="true"></i>

                            </button>

                        </div>

                    </div>


                    <!-- INGAT SAYA -->

                    <div class="options">

                        <label class="remember" for="remember">

                            <input
                                type="checkbox"
                                id="remember"
                                name="remember"
                                value="1"
                            >

                            <span>
                                Ingat saya
                            </span>

                        </label>

                    </div>


                    <!-- TOMBOL LOGIN -->

                    <button type="submit" class="login-button">

                        <i class="fa-solid fa-arrow-right-to-bracket"
                           aria-hidden="true"></i>

                        Masuk ke Panel Admin

                    </button>

                </form>


                <!-- CATATAN KEAMANAN -->

                <div class="security-note" id="password-help">

                    <i class="fa-solid fa-circle-info"
                       aria-hidden="true"></i>

                    <span>

                        Gunakan akun resmi yang telah terdaftar.
                        Jangan membagikan password kepada orang lain.

                    </span>

                </div>


                <!-- KEMBALI KE BERANDA -->

                <a href="{{ url('/') }}" class="back-link">

                    <i class="fa-solid fa-arrow-left"
                       aria-hidden="true"></i>

                    Kembali ke halaman utama

                </a>

            </section>

        </div>

    </main>


    <!-- =========================================
         FOOTER
    ========================================= -->

    <footer class="page-footer">

        <strong>DESDM SICANTIK</strong>

        &middot; Dinas ESDM Provinsi Sulawesi Tengah

    </footer>


    <!-- =========================================
         JAVASCRIPT TAMPILKAN PASSWORD
    ========================================= -->

    <script>
        (() => {

            const toggleButton =
                document.getElementById('togglePassword');

            const passwordInput =
                document.getElementById('password');

            if (!toggleButton || !passwordInput) {
                return;
            }

            toggleButton.addEventListener('click', () => {

                const isHidden =
                    passwordInput.type === 'password';

                passwordInput.type =
                    isHidden ? 'text' : 'password';

                toggleButton.setAttribute(
                    'aria-pressed',
                    String(isHidden)
                );

                toggleButton.setAttribute(
                    'aria-label',
                    isHidden
                        ? 'Sembunyikan password'
                        : 'Tampilkan password'
                );

                const icon =
                    toggleButton.querySelector('i');

                if (icon) {

                    icon.classList.toggle(
                        'fa-eye',
                        !isHidden
                    );

                    icon.classList.toggle(
                        'fa-eye-slash',
                        isHidden
                    );

                }

                passwordInput.focus();

            });

        })();
    </script>

</body>
</html>