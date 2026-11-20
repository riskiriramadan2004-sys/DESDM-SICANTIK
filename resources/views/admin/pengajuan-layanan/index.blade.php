<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Layanan Online | SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --navy: #202a35;
            --navy-light: #2b3948;
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
            color: #fff;
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

        .profile-icon svg {
            width: 18px;
            height: 18px;
        }

        .profile-name {
            font-size: 11px;
            font-weight: 700;
        }

        .profile-role {
            font-size: 9px;
            color: #aeb8c1;
            margin-top: 3px;
        }

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

        .logout-link:hover {
            background: rgba(255,255,255,.1);
        }

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

        .breadcrumb {
            color: var(--muted);
            font-size: 11px;
        }

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
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 15px;
            margin-bottom: 26px;
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

        .date-label {
            color: #7b838c;
            font-size: 11px;
            white-space: nowrap;
        }

        .summary-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 17px;
            margin-bottom: 24px;
        }

        .summary-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .summary-icon {
            width: 45px;
            height: 45px;
            border-radius: 11px;
            background: #f8eee7;
            color: var(--copper);
            display: grid;
            place-items: center;
            flex-shrink: 0;
        }

        .summary-icon svg { width: 22px; height: 22px; }

        .summary-label {
            color: var(--muted);
            font-size: 10px;
            font-weight: 600;
        }

        .summary-value {
            color: var(--navy);
            font-size: 22px;
            font-weight: 800;
            margin-top: 4px;
        }

        .panel {
            background: white;
            border: 1px solid var(--border);
            border-radius: 13px;
            overflow: hidden;
        }

        .panel-header {
            padding: 22px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            border-bottom: 1px solid var(--border);
        }

        .panel-title {
            font-size: 15px;
            font-weight: 800;
            color: var(--navy);
        }

        .panel-subtitle {
            font-size: 10px;
            color: var(--muted);
            margin-top: 6px;
        }

        .total-label {
            background: #f5f1eb;
            color: #876343;
            padding: 8px 12px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 700;
        }

        .table-wrapper { overflow-x: auto; }

        table {
            width: 100%;
            min-width: 900px;
            border-collapse: collapse;
        }

        th {
            background: #fafaf9;
            padding: 14px 17px;
            text-align: left;
            color: #7d858d;
            font-size: 9px;
            letter-spacing: .8px;
            text-transform: uppercase;
            font-weight: 800;
            white-space: nowrap;
        }

        td {
            padding: 17px;
            border-top: 1px solid #f0f0ee;
            font-size: 11px;
            vertical-align: middle;
        }

        tbody tr:hover { background: #fcfbf9; }

        .row-number {
            color: #9299a0;
            font-weight: 700;
        }

        .application-number {
            color: #b86c3e;
            font-weight: 800;
            white-space: nowrap;
        }

        .applicant {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 180px;
        }

        .avatar {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: #e9edf1;
            color: #34475a;
            display: grid;
            place-items: center;
            font-size: 11px;
            font-weight: 800;
            flex-shrink: 0;
        }

        .applicant-name {
            font-weight: 700;
            color: #303b46;
        }

        .applicant-meta {
            color: #9299a0;
            font-size: 9px;
            margin-top: 5px;
            display: block;
        }

        .service-name { font-weight: 700; color: #3a4651; }
        .field-name { color: #828a91; font-size: 10px; }

        .badge {
            display: inline-block;
            border-radius: 20px;
            padding: 6px 10px;
            font-size: 9px;
            font-weight: 800;
            white-space: nowrap;
        }

        .menunggu { background: #fff2d9; color: var(--yellow); }
        .diverifikasi { background: #e8f0fc; color: var(--blue); }
        .disetujui { background: #e5f4eb; color: var(--green); }
        .ditolak { background: #fbe9e7; color: var(--red); }

        .detail-button {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: var(--navy);
            color: white;
            padding: 9px 12px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 700;
            transition: .2s;
            white-space: nowrap;
        }

        .detail-button:hover { background: var(--copper); }
        .detail-button svg { width: 14px; height: 14px; }

        .empty {
            text-align: center;
            padding: 45px 15px;
            color: var(--muted);
        }

        .empty svg {
            width: 35px;
            height: 35px;
            margin-bottom: 10px;
            color: #b3bbc2;
        }

        .pagination { padding: 18px 22px; }

        .pagination nav {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
        }

        .pagination svg { width: 16px; height: 16px; }

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
            .content { padding: 25px 15px 40px; }

            .page-heading { align-items: flex-start; flex-direction: column; }
            h1 { font-size: 22px; }

            .summary-grid { grid-template-columns: 1fr; gap: 10px; }
            .summary-card { padding: 14px; }
            .summary-value { font-size: 19px; }

            .panel-header { padding: 17px; }
            .panel-title { font-size: 13px; }
        }
    </style>
</head>

<body>

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
        <div class="breadcrumb">Administrasi / <strong>Pengajuan Layanan</strong></div>
        <div class="topbar-right">
            <span class="online-dot"></span>
            Sistem Aktif
        </div>
    </div>

    <div class="content">

        <div class="page-heading">
            <div>
                <div class="eyebrow">SISTEM ADMINISTRASI ESDM</div>
                <h1>Pengajuan Layanan Online</h1>
                <p class="heading-description">
                    Kelola, periksa, dan pantau pengajuan layanan dari masyarakat.
                </p>
            </div>

            <div class="date-label">Panel Administrasi SICANTIK</div>
        </div>

        <section class="summary-grid">

            <div class="summary-card">
                <div class="summary-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="4" width="18" height="16" rx="2"/>
                        <path d="M8 9h8M8 13h8M8 17h4"/>
                    </svg>
                </div>
                <div>
                    <div class="summary-label">Total Pengajuan</div>
                    <div class="summary-value">{{ $pengajuanLayanans->total() }}</div>
                </div>
            </div>

            <div class="summary-card">
                <div class="summary-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 7v5l3 2"/>
                    </svg>
                </div>
                <div>
                    <div class="summary-label">Data Ditampilkan</div>
                    <div class="summary-value">{{ $pengajuanLayanans->count() }}</div>
                </div>
            </div>

            <div class="summary-card">
                <div class="summary-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="m5 12 4 4L19 6"/>
                        <circle cx="12" cy="12" r="9"/>
                    </svg>
                </div>
                <div>
                    <div class="summary-label">Halaman Aktif</div>
                    <div class="summary-value">{{ $pengajuanLayanans->currentPage() }}</div>
                </div>
            </div>

        </section>

        <section class="panel">

            <div class="panel-header">
                <div>
                    <div class="panel-title">Daftar Pengajuan Masyarakat</div>
                    <div class="panel-subtitle">
                        Informasi pemohon dan layanan yang diajukan.
                    </div>
                </div>

                <div class="total-label">
                    {{ $pengajuanLayanans->total() }} DATA
                </div>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Pengajuan</th>
                            <th>Informasi Pemohon</th>
                            <th>Layanan</th>
                            <th>Bidang</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    @forelse ($pengajuanLayanans as $pengajuan)

                        @php
                            $statusClass = match ($pengajuan->status) {
                                'Diverifikasi' => 'diverifikasi',
                                'Disetujui' => 'disetujui',
                                'Ditolak' => 'ditolak',
                                default => 'menunggu',
                            };

                            $inisial = strtoupper(substr($pengajuan->nama_lengkap ?? 'P', 0, 1));
                        @endphp

                        <tr>
                            <td class="row-number">
                                {{ $pengajuanLayanans->firstItem() + $loop->index }}
                            </td>

                            <td>
                                <span class="application-number">
                                    {{ $pengajuan->nomor_pengajuan }}
                                </span>
                            </td>

                            <td>
                                <div class="applicant">
                                    <div class="avatar">{{ $inisial }}</div>
                                    <div>
                                        <div class="applicant-name">
                                            {{ $pengajuan->nama_lengkap }}
                                        </div>
                                        <span class="applicant-meta">
                                            {{ ucfirst($pengajuan->jenis_pemohon ?? 'perorangan') }}
                                        </span>
                                        <span class="applicant-meta">
                                            {{ $pengajuan->nama_instansi ?: 'Instansi tidak dicantumkan' }}
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="service-name">
                                    {{ $pengajuan->layanan->nama ?? '-' }}
                                </span>
                            </td>

                            <td>
                                <span class="field-name">
                                    {{ $pengajuan->layanan->bidangLayanan->nama ?? '-' }}
                                </span>
                            </td>

                            <td>
                                <span class="badge {{ $statusClass }}">
                                    {{ $pengajuan->status ?? 'Menunggu Verifikasi' }}
                                </span>
                            </td>

                            <td>
                                <a href="{{ route('admin.pengajuan-layanan.show', $pengajuan) }}" class="detail-button">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    Lihat Detail
                                </a>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="7" class="empty">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <rect x="3" y="4" width="18" height="16" rx="2"/>
                                    <path d="M8 9h8M8 13h8"/>
                                </svg>
                                <div>Belum ada pengajuan layanan yang masuk.</div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                {{ $pengajuanLayanans->links() }}
            </div>

        </section>
    </div>
</main>

</body>
</html>