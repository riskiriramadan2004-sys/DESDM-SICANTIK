<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ajukan Layanan - Si Cantik</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        /* =========================
           HEADER
        ========================= */
        .header {
            background: linear-gradient(135deg, #0f4c81, #1976c5);
            color: white;
            padding: 24px 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .10);
        }

        .header-inner {
            max-width: 1050px;
            margin: 0 auto;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .brand-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(255,255,255,.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: bold;
        }

        .brand h1 {
            margin: 0;
            font-size: 24px;
        }

        .brand p {
            margin: 5px 0 0;
            font-size: 14px;
            opacity: .9;
        }

        /* =========================
           CONTAINER
        ========================= */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px 60px;
        }

        .back {
            display: inline-block;
            margin-bottom: 22px;
            color: #155aa8;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .back:hover {
            text-decoration: underline;
        }

        /* =========================
           SERVICE INFO
        ========================= */
        .service-info {
            background: white;
            border-radius: 16px;
            padding: 26px;
            border: 1px solid #e5eaf0;
            box-shadow: 0 5px 20px rgba(15,76,129,.07);
            margin-bottom: 24px;
        }

        .badge {
            display: inline-block;
            background: #e7f1fb;
            color: #155aa8;
            padding: 7px 14px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .service-info h2 {
            margin: 0 0 8px;
            color: #123c69;
            font-size: 27px;
        }

        .service-info p {
            margin: 6px 0;
            color: #6b7280;
            line-height: 1.6;
        }

        .service-number {
            display: inline-block;
            margin-top: 12px;
            background: #f1f5f9;
            color: #475569;
            padding: 8px 12px;
            border-radius: 7px;
            font-size: 13px;
        }

        /* =========================
           FORM CARD
        ========================= */
        .form-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            border: 1px solid #e5eaf0;
            box-shadow: 0 5px 20px rgba(15,76,129,.07);
        }

        .form-title {
            margin: 0 0 5px;
            color: #123c69;
            font-size: 23px;
        }

        .form-subtitle {
            margin: 0 0 28px;
            color: #6b7280;
            font-size: 14px;
            line-height: 1.6;
        }

        /* =========================
           ERROR
        ========================= */
        .alert {
            background: #fff1f2;
            border: 1px solid #fecdd3;
            color: #9f1239;
            border-radius: 10px;
            padding: 15px 18px;
            margin-bottom: 25px;
        }

        .alert strong {
            display: block;
            margin-bottom: 8px;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .alert li {
            margin-bottom: 4px;
        }

        /* =========================
           SECTION
        ========================= */
        .form-section {
            margin-bottom: 30px;
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 1px solid #e5e7eb;
        }

        .section-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e7f1fb;
            color: #155aa8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: bold;
        }

        .section-heading h3 {
            margin: 0;
            color: #123c69;
            font-size: 18px;
        }

        /* =========================
           FORM GRID
        ========================= */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group {
            margin-bottom: 2px;
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #374151;
        }

        .required {
            color: #dc2626;
        }

        input,
        textarea {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 12px 14px;
            font-family: inherit;
            font-size: 14px;
            color: #1f2937;
            background: white;
            transition: .2s;
        }

        input {
            height: 45px;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #1976c5;
            box-shadow: 0 0 0 3px rgba(25,118,197,.10);
        }

        input::placeholder,
        textarea::placeholder {
            color: #9ca3af;
        }

        .help-text {
            display: block;
            margin-top: 6px;
            color: #9ca3af;
            font-size: 12px;
        }

        /* =========================
           ACTION
        ========================= */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }

        .btn-secondary {
            background: #f1f5f9;
            color: #475569;
        }

        .btn-secondary:hover {
            background: #e2e8f0;
        }

        .btn-primary {
            background: #155aa8;
            color: white;
        }

        .btn-primary:hover {
            background: #0d4789;
        }

        /* =========================
           FOOTER
        ========================= */
        .footer {
            background: #123c69;
            color: white;
            text-align: center;
            padding: 22px 20px;
            font-size: 13px;
        }

        .footer p {
            margin: 4px 0;
        }

        .muted {
            opacity: .75;
        }

        /* =========================
           RESPONSIVE
        ========================= */
        @media (max-width: 700px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .form-card {
                padding: 22px;
            }

            .service-info {
                padding: 22px;
            }

            .service-info h2 {
                font-size: 23px;
            }

            .form-actions {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .btn {
                width: 100%;
            }
        }

        @media (max-width: 600px) {
            .container {
                padding: 30px 16px 45px;
            }

            .header {
                padding: 20px 16px;
            }

            .brand-icon {
                width: 42px;
                height: 42px;
                font-size: 13px;
            }

            .brand h1 {
                font-size: 21px;
            }

            .brand p {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

<header class="header">
    <div class="header-inner">

        <div class="brand">

            <div class="brand-icon">
                ESDM
            </div>

            <div>
                <h1>Si Cantik</h1>
                <p>Dinas Energi dan Sumber Daya Mineral</p>
            </div>

        </div>

    </div>
</header>

<main class="container">

    <a
        href="{{ route('layanan-online.show', $layanan->bidangLayanan) }}"
        class="back"
    >
        ← Kembali ke Daftar Layanan
    </a>

    {{-- INFORMASI LAYANAN --}}
    <section class="service-info">

        <span class="badge">
            PENGAJUAN LAYANAN
        </span>

        <h2>
            {{ $layanan->nama }}
        </h2>

        <p>
            <strong>Bidang:</strong>
            {{ $layanan->bidangLayanan->nama }}
        </p>

        @if($layanan->deskripsi)
            <p>
                {{ $layanan->deskripsi }}
            </p>
        @endif

        <div class="service-number">
            Nomor Layanan:
            <strong>{{ $layanan->nomor_layanan }}</strong>
        </div>

    </section>

    {{-- FORM --}}
    <section class="form-card">

        <h2 class="form-title">
            Form Pengajuan
        </h2>

        <p class="form-subtitle">
            Silakan lengkapi data berikut dengan benar untuk mengajukan layanan.
        </p>

        @if($errors->any())

            <div class="alert">

                <strong>
                    Periksa kembali data yang Anda masukkan:
                </strong>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>

        @endif

        <form
            action="{{ route('layanan-online.pengajuan.store', $layanan) }}"
            method="POST"
        >

            @csrf

            {{-- DATA PEMOHON --}}
            <div class="form-section">

                <div class="section-heading">

                    <div class="section-number">
                        1
                    </div>

                    <h3>
                        Data Pemohon
                    </h3>

                </div>

                <div class="form-grid">

                    <div class="form-group">

                        <label for="nik">
                            NIK <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="nik"
                            name="nik"
                            value="{{ old('nik') }}"
                            maxlength="16"
                            inputmode="numeric"
                            placeholder="Masukkan 16 digit NIK"
                            required
                        >

                        <span class="help-text">
                            NIK harus terdiri dari 16 digit.
                        </span>

                    </div>

                    <div class="form-group">

                        <label for="nama_lengkap">
                            Nama Lengkap <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="nama_lengkap"
                            name="nama_lengkap"
                            value="{{ old('nama_lengkap') }}"
                            placeholder="Masukkan nama lengkap"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label for="nomor_hp">
                            Nomor HP <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="nomor_hp"
                            name="nomor_hp"
                            value="{{ old('nomor_hp') }}"
                            inputmode="tel"
                            placeholder="Contoh: 08xxxxxxxxxx"
                            required
                        >

                    </div>

                </div>

            </div>

            {{-- ALAMAT --}}
            <div class="form-section">

                <div class="section-heading">

                    <div class="section-number">
                        2
                    </div>

                    <h3>
                        Alamat Pemohon
                    </h3>

                </div>

                <div class="form-grid">

                    <div class="form-group full">

                        <label for="alamat">
                            Alamat Lengkap <span class="required">*</span>
                        </label>

                        <textarea
                            id="alamat"
                            name="alamat"
                            placeholder="Masukkan alamat lengkap"
                            required
                        >{{ old('alamat') }}</textarea>

                    </div>

                    <div class="form-group">

                        <label for="desa_kelurahan">
                            Desa/Kelurahan <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="desa_kelurahan"
                            name="desa_kelurahan"
                            value="{{ old('desa_kelurahan') }}"
                            placeholder="Desa/Kelurahan"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label for="kecamatan">
                            Kecamatan <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="kecamatan"
                            name="kecamatan"
                            value="{{ old('kecamatan') }}"
                            placeholder="Kecamatan"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label for="kabupaten_kota">
                            Kabupaten/Kota <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="kabupaten_kota"
                            name="kabupaten_kota"
                            value="{{ old('kabupaten_kota') }}"
                            placeholder="Kabupaten/Kota"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label for="provinsi">
                            Provinsi <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="provinsi"
                            name="provinsi"
                            value="{{ old('provinsi') }}"
                            placeholder="Provinsi"
                            required
                        >

                    </div>

                </div>

            </div>

            {{-- KEPERLUAN --}}
            <div class="form-section">

                <div class="section-heading">

                    <div class="section-number">
                        3
                    </div>

                    <h3>
                        Keperluan Layanan
                    </h3>

                </div>

                <div class="form-group">

                    <label for="keperluan">
                        Keperluan <span class="required">*</span>
                    </label>

                    <textarea
                        id="keperluan"
                        name="keperluan"
                        rows="6"
                        placeholder="Jelaskan keperluan atau tujuan pengajuan layanan Anda"
                        required
                    >{{ old('keperluan') }}</textarea>

                    <span class="help-text">
                        Jelaskan keperluan dengan jelas agar dapat diproses dengan baik.
                    </span>

                </div>

            </div>

            {{-- BUTTON --}}
            <div class="form-actions">

                <a
                    href="{{ route('layanan-online.show', $layanan->bidangLayanan) }}"
                    class="btn btn-secondary"
                >
                    ← Kembali
                </a>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Kirim Pengajuan →
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

</body>
</html>