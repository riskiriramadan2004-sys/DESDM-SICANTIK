<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengajuan | SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --navy: #202a35;
            --navy-light: #344454;
            --copper: #c77b4a;
            --cream: #f5f3ef;
            --white: #fff;
            --text: #29333d;
            --muted: #87909a;
            --border: #e8e9e9;
            --green: #25845b;
            --yellow: #b47a21;
            --red: #bd514b;
            --blue: #426fa9;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--cream);
            color: var(--text);
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        a { text-decoration: none; }

        .sidebar {
            position: fixed;
            inset: 0 auto 0 0;
            width: 255px;
            background: var(--navy);
            color: white;
            padding: 27px 18px;
            display: flex;
            flex-direction: column;
            z-index: 20;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 10px 28px;
            border-bottom: 1px solid rgba(255,255,255,.12);
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            border-radius: 11px;
            background: var(--copper);
            display: grid;
            place-items: center;
            font-size: 17px;
            font-weight: 800;
        }

        .brand-name {
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .brand-subtitle {
            display: block;
            color: #b7c0c8;
            font-size: 9px;
            letter-spacing: 1.2px;
            margin-top: 4px;
        }

        .menu-label {
            color: #8795a3;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.5px;
            padding: 28px 12px 12px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px 14px;
            color: #c4cbd2;
            font-size: 12px;
            font-weight: 600;
            border-radius: 9px;
            margin-bottom: 5px;
            transition: .2s;
        }

        .menu-link svg {
            width: 19px;
            height: 19px;
            flex-shrink: 0;
        }

        .menu-link:hover,
        .menu-link.active {
            background: rgba(199,123,74,.17);
            color: white;
        }

        .menu-link.active {
            border-left: 3px solid var(--copper);
            padding-left: 11px;
        }

        .sidebar-bottom {
            margin-top: auto;
            border-top: 1px solid rgba(255,255,255,.12);
            padding-top: 18px;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 10px;
            margin-bottom: 12px;
        }

        .profile-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #445466;
            display: grid;
            place-items: center;
        }

        .profile-icon svg { width: 18px; height: 18px; }

        .profile-name { font-size: 11px; font-weight: 700; }
        .profile-role { font-size: 9px; color: #aeb8c1; margin-top: 3px; }

        .logout-link {
            width: 100%;
            border: 1px solid rgba(255,255,255,.15);
            background: transparent;
            color: #d5dce2;
            padding: 11px;
            border-radius: 8px;
            font-family: inherit;
            font-size: 11px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 9px;
        }

        .logout-link:hover { background: rgba(255,255,255,.1); }
        .logout-link svg { width: 16px; height: 16px; }

        .main {
            margin-left: 255px;
            min-height: 100vh;
        }

        .topbar {
            height: 68px;
            background: white;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 38px;
        }

        .breadcrumb { color: var(--muted); font-size: 11px; }
        .breadcrumb strong { color: var(--text); }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 11px;
            font-weight: 600;
        }

        .online-dot {
            width: 8px;
            height: 8px;
            background: #3ba879;
            border-radius: 50%;
        }

        .content {
            max-width: 1450px;
            padding: 34px 38px 55px;
            margin: auto;
        }

        .page-heading {
            margin-bottom: 25px;
        }

        .eyebrow {
            color: var(--copper);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.8px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 26px;
            margin: 0;
            font-weight: 800;
            color: var(--navy);
        }

        .heading-description {
            font-size: 12px;
            color: var(--muted);
            margin: 9px 0 0;
            line-height: 1.7;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--navy);
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 20px;
            transition: .2s;
        }

        .back-button:hover { color: var(--copper); }
        .back-button svg { width: 16px; height: 16px; }

        .alert {
            padding: 14px 17px;
            border-radius: 9px;
            margin-bottom: 18px;
            font-size: 12px;
            font-weight: 600;
        }

        .success { background: #e5f3e8; color: #28623a; border: 1px solid #c7e5ce; }
        .error { background: #fbe8e6; color: #9d3732; border: 1px solid #f1ceca; }

        .application-banner {
            background: var(--navy);
            border-radius: 13px;
            color: white;
            padding: 24px 27px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 21px;
            position: relative;
            overflow: hidden;
        }

        .application-banner::after {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 50%;
            right: -35px;
            top: -85px;
            box-shadow: 0 0 0 22px rgba(255,255,255,.025), 0 0 0 45px rgba(255,255,255,.02);
        }

        .banner-label {
            color: #d6a27f;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1.5px;
            margin-bottom: 8px;
        }

        .application-number {
            font-size: 20px;
            font-weight: 800;
            word-break: break-word;
        }

        .status {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border-radius: 30px;
            padding: 8px 13px;
            font-size: 10px;
            font-weight: 800;
            white-space: nowrap;
        }

        .status::before {
            content: "";
            width: 6px;
            height: 6px;
            background: currentColor;
            border-radius: 50%;
        }

        .menunggu { background: #fff2d9; color: var(--yellow); }
        .diverifikasi { background: #e8f0fc; color: var(--blue); }
        .disetujui { background: #e5f4eb; color: var(--green); }
        .ditolak { background: #fbe9e7; color: var(--red); }

        .panel {
            background: white;
            border: 1px solid var(--border);
            border-radius: 13px;
            margin-bottom: 21px;
            overflow: hidden;
        }

        .panel-header {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 21px 24px;
            border-bottom: 1px solid var(--border);
        }

        .panel-icon {
            width: 39px;
            height: 39px;
            border-radius: 10px;
            display: grid;
            place-items: center;
            background: #f8eee7;
            color: var(--copper);
            flex-shrink: 0;
        }

        .panel-icon svg { width: 20px; height: 20px; }

        .panel-title {
            font-size: 14px;
            font-weight: 800;
            color: var(--navy);
        }

        .panel-subtitle {
            color: var(--muted);
            font-size: 10px;
            margin-top: 5px;
        }

        .panel-body { padding: 8px 24px 22px; }

        .detail-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0 28px;
        }

        .detail-item {
            padding: 16px 0;
            border-bottom: 1px solid #eff0ee;
            min-width: 0;
        }

        .detail-item.full { grid-column: 1 / -1; }

        .detail-label {
            color: var(--muted);
            font-size: 10px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .detail-value {
            color: var(--text);
            font-size: 12px;
            font-weight: 600;
            line-height: 1.7;
            overflow-wrap: anywhere;
            white-space: pre-line;
        }

        .detail-value.muted {
            color: var(--muted);
            font-weight: 400;
        }

        .type-tag {
            display: inline-block;
            background: #f5f1eb;
            color: #8a613f;
            border-radius: 5px;
            padding: 5px 9px;
            font-size: 10px;
            font-weight: 800;
            text-transform: capitalize;
        }

        .note-box {
            background: #faf7f3;
            border-left: 3px solid var(--copper);
            border-radius: 7px;
            padding: 14px 16px;
            font-size: 12px;
            line-height: 1.7;
            white-space: pre-line;
        }

        .form-body { padding: 24px; }

        .form-group { margin-bottom: 21px; }

        .form-group label {
            display: block;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 9px;
            color: var(--navy);
        }

        .form-control {
            width: 100%;
            min-height: 44px;
            padding: 12px 14px;
            border: 1px solid #dcdedc;
            border-radius: 8px;
            background: white;
            color: var(--text);
            font-family: inherit;
            font-size: 12px;
            outline: none;
            transition: .2s;
        }

        .form-control:focus {
            border-color: var(--copper);
            box-shadow: 0 0 0 3px rgba(199,123,74,.11);
        }

        textarea.form-control {
            min-height: 125px;
            resize: vertical;
            line-height: 1.7;
        }

        .form-hint {
            color: var(--muted);
            font-size: 10px;
            margin-top: 7px;
            line-height: 1.6;
        }

        .form-actions {
            display: flex;
            align-items: center;
            gap: 11px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 17px;
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-size: 11px;
            font-weight: 800;
            cursor: pointer;
            transition: .2s;
        }

        .btn svg { width: 16px; height: 16px; }

        .btn-primary { background: var(--copper); color: white; }
        .btn-primary:hover { background: #a95425; }

        .btn-secondary { background: #eff0ee; color: var(--navy); }
        .btn-secondary:hover { background: #e2e4e1; }

        .footer-note {
            margin-top: 19px;
            color: var(--muted);
            font-size: 10px;
            line-height: 1.7;
        }

        @media(max-width: 1050px) {
            .sidebar { width: 220px; }
            .main { margin-left: 220px; }
            .content { padding: 28px 24px; }
            .topbar { padding: 0 24px; }
        }

        @media(max-width: 700px) {
            .sidebar {
                position: relative;
                width: 100%;
                padding: 14px 16px;
            }

            .brand { padding: 0 4px 13px; }
            .menu-label { padding: 13px 5px 7px; }
            .menu-link { padding: 10px; margin-bottom: 0; }
            .sidebar-bottom { margin-top: 10px; padding-top: 10px; }
            .admin-profile { display: none; }
            .logout-link { padding: 9px; }

            .main { margin-left: 0; }
            .topbar { height: 52px; padding: 0 17px; }
            .content { padding: 24px 15px 40px; }
            h1 { font-size: 22px; }
            .application-banner { padding: 20px; }
            .application-number { font-size: 16px; }
            .panel-header { padding: 17px; }
            .panel-body, .form-body { padding: 12px 17px 19px; }
            .detail-grid { grid-template-columns: 1fr; }
            .detail-item.full { grid-column: auto; }
            .form-actions .btn { width: 100%; }
        }
    </style>
</head>

<body>

@php
    $statusClass = match ($pengajuanLayanan->status) {
        'Diverifikasi' => 'diverifikasi',
        'Disetujui' => 'disetujui',
        'Ditolak' => 'ditolak',
        default => 'menunggu',
    };

    $jenisPemohon = $pengajuanLayanan->jenis_pemohon ?? 'perorangan';
@endphp

<aside class="sidebar">
    <div class="brand">
        <div class="brand-mark">S</div>
        <div>
            <div class="brand-name">SICANTIK</div>
            <span class="brand-subtitle">SISTEM INFORMASI ESDM</span>
        </div>
    </div>

    <div class="menu-label">MENU ADMINISTRASI</div>

    <a href="{{ route('admin.pengajuan-layanan.index') }}" class="menu-link active">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <rect x="3" y="4" width="18" height="16" rx="2"/>
            <path d="M8 9h8M8 13h8M8 17h4"/>
        </svg>
        Pengajuan Layanan
    </a>

    <a href="{{ url('/') }}" class="menu-link">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1h-6v-7h-4v7H4a1 1 0 0 1-1-1z"/>
        </svg>
        Kembali ke Beranda
    </a>

    <div class="sidebar-bottom">
        <div class="admin-profile">
            <div class="profile-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M4 21a8 8 0 0 1 16 0"/>
                </svg>
            </div>
            <div>
                <div class="profile-name">Administrator</div>
                <div class="profile-role">Pengelola Layanan Online</div>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="logout-link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M10 17l5-5-5-5M15 12H3"/>
                    <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7"/>
                </svg>
                Keluar dari Sistem
            </button>
        </form>
    </div>
</aside>

<main class="main">

    <div class="topbar">
        <div class="breadcrumb">
            Administrasi / Pengajuan Layanan / <strong>Detail Pengajuan</strong>
        </div>
        <div class="topbar-right">
            <span class="online-dot"></span>
            Sistem Aktif
        </div>
    </div>

    <div class="content">

        <a href="{{ route('admin.pengajuan-layanan.index') }}" class="back-button">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="m15 18-6-6 6-6"/>
                <path d="M9 12h12"/>
            </svg>
            Kembali ke Daftar Pengajuan
        </a>

        <div class="page-heading">
            <div class="eyebrow">SISTEM ADMINISTRASI ESDM</div>
            <h1>Detail Pengajuan Layanan</h1>
            <p class="heading-description">
                Periksa informasi pemohon dan tindak lanjuti pengajuan layanan.
            </p>
        </div>

        @if(session('success'))
            <div class="alert success">
                ✓ {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert error">
                {{ $errors->first() }}
            </div>
        @endif

        <section class="application-banner">
            <div>
                <div class="banner-label">NOMOR PENGAJUAN</div>
                <div class="application-number">
                    {{ $pengajuanLayanan->nomor_pengajuan }}
                </div>
            </div>

            <span class="status {{ $statusClass }}">
                {{ $pengajuanLayanan->status ?: 'Menunggu Verifikasi' }}
            </span>
        </section>

        <section class="panel">
            <div class="panel-header">
                <div class="panel-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M4 5h16v14H4z"/>
                        <path d="M8 9h8M8 13h5"/>
                    </svg>
                </div>
                <div>
                    <div class="panel-title">Informasi Layanan</div>
                    <div class="panel-subtitle">Rincian layanan yang diajukan pemohon.</div>
                </div>
            </div>

            <div class="panel-body">
                <div class="detail-grid">
                    <div class="detail-item">
                        <div class="detail-label">Nama Layanan</div>
                        <div class="detail-value">
                            {{ $pengajuanLayanan->layanan->nama ?? '-' }}
                        </div>
                    </div>

                    <div class="detail-item">
                        <div class="detail-label">Bidang Layanan</div>
                        <div class="detail-value">
                            {{ $pengajuanLayanan->layanan->bidangLayanan->nama ?? '-' }}
                        </div>
                    </div>

                    <div class="detail-item full">
                        <div class="detail-label">Keperluan Pengajuan</div>
                        <div class="detail-value">
                            {{ $pengajuanLayanan->keperluan ?: '-' }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="panel">
            <div class="panel-header">
                <div class="panel-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="8" r="4"/>
                        <path d="M4 21a8 8 0 0 1 16 0"/>
                    </svg>
                </div>
                <div>
                    <div class="panel-title">Informasi Pemohon</div>
                    <div class="panel-subtitle">Identitas dan kontak pemohon layanan.</div>
                </div>
            </div>

            <div class="panel-body">
                <div class="detail-grid">

                    <div class="detail-item">
                        <div class="detail-label">Jenis Pemohon</div>
                        <div class="detail-value">
                            <span class="type-tag">
                                {{ $jenisPemohon }}
                            </span>
                        </div>
                    </div>

                    <div class="detail-item">
                        <div class="detail-label">Nama Lengkap</div>
                        <div class="detail-value">
                            {{ $pengajuanLayanan->nama_lengkap ?: '-' }}
                        </div>
                    </div>

                    <div class="detail-item">
                        <div class="detail-label">Nama Instansi</div>
                        <div class="detail-value">
                            {{ $pengajuanLayanan->nama_instansi ?: '-' }}
                        </div>
                    </div>

                    <div class="detail-item">
                        <div class="detail-label">Nomor HP / WhatsApp</div>
                        <div class="detail-value">
                            {{ $pengajuanLayanan->nomor_hp ?: '-' }}
                        </div>
                    </div>

                    <div class="detail-item full">
                        <div class="detail-label">Alamat Lengkap</div>
                        <div class="detail-value">
                            {{ $pengajuanLayanan->alamat ?: '-' }}
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="panel">
            <div class="panel-header">
                <div class="panel-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 3v18M3 12h18"/>
                        <circle cx="12" cy="12" r="9"/>
                    </svg>
                </div>
                <div>
                    <div class="panel-title">Status dan Catatan Petugas</div>
                    <div class="panel-subtitle">Informasi tindak lanjut pengajuan.</div>
                </div>
            </div>

            <div class="panel-body">
                <div class="detail-grid">
                    <div class="detail-item">
                        <div class="detail-label">Status Saat Ini</div>
                        <div class="detail-value">
                            <span class="status {{ $statusClass }}">
                                {{ $pengajuanLayanan->status ?: 'Menunggu Verifikasi' }}
                            </span>
                        </div>
                    </div>

                    <div class="detail-item">
                        <div class="detail-label">Catatan Petugas</div>
                        @if($pengajuanLayanan->catatan_petugas)
                            <div class="note-box">
                                {{ $pengajuanLayanan->catatan_petugas }}
                            </div>
                        @else
                            <div class="detail-value muted">
                                Belum ada catatan petugas.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="panel">
            <div class="panel-header">
                <div class="panel-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="m9 12 2 2 4-4"/>
                        <circle cx="12" cy="12" r="9"/>
                    </svg>
                </div>
                <div>
                    <div class="panel-title">Verifikasi Pengajuan</div>
                    <div class="panel-subtitle">
                        Perbarui status dan berikan catatan hasil pemeriksaan.
                    </div>
                </div>
            </div>

            <div class="form-body">
                <form
                    action="{{ route('admin.pengajuan-layanan.verifikasi', $pengajuanLayanan) }}"
                    method="POST"
                >
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="status">Status Pengajuan</label>

                        <select name="status" id="status" class="form-control" required>
                            <option value="Menunggu Verifikasi"
                                @selected(
                                    $pengajuanLayanan->status === 'Menunggu Verifikasi'
                                    || $pengajuanLayanan->status === 'menunggu_verifikasi'
                                )>
                                Menunggu Verifikasi
                            </option>

                            <option value="Diverifikasi"
                                @selected($pengajuanLayanan->status === 'Diverifikasi')>
                                Diverifikasi
                            </option>

                            <option value="Disetujui"
                                @selected($pengajuanLayanan->status === 'Disetujui')>
                                Disetujui
                            </option>

                            <option value="Ditolak"
                                @selected($pengajuanLayanan->status === 'Ditolak')>
                                Ditolak
                            </option>
                        </select>

                        <div class="form-hint">
                            Pilih status berdasarkan hasil pemeriksaan pengajuan.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Catatan / Keterangan Petugas</label>

                        <textarea
                            name="keterangan"
                            id="keterangan"
                            class="form-control"
                            maxlength="1000"
                            placeholder="Tuliskan catatan atau alasan perubahan status..."
                        >{{ old('keterangan', $pengajuanLayanan->catatan_petugas) }}</textarea>

                        <div class="form-hint">
                            Maksimal 1.000 karakter. Berikan informasi yang jelas kepada pemohon.
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M13 6l6 6-6 6"/>
                            </svg>
                            Simpan Perubahan
                        </button>

                        <a href="{{ route('admin.pengajuan-layanan.index') }}" class="btn btn-secondary">
                            Kembali ke Daftar
                        </a>
                    </div>
                </form>

                <div class="footer-note">
                    Pastikan informasi dan status telah diperiksa sebelum menyimpan perubahan.
                </div>
            </div>
        </section>

    </div>
</main>

</body>
</html>