```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#292F36">

    <title>Hasil Status Pengajuan | DESDM SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
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
            --muted: #727B83;
            --border: #E4E6E5;
            --success: #18794E;
            --success-bg: #EAF7EF;
            --warning: #986300;
            --warning-bg: #FFF5D9;
            --info: #176B87;
            --info-bg: #EAF6FA;
            --danger: #B42332;
            --danger-bg: #FFF0F0;
            --radius: 18px;
            --shadow: 0 18px 55px rgba(41, 47, 54, .09);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: var(--off-white);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        a {
            color: inherit;
        }

        .topbar {
            background: var(--charcoal);
            color: var(--white);
            padding: 17px 24px;
        }

        .topbar-inner {
            width: min(1100px, 100%);
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
            min-width: 0;
        }

        .brand-mark {
            width: 44px;
            height: 44px;
            flex: 0 0 44px;
            display: grid;
            place-items: center;
            background: var(--copper);
            border-radius: 13px;
            color: white;
            font-size: 20px;
        }

        .brand-name {
            font-weight: 800;
            font-size: 16px;
            letter-spacing: .3px;
            line-height: 1.3;
        }

        .brand-subtitle {
            margin-top: 3px;
            color: #D2D6D9;
            font-size: 11px;
            letter-spacing: .7px;
            text-transform: uppercase;
        }

        .topbar-label {
            color: #E7E9EB;
            font-size: 12px;
            text-align: right;
        }

        .hero {
            background: var(--charcoal);
            color: white;
            padding: 42px 24px 86px;
            position: relative;
            overflow: hidden;
        }

        .hero::before,
        .hero::after {
            content: "";
            position: absolute;
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 50%;
            pointer-events: none;
        }

        .hero::before {
            width: 340px;
            height: 340px;
            right: -110px;
            top: -190px;
        }

        .hero::after {
            width: 240px;
            height: 240px;
            right: -50px;
            top: -140px;
        }

        .hero-inner {
            width: min(850px, 100%);
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #FFD5B8;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(29px, 5vw, 43px);
            line-height: 1.2;
            margin: 14px 0 12px;
            font-weight: 700;
        }

        .hero p {
            max-width: 590px;
            margin: 0;
            color: #D8DDE0;
            font-size: 15px;
        }

        .page-wrap {
            width: min(850px, calc(100% - 32px));
            margin: -49px auto 0;
            padding-bottom: 45px;
            position: relative;
            z-index: 2;
        }

        .result-card {
            background: var(--white);
            border: 1px solid rgba(41,47,54,.06);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .card-top {
            padding: 27px 32px 24px;
            border-bottom: 1px solid var(--border);
        }

        .result-heading {
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }

        .result-icon {
            width: 54px;
            height: 54px;
            flex: 0 0 54px;
            display: grid;
            place-items: center;
            border-radius: 16px;
            font-size: 22px;
        }

        .result-icon.success {
            background: var(--success-bg);
            color: var(--success);
        }

        .result-icon.warning {
            background: var(--warning-bg);
            color: var(--warning);
        }

        .result-icon.danger {
            background: var(--danger-bg);
            color: var(--danger);
        }

        .result-heading h2 {
            margin: 1px 0 5px;
            color: var(--charcoal);
            font-size: clamp(19px, 3vw, 24px);
            line-height: 1.4;
            font-weight: 800;
        }

        .result-heading p {
            color: var(--muted);
            margin: 0;
            font-size: 13px;
        }

        .card-content {
            padding: 30px 32px;
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 20px;
            color: var(--charcoal);
            font-size: 15px;
            font-weight: 800;
        }

        .section-heading i {
            color: var(--copper);
        }

        .number-panel {
            background: linear-gradient(120deg, #FFF7F0, #FFFDFB);
            border: 1px solid #F1D9C7;
            border-radius: 15px;
            padding: 20px 22px;
            margin-bottom: 30px;
        }

        .field-label {
            display: block;
            margin-bottom: 6px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .application-number {
            color: var(--charcoal);
            font-size: clamp(17px, 3vw, 23px);
            font-weight: 800;
            letter-spacing: .4px;
            overflow-wrap: anywhere;
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 17px;
        }

        .detail-item {
            min-width: 0;
            padding: 15px 16px;
            background: #FAFAF9;
            border: 1px solid #EEEEEB;
            border-radius: 12px;
        }

        .detail-value {
            color: var(--charcoal);
            font-weight: 700;
            overflow-wrap: anywhere;
            white-space: pre-line;
        }

        .status-section {
            margin-top: 30px;
            padding-top: 26px;
            border-top: 1px solid var(--border);
        }

        .status-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
        }

        .status-label {
            color: var(--charcoal);
            font-weight: 800;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            max-width: 100%;
            padding: 9px 14px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 800;
            overflow-wrap: anywhere;
        }

        .status-pending {
            background: var(--warning-bg);
            color: var(--warning);
        }

        .status-verified {
            background: var(--info-bg);
            color: var(--info);
        }

        .status-approved {
            background: var(--success-bg);
            color: var(--success);
        }

        .status-rejected {
            background: var(--danger-bg);
            color: var(--danger);
        }

        .status-default {
            background: #EEF0F2;
            color: #505963;
        }

        .notice {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-top: 22px;
            padding: 17px 19px;
            border-radius: 12px;
            font-size: 13px;
        }

        .notice i {
            margin-top: 4px;
            flex: 0 0 auto;
        }

        .notice strong {
            display: block;
            margin-bottom: 3px;
        }

        .notice p {
            margin: 0;
            overflow-wrap: anywhere;
        }

        .notice-warning {
            background: var(--warning-bg);
            color: #745000;
            border: 1px solid #F1E1AF;
        }

        .notice-info {
            background: var(--info-bg);
            color: #145A70;
            border: 1px solid #D3EAF0;
        }

        .notice-success {
            background: var(--success-bg);
            color: #176642;
            border: 1px solid #CDEBD9;
        }

        .notice-danger {
            background: var(--danger-bg);
            color: #92212C;
            border: 1px solid #F3D3D5;
        }

        .note-box {
            margin-top: 22px;
            padding: 18px 20px;
            background: #F8F9FA;
            border: 1px solid var(--border);
            border-left: 4px solid var(--copper);
            border-radius: 10px;
        }

        .note-box.is-rejected {
            background: var(--danger-bg);
            border-color: #F3D3D5;
            border-left-color: var(--danger);
        }

        .note-title {
            color: var(--charcoal);
            font-weight: 800;
            margin-bottom: 6px;
        }

        .note-box.is-rejected .note-title {
            color: var(--danger);
        }

        .note-text {
            white-space: pre-line;
            overflow-wrap: anywhere;
        }

        .not-found {
            text-align: center;
            padding: 14px 0 8px;
        }

        .not-found-icon {
            width: 76px;
            height: 76px;
            display: grid;
            place-items: center;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: var(--danger-bg);
            color: var(--danger);
            font-size: 28px;
        }

        .not-found h2 {
            margin: 0 0 10px;
            color: var(--charcoal);
            font-size: 24px;
            font-weight: 800;
        }

        .not-found p {
            color: var(--muted);
            margin: 0 auto;
            max-width: 450px;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid var(--border);
        }

        .btn-primary-custom,
        .btn-secondary-custom {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 9px;
            min-height: 47px;
            padding: 12px 20px;
            border-radius: 10px;
            font: inherit;
            font-size: 13px;
            font-weight: 800;
            text-decoration: none;
            transition: transform .2s ease, background .2s ease, box-shadow .2s ease;
        }

        .btn-primary-custom {
            background: var(--copper);
            color: white;
            border: 1px solid var(--copper);
            box-shadow: 0 5px 14px rgba(198,107,50,.16);
        }

        .btn-primary-custom:hover {
            background: var(--copper-dark);
            border-color: var(--copper-dark);
            color: white;
            transform: translateY(-2px);
        }

        .btn-secondary-custom {
            background: white;
            color: var(--charcoal);
            border: 1px solid #D9DDDF;
        }

        .btn-secondary-custom:hover {
            background: #F3F4F4;
            color: var(--charcoal);
            transform: translateY(-2px);
        }

        .footer {
            text-align: center;
            color: var(--muted);
            font-size: 11px;
            padding: 0 16px 26px;
        }

        .footer strong {
            color: var(--charcoal);
        }

        @media (max-width: 600px) {
            .topbar {
                padding: 14px 17px;
            }

            .brand-mark {
                width: 39px;
                height: 39px;
                flex-basis: 39px;
            }

            .brand-name {
                font-size: 14px;
            }

            .brand-subtitle {
                font-size: 9px;
            }

            .topbar-label {
                max-width: 100px;
                font-size: 10px;
            }

            .hero {
                padding: 32px 20px 75px;
            }

            .hero p {
                font-size: 13px;
            }

            .page-wrap {
                width: calc(100% - 24px);
                margin-top: -43px;
            }

            .card-top {
                padding: 22px 19px;
            }

            .card-content {
                padding: 23px 19px;
            }

            .result-icon {
                width: 46px;
                height: 46px;
                flex-basis: 46px;
                border-radius: 13px;
                font-size: 19px;
            }

            .details-grid {
                grid-template-columns: minmax(0, 1fr);
                gap: 12px;
            }

            .detail-item {
                padding: 13px 14px;
            }

            .number-panel {
                padding: 17px;
            }

            .status-row {
                align-items: flex-start;
                flex-direction: column;
            }

            .actions {
                flex-direction: column;
            }

            .btn-primary-custom,
            .btn-secondary-custom {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>
    <header class="topbar">
        <div class="topbar-inner">
            <div class="brand">
                <div class="brand-mark" aria-hidden="true">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <div>
                    <div class="brand-name">DESDM SICANTIK</div>
                    <div class="brand-subtitle">Layanan Digital ESDM</div>
                </div>
            </div>

            <div class="topbar-label">
                <i class="fa-solid fa-shield-halved"></i>
                Informasi Pengajuan
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-inner">
            <div class="eyebrow">
                <i class="fa-solid fa-file-circle-check"></i>
                Pelacakan Pengajuan
            </div>
            <h1>Hasil Status Pengajuan</h1>
            <p>
                Periksa informasi dan perkembangan pengajuan Anda melalui
                layanan digital Dinas ESDM Provinsi Sulawesi Tengah.
            </p>
        </div>
    </section>

    <main class="page-wrap">
        <section class="result-card">

            @if(isset($pengajuanLayanan) && $pengajuanLayanan)

                @php
                    $statusLayanan = $pengajuanLayanan->status;
                    $kelasStatusLayanan = match($statusLayanan) {
                        'Menunggu Verifikasi' => 'status-pending',
                        'Diverifikasi' => 'status-verified',
                        'Disetujui' => 'status-approved',
                        'Ditolak' => 'status-rejected',
                        default => 'status-default',
                    };

                    $ikonStatusLayanan = match($statusLayanan) {
                        'Menunggu Verifikasi' => 'fa-clock',
                        'Diverifikasi' => 'fa-magnifying-glass',
                        'Disetujui' => 'fa-circle-check',
                        'Ditolak' => 'fa-circle-xmark',
                        default => 'fa-circle-info',
                    };

                    $jenisInfoLayanan = match($statusLayanan) {
                        'Menunggu Verifikasi' => 'notice-warning',
                        'Diverifikasi' => 'notice-info',
                        'Disetujui' => 'notice-success',
                        'Ditolak' => 'notice-danger',
                        default => 'notice-info',
                    };
                @endphp

                <div class="card-top">
                    <div class="result-heading">
                        <div class="result-icon success">
                            <i class="fa-solid fa-file-circle-check"></i>
                        </div>
                        <div>
                            <h2>Status Layanan Online</h2>
                            <p>Pengajuan ditemukan. Berikut rincian layanan Anda.</p>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <div class="number-panel">
                        <span class="field-label">Nomor Pengajuan</span>
                        <div class="application-number">
                            {{ $pengajuanLayanan->nomor_pengajuan }}
                        </div>
                    </div>

                    <h3 class="section-heading">
                        <i class="fa-solid fa-user"></i>
                        Informasi Pemohon
                    </h3>

                    <div class="details-grid">
                        <div class="detail-item">
                            <span class="field-label">Nama Pemohon</span>
                            <div class="detail-value">{{ $pengajuanLayanan->nama_lengkap }}</div>
                        </div>

                        <div class="detail-item">
                            <span class="field-label">NIK</span>
                            <div class="detail-value">{{ $pengajuanLayanan->nik }}</div>
                        </div>

                        <div class="detail-item">
                            <span class="field-label">Nomor HP</span>
                            <div class="detail-value">{{ $pengajuanLayanan->nomor_hp }}</div>
                        </div>

                        <div class="detail-item">
                            <span class="field-label">Bidang Layanan</span>
                            <div class="detail-value">
                                {{ optional(optional($pengajuanLayanan->layanan)->bidangLayanan)->nama ?? '-' }}
                            </div>
                        </div>

                        <div class="detail-item">
                            <span class="field-label">Nama Layanan</span>
                            <div class="detail-value">
                                {{ optional($pengajuanLayanan->layanan)->nama ?? '-' }}
                            </div>
                        </div>

                        <div class="detail-item">
                            <span class="field-label">Keperluan</span>
                            <div class="detail-value">{{ $pengajuanLayanan->keperluan ?: '-' }}</div>
                        </div>
                    </div>

                    <div class="status-section">
                        <div class="status-row">
                            <span class="status-label">Status Pengajuan</span>
                            <span class="status-badge {{ $kelasStatusLayanan }}">
                                <i class="fa-solid {{ $ikonStatusLayanan }}"></i>
                                {{ $statusLayanan }}
                            </span>
                        </div>
                    </div>

                    @if($pengajuanLayanan->catatan_petugas)
                        <div class="note-box {{ $statusLayanan === 'Ditolak' ? 'is-rejected' : '' }}">
                            <div class="note-title">
                                <i class="fa-solid fa-comment-dots"></i>
                                {{ $statusLayanan === 'Ditolak' ? 'Alasan Pengajuan Ditolak' : 'Catatan Pengelola' }}
                            </div>
                            <div class="note-text">{{ $pengajuanLayanan->catatan_petugas }}</div>
                        </div>
                    @endif

                    <div class="notice {{ $jenisInfoLayanan }}">
                        <i class="fa-solid {{ $ikonStatusLayanan }}"></i>
                        <div>
                            <strong>Informasi Pengajuan</strong>
                            @if($statusLayanan === 'Menunggu Verifikasi')
                                Pengajuan layanan Anda sedang menunggu proses verifikasi oleh pengelola.
                            @elseif($statusLayanan === 'Diverifikasi')
                                Pengajuan layanan Anda telah diverifikasi oleh pengelola dan sedang dalam proses selanjutnya.
                            @elseif($statusLayanan === 'Disetujui')
                                Selamat! Pengajuan layanan Anda telah disetujui oleh pengelola.
                            @elseif($statusLayanan === 'Ditolak')
                                Pengajuan layanan Anda belum dapat disetujui. Silakan perhatikan alasan atau catatan pengelola di atas.
                            @else
                                Status pengajuan Anda saat ini: {{ $statusLayanan }}.
                            @endif
                        </div>
                    </div>
                </div>

            @elseif(isset($pengajuan) && $pengajuan)

                @php
                    $statusBantuan = $pengajuan->status;
                    $kelasStatusBantuan = match($statusBantuan) {
                        'Menunggu Verifikasi' => 'status-pending',
                        'Diverifikasi' => 'status-verified',
                        'Disetujui' => 'status-approved',
                        'Ditolak' => 'status-rejected',
                        default => 'status-default',
                    };

                    $ikonStatusBantuan = match($statusBantuan) {
                        'Menunggu Verifikasi' => 'fa-clock',
                        'Diverifikasi' => 'fa-magnifying-glass',
                        'Disetujui' => 'fa-circle-check',
                        'Ditolak' => 'fa-circle-xmark',
                        default => 'fa-circle-info',
                    };

                    $jenisInfoBantuan = match($statusBantuan) {
                        'Menunggu Verifikasi' => 'notice-warning',
                        'Diverifikasi' => 'notice-info',
                        'Disetujui' => 'notice-success',
                        'Ditolak' => 'notice-danger',
                        default => 'notice-info',
                    };
                @endphp

                <div class="card-top">
                    <div class="result-heading">
                        <div class="result-icon success">
                            <i class="fa-solid fa-house-circle-check"></i>
                        </div>
                        <div>
                            <h2>Status Bantuan Listrik</h2>
                            <p>Pengajuan ditemukan. Berikut rincian bantuan Anda.</p>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <div class="number-panel">
                        <span class="field-label">Nomor Pengajuan</span>
                        <div class="application-number">
                            {{ $pengajuan->nomor_pengajuan }}
                        </div>
                    </div>

                    <h3 class="section-heading">
                        <i class="fa-solid fa-user"></i>
                        Informasi Pemohon
                    </h3>

                    <div class="details-grid">
                        <div class="detail-item">
                            <span class="field-label">Nama Pemohon</span>
                            <div class="detail-value">{{ $pengajuan->nama_lengkap }}</div>
                        </div>

                        <div class="detail-item">
                            <span class="field-label">NIK</span>
                            <div class="detail-value">{{ $pengajuan->nik }}</div>
                        </div>

                        <div class="detail-item">
                            <span class="field-label">Nomor HP</span>
                            <div class="detail-value">{{ $pengajuan->nomor_hp }}</div>
                        </div>
                    </div>

                    <div class="status-section">
                        <div class="status-row">
                            <span class="status-label">Status Pengajuan</span>
                            <span class="status-badge {{ $kelasStatusBantuan }}">
                                <i class="fa-solid {{ $ikonStatusBantuan }}"></i>
                                {{ $statusBantuan }}
                            </span>
                        </div>
                    </div>

                    @if($pengajuan->catatan_petugas)
                        <div class="note-box {{ $statusBantuan === 'Ditolak' ? 'is-rejected' : '' }}">
                            <div class="note-title">
                                <i class="fa-solid fa-comment-dots"></i>
                                {{ $statusBantuan === 'Ditolak' ? 'Alasan Pengajuan Ditolak' : 'Catatan Pengelola' }}
                            </div>
                            <div class="note-text">{{ $pengajuan->catatan_petugas }}</div>
                        </div>
                    @endif

                    <div class="notice {{ $jenisInfoBantuan }}">
                        <i class="fa-solid {{ $ikonStatusBantuan }}"></i>
                        <div>
                            <strong>Informasi Pengajuan</strong>
                            @if($statusBantuan === 'Menunggu Verifikasi')
                                Pengajuan Anda sedang menunggu proses verifikasi oleh pengelola.
                            @elseif($statusBantuan === 'Diverifikasi')
                                Pengajuan Anda telah diverifikasi oleh pengelola dan sedang dalam proses selanjutnya.
                            @elseif($statusBantuan === 'Disetujui')
                                Selamat! Pengajuan bantuan listrik Anda telah disetujui oleh pengelola.
                            @elseif($statusBantuan === 'Ditolak')
                                Pengajuan bantuan listrik Anda belum dapat disetujui. Silakan perhatikan alasan atau catatan pengelola di atas.
                            @else
                                Status pengajuan Anda saat ini: {{ $statusBantuan }}.
                            @endif
                        </div>
                    </div>
                </div>

            @else

                <div class="card-top">
                    <div class="result-heading">
                        <div class="result-icon danger">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div>
                            <h2>Data Tidak Ditemukan</h2>
                            <p>Nomor pengajuan belum cocok dengan data yang tersedia.</p>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <div class="not-found">
                        <div class="not-found-icon">
                            <i class="fa-solid fa-file-circle-question"></i>
                        </div>
                        <h2>Pengajuan Tidak Ditemukan</h2>
                        <p>
                            Nomor pengajuan yang Anda masukkan tidak ditemukan.
                            Silakan periksa kembali nomor pengajuan dan coba lagi.
                        </p>
                    </div>
                </div>

            @endif

            <div class="card-content" style="padding-top: 0;">
                <div class="actions">
                    <a href="{{ route('pengajuan-bantuan.cek-status') }}"
                       class="btn-primary-custom">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Cek Nomor Lain
                    </a>

                    <a href="{{ url('/') }}" class="btn-secondary-custom">
                        <i class="fa-solid fa-house"></i>
                        Kembali ke Beranda
                    </a>
                </div>
            </div>

        </section>
    </main>

    <footer class="footer">
        <strong>DESDM SICANTIK</strong>
        <span> &middot; Layanan Digital Dinas ESDM Provinsi Sulawesi Tengah</span>
    </footer>
</body>
</html>
```