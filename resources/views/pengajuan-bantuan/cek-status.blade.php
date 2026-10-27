<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cek Status Pengajuan | DESDM SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --charcoal: #292F36;
            --charcoal-light: #364049;
            --copper: #C66B32;
            --copper-dark: #AD5523;
            --copper-light: #FFF0E5;
            --white: #FFFFFF;
            --off-white: #F5F5F3;
            --text: #303943;
            --muted: #7C838B;
            --border: #D9DDE1;
            --green: #26794E;
            --green-bg: #E8F7ED;
            --shadow: 0 22px 65px rgba(37, 42, 47, .12);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
            background: var(--off-white);
        }

        button, input {
            font: inherit;
        }

        /* NAVBAR */

        .navbar {
            position: relative;
            z-index: 5;
            overflow: hidden;
            background:
                radial-gradient(circle at 100% 0%, rgba(198,107,50,.18), transparent 25%),
                linear-gradient(110deg, #293139, #343C44);
            border-bottom: 1px solid rgba(255,255,255,.12);
        }

        .navbar::after {
            content: "";
            position: absolute;
            top: -85px;
            right: -35px;
            width: 135px;
            height: 190px;
            border: 2px solid rgba(223,133,77,.5);
            border-radius: 55% 0 55% 0;
            transform: rotate(35deg);
            pointer-events: none;
        }

        .nav-inner {
            width: min(1180px, calc(100% - 48px));
            min-height: 94px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            min-width: 0;
        }

        .brand-logo {
            width: 58px;
            height: 66px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .brand-name {
            color: white;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .brand-subtitle {
            margin-top: 4px;
            color: rgba(255,255,255,.82);
            font-size: 12px;
            line-height: 1.6;
        }

        .back-link {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            min-height: 44px;
            padding: 0 17px;
            border: 1px solid rgba(255,255,255,.8);
            border-radius: 11px;
            color: white;
            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
            transition: .2s ease;
        }

        .back-link:hover {
            color: var(--charcoal);
            background: white;
            transform: translateY(-2px);
        }

        /* PAGE BACKGROUND */

        .page {
            position: relative;
            isolation: isolate;
            min-height: calc(100vh - 94px);
            padding: 54px 20px 65px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            overflow: hidden;
        }

        .page::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -2;
            background:
                linear-gradient(
                    115deg,
                    rgba(249,246,241,.87),
                    rgba(249,246,241,.84) 43%,
                    rgba(249,246,241,.95)
                ),
                url("{{ asset('images/hero-esdm-3.jpeg') }}") center / cover;
        }

        .page::after {
            content: "";
            position: absolute;
            top: -130px;
            left: -160px;
            z-index: -1;
            width: 330px;
            height: 550px;
            border: 1px solid rgba(198,107,50,.13);
            border-radius: 50%;
            box-shadow:
                18px 0 0 rgba(255,255,255,.16),
                36px 0 0 rgba(198,107,50,.06),
                54px 0 0 rgba(255,255,255,.13);
            pointer-events: none;
        }

        /* SEARCH CARD */

        .status-card {
            width: min(740px, 100%);
            padding: 39px 43px 32px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(220,220,216,.95);
            border-top: 4px solid var(--copper);
            border-radius: 20px;
            background: rgba(255,255,255,.96);
            box-shadow: var(--shadow);
            animation: reveal .65s ease both;
        }

        .status-card::before {
            content: "";
            position: absolute;
            top: -95px;
            right: -80px;
            width: 190px;
            height: 260px;
            border: 1px solid rgba(198,107,50,.12);
            border-radius: 50%;
            box-shadow:
                -14px 0 0 rgba(255,255,255,.2),
                -28px 0 0 rgba(198,107,50,.045);
            pointer-events: none;
        }

        .card-content {
            position: relative;
            z-index: 1;
        }

        .heading {
            text-align: center;
            margin-bottom: 29px;
        }

        .heading-icon {
            width: 68px;
            height: 68px;
            margin: 0 auto 17px;
            display: grid;
            place-items: center;
            border-radius: 17px;
            color: var(--copper-dark);
            background: var(--copper-light);
            font-size: 28px;
        }

        .eyebrow {
            margin-bottom: 9px;
            color: var(--copper-dark);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.8px;
            text-transform: uppercase;
        }

        h1 {
            color: var(--charcoal);
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(27px, 4vw, 36px);
            line-height: 1.25;
        }

        .subtitle {
            max-width: 490px;
            margin: 12px auto 0;
            color: #69717A;
            font-size: 13px;
            line-height: 1.85;
        }

        /* ALERTS */

        .alert {
            display: flex;
            align-items: flex-start;
            gap: 11px;
            padding: 14px 15px;
            margin-bottom: 18px;
            border: 1px solid transparent;
            border-radius: 10px;
            font-size: 12px;
            line-height: 1.7;
        }

        .alert i {
            margin-top: 2px;
            flex-shrink: 0;
        }

        .alert-error {
            color: #A52D24;
            background: #FFF1EF;
            border-color: #F0CBC6;
        }

        /* SEARCH FORM */

        .field-label {
            display: block;
            margin-bottom: 9px;
            color: #333C45;
            font-size: 13px;
            font-weight: 800;
        }

        .required {
            color: #D92D20;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap > i {
            position: absolute;
            top: 50%;
            left: 16px;
            color: #56616B;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .input-wrap input {
            display: block;
            width: 100%;
            min-height: 54px;
            padding: 14px 15px 14px 47px;
            border: 1px solid #CFD5DA;
            border-radius: 10px;
            outline: none;
            color: var(--text);
            background: #FCFCFB;
            font-size: 14px;
            transition: border-color .2s, box-shadow .2s, background .2s;
        }

        .input-wrap input::placeholder {
            color: #9A9FA4;
        }

        .input-wrap input:focus {
            border-color: var(--copper);
            background: white;
            box-shadow: 0 0 0 4px rgba(198,107,50,.11);
        }

        .field-help {
            margin-top: 8px;
            color: #858B91;
            font-size: 11px;
            line-height: 1.7;
        }

        .search-button {
            width: 100%;
            min-height: 52px;
            margin-top: 19px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 11px;
            border: none;
            border-radius: 10px;
            color: white;
            background: linear-gradient(135deg, #C66B32, #B95822);
            box-shadow: 0 7px 18px rgba(177,85,34,.19);
            font-size: 14px;
            font-weight: 800;
            cursor: pointer;
            transition: .2s ease;
        }

        .search-button:hover {
            background: linear-gradient(135deg, #B75A25, #984619);
            box-shadow: 0 10px 24px rgba(177,85,34,.26);
            transform: translateY(-2px);
        }

        .search-button:disabled {
            opacity: .7;
            cursor: wait;
            transform: none;
        }

        .divider {
            height: 1px;
            margin: 26px 0 20px;
            border: 0;
            background: #E9E9E6;
        }

        .back-home {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            color: #59636D;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            transition: color .2s;
        }

        .back-home:hover {
            color: var(--copper-dark);
        }

        /* RESULT CARD, IF PROVIDED BY CONTROLLER */

        .result {
            margin-top: 28px;
            padding: 23px;
            border: 1px solid #DDE8DF;
            border-radius: 13px;
            background: #FBFDFB;
            animation: reveal .4s ease both;
        }

        .result-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 17px;
        }

        .result-icon {
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            flex-shrink: 0;
            border-radius: 12px;
            color: var(--green);
            background: var(--green-bg);
        }

        .result-heading h2 {
            color: var(--charcoal);
            font-size: 17px;
            font-weight: 800;
        }

        .result-heading p {
            margin-top: 3px;
            color: var(--muted);
            font-size: 11px;
        }

        .result-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 18px;
            padding: 13px 0;
            border-bottom: 1px solid #E7EAE7;
            font-size: 12px;
        }

        .result-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .result-label {
            color: #78818A;
            flex-shrink: 0;
        }

        .result-value {
            color: #303943;
            text-align: right;
            font-weight: 700;
            overflow-wrap: anywhere;
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 6px 11px;
            border-radius: 100px;
            color: #92511E;
            background: #FFF0DB;
            font-size: 11px;
            font-weight: 800;
        }

        .status-pill i {
            font-size: 7px;
        }

        .card-footer-note {
            margin-top: 25px;
            color: #9A9DA0;
            text-align: center;
            font-size: 10px;
            line-height: 1.7;
        }

        /* FOOTER */

        .page-footer {
            padding: 17px 24px;
            color: rgba(255,255,255,.74);
            background: var(--charcoal);
            font-size: 10px;
        }

        .footer-inner {
            width: min(1180px, 100%);
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .footer-inner strong {
            color: white;
        }

        /* ANIMATION */

        @keyframes reveal {
            from {
                opacity: 0;
                transform: translateY(16px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
            }
        }

        /* RESPONSIVE */

        @media (max-width: 600px) {
            .nav-inner {
                width: calc(100% - 28px);
                min-height: 78px;
                gap: 10px;
            }

            .brand {
                gap: 10px;
            }

            .brand-logo {
                width: 43px;
                height: 51px;
            }

            .brand-name {
                font-size: 16px;
            }

            .brand-subtitle {
                max-width: 205px;
                font-size: 9px;
            }

            .back-link {
                width: 39px;
                min-height: 39px;
                padding: 0;
                font-size: 0;
            }

            .back-link i {
                font-size: 14px;
            }

            .page {
                min-height: calc(100vh - 78px);
                padding: 27px 13px 32px;
            }

            .status-card {
                padding: 28px 19px 25px;
                border-radius: 16px;
            }

            .heading {
                margin-bottom: 24px;
            }

            .heading-icon {
                width: 57px;
                height: 57px;
                margin-bottom: 14px;
                font-size: 23px;
            }

            h1 {
                font-size: 27px;
            }

            .subtitle {
                font-size: 12px;
            }

            .input-wrap input {
                min-height: 49px;
                font-size: 12px;
            }

            .result {
                padding: 17px 14px;
            }

            .result-row {
                gap: 10px;
                font-size: 11px;
            }

            .footer-inner {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 360px) {
            .brand-name {
                font-size: 14px;
            }

            .brand-subtitle {
                max-width: 160px;
                font-size: 8px;
            }

            .status-card {
                padding-left: 14px;
                padding-right: 14px;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <header class="navbar">
        <div class="nav-inner">

            <a href="{{ url('/') }}" class="brand">
                <img
                    src="{{ asset('images/logo-sulawesi-tengah.png') }}"
                    alt="Logo Sulawesi Tengah"
                    class="brand-logo"
                >

                <div>
                    <div class="brand-name">DESDM-SICANTIK</div>
                    <div class="brand-subtitle">
                        Dinas Energi dan Sumber Daya Mineral<br>
                        Provinsi Sulawesi Tengah
                    </div>
                </div>
            </a>

            <a href="{{ url('/') }}" class="back-link">
                <i class="fa-solid fa-arrow-left"></i>
                Kembali ke Beranda
            </a>

        </div>
    </header>


    {{-- SEARCH PAGE --}}
    <main class="page">

        <section class="status-card">
            <div class="card-content">

                <div class="heading">
                    <div class="heading-icon">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>

                    <div class="eyebrow">Layanan Informasi Masyarakat</div>

                    <h1>Cek Status Pengajuan</h1>

                    <p class="subtitle">
                        Pantau perkembangan pengajuan bantuan Anda dengan
                        memasukkan nomor pengajuan yang telah diberikan.
                    </p>
                </div>


                {{-- ERROR MESSAGES --}}
                @if(session('error'))
                    <div class="alert alert-error" role="alert">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <div>{{ session('error') }}</div>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-error" role="alert">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <div>{{ $errors->first() }}</div>
                    </div>
                @endif


                {{-- SEARCH FORM --}}
                <form
                    id="cekStatusForm"
                    action="{{ route('pengajuan-bantuan.hasil-status') }}"
                    method="POST"
                >
                    @csrf

                    <label for="nomor_pengajuan" class="field-label">
                        Nomor Pengajuan <span class="required">*</span>
                    </label>

                    <div class="input-wrap">
                        <i class="fa-solid fa-ticket"></i>

                        <input
                            type="text"
                            id="nomor_pengajuan"
                            name="nomor_pengajuan"
                            value="{{ old('nomor_pengajuan') }}"
                            placeholder="Contoh: ESDM-20260921-0001"
                            maxlength="100"
                            autocomplete="off"
                            spellcheck="false"
                            aria-describedby="nomorHelp"
                            required
                        >
                    </div>

                    <p class="field-help" id="nomorHelp">
                        Masukkan nomor pengajuan persis seperti yang tertera
                        pada bukti pengajuan Anda.
                    </p>

                    <button
                        type="submit"
                        class="search-button"
                        id="searchButton"
                    >
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span id="buttonText">Cek Status Pengajuan</span>
                    </button>
                </form>


                {{-- RESULT: DISPLAY ONLY WHEN THE CONTROLLER PROVIDES $pengajuan --}}
                @isset($pengajuan)

                    <div class="result" id="hasilPengajuan">

                        <div class="result-heading">
                            <div class="result-icon">
                                <i class="fa-solid fa-clipboard-check"></i>
                            </div>

                            <div>
                                <h2>Informasi Pengajuan</h2>
                                <p>Data pengajuan yang ditemukan.</p>
                            </div>
                        </div>

                        <div class="result-row">
                            <span class="result-label">Nomor Pengajuan</span>
                            <span class="result-value">
                                {{ $pengajuan->nomor_pengajuan }}
                            </span>
                        </div>

                        <div class="result-row">
                            <span class="result-label">Nama Lengkap</span>
                            <span class="result-value">
                                {{ $pengajuan->nama_lengkap }}
                            </span>
                        </div>

                        <div class="result-row">
                            <span class="result-label">Status Pengajuan</span>
                            <span class="result-value">
                                <span class="status-pill">
                                    <i class="fa-solid fa-circle"></i>
                                    {{ $pengajuan->status }}
                                </span>
                            </span>
                        </div>

                    </div>

                @endisset


                <hr class="divider">

                <a href="{{ url('/') }}" class="back-home">
                    <i class="fa-solid fa-arrow-left"></i>
                    Kembali ke halaman utama
                </a>

                <p class="card-footer-note">
                    DESDM-SICANTIK · Layanan Informasi Pengajuan Bantuan<br>
                    Dinas ESDM Provinsi Sulawesi Tengah
                </p>

            </div>
        </section>

    </main>


    {{-- FOOTER --}}
    <footer class="page-footer">
        <div class="footer-inner">
            <div>
                <strong>DESDM-SICANTIK</strong>
                &nbsp;·&nbsp; Layanan Pengajuan Bantuan
            </div>

            <div>
                © {{ date('Y') }} Dinas ESDM Provinsi Sulawesi Tengah
            </div>
        </div>
    </footer>


    {{-- INTERACTION --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('cekStatusForm');
            const input = document.getElementById('nomor_pengajuan');
            const button = document.getElementById('searchButton');
            const buttonText = document.getElementById('buttonText');

            input.addEventListener('input', function () {
                input.value = input.value.replace(/^\s+/, '');
            });

            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    return;
                }

                if (!input.value.trim()) {
                    event.preventDefault();
                    input.focus();
                    return;
                }

                button.disabled = true;
                buttonText.textContent = 'Memeriksa Pengajuan...';
            });
        });
    </script>

</body>
</html>
