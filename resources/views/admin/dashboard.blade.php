<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Super Admin - SiCantik ESDM</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #eef5fb;
            color: #16324f;
        }

        /* =========================
           LAYOUT
        ========================== */

        .layout {
            min-height: 100vh;
            display: flex;
        }

        /* =========================
           SIDEBAR
        ========================== */

        .sidebar {
            width: 225px;
            min-height: 100vh;
            background: #09234a;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            padding: 18px 12px;
            z-index: 10;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 5px 8px 20px;
            border-bottom: 1px solid rgba(255,255,255,.12);
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: #08a8c4;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .brand strong {
            display: block;
            font-size: 17px;
            letter-spacing: .4px;
        }

        .brand small {
            display: block;
            margin-top: 3px;
            color: #91adcc;
            font-size: 10px;
        }

        .menu-title {
            margin: 28px 8px 9px;
            color: #7895b9;
            font-size: 9px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 11px;
            color: #dceaff;
            text-decoration: none;
            padding: 12px 11px;
            margin-bottom: 5px;
            border-radius: 8px;
            font-size: 13px;
        }

        .menu-item:hover {
            background: rgba(255,255,255,.08);
        }

        .menu-item.active {
            background: #12658a;
            color: white;
        }

        .menu-icon {
            width: 18px;
            text-align: center;
        }

        .sidebar-bottom {
            position: absolute;
            left: 12px;
            right: 12px;
            bottom: 18px;
        }

        .account {
            background: rgba(255,255,255,.05);
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 8px;
            padding: 11px;
            margin-bottom: 8px;
        }

        .account small {
            display: block;
            color: #7895b9;
            font-size: 8px;
            margin-bottom: 5px;
        }

        .account strong {
            font-size: 12px;
        }

        .logout-btn {
            width: 100%;
            padding: 10px;
            border: 0;
            border-radius: 7px;
            background: #4b193d;
            color: #ffc1d6;
            font-weight: bold;
            cursor: pointer;
        }

        .logout-btn:hover {
            background: #61204e;
        }

        /* =========================
           MAIN
        ========================== */

        .main {
            margin-left: 225px;
            width: calc(100% - 225px);
            min-height: 100vh;
        }

        /* =========================
           TOPBAR
        ========================== */

        .topbar {
            height: 62px;
            background: white;
            border-bottom: 1px solid #dce7f1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 28px;
        }

        .topbar h1 {
            margin: 0;
            font-size: 19px;
            color: #112b46;
        }

        .topbar p {
            margin: 3px 0 0;
            color: #71869e;
            font-size: 10px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #dff5f5;
            color: #087d87;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .profile strong {
            display: block;
            font-size: 11px;
        }

        .profile span {
            display: block;
            color: #7890a8;
            font-size: 9px;
            margin-top: 2px;
        }

        /* =========================
           CONTENT
        ========================== */

        .content {
            padding: 27px;
        }

        /* =========================
           WELCOME
        ========================== */

        .welcome {
            background: linear-gradient(
                110deg,
                #096799,
                #087e95,
                #078b83
            );
            border-radius: 16px;
            padding: 28px;
            color: white;
            margin-bottom: 22px;
            position: relative;
            overflow: hidden;
        }

        .welcome:after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border: 25px solid rgba(255,255,255,.07);
            border-radius: 50%;
            right: -55px;
            top: -120px;
        }

        .welcome h2 {
            margin: 0;
            font-size: 24px;
            position: relative;
            z-index: 2;
        }

        .welcome p {
            margin: 8px 0 16px;
            max-width: 760px;
            color: #e9fbff;
            font-size: 12px;
            line-height: 1.6;
            position: relative;
            z-index: 2;
        }

        .system-status {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 12px;
            border-radius: 20px;
            background: rgba(255,255,255,.12);
            font-size: 10px;
            position: relative;
            z-index: 2;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            background: #49e3a3;
            border-radius: 50%;
        }

        /* =========================
           STAT CARD
        ========================== */

        .stats {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 13px;
            margin-bottom: 28px;
        }

        .stat {
            background: white;
            border: 1px solid #dce7f1;
            border-radius: 11px;
            padding: 17px;
            box-shadow: 0 3px 12px rgba(24,65,100,.04);
        }

        .stat-title {
            color: #657f9b;
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .stat-number {
            margin-top: 8px;
            font-size: 26px;
            font-weight: bold;
            color: #0875ae;
        }

        /* =========================
           SECTION
        ========================== */

        .section-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .section-head h2 {
            margin: 0;
            font-size: 18px;
        }

        .section-head span {
            font-size: 9px;
            color: #7187a0;
        }

        /* =========================
           MONITORING
        ========================== */

        .monitor-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 28px;
        }

        .monitor {
            background: white;
            border: 1px solid #dce7f1;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 3px 12px rgba(24,65,100,.04);
        }

        .monitor-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .monitor-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: #edf7ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
        }

        .connected {
            padding: 5px 9px;
            border-radius: 15px;
            background: #e6faf3;
            color: #07856c;
            font-size: 8px;
            font-weight: bold;
        }

        .monitor h3 {
            margin: 16px 0 5px;
            font-size: 14px;
        }

        .monitor p {
            margin: 0;
            color: #657f9b;
            font-size: 10px;
            line-height: 1.5;
        }

        .monitor-number {
            margin-top: 13px;
            color: #0875ae;
            font-size: 24px;
            font-weight: bold;
        }

        .monitor-label {
            color: #7a91aa;
            font-size: 8px;
        }

        .monitor-button {
            display: inline-block;
            margin-top: 10px;
            padding: 7px 11px;
            border-radius: 6px;
            background: #0875ae;
            color: white;
            text-decoration: none;
            font-size: 9px;
        }

        .monitor-button:hover {
            background: #075d8c;
        }

        .monitor-information {
            border-top: 3px solid #0875ae;
        }

        /* =========================
           AKTIVITAS
        ========================== */

        .activity {
            background: white;
            border: 1px solid #dce7f1;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(24,65,100,.04);
        }

        .activity-item {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 15px 19px;
            border-bottom: 1px solid #edf2f6;
        }

        .activity-item:last-child {
            border-bottom: 0;
        }

        .activity-icon {
            width: 37px;
            height: 37px;
            border-radius: 9px;
            background: #edf7ff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .activity-content {
            flex: 1;
        }

        .activity-content strong {
            display: block;
            font-size: 11px;
        }

        .activity-content span {
            display: block;
            margin-top: 3px;
            color: #71869e;
            font-size: 9px;
        }

        .activity-time {
            color: #8195aa;
            font-size: 8px;
            white-space: nowrap;
        }

        .empty {
            padding: 30px;
            text-align: center;
            color: #71869e;
            font-size: 11px;
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 1250px) {
            .stats {
                grid-template-columns: repeat(3, 1fr);
            }

            .monitor-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 750px) {
            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
            }

            .main {
                margin-left: 0;
                width: 100%;
            }

            .layout {
                display: block;
            }

            .sidebar-bottom {
                position: relative;
                left: auto;
                right: auto;
                bottom: auto;
                margin-top: 30px;
            }

            .stats,
            .monitor-grid {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 17px;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">

        <div class="brand">

            <div class="brand-logo">
                ⚡
            </div>

            <div>
                <strong>SICANTIK</strong>
                <small>ESDM</small>
            </div>

        </div>


        <div class="menu-title">
            Menu Utama
        </div>


        <a
            href="{{ route('admin.dashboard') }}"
            class="menu-item active"
        >
            <span class="menu-icon">▦</span>
            Dashboard
        </a>


        <div class="menu-title">
            Monitoring Sistem
        </div>


        <a
            href="{{ route('admin.informasi.index') }}"
            class="menu-item"
        >
            <span class="menu-icon">📰</span>
            Monitoring Informasi
        </a>


        <a
            href="{{ route('admin.monitoring.pengaduan') }}"
            class="menu-item"
        >
            <span class="menu-icon">⚑</span>
            Monitoring Pengaduan
        </a>


        <a
            href="{{ route('admin.monitoring.bantuan') }}"
            class="menu-item"
        >
            <span class="menu-icon">⚡</span>
            Monitoring Bantuan
        </a>


        <a
            href="{{ route('admin.monitoring.layanan') }}"
            class="menu-item"
        >
            <span class="menu-icon">▣</span>
            Monitoring Layanan
        </a>


        <div class="menu-title">
            Manajemen
        </div>


        <a
            href="{{ route('admin.users.index') }}"
            class="menu-item"
        >
            <span class="menu-icon">👥</span>
            Manajemen User
        </a>


        <div class="sidebar-bottom">

            <div class="account">

                <small>LOGIN SEBAGAI</small>

                <strong>Super Admin</strong>

            </div>


            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-btn"
                >
                    ⏻ &nbsp; Keluar dari Sistem
                </button>

            </form>

        </div>

    </aside>


    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main">


        <!-- TOPBAR -->

        <header class="topbar">

            <div>

                <h1>
                    Dashboard Utama
                </h1>

                <p>
                    Sistem Informasi Pelayanan ESDM
                </p>

            </div>


            <div class="profile">

                <div class="avatar">
                    SA
                </div>

                <div>

                    <strong>
                        Super Admin
                    </strong>

                    <span>
                        Administrator Sistem
                    </span>

                </div>

            </div>

        </header>


        <!-- CONTENT -->

        <div class="content">


            <!-- WELCOME -->

            <section class="welcome">

                <h2>
                    Selamat Datang di SiCantik 👋
                </h2>

                <p>
                    Dashboard utama Super Admin digunakan untuk
                    memantau kondisi sistem dan aktivitas dari
                    seluruh modul pelayanan ESDM tanpa mengambil
                    alih pekerjaan masing-masing admin.
                </p>

                <div class="system-status">

                    <span class="status-dot"></span>

                    Sistem aktif dan terhubung

                </div>

            </section>


            <!-- STATISTIK -->

            <section class="stats">


                <div class="stat">

                    <div class="stat-title">
                        Total Admin
                    </div>

                    <div class="stat-number">
                        {{ $jumlahAdmin }}
                    </div>

                </div>


                <div class="stat">

                    <div class="stat-title">
                        Informasi
                    </div>

                    <div class="stat-number">
                        {{ $jumlahInformasi }}
                    </div>

                </div>


                <div class="stat">

                    <div class="stat-title">
                        Pengaduan
                    </div>

                    <div class="stat-number">
                        {{ $jumlahPengaduan }}
                    </div>

                </div>


                <div class="stat">

                    <div class="stat-title">
                        Bantuan Listrik
                    </div>

                    <div class="stat-number">
                        {{ $jumlahBantuan }}
                    </div>

                </div>


                <div class="stat">

                    <div class="stat-title">
                        Layanan Online
                    </div>

                    <div class="stat-number">
                        {{ $jumlahLayanan }}
                    </div>

                </div>

            </section>


            <!-- MONITORING -->

            <section>

                <div class="section-head">

                    <h2>
                        Monitoring Sistem
                    </h2>

                    <span>
                        Terhubung dengan modul admin
                    </span>

                </div>


                <div class="monitor-grid">


                    <!-- INFORMASI -->

                    <div class="monitor monitor-information">

                        <div class="monitor-top">

                            <div class="monitor-icon">
                                📰
                            </div>

                            <span class="connected">
                                TERHUBUNG
                            </span>

                        </div>

                        <h3>
                            Informasi ESDM
                        </h3>

                        <p>
                            Memantau jumlah informasi dan berita yang
                            dikelola oleh Admin Informasi.
                        </p>

                        <div class="monitor-number">
                            {{ $jumlahInformasi }}
                        </div>

                        <div class="monitor-label">
                            Total informasi
                        </div>

                        <br>

                        <a
                            href="{{ route('admin.informasi.index') }}"
                            class="monitor-button"
                        >
                            Buka Informasi →
                        </a>

                    </div>


                    <!-- PENGADUAN -->

                    <div class="monitor">

                        <div class="monitor-top">

                            <div class="monitor-icon">
                                📢
                            </div>

                            <span class="connected">
                                TERHUBUNG
                            </span>

                        </div>

                        <h3>
                            Pengaduan Masyarakat
                        </h3>

                        <p>
                            Memantau data pengaduan yang masuk
                            dan proses penanganannya.
                        </p>

                        <div class="monitor-number">
                            {{ $jumlahPengaduan }}
                        </div>

                        <div class="monitor-label">
                            Total pengaduan
                        </div>

                        <br>

                        <a
                            href="{{ route('admin.monitoring.pengaduan') }}"
                            class="monitor-button"
                        >
                            Buka Monitoring →
                        </a>

                    </div>


                    <!-- BANTUAN -->

                    <div class="monitor">

                        <div class="monitor-top">

                            <div class="monitor-icon">
                                ⚡
                            </div>

                            <span class="connected">
                                TERHUBUNG
                            </span>

                        </div>

                        <h3>
                            Bantuan Kelistrikan
                        </h3>

                        <p>
                            Memantau jumlah dan perkembangan
                            pengajuan bantuan kelistrikan.
                        </p>

                        <div class="monitor-number">
                            {{ $jumlahBantuan }}
                        </div>

                        <div class="monitor-label">
                            Total pengajuan bantuan
                        </div>

                        <br>

                        <a
                            href="{{ route('admin.monitoring.bantuan') }}"
                            class="monitor-button"
                        >
                            Buka Monitoring →
                        </a>

                    </div>


                    <!-- LAYANAN -->

                    <div class="monitor">

                        <div class="monitor-top">

                            <div class="monitor-icon">
                                💻
                            </div>

                            <span class="connected">
                                TERHUBUNG
                            </span>

                        </div>

                        <h3>
                            Layanan Online
                        </h3>

                        <p>
                            Memantau pengajuan layanan online
                            dari masyarakat.
                        </p>

                        <div class="monitor-number">
                            {{ $jumlahLayanan }}
                        </div>

                        <div class="monitor-label">
                            Total pengajuan layanan
                        </div>

                        <br>

                        <a
                            href="{{ route('admin.monitoring.layanan') }}"
                            class="monitor-button"
                        >
                            Buka Monitoring →
                        </a>

                    </div>

                </div>

            </section>


            <!-- AKTIVITAS -->

            <section>

                <div class="section-head">

                    <h2>
                        Aktivitas Sistem Terbaru
                    </h2>

                    <span>
                        Aktivitas administrator
                    </span>

                </div>


                <div class="activity">


                    @forelse($aktivitasTerbaru as $aktivitas)

                        <div class="activity-item">

                            <div class="activity-icon">

                                @if($aktivitas->action === 'login')
                                    🔐
                                @elseif($aktivitas->action === 'logout')
                                    🚪
                                @elseif($aktivitas->action === 'create')
                                    ➕
                                @elseif($aktivitas->action === 'update')
                                    ✏️
                                @elseif($aktivitas->action === 'delete')
                                    🗑️
                                @else
                                    ⚙️
                                @endif

                            </div>


                            <div class="activity-content">

                                <strong>

                                    {{ $aktivitas->user->name ?? 'Administrator' }}

                                </strong>

                                <span>

                                    {{ $aktivitas->description ?? 'Melakukan aktivitas pada sistem.' }}

                                </span>

                            </div>


                            <div class="activity-time">

                                {{ $aktivitas->created_at->diffForHumans() }}

                            </div>

                        </div>

                    @empty

                        <div class="empty">

                            Belum ada aktivitas administrator
                            yang tercatat.

                        </div>

                    @endforelse


                </div>

            </section>


        </div>

    </main>

</div>

</body>
</html>