<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengajuan Bantuan Listrik - Si Cantik</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --charcoal: #292F36;
            --copper: #C66B32;
            --copper-dark: #A95425;
            --warm-white: #F5F5F3;
            --white: #FFFFFF;
            --gray: #68717A;
            --gray-light: #E7E7E3;
            --pale-copper: #FCEBDD;
            --danger: #C0392B;
            --success: #26734D;
            --shadow: 0 12px 35px rgba(41, 47, 54, .07);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        [hidden] {
            display: none !important;
        }

        html {
            background: var(--charcoal);
        }

        /* Body kolom setinggi layar: footer selalu menempel di dasar */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Inter', sans-serif;
            background: var(--warm-white);
            color: var(--charcoal);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        a:focus-visible,
        button:focus-visible {
            outline: 3px solid rgba(198, 107, 50, .5);
            outline-offset: 3px;
        }

        /* HEADER */

        .header {
            position: relative;
            overflow: hidden;
            color: var(--white);
            padding: 18px clamp(20px, 8vw, 150px);
            border-bottom: 3px solid var(--copper);
            box-shadow: 0 4px 15px rgba(0, 0, 0, .08);
            background:
                linear-gradient(115deg, transparent calc(50% - .6px), rgba(230, 160, 120, .7) 50%, transparent calc(50% + .6px)) 80% 0 / 150px 100% no-repeat,
                linear-gradient(115deg, transparent calc(50% - .6px), rgba(255, 255, 255, .28) 50%, transparent calc(50% + .6px)) 85% 0 / 150px 100% no-repeat,
                linear-gradient(270deg, rgba(198, 107, 50, .45) 0%, rgba(198, 107, 50, .2) 25%, rgba(198, 107, 50, 0) 52%),
                var(--charcoal);
        }

        .header::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 7px;
            height: 100%;
            background: linear-gradient(to bottom, #F2B17F, #C66B32, #8F421F);
        }

        .header-inner {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
        }

        .brand-link {
            display: flex;
            align-items: center;
            gap: 14px;
            min-width: 0;
            color: inherit;
        }

        .brand-logo {
            width: 50px;
            height: 50px;
            flex-shrink: 0;
            object-fit: contain;
            transition: transform .2s ease;
        }

        .brand-link:hover .brand-logo {
            transform: scale(1.06);
        }

        .brand h1 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 22px;
            font-weight: 800;
            letter-spacing: .5px;
        }

        .brand p {
            color: #D1D5D8;
            font-size: 12px;
            margin-top: 3px;
        }

        .brand-line {
            width: 35px;
            height: 3px;
            background: var(--copper);
            margin-top: 6px;
            border-radius: 5px;
        }

        .header-link {
            flex-shrink: 0;
            display: inline-flex;
            align-items: center;
            height: 38px;
            padding: 0 16px;
            margin-right: 10px;
            border: 1px solid rgba(255, 255, 255, .65);
            border-radius: 10px;
            background: rgba(255, 255, 255, .06);
            color: #fff;
            font-size: 13.5px;
            font-weight: 600;
            white-space: nowrap;
            transition: background .2s ease, color .2s ease, transform .2s ease;
        }

        .header-link:hover {
            background: #fff;
            color: var(--charcoal);
            transform: translateY(-1px);
        }

        /* MAIN */

        .container {
            width: 100%;
            max-width: 950px;
            margin: 0 auto;
            padding: 42px 20px 65px;
        }

        .back {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--gray);
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 25px;
            transition: .2s;
        }

        .back:hover {
            color: var(--copper);
            transform: translateX(-3px);
        }

        /* INFO */

        .service-info {
            position: relative;
            overflow: hidden;
            background: var(--charcoal);
            color: white;
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: var(--shadow);
        }

        .service-info::after {
            content: "";
            position: absolute;
            width: 190px;
            height: 190px;
            border: 35px solid rgba(198, 107, 50, .12);
            border-radius: 50%;
            right: -55px;
            top: -75px;
        }

        .badge {
            display: inline-block;
            background: rgba(198, 107, 50, .17);
            color: #F2B58D;
            border: 1px solid rgba(198, 107, 50, .35);
            padding: 6px 13px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .7px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .service-info h2 {
            position: relative;
            z-index: 1;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 25px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .service-info p {
            position: relative;
            z-index: 1;
            color: #D1D5D8;
            font-size: 13px;
            line-height: 1.8;
        }

        /* FORM CARD */

        .form-card {
            background: var(--white);
            border: 1px solid var(--gray-light);
            border-radius: 16px;
            padding: 35px;
            box-shadow: var(--shadow);
        }

        .form-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 23px;
            font-weight: 800;
            margin-bottom: 7px;
        }

        .form-subtitle {
            color: var(--gray);
            font-size: 13px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .required {
            color: var(--copper);
            font-weight: 700;
        }

        .optional {
            color: #8A9096;
            font-weight: 500;
            font-size: 11px;
        }

        /* ALERT */

        .alert {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 4px 12px;
            background: #FFF1EF;
            border: 1px solid #F3C6C0;
            color: var(--danger);
            border-radius: 10px;
            padding: 17px 20px;
            margin-bottom: 25px;
            font-size: 13px;
            transition: opacity .25s ease, transform .25s ease;
        }

        .alert:focus {
            outline: none;
        }

        .alert.is-closing {
            opacity: 0;
            transform: translateY(-6px);
        }

        .alert strong {
            display: block;
            width: 100%;
            margin-bottom: 4px;
        }

        .alert ul {
            padding-left: 20px;
        }

        .alert li {
            margin-bottom: 4px;
        }

        .alert small {
            display: block;
            width: 100%;
            margin-top: 6px;
            color: #8F3A2F;
            font-size: 12px;
        }

        .alert-close {
            width: 28px;
            height: 28px;
            margin: -3px -6px 0 auto;
            border: 0;
            border-radius: 8px;
            background: transparent;
            color: inherit;
            font-size: 20px;
            line-height: 1;
            opacity: .7;
            cursor: pointer;
            transition: opacity .15s ease, background .15s ease;
        }

        .alert-close:hover {
            opacity: 1;
            background: rgba(41, 47, 54, .08);
        }

        /* PROGRESS */

        .progress-card {
            margin-bottom: 30px;
            padding: 15px 18px;
            background: #FBF7F3;
            border: 1px solid #F0E3D8;
            border-radius: 12px;
        }

        .progress-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-bottom: 9px;
            font-size: 12px;
            font-weight: 600;
            color: var(--gray);
        }

        .progress-head strong {
            color: var(--copper-dark);
            font-weight: 700;
        }

        .progress-bar {
            height: 8px;
            overflow: hidden;
            background: #EADFD5;
            border-radius: 99px;
        }

        .progress-fill {
            display: block;
            width: 0;
            height: 100%;
            background: linear-gradient(90deg, #F2B17F, #C66B32);
            border-radius: 99px;
            transition: width .35s ease, background .35s ease;
        }

        .progress-fill.is-complete {
            background: linear-gradient(90deg, #48A978, var(--success));
        }

        /* SECTION */

        .form-section {
            margin-bottom: 32px;
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--gray-light);
            margin-bottom: 22px;
        }

        .section-number {
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 10px;
            background: var(--pale-copper);
            color: var(--copper-dark);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 13px;
            font-weight: 800;
            transition: background .25s ease, color .25s ease, transform .25s ease;
        }

        .section-number.is-complete {
            background: var(--success);
            color: #fff;
            transform: scale(1.06);
        }

        .section-heading h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 16px;
            font-weight: 800;
        }

        /* INPUT */

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 21px;
        }

        .form-group {
            min-width: 0;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            border: 1px solid #DADDDC;
            background: #FCFCFB;
            border-radius: 9px;
            padding: 13px 14px;
            color: var(--charcoal);
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            outline: none;
            transition: .25s;
        }

        input[type="text"] {
            height: 47px;
        }

        textarea {
            min-height: 115px;
            resize: vertical;
            line-height: 1.7;
        }

        input::placeholder,
        textarea::placeholder {
            color: #A5AAAD;
        }

        input[type="text"]:hover,
        textarea:hover {
            border-color: #C9CDCB;
        }

        input[type="text"]:focus,
        textarea:focus {
            background: white;
            border-color: var(--copper);
            box-shadow: 0 0 0 3px rgba(198, 107, 50, .12);
        }

        input.is-valid,
        textarea.is-valid {
            border-color: #7DBE9A !important;
        }

        input.is-invalid,
        textarea.is-invalid {
            border-color: var(--danger) !important;
            background: #FFF8F7;
        }

        input.is-invalid:focus,
        textarea.is-invalid:focus {
            box-shadow: 0 0 0 3px rgba(192, 57, 43, .14);
        }

        .is-shaking {
            animation: shake .35s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20%      { transform: translateX(-5px); }
            40%      { transform: translateX(5px); }
            60%      { transform: translateX(-3px); }
            80%      { transform: translateX(3px); }
        }

        .help-text {
            display: block;
            color: var(--gray);
            font-size: 11px;
            margin-top: 7px;
        }

        .field-foot {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 10px;
            margin-top: 6px;
            font-size: 11.5px;
            line-height: 1.5;
        }

        .field-error {
            color: var(--danger);
            font-weight: 600;
        }

        .field-error:not(:empty)::before {
            content: "! ";
            font-weight: 800;
        }

        .field-count {
            margin-left: auto;
            flex-shrink: 0;
            color: #8A9096;
            font-variant-numeric: tabular-nums;
        }

        .field-count.is-done {
            color: var(--success);
            font-weight: 700;
        }

        /* UPLOAD DOKUMEN */

        .file-drop {
            position: relative;
            display: flex;
            align-items: center;
            min-height: 78px;
            padding: 14px 16px;
            border: 1.5px dashed #CFC8C0;
            border-radius: 12px;
            background: #FCFAF8;
            transition: border-color .2s ease, background .2s ease, box-shadow .2s ease;
        }

        .file-drop:hover,
        .file-drop.is-dragover {
            border-color: var(--copper);
            background: #FFF7F1;
        }

        .file-drop:focus-within {
            border-color: var(--copper);
            box-shadow: 0 0 0 3px rgba(198, 107, 50, .12);
        }

        .file-drop.is-valid {
            border-style: solid;
            border-color: #7DBE9A;
            background: #F6FBF8;
        }

        .file-drop.is-invalid {
            border-color: var(--danger);
            background: #FFF8F7;
        }

        /* input file menutup seluruh kotak: klik & seret-lepas langsung bekerja */
        .file-input {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-empty,
        .file-chosen {
            display: flex;
            align-items: center;
            gap: 14px;
            width: 100%;
            pointer-events: none;
        }

        .file-icon {
            width: 42px;
            height: 42px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: var(--pale-copper);
            color: var(--copper-dark);
            font-size: 18px;
            font-weight: 800;
        }

        .file-empty strong {
            display: block;
            font-size: 13px;
            font-weight: 700;
        }

        .file-empty strong em {
            color: var(--copper);
            font-style: normal;
        }

        .file-empty small,
        .file-meta small {
            display: block;
            color: var(--gray);
            font-size: 11.5px;
        }

        .file-thumb {
            width: 46px;
            height: 46px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: var(--pale-copper) center / cover no-repeat;
            color: var(--copper-dark);
            font-size: 11px;
            font-weight: 800;
        }

        .file-meta {
            flex: 1;
            min-width: 0;
        }

        .file-name {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            font-size: 13px;
            font-weight: 600;
        }

        .file-remove {
            position: relative;
            z-index: 2;
            flex-shrink: 0;
            padding: 7px 12px;
            border: 1px solid #E2DDD7;
            border-radius: 8px;
            background: #fff;
            color: var(--danger);
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            pointer-events: auto;
            transition: background .2s ease;
        }

        .file-remove:hover {
            background: #FFF1EF;
        }

        /* ACTION */

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            border-top: 1px solid var(--gray-light);
            padding-top: 25px;
            margin-top: 10px;
        }

        .btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 9px;
            min-height: 46px;
            padding: 12px 22px;
            border: none;
            border-radius: 9px;
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: .25s;
        }

        .btn-secondary {
            color: var(--charcoal);
            background: #F0F0ED;
            border: 1px solid #E2E2DE;
        }

        .btn-secondary:hover {
            background: #E5E5E0;
        }

        .btn-primary {
            color: white;
            background: var(--copper);
            box-shadow: 0 5px 13px rgba(198, 107, 50, .2);
        }

        .btn-primary:hover {
            background: var(--copper-dark);
            transform: translateY(-2px);
            box-shadow: 0 7px 17px rgba(198, 107, 50, .27);
        }

        .btn-primary.is-loading {
            pointer-events: none;
            opacity: .85;
        }

        .btn-primary.is-loading::before {
            content: "";
            width: 14px;
            height: 14px;
            border: 2px solid rgba(255, 255, 255, .5);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin .7s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* FOOTER */

        .footer {
            margin-top: auto;
            background: var(--charcoal);
            border-top: 3px solid var(--copper);
            color: white;
            text-align: center;
            padding: 25px 20px;
            font-size: 12px;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer .muted {
            color: #AEB5BB;
            font-size: 11px;
        }

        /* RESPONSIVE */

        @media (max-width: 650px) {
            .header {
                padding: 16px 20px;
            }

            .brand-logo {
                width: 42px;
                height: 42px;
            }

            .brand h1 {
                font-size: 19px;
            }

            .brand p {
                font-size: 10px;
            }

            .header-link {
                height: 34px;
                padding: 0 12px;
                margin-right: 6px;
                font-size: 12.5px;
            }

            .container {
                padding: 28px 15px 45px;
            }

            .service-info {
                padding: 24px 21px;
            }

            .service-info h2 {
                font-size: 21px;
            }

            .form-card {
                padding: 24px 19px;
            }

            .form-title {
                font-size: 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .form-group.full {
                grid-column: auto;
            }

            .form-actions {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .btn {
                width: 100%;
            }

            input[type="text"],
            textarea {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .brand p {
                display: none;
            }

            .brand-line {
                display: none;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                transition: none !important;
                animation: none !important;
            }
        }
    </style>
</head>

<body>

<header class="header">
    <div class="header-inner">

        <a class="brand-link" href="{{ url('/') }}">
            <img
                src="{{ asset('images/logo-sulawesi-tengah.png') }}"
                alt="Logo Sulawesi Tengah"
                class="brand-logo"
            >

            <div class="brand">
                <h1>SICANTIK</h1>
                <p>Dinas Energi dan Sumber Daya Mineral</p>
                <div class="brand-line"></div>
            </div>
        </a>

        <a class="header-link" href="{{ route('information.index') }}">Informasi ESDM</a>

    </div>
</header>

<main class="container">

    <a href="{{ url('/') }}" class="back" data-confirm-leave>
        ← Kembali ke Beranda
    </a>

    <section class="service-info">
        <span class="badge">Bantuan Listrik</span>
        <h2>Pengajuan Bantuan Listrik</h2>
        <p>
            Silakan lengkapi data berikut untuk mengajukan bantuan listrik.
            Pastikan data dan dokumen yang Anda kirim benar dan sesuai dengan identitas Anda.
        </p>
    </section>

    <section class="form-card">

        <h2 class="form-title">Data Pengajuan Bantuan</h2>

        <p class="form-subtitle">
            Lengkapi seluruh informasi yang diperlukan. Kolom bertanda
            <span class="required">*</span> wajib diisi.
        </p>

        {{-- Error dari server --}}
        @if ($errors->any())
            <div class="alert" id="serverAlert" role="alert" tabindex="-1">
                <strong>Periksa kembali data yang Anda masukkan.</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <small>
                    Catatan: demi keamanan, browser tidak menyimpan file yang sudah dipilih.
                    Pilih ulang dokumen KTP, KK, dan dokumen pendukung sebelum mengirim lagi.
                </small>
            </div>
        @endif

        {{-- Error dari pengecekan di browser (diisi oleh JavaScript) --}}
        <div class="alert" id="clientAlert" role="alert" tabindex="-1" hidden>
            <strong>Periksa kembali data yang Anda masukkan.</strong>
            <span id="clientAlertText"></span>
            <button type="button" class="alert-close" data-alert-close aria-label="Tutup">&times;</button>
        </div>

        <form
            id="pengajuanForm"
            action="{{ route('pengajuan-bantuan.store') }}"
            method="POST"
            enctype="multipart/form-data"
            novalidate
        >

            @csrf

            <div class="progress-card" aria-live="polite">
                <div class="progress-head">
                    <span>Kelengkapan formulir</span>
                    <strong id="progressText">0 dari 16 kolom</strong>
                </div>
                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" id="progressBar">
                    <span class="progress-fill" id="progressFill"></span>
                </div>
            </div>

            {{-- 1. DATA PEMOHON --}}
            <div class="form-section">

                <div class="section-heading">
                    <div class="section-number">1</div>
                    <h3>Data Pemohon</h3>
                </div>

                <div class="form-grid">

                    <div class="form-group">
                        <label for="nik">NIK <span class="required">*</span></label>
                        <input type="text" id="nik" name="nik" value="{{ old('nik') }}"
                               maxlength="16" inputmode="numeric" autocomplete="off"
                               placeholder="Masukkan 16 digit NIK"
                               data-rule="nik" data-server-error="{{ $errors->first('nik') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nomor_kk">Nomor KK <span class="required">*</span></label>
                        <input type="text" id="nomor_kk" name="nomor_kk" value="{{ old('nomor_kk') }}"
                               maxlength="16" inputmode="numeric" autocomplete="off"
                               placeholder="Masukkan 16 digit nomor KK"
                               data-rule="kk" data-server-error="{{ $errors->first('nomor_kk') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap <span class="required">*</span></label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                               maxlength="255" autocomplete="name"
                               placeholder="Masukkan nama lengkap"
                               data-rule="nama" data-server-error="{{ $errors->first('nama_lengkap') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nomor_hp">Nomor HP <span class="required">*</span></label>
                        <input type="text" id="nomor_hp" name="nomor_hp" value="{{ old('nomor_hp') }}"
                               maxlength="20" inputmode="tel" autocomplete="tel"
                               placeholder="Contoh: 08xxxxxxxxxx"
                               data-rule="hp" data-server-error="{{ $errors->first('nomor_hp') }}" required>
                    </div>

                </div>
            </div>

            {{-- 2. ALAMAT --}}
            <div class="form-section">

                <div class="section-heading">
                    <div class="section-number">2</div>
                    <h3>Alamat Pemohon</h3>
                </div>

                <div class="form-grid">

                    <div class="form-group full">
                        <label for="alamat">Alamat Lengkap <span class="required">*</span></label>
                        <textarea id="alamat" name="alamat" autocomplete="street-address"
                                  placeholder="Masukkan alamat lengkap"
                                  data-rule="alamat" data-server-error="{{ $errors->first('alamat') }}" required>{{ old('alamat') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="desa_kelurahan">Desa/Kelurahan <span class="required">*</span></label>
                        <input type="text" id="desa_kelurahan" name="desa_kelurahan" value="{{ old('desa_kelurahan') }}"
                               maxlength="255" placeholder="Desa/Kelurahan"
                               data-rule="wilayah" data-server-error="{{ $errors->first('desa_kelurahan') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="kecamatan">Kecamatan <span class="required">*</span></label>
                        <input type="text" id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}"
                               maxlength="255" placeholder="Kecamatan"
                               data-rule="wilayah" data-server-error="{{ $errors->first('kecamatan') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="kabupaten_kota">Kabupaten/Kota <span class="required">*</span></label>
                        <input type="text" id="kabupaten_kota" name="kabupaten_kota" value="{{ old('kabupaten_kota') }}"
                               maxlength="255" autocomplete="address-level2" placeholder="Kabupaten/Kota"
                               data-rule="wilayah" data-server-error="{{ $errors->first('kabupaten_kota') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="provinsi">Provinsi <span class="required">*</span></label>
                        <input type="text" id="provinsi" name="provinsi" value="{{ old('provinsi') }}"
                               maxlength="255" autocomplete="address-level1" placeholder="Provinsi"
                               data-rule="wilayah" data-server-error="{{ $errors->first('provinsi') }}" required>
                    </div>

                </div>
            </div>

            {{-- 3. RUMAH & LISTRIK --}}
            <div class="form-section">

                <div class="section-heading">
                    <div class="section-number">3</div>
                    <h3>Kondisi Rumah dan Listrik</h3>
                </div>

                <div class="form-grid">

                    <div class="form-group">
                        <label for="status_kepemilikan_rumah">Status Kepemilikan Rumah <span class="required">*</span></label>
                        <input type="text" id="status_kepemilikan_rumah" name="status_kepemilikan_rumah"
                               value="{{ old('status_kepemilikan_rumah') }}" list="opsi-kepemilikan"
                               maxlength="255" autocomplete="off" placeholder="Pilih atau ketik"
                               data-rule="pilihan" data-server-error="{{ $errors->first('status_kepemilikan_rumah') }}" required>
                        <datalist id="opsi-kepemilikan">
                            <option value="Milik Sendiri"></option>
                            <option value="Sewa/Kontrak"></option>
                            <option value="Menumpang"></option>
                            <option value="Rumah Dinas"></option>
                        </datalist>
                    </div>

                    <div class="form-group">
                        <label for="kondisi_rumah">Kondisi Rumah <span class="required">*</span></label>
                        <input type="text" id="kondisi_rumah" name="kondisi_rumah"
                               value="{{ old('kondisi_rumah') }}" list="opsi-kondisi"
                               maxlength="255" autocomplete="off" placeholder="Pilih atau ketik"
                               data-rule="pilihan" data-server-error="{{ $errors->first('kondisi_rumah') }}" required>
                        <datalist id="opsi-kondisi">
                            <option value="Permanen"></option>
                            <option value="Semi Permanen"></option>
                            <option value="Tidak Permanen"></option>
                        </datalist>
                    </div>

                    <div class="form-group">
                        <label for="sumber_listrik">Sumber Listrik Saat Ini <span class="required">*</span></label>
                        <input type="text" id="sumber_listrik" name="sumber_listrik"
                               value="{{ old('sumber_listrik') }}" list="opsi-sumber"
                               maxlength="255" autocomplete="off" placeholder="Pilih atau ketik"
                               data-rule="pilihan" data-server-error="{{ $errors->first('sumber_listrik') }}" required>
                        <datalist id="opsi-sumber">
                            <option value="Belum Ada Listrik"></option>
                            <option value="Menumpang Tetangga"></option>
                            <option value="PLN"></option>
                            <option value="Genset"></option>
                            <option value="Panel Surya"></option>
                        </datalist>
                    </div>

                    <div class="form-group">
                        <label for="daya_listrik">Daya Listrik <span class="required">*</span></label>
                        <input type="text" id="daya_listrik" name="daya_listrik"
                               value="{{ old('daya_listrik') }}" list="opsi-daya"
                               maxlength="255" autocomplete="off" placeholder="Pilih atau ketik"
                               data-rule="pilihan" data-server-error="{{ $errors->first('daya_listrik') }}" required>
                        <datalist id="opsi-daya">
                            <option value="Belum Ada"></option>
                            <option value="450 VA"></option>
                            <option value="900 VA"></option>
                            <option value="1300 VA"></option>
                        </datalist>
                    </div>

                </div>
            </div>

            {{-- 4. EKONOMI & ALASAN --}}
            <div class="form-section">

                <div class="section-heading">
                    <div class="section-number">4</div>
                    <h3>Data Keluarga dan Alasan Pengajuan</h3>
                </div>

                <div class="form-grid">

                    <div class="form-group">
                        <label for="penghasilan">Penghasilan <span class="optional">(opsional)</span></label>
                        <input type="text" id="penghasilan" name="penghasilan" value="{{ old('penghasilan') }}"
                               maxlength="255" autocomplete="off" placeholder="Contoh: Rp1.500.000 per bulan"
                               data-rule="teks" data-optional data-server-error="{{ $errors->first('penghasilan') }}">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_anggota_keluarga">Jumlah Anggota Keluarga <span class="optional">(opsional)</span></label>
                        <input type="text" id="jumlah_anggota_keluarga" name="jumlah_anggota_keluarga"
                               value="{{ old('jumlah_anggota_keluarga') }}"
                               maxlength="2" inputmode="numeric" autocomplete="off" placeholder="Contoh: 4"
                               data-rule="jumlah" data-optional data-server-error="{{ $errors->first('jumlah_anggota_keluarga') }}">
                    </div>

                    <div class="form-group full">
                        <label for="alasan_pengajuan">Alasan Pengajuan <span class="required">*</span></label>
                        <textarea id="alasan_pengajuan" name="alasan_pengajuan" rows="5"
                                  placeholder="Jelaskan alasan Anda mengajukan bantuan listrik"
                                  data-rule="alasan" data-server-error="{{ $errors->first('alasan_pengajuan') }}" required>{{ old('alasan_pengajuan') }}</textarea>
                        <span class="help-text">
                            Jelaskan dengan jelas agar pengajuan dapat diverifikasi dengan baik.
                        </span>
                    </div>

                </div>
            </div>

            {{-- 5. DOKUMEN --}}
            <div class="form-section">

                <div class="section-heading">
                    <div class="section-number">5</div>
                    <h3>Dokumen Pendukung</h3>
                </div>

                <div class="form-grid">

                    <div class="form-group full">
                        <label for="dokumen_ktp">Dokumen KTP <span class="required">*</span></label>
                        <div class="file-drop">
                            <input type="file" class="file-input" id="dokumen_ktp" name="dokumen_ktp"
                                   accept=".pdf,.jpg,.jpeg,.png"
                                   data-rule="file" data-server-error="{{ $errors->first('dokumen_ktp') }}" required>
                            <div class="file-empty">
                                <span class="file-icon" aria-hidden="true">&uarr;</span>
                                <div>
                                    <strong><em>Pilih file</em> atau seret ke sini</strong>
                                    <small>PDF, JPG, atau PNG &middot; maksimal 2 MB</small>
                                </div>
                            </div>
                            <div class="file-chosen" hidden>
                                <span class="file-thumb"></span>
                                <div class="file-meta">
                                    <span class="file-name"></span>
                                    <small class="file-size"></small>
                                </div>
                                <button type="button" class="file-remove">Hapus</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group full">
                        <label for="dokumen_kk">Dokumen Kartu Keluarga <span class="required">*</span></label>
                        <div class="file-drop">
                            <input type="file" class="file-input" id="dokumen_kk" name="dokumen_kk"
                                   accept=".pdf,.jpg,.jpeg,.png"
                                   data-rule="file" data-server-error="{{ $errors->first('dokumen_kk') }}" required>
                            <div class="file-empty">
                                <span class="file-icon" aria-hidden="true">&uarr;</span>
                                <div>
                                    <strong><em>Pilih file</em> atau seret ke sini</strong>
                                    <small>PDF, JPG, atau PNG &middot; maksimal 2 MB</small>
                                </div>
                            </div>
                            <div class="file-chosen" hidden>
                                <span class="file-thumb"></span>
                                <div class="file-meta">
                                    <span class="file-name"></span>
                                    <small class="file-size"></small>
                                </div>
                                <button type="button" class="file-remove">Hapus</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group full">
                        <label for="dokumen_pendukung">Dokumen Pendukung Lainnya <span class="optional">(opsional)</span></label>
                        <div class="file-drop">
                            <input type="file" class="file-input" id="dokumen_pendukung" name="dokumen_pendukung"
                                   accept=".pdf,.jpg,.jpeg,.png"
                                   data-rule="file" data-optional data-server-error="{{ $errors->first('dokumen_pendukung') }}">
                            <div class="file-empty">
                                <span class="file-icon" aria-hidden="true">&uarr;</span>
                                <div>
                                    <strong><em>Pilih file</em> atau seret ke sini</strong>
                                    <small>PDF, JPG, atau PNG &middot; maksimal 2 MB</small>
                                </div>
                            </div>
                            <div class="file-chosen" hidden>
                                <span class="file-thumb"></span>
                                <div class="file-meta">
                                    <span class="file-name"></span>
                                    <small class="file-size"></small>
                                </div>
                                <button type="button" class="file-remove">Hapus</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-actions">

                <a href="{{ url('/') }}" class="btn btn-secondary" data-confirm-leave>
                    ← Kembali
                </a>

                <button type="submit" class="btn btn-primary" id="submitBtn">
                    <span data-label>Kirim Pengajuan</span>
                    <span aria-hidden="true">→</span>
                </button>

            </div>

        </form>

    </section>

</main>

<footer class="footer">

    <p>
        <strong>Si Cantik</strong> -
        Dinas Energi dan Sumber Daya Mineral
    </p>

    <p class="muted">
        Layanan informasi dan pengajuan secara online
    </p>

</footer>

<script>
(function () {
    'use strict';

    var form = document.getElementById('pengajuanForm');
    if (!form) { return; }

    var reduceMotion = window.matchMedia &&
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var fields = Array.prototype.slice.call(form.querySelectorAll('[data-rule]'));
    var requiredFields = fields.filter(function (f) { return !f.hasAttribute('data-optional'); });
    var submitBtn = document.getElementById('submitBtn');
    var submitLabel = submitBtn.querySelector('[data-label]');
    var defaultLabel = submitLabel.textContent;
    var clientAlert = document.getElementById('clientAlert');
    var clientAlertText = document.getElementById('clientAlertText');
    var serverAlert = document.getElementById('serverAlert');
    var progressText = document.getElementById('progressText');
    var progressFill = document.getElementById('progressFill');
    var progressBar = document.getElementById('progressBar');
    var sections = Array.prototype.slice.call(form.querySelectorAll('.form-section'));
    var submitted = false;

    var MAX_BYTES = 2 * 1024 * 1024;           /* sama dengan max:2048 (KB) di controller */
    var ALLOWED_EXT = ['pdf', 'jpg', 'jpeg', 'png'];

    /* ---------- Aturan validasi ---------- */
    function minLength(n, label) {
        return {
            test: function (v) { return v.trim().length >= n; },
            msg: label + ' minimal ' + n + ' karakter.'
        };
    }

    var rules = {
        nik: {
            test: function (v) { return /^\d{16}$/.test(v); },
            msg: 'NIK harus terdiri dari 16 digit angka.'
        },
        kk: {
            test: function (v) { return /^\d{16}$/.test(v); },
            msg: 'Nomor KK harus terdiri dari 16 digit angka.'
        },
        nama: minLength(3, 'Nama lengkap'),
        hp: {
            test: function (v) { return /^(?:\+?62|0)8\d{8,11}$/.test(v.replace(/[\s-]/g, '')); },
            msg: 'Nomor HP tidak valid. Contoh: 08xxxxxxxxxx.'
        },
        alamat: minLength(10, 'Alamat'),
        wilayah: minLength(2, 'Kolom ini'),
        pilihan: minLength(2, 'Kolom ini'),
        alasan: minLength(10, 'Alasan pengajuan'),
        jumlah: {
            test: function (v) { var n = parseInt(v, 10); return /^\d{1,2}$/.test(v) && n >= 1 && n <= 30; },
            msg: 'Isi dengan angka 1 sampai 30.'
        }
    };

    function formatSize(bytes) {
        if (bytes < 1024 * 1024) { return Math.max(1, Math.round(bytes / 1024)) + ' KB'; }
        return (bytes / (1024 * 1024)).toFixed(1) + ' MB';
    }

    function fileError(file) {
        var ext = (file.name.split('.').pop() || '').toLowerCase();
        if (ALLOWED_EXT.indexOf(ext) === -1) { return 'Format file harus PDF, JPG, atau PNG.'; }
        if (file.size > MAX_BYTES) {
            return 'Ukuran file maksimal 2 MB (file Anda ' + formatSize(file.size) + ').';
        }
        return '';
    }

    function isFile(field) { return field.type === 'file'; }

    function isEmpty(field) {
        return isFile(field) ? !(field.files && field.files.length) : !field.value.trim();
    }

    function validate(field) {
        var optional = field.hasAttribute('data-optional');
        if (isEmpty(field)) {
            if (optional) { return ''; }
            return isFile(field) ? 'Dokumen wajib diunggah.' : 'Kolom ini wajib diisi.';
        }
        if (isFile(field)) { return fileError(field.files[0]); }
        var rule = rules[field.getAttribute('data-rule')];
        return rule && !rule.test(field.value) ? rule.msg : '';
    }

    /* ---------- Siapkan pesan error & penghitung ---------- */
    fields.forEach(function (field) {
        var group = field.closest('.form-group');
        var foot = document.createElement('div');
        foot.className = 'field-foot';

        var err = document.createElement('span');
        err.className = 'field-error';
        err.id = 'error-' + field.id;
        err.setAttribute('aria-live', 'polite');

        var count = document.createElement('span');
        count.className = 'field-count';

        foot.appendChild(err);
        foot.appendChild(count);
        group.appendChild(foot);

        field._err = err;
        field._count = count;
        field._box = isFile(field) ? field.closest('.file-drop') : field;
        field.setAttribute('aria-describedby', err.id);
    });

    function updateCount(field) {
        if (isFile(field)) { return; }
        var len = field.value.length;
        var rule = field.getAttribute('data-rule');
        if (rule === 'nik' || rule === 'kk') {
            field._count.textContent = len + '/16';
            field._count.classList.toggle('is-done', len === 16);
        } else if (field.tagName === 'TEXTAREA') {
            field._count.textContent = len + ' karakter';
        }
    }

    function render(field, message) {
        field._err.textContent = message;
        field._box.classList.toggle('is-invalid', !!message);
        field._box.classList.toggle('is-valid', !message && !isEmpty(field));
        field.setAttribute('aria-invalid', message ? 'true' : 'false');
    }

    /* ---------- Progress & penanda bagian selesai ---------- */
    function updateProgress() {
        var done = requiredFields.filter(function (f) { return validate(f) === ''; }).length;
        var percent = Math.round((done / requiredFields.length) * 100);
        progressText.textContent = done + ' dari ' + requiredFields.length + ' kolom';
        progressFill.style.width = percent + '%';
        progressFill.classList.toggle('is-complete', done === requiredFields.length);
        progressBar.setAttribute('aria-valuenow', String(percent));

        sections.forEach(function (section) {
            var badge = section.querySelector('.section-number');
            if (!badge) { return; }
            if (!badge.hasAttribute('data-number')) {
                badge.setAttribute('data-number', badge.textContent.trim());
            }
            var inSection = Array.prototype.slice.call(section.querySelectorAll('[data-rule]'));
            var mustFill = inSection.filter(function (f) { return !f.hasAttribute('data-optional'); });
            var complete = inSection.every(function (f) { return validate(f) === ''; }) &&
                mustFill.length > 0;
            badge.classList.toggle('is-complete', complete);
            badge.textContent = complete ? '\u2713' : badge.getAttribute('data-number');
        });
    }

    /* ---------- Alert dari browser ---------- */
    function showClientAlert(message) {
        clientAlertText.textContent = message;
        clientAlert.hidden = false;
        clientAlert.classList.remove('is-closing');
    }

    function hideClientAlert() { clientAlert.hidden = true; }

    Array.prototype.forEach.call(document.querySelectorAll('[data-alert-close]'), function (btn) {
        btn.addEventListener('click', function () {
            var box = btn.closest('.alert');
            if (!box) { return; }
            box.classList.add('is-closing');
            setTimeout(function () { box.hidden = true; }, 250);
        });
    });

    /* ---------- Tampilan kotak unggah file ---------- */
    function updateFileUI(field) {
        var drop = field.closest('.file-drop');
        var empty = drop.querySelector('.file-empty');
        var chosen = drop.querySelector('.file-chosen');
        var thumb = drop.querySelector('.file-thumb');
        var nameEl = drop.querySelector('.file-name');
        var sizeEl = drop.querySelector('.file-size');

        if (field._url) { URL.revokeObjectURL(field._url); field._url = null; }

        if (field.files && field.files.length) {
            var file = field.files[0];
            empty.hidden = true;
            chosen.hidden = false;
            nameEl.textContent = file.name;
            sizeEl.textContent = formatSize(file.size);

            if (/^image\//.test(file.type)) {
                field._url = URL.createObjectURL(file);
                thumb.style.backgroundImage = 'url("' + field._url + '")';
                thumb.textContent = '';
            } else {
                thumb.style.backgroundImage = '';
                thumb.textContent = (file.name.split('.').pop() || 'FILE').toUpperCase().slice(0, 4);
            }
        } else {
            empty.hidden = false;
            chosen.hidden = true;
            thumb.style.backgroundImage = '';
            thumb.textContent = '';
        }
    }

    /* ---------- Interaksi tiap kolom ---------- */
    fields.forEach(function (field) {
        var rule = field.getAttribute('data-rule');

        if (isFile(field)) {
            var drop = field.closest('.file-drop');

            field.addEventListener('change', function () {
                field.setAttribute('data-touched', '1');
                updateFileUI(field);
                render(field, validate(field));
                updateProgress();
            });

            drop.querySelector('.file-remove').addEventListener('click', function () {
                field.value = '';
                field.setAttribute('data-touched', '1');
                updateFileUI(field);
                render(field, validate(field));
                updateProgress();
            });

            ['dragenter', 'dragover'].forEach(function (evt) {
                drop.addEventListener(evt, function () { drop.classList.add('is-dragover'); });
            });
            ['dragleave', 'drop'].forEach(function (evt) {
                drop.addEventListener(evt, function () { drop.classList.remove('is-dragover'); });
            });
            return;
        }

        field.addEventListener('input', function () {
            if (rule === 'nik' || rule === 'kk') {
                field.value = field.value.replace(/\D/g, '').slice(0, 16);
            } else if (rule === 'hp') {
                field.value = field.value.replace(/[^\d+\s-]/g, '');
            } else if (rule === 'jumlah') {
                field.value = field.value.replace(/\D/g, '').slice(0, 2);
            }
            updateCount(field);
            if (field.getAttribute('data-touched') === '1' || field.classList.contains('is-invalid')) {
                render(field, validate(field));
            }
            updateProgress();
        });

        field.addEventListener('blur', function () {
            field.value = field.value.trim();
            if (field.value !== '' || field.getAttribute('data-touched') === '1') {
                field.setAttribute('data-touched', '1');
                render(field, validate(field));
            }
            updateCount(field);
            updateProgress();
        });

        updateCount(field);
    });

    /* Error dari server ditampilkan di bawah kolom yang bersangkutan */
    fields.forEach(function (field) {
        var serverMessage = field.getAttribute('data-server-error');
        if (serverMessage) {
            field.setAttribute('data-touched', '1');
            render(field, serverMessage);
        }
    });
    updateProgress();

    if (serverAlert) {
        serverAlert.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'center' });
        serverAlert.focus({ preventScroll: true });
    }

    /* ---------- Kirim formulir ---------- */
    form.addEventListener('submit', function (e) {
        if (submitted) { e.preventDefault(); return; }

        var firstInvalid = null;
        var invalidCount = 0;

        fields.forEach(function (field) {
            if (!isFile(field)) {
                field.value = field.value.trim();
                if (field.getAttribute('data-rule') === 'hp') {
                    field.value = field.value.replace(/[\s-]/g, '');
                }
            }
            field.setAttribute('data-touched', '1');
            var message = validate(field);
            render(field, message);
            if (message) {
                invalidCount++;
                if (!firstInvalid) { firstInvalid = field; }
                if (!reduceMotion) {
                    field._box.classList.remove('is-shaking');
                    void field._box.offsetWidth;
                    field._box.classList.add('is-shaking');
                }
            }
        });
        updateProgress();

        if (firstInvalid) {
            e.preventDefault();
            showClientAlert('Ada ' + invalidCount + ' kolom yang belum sesuai. Periksa kolom yang ditandai merah.');
            firstInvalid._box.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'center' });
            if (!isFile(firstInvalid)) { firstInvalid.focus({ preventScroll: true }); }
            return;
        }

        hideClientAlert();
        submitted = true;
        submitBtn.classList.add('is-loading');
        submitBtn.setAttribute('aria-busy', 'true');
        submitLabel.textContent = 'Mengirim dan mengunggah...';
    });

    /* Tombol Back browser: pulihkan tombol kirim */
    window.addEventListener('pageshow', function () {
        submitted = false;
        submitBtn.classList.remove('is-loading');
        submitBtn.removeAttribute('aria-busy');
        submitLabel.textContent = defaultLabel;
    });

    /* Konfirmasi sebelum keluar jika sudah ada isian */
    Array.prototype.forEach.call(document.querySelectorAll('[data-confirm-leave]'), function (link) {
        link.addEventListener('click', function (e) {
            var dirty = fields.some(function (f) { return !isEmpty(f); });
            if (dirty && !submitted &&
                !window.confirm('Data yang sudah Anda isi akan hilang. Tetap kembali?')) {
                e.preventDefault();
            }
        });
    });
})();
</script>

</body>
</html>