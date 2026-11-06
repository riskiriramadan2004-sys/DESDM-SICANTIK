<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard Super Admin | SICANTIK ESDM</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --charcoal: #292F36;
            --charcoal-light: #343D46;
            --copper: #C66B32;
            --copper-dark: #A95425;
            --white: #FFFFFF;
            --off-white: #F5F5F3;
            --text: #30363D;
            --muted: #7B8289;
            --border: #E8E6E1;
            --green: #267B5E;
            --green-bg: #E8F4ED;
            --shadow: 0 8px 28px rgba(41, 47, 54, .045);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
            background: var(--off-white);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button,
        input {
            font: inherit;
        }

        button,
        a {
            -webkit-tap-highlight-color: transparent;
        }

        button:focus-visible,
        a:focus-visible {
            outline: 3px solid rgba(198, 107, 50, .45);
            outline-offset: 3px;
        }

        .layout {
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            inset: 0 auto 0 0;
            z-index: 50;
            display: flex;
            flex-direction: column;
            width: 258px;
            height: 100dvh;
            overflow-y: auto;
            padding: 28px 19px 20px;
            background: var(--charcoal);
            color: var(--white);
            transition: transform .28s ease;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 0 7px 29px;
            border-bottom: 1px solid rgba(255,255,255,.1);
        }

        .brand-logo {
            display: grid;
            place-items: center;
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            border-radius: 13px;
            background: var(--copper);
            color: white;
            font-size: 23px;
            font-weight: 700;
        }

        .brand strong {
            display: block;
            font-size: 19px;
            letter-spacing: 1.7px;
            line-height: 1.3;
        }

        .brand small {
            color: #C5C8CB;
            font-size: 10px;
            letter-spacing: 2.5px;
        }

        .menu-title {
            margin: 27px 10px 10px;
            color: #929AA2;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 12px;
            min-height: 45px;
            margin: 3px 0;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 9px;
            color: #D2D5D8;
            font-size: 12px;
            font-weight: 500;
            transition: background .2s, color .2s, border-color .2s;
        }

        .menu-item:hover {
            background: rgba(255,255,255,.07);
            color: white;
        }

        .menu-item.active {
            border-color: rgba(198,107,50,.25);
            background: rgba(198,107,50,.16);
            color: #F0A879;
        }

        .menu-icon {
            display: grid;
            place-items: center;
            width: 24px;
            height: 24px;
            flex-shrink: 0;
            font-size: 16px;
        }

        .sidebar-bottom {
            margin-top: auto;
            padding-top: 28px;
        }

        .account {
            margin-bottom: 13px;
            padding: 14px;
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 10px;
            background: rgba(255,255,255,.035);
        }

        .account small {
            display: block;
            margin-bottom: 5px;
            color: #9DA5AD;
            font-size: 9px;
            letter-spacing: 1px;
        }

        .account strong {
            font-size: 12px;
            font-weight: 600;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            width: 100%;
            min-height: 42px;
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 9px;
            background: transparent;
            color: #E6E7E8;
            cursor: pointer;
            font-size: 12px;
            transition: background .2s, border-color .2s;
        }

        .logout-btn:hover {
            border-color: rgba(255,255,255,.25);
            background: rgba(255,255,255,.08);
        }

        /* MAIN */

        .main {
            min-width: 0;
            min-height: 100vh;
            margin-left: 258px;
        }

        .topbar {
            position: sticky;
            top: 0;
            z-index: 30;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            min-height: 94px;
            padding: 18px clamp(20px, 3vw, 42px);
            border-bottom: 1px solid var(--border);
            background: rgba(255,255,255,.94);
            backdrop-filter: blur(14px);
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 13px;
            min-width: 0;
        }

        .topbar h1 {
            margin: 0;
            color: var(--charcoal);
            font-family: 'Playfair Display', serif;
            font-size: clamp(23px, 2vw, 29px);
            font-weight: 600;
            line-height: 1.3;
        }

        .topbar p {
            margin: 5px 0 0;
            color: var(--muted);
            font-size: 12px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 11px;
            flex-shrink: 0;
        }

        .avatar {
            display: grid;
            place-items: center;
            width: 43px;
            height: 43px;
            border: 1px solid #E8C6B0;
            border-radius: 50%;
            background: #F8E8DE;
            color: var(--copper-dark);
            font-size: 12px;
            font-weight: 700;
        }

        .profile strong {
            display: block;
            color: var(--charcoal);
            font-size: 12px;
        }

        .profile span {
            display: block;
            margin-top: 2px;
            color: var(--muted);
            font-size: 10px;
        }

        .mobile-menu {
            display: none;
            place-items: center;
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: white;
            color: var(--charcoal);
            cursor: pointer;
            font-size: 19px;
        }

        .overlay {
            display: none;
        }

        .content {
            width: 100%;
            max-width: 1600px;
            margin: 0 auto;
            padding: 30px clamp(20px, 3vw, 42px) 42px;
        }

        /* WELCOME */

        .welcome {
            position: relative;
            overflow: hidden;
            margin-bottom: 28px;
            padding: clamp(25px, 3vw, 38px);
            border-radius: 15px;
            background: var(--charcoal);
            color: white;
            box-shadow: var(--shadow);
        }

        .welcome::before {
            position: absolute;
            top: -100px;
            right: -40px;
            width: 260px;
            height: 260px;
            border: 1px solid rgba(255,255,255,.09);
            border-radius: 50%;
            content: "";
        }

        .welcome::after {
            position: absolute;
            top: -55px;
            right: 20px;
            width: 170px;
            height: 170px;
            border: 1px solid rgba(198,107,50,.35);
            border-radius: 50%;
            content: "";
        }

        .welcome-content {
            position: relative;
            z-index: 1;
            max-width: 690px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 13px;
            color: #E9A578;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.8px;
            text-transform: uppercase;
        }

        .eyebrow::before {
            width: 24px;
            height: 2px;
            background: var(--copper);
            content: "";
        }

        .welcome h2 {
            margin: 0;
            font-family: 'Playfair Display', serif;
            font-size: clamp(25px, 3vw, 36px);
            font-weight: 500;
            line-height: 1.35;
        }

        .welcome p {
            max-width: 620px;
            margin: 13px 0 18px;
            color: #CDD1D5;
            font-size: 12px;
            line-height: 1.9;
        }

        .system-status {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 11px;
            border: 1px solid rgba(255,255,255,.13);
            border-radius: 20px;
            background: rgba(255,255,255,.06);
            color: #E2E7E4;
            font-size: 10px;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #71C9A1;
            box-shadow: 0 0 0 4px rgba(113,201,161,.12);
        }

        /* SECTION */

        .section {
            margin-top: 30px;
        }

        .section-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 15px;
        }

        .section-heading h2 {
            margin: 0;
            color: var(--charcoal);
            font-size: 17px;
            font-weight: 700;
            letter-spacing: -.3px;
        }

        .section-heading p {
            margin: 4px 0 0;
            color: var(--muted);
            font-size: 11px;
        }

        .section-note {
            color: var(--muted);
            font-size: 10px;
        }

        /* STATISTICS */

        .stats {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 14px;
        }

        .stat {
            position: relative;
            min-width: 0;
            overflow: hidden;
            padding: 19px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: white;
            box-shadow: var(--shadow);
            transition: transform .22s ease, box-shadow .22s ease;
        }

        .stat:hover,
        .monitor:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(41,47,54,.09);
        }

        .stat-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .stat-title {
            color: var(--muted);
            font-size: 10px;
            font-weight: 600;
            line-height: 1.6;
        }

        .stat-icon {
            display: grid;
            place-items: center;
            width: 35px;
            height: 35px;
            flex-shrink: 0;
            border-radius: 10px;
            background: #F8EAE1;
            color: var(--copper-dark);
            font-size: 17px;
        }

        .stat-number {
            margin-top: 17px;
            color: var(--charcoal);
            font-size: clamp(23px, 2.1vw, 31px);
            font-weight: 700;
            letter-spacing: -.8px;
            line-height: 1.2;
            overflow-wrap: anywhere;
        }

        .stat-caption {
            margin-top: 6px;
            color: #989DA2;
            font-size: 10px;
        }

        .stat::after {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 3px;
            background: var(--copper);
            content: "";
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .25s ease;
        }

        .stat:hover::after {
            transform: scaleX(1);
        }

        /* MONITORING */

        .monitor-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }

        .monitor {
            min-width: 0;
            padding: 23px;
            border: 1px solid var(--border);
            border-radius: 13px;
            background: white;
            box-shadow: var(--shadow);
            transition: transform .22s ease, box-shadow .22s ease;
        }

        .monitor-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .monitor-icon {
            display: grid;
            place-items: center;
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: #F8EAE1;
            color: var(--copper-dark);
            font-size: 20px;
        }

        .connected {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 9px;
            border-radius: 20px;
            background: var(--green-bg);
            color: var(--green);
            font-size: 9px;
            font-weight: 700;
        }

        .connected::before {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #43A77D;
            content: "";
        }

        .monitor h3 {
            margin: 17px 0 6px;
            color: var(--charcoal);
            font-size: 14px;
            font-weight: 700;
        }

        .monitor p {
            max-width: 420px;
            margin: 0;
            color: var(--muted);
            font-size: 11px;
            line-height: 1.8;
        }

        .monitor-bottom {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 15px;
            margin-top: 21px;
            padding-top: 16px;
            border-top: 1px solid #F0EEEA;
        }

        .monitor-number {
            color: var(--charcoal);
            font-size: 28px;
            font-weight: 700;
            line-height: 1.2;
        }

        .monitor-label {
            margin-top: 4px;
            color: var(--muted);
            font-size: 10px;
        }

        .monitor-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 37px;
            padding: 9px 12px;
            border: 1px solid #E8C6B0;
            border-radius: 8px;
            background: #FFF9F5;
            color: var(--copper-dark);
            font-size: 10px;
            font-weight: 700;
            white-space: nowrap;
            transition: background .2s, color .2s, border-color .2s;
        }

        .monitor-button:hover {
            border-color: var(--copper);
            background: var(--copper);
            color: white;
        }

        /* BERITA ACARA DAN AKTIVITAS */

        .panel {
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: white;
            box-shadow: var(--shadow);
        }

        .panel-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 18px 21px;
            border-bottom: 1px solid var(--border);
        }

        .panel-head h3 {
            margin: 0;
            color: var(--charcoal);
            font-size: 13px;
        }

        .btn-lihat-semua {
            color: var(--copper-dark);
            font-size: 11px;
            font-weight: 700;
        }

        .btn-lihat-semua:hover {
            text-decoration: underline;
        }

        .berita-acara-item,
        .activity-item {
            display: flex;
            align-items: center;
            gap: 14px;
            min-width: 0;
            padding: 17px 21px;
            border-bottom: 1px solid #F0EEEA;
            transition: background .18s;
        }

        .berita-acara-item:last-child,
        .activity-item:last-child {
            border-bottom: 0;
        }

        .berita-acara-item:hover,
        .activity-item:hover {
            background: #FCFAF8;
        }

        .berita-acara-icon,
        .activity-icon {
            display: grid;
            place-items: center;
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            border-radius: 10px;
            background: #F8EAE1;
            color: var(--copper-dark);
            font-size: 17px;
        }

        .berita-acara-info,
        .activity-content {
            flex: 1;
            min-width: 0;
        }

        .berita-acara-info strong,
        .activity-content strong {
            display: block;
            color: var(--charcoal);
            font-size: 12px;
            font-weight: 700;
            overflow-wrap: anywhere;
        }

        .berita-acara-info span,
        .activity-content span {
            display: block;
            margin-top: 4px;
            color: var(--muted);
            font-size: 10px;
            line-height: 1.7;
            overflow-wrap: anywhere;
        }

        .berita-acara-status {
            flex-shrink: 0;
            padding: 5px 10px;
            border-radius: 20px;
            background: var(--green-bg);
            color: var(--green);
            font-size: 9px;
            font-weight: 700;
        }

        .berita-acara-status.draft {
            background: #FFF1DD;
            color: #946200;
        }

        .activity-time {
            flex-shrink: 0;
            color: #989DA2;
            font-size: 10px;
            text-align: right;
        }

        .empty {
            padding: 32px 20px;
            color: var(--muted);
            font-size: 12px;
            text-align: center;
        }

        .empty-icon {
            display: block;
            margin-bottom: 8px;
            color: #B6B8BA;
            font-size: 25px;
        }

        .footer {
            margin-top: 32px;
            padding-top: 18px;
            border-top: 1px solid var(--border);
            color: #92979C;
            font-size: 10px;
            text-align: center;
        }

        /* RESPONSIVE */

        @media (min-width: 1600px) {
            .stats {
                grid-template-columns: repeat(5, minmax(0, 1fr));
            }

            .monitor-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }

        @media (max-width: 1250px) {
            .stats {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .monitor-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .stat {
                padding: 17px;
            }
        }

        @media (max-width: 900px) {
            .sidebar {
                width: 245px;
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main {
                margin-left: 0;
            }

            .mobile-menu {
                display: grid;
            }

            .overlay.visible {
                position: fixed;
                inset: 0;
                z-index: 40;
                display: block;
                background: rgba(20,25,30,.5);
                backdrop-filter: blur(2px);
            }

            .content {
                padding-top: 24px;
            }
        }

        @media (max-width: 600px) {
            .topbar {
                min-height: 78px;
                padding: 13px 16px;
            }

            .topbar h1 {
                font-size: 21px;
            }

            .topbar p {
                font-size: 10px;
            }

            .profile {
                gap: 0;
            }

            .profile > div:last-child {
                display: none;
            }

            .avatar {
                width: 37px;
                height: 37px;
            }

            .content {
                padding: 20px 15px 28px;
            }

            .welcome {
                margin-bottom: 22px;
                padding: 25px 21px;
            }

            .welcome h2 {
                font-size: 27px;
            }

            .welcome p {
                font-size: 11px;
            }

            .stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .stat {
                padding: 14px;
            }

            .stat-title {
                font-size: 9px;
            }

            .stat-icon {
                width: 30px;
                height: 30px;
                font-size: 14px;
            }

            .stat-number {
                margin-top: 12px;
                font-size: 25px;
            }

            .stat-caption {
                font-size: 9px;
            }

            .section {
                margin-top: 25px;
            }

            .section-heading h2 {
                font-size: 15px;
            }

            .section-note {
                display: none;
            }

            .monitor-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .monitor {
                padding: 19px;
            }

            .monitor-bottom {
                align-items: center;
            }

            .monitor-button {
                font-size: 9px;
            }

            .berita-acara-item,
            .activity-item {
                align-items: flex-start;
                gap: 11px;
                padding: 15px;
            }

            .berita-acara-icon,
            .activity-icon {
                width: 35px;
                height: 35px;
                font-size: 15px;
            }

            .berita-acara-status {
                font-size: 8px;
            }

            .activity-time {
                max-width: 85px;
                font-size: 9px;
                overflow-wrap: anywhere;
            }

            .panel-head {
                padding: 16px;
            }
        }

        @media (max-width: 380px) {
            .topbar {
                gap: 9px;
            }

            .topbar h1 {
                font-size: 18px;
            }

            .mobile-menu {
                width: 35px;
                height: 35px;
            }

            .welcome h2 {
                font-size: 24px;
            }

            .stat {
                padding: 12px;
            }

            .stat-top {
                align-items: flex-start;
            }

            .monitor-bottom {
                align-items: flex-start;
                flex-direction: column;
            }

            .activity-time {
                max-width: 70px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
                animation-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <aside class="sidebar" id="sidebar">
        <a href="{{ route('admin.dashboard') }}" class="brand">
            <div class="brand-logo">S</div>
            <div>
                <strong>SICANTIK</strong>
                <small>ESDM SULTENG</small>
            </div>
        </a>

        <div class="menu-title">Menu Utama</div>

        <a href="{{ route('admin.dashboard') }}" class="menu-item active" aria-current="page">
            <span class="menu-icon">⌂</span>
            Dashboard
        </a>

        <div class="menu-title">Monitoring Sistem</div>

        <a href="{{ route('admin.informasi.index') }}" class="menu-item">
            <span class="menu-icon">♙</span>
            Data Kepegawaian
        </a>

        <a href="{{ route('admin.monitoring.pengaduan') }}" class="menu-item">
            <span class="menu-icon">▤</span>
            Monitoring Pengaduan
        </a>

        <a href="{{ route('admin.monitoring.bantuan') }}" class="menu-item">
            <span class="menu-icon">ϟ</span>
            Monitoring Bantuan
        </a>

        <a href="{{ route('admin.monitoring.layanan') }}" class="menu-item">
            <span class="menu-icon">▣</span>
            Monitoring Layanan
        </a>

        <div class="menu-title">Manajemen</div>

        <a href="{{ route('admin.users.index') }}" class="menu-item">
            <span class="menu-icon">♧</span>
            Manajemen User
        </a>

        <div class="sidebar-bottom">
            <div class="account">
                <small>LOGIN SEBAGAI</small>
                <strong>{{ auth()->user()->name ?? 'Administrator' }}</strong>
            </div>

            <form action="{{ route('admin.logout') }}" method="POST"
                  onsubmit="return confirm('Apakah Anda yakin ingin keluar dari sistem?')">
                @csrf
                <button type="submit" class="logout-btn">
                    <span>↪</span> Keluar dari Sistem
                </button>
            </form>
        </div>
    </aside>

    <div class="overlay" id="overlay"></div>

    <main class="main">

        <header class="topbar">
            <div class="topbar-left">
                <button type="button" class="mobile-menu" id="menuToggle"
                        aria-label="Buka menu navigasi" aria-expanded="false">
                    ☰
                </button>

                <div>
                    <h1>Dashboard Utama</h1>
                    <p>Sistem Informasi Pelayanan ESDM</p>
                </div>
            </div>

            <div class="profile">
                <div class="avatar">
                    {{ strtoupper(substr(auth()->user()->name ?? 'SA', 0, 2)) }}
                </div>
                <div>
                    <strong>{{ auth()->user()->name ?? 'Administrator' }}</strong>
                    <span>Administrator Sistem</span>
                </div>
            </div>
        </header>

        <div class="content">

            <section class="welcome">
                <div class="welcome-content">
                    <div class="eyebrow">Sistem Administrasi ESDM</div>

                    <h2>Selamat Datang di SICANTIK</h2>

                    <p>
                        Dashboard utama untuk memantau informasi kepegawaian,
                        pengaduan masyarakat, pengajuan bantuan kelistrikan,
                        layanan online, serta aktivitas administrasi dalam
                        satu pusat kendali.
                    </p>

                    <div class="system-status">
                        <span class="status-dot"></span>
                        Sistem administrasi tersedia
                    </div>
                </div>
            </section>

            <section class="stats" aria-label="Statistik sistem">

                <div class="stat">
                    <div class="stat-top">
                        <div class="stat-title">Total Admin</div>
                        <div class="stat-icon">♙</div>
                    </div>
                    <div class="stat-number">{{ $jumlahAdmin }}</div>
                    <div class="stat-caption">Akun administrator</div>
                </div>

                <div class="stat">
                    <div class="stat-top">
                        <div class="stat-title">Kepegawaian</div>
                        <div class="stat-icon">▤</div>
                    </div>
                    <div class="stat-number">{{ $jumlahInformasi }}</div>
                    <div class="stat-caption">Total data pegawai</div>
                </div>

                <div class="stat">
                    <div class="stat-top">
                        <div class="stat-title">Pengaduan</div>
                        <div class="stat-icon">◉</div>
                    </div>
                    <div class="stat-number">{{ $jumlahPengaduan }}</div>
                    <div class="stat-caption">Pengaduan masyarakat</div>
                </div>

                <div class="stat">
                    <div class="stat-top">
                        <div class="stat-title">Bantuan Listrik</div>
                        <div class="stat-icon">ϟ</div>
                    </div>
                    <div class="stat-number">{{ $jumlahBantuan }}</div>
                    <div class="stat-caption">Pengajuan bantuan</div>
                </div>

                <div class="stat">
                    <div class="stat-top">
                        <div class="stat-title">Layanan Online</div>
                        <div class="stat-icon">▣</div>
                    </div>
                    <div class="stat-number">{{ $jumlahLayanan }}</div>
                    <div class="stat-caption">Pengajuan layanan</div>
                </div>

            </section>

            <section class="section">
                <div class="section-head">
                    <div class="section-heading">
                        <h2>Monitoring Sistem</h2>
                        <p>Ringkasan data dari setiap modul pelayanan</p>
                    </div>
                    <span class="section-note">Pusat pemantauan SICANTIK</span>
                </div>

                <div class="monitor-grid">

                    <article class="monitor">
                        <div class="monitor-top">
                            <div class="monitor-icon">♙</div>
                            <span class="connected">MODUL TERSEDIA</span>
                        </div>
                        <h3>Data Kepegawaian ESDM</h3>
                        <p>Memantau data pegawai yang dikelola secara internal.</p>

                        <div class="monitor-bottom">
                            <div>
                                <div class="monitor-number">{{ $jumlahInformasi }}</div>
                                <div class="monitor-label">Total data pegawai</div>
                            </div>
                            <a href="{{ route('admin.informasi.index') }}" class="monitor-button">
                                Buka Modul <span>→</span>
                            </a>
                        </div>
                    </article>

                    <article class="monitor">
                        <div class="monitor-top">
                            <div class="monitor-icon">◉</div>
                            <span class="connected">MODUL TERSEDIA</span>
                        </div>
                        <h3>Pengaduan Masyarakat</h3>
                        <p>Memantau pengaduan yang masuk dan proses penanganannya.</p>

                        <div class="monitor-bottom">
                            <div>
                                <div class="monitor-number">{{ $jumlahPengaduan }}</div>
                                <div class="monitor-label">Total pengaduan</div>
                            </div>
                            <a href="{{ route('admin.monitoring.pengaduan') }}" class="monitor-button">
                                Buka Modul <span>→</span>
                            </a>
                        </div>
                    </article>

                    <article class="monitor">
                        <div class="monitor-top">
                            <div class="monitor-icon">ϟ</div>
                            <span class="connected">MODUL TERSEDIA</span>
                        </div>
                        <h3>Bantuan Kelistrikan</h3>
                        <p>Memantau jumlah dan perkembangan pengajuan bantuan kelistrikan.</p>

                        <div class="monitor-bottom">
                            <div>
                                <div class="monitor-number">{{ $jumlahBantuan }}</div>
                                <div class="monitor-label">Total pengajuan bantuan</div>
                            </div>
                            <a href="{{ route('admin.monitoring.bantuan') }}" class="monitor-button">
                                Buka Modul <span>→</span>
                            </a>
                        </div>
                    </article>

                    <article class="monitor">
                        <div class="monitor-top">
                            <div class="monitor-icon">▣</div>
                            <span class="connected">MODUL TERSEDIA</span>
                        </div>
                        <h3>Layanan Online</h3>
                        <p>Memantau pengajuan layanan online dari masyarakat.</p>

                        <div class="monitor-bottom">
                            <div>
                                <div class="monitor-number">{{ $jumlahLayanan }}</div>
                                <div class="monitor-label">Total pengajuan layanan</div>
                            </div>
                            <a href="{{ route('admin.monitoring.layanan') }}" class="monitor-button">
                                Buka Modul <span>→</span>
                            </a>
                        </div>
                    </article>

                </div>
            </section>

            <section class="section">
                <div class="section-head">
                    <div class="section-heading">
                        <h2>Berita Acara Terbaru</h2>
                        <p>Dokumentasi kegiatan dan administrasi terbaru</p>
                    </div>
                    <a href="{{ route('admin.berita-acara.index') }}" class="btn-lihat-semua">
                        Lihat Semua →
                    </a>
                </div>

                <div class="panel">
                    @forelse($beritaAcaras as $beritaAcara)
                        <div class="berita-acara-item">
                            <div class="berita-acara-icon">▤</div>

                            <div class="berita-acara-info">
                                <strong>{{ $beritaAcara->judul }}</strong>
                                <span>
                                    Nomor:
                                    {{ $beritaAcara->nomor_berita_acara ?: 'Belum ada nomor' }}
                                </span>
                                <span>
                                    Tanggal kegiatan:
                                    {{ $beritaAcara->tanggal_kegiatan
                                        ? \Carbon\Carbon::parse($beritaAcara->tanggal_kegiatan)->format('d/m/Y')
                                        : 'Belum ditentukan' }}
                                </span>
                            </div>

                            <span class="berita-acara-status {{ strtolower($beritaAcara->status) === 'draft' ? 'draft' : '' }}">
                                {{ ucfirst($beritaAcara->status) }}
                            </span>
                        </div>
                    @empty
                        <div class="empty">
                            <span class="empty-icon">▤</span>
                            Belum ada berita acara yang tercatat.
                        </div>
                    @endforelse
                </div>
            </section>

            <section class="section">
                <div class="section-head">
                    <div class="section-heading">
                        <h2>Aktivitas Sistem Terbaru</h2>
                        <p>Riwayat aktivitas administrator</p>
                    </div>
                    <span class="section-note">8 aktivitas terakhir</span>
                </div>

                <div class="panel">
                    @forelse($aktivitasTerbaru as $aktivitas)
                        <div class="activity-item">
                            <div class="activity-icon">
                                @if($aktivitas->action === 'login')
                                    ↪
                                @elseif($aktivitas->action === 'delete')
                                    ×
                                @else
                                    ⚙
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
                                {{ $aktivitas->created_at?->diffForHumans() ?? '-' }}
                            </div>
                        </div>
                    @empty
                        <div class="empty">
                            <span class="empty-icon">◷</span>
                            Belum ada aktivitas administrator yang tercatat.
                        </div>
                    @endforelse
                </div>
            </section>

            <footer class="footer">
                SICANTIK ESDM &copy; {{ date('Y') }} — Sistem Informasi Pelayanan ESDM
            </footer>

        </div>
    </main>
</div>

<script>
    (() => {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const toggle = document.getElementById('menuToggle');

        if (!sidebar || !overlay || !toggle) return;

        function closeMenu() {
            sidebar.classList.remove('open');
            overlay.classList.remove('visible');
            toggle.setAttribute('aria-expanded', 'false');
        }

        toggle.addEventListener('click', () => {
            const isOpen = sidebar.classList.toggle('open');
            overlay.classList.toggle('visible', isOpen);
            toggle.setAttribute('aria-expanded', String(isOpen));
        });

        overlay.addEventListener('click', closeMenu);

        sidebar.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 900) closeMenu();
            });
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth > 900) closeMenu();
        });

        document.addEventListener('keydown', event => {
            if (event.key === 'Escape') closeMenu();
        });
    })();
</script>

</body>
</html>
