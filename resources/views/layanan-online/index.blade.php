
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Online | SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --dark: #292F36;
            --dark-soft: #39434D;
            --copper: #C66B32;
            --copper-dark: #A95125;
            --cream: #F8F3ED;
            --white: #FFFFFF;
            --muted: #68717A;
        }

        /* =========================================
           1. GLOBAL
        ========================================= */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            min-height: 100%;
            scroll-behavior: smooth;
            overflow-x: hidden;

            /* Scrollbar Firefox */
            scrollbar-width: thin;
            scrollbar-color: rgba(198,107,50,.35) transparent;
        }

        body {
            position: relative;
            width: 100%;
            min-height: 100vh;
            overflow-x: hidden;

            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--dark);
            background-color: var(--cream);

            background-image:
                linear-gradient(
                    to bottom,
                    rgba(255,255,255,.22) 0%,
                    rgba(255,255,255,.34) 35%,
                    rgba(255,250,245,.55) 70%,
                    rgba(255,246,237,.76) 100%
                ),
                url('/images/layanan/background-esdm.jpeg');

            background-size: cover;
            background-position: center top;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Scrollbar Chrome dan Edge */
        body::-webkit-scrollbar {
            width: 6px;
        }

        body::-webkit-scrollbar-track {
            background: transparent;
        }

        body::-webkit-scrollbar-thumb {
            background: rgba(198,107,50,.35);
            border-radius: 20px;
        }

        body::-webkit-scrollbar-thumb:hover {
            background: rgba(198,107,50,.65);
        }

        /* =========================================
           2. HEADER
        ========================================= */

        .header {
            position: relative;
            z-index: 10;
            width: 100%;
            padding: 13px 7%;

            background:
                linear-gradient(
                    110deg,
                    #292F36 0%,
                    #34383B 65%,
                    #70452E 100%
                );

            border-bottom: 3px solid var(--copper);
            box-shadow: 0 4px 18px rgba(0,0,0,.15);
        }

        .header::before {
            content: "";
            position: absolute;
            top: -30px;
            right: 14%;
            width: 90px;
            height: 120px;

            border-left: 1px solid rgba(255,255,255,.25);
            border-right: 1px solid rgba(255,255,255,.18);

            transform: skewX(-30deg);
            pointer-events: none;
        }

        .header-inner {
            position: relative;
            z-index: 2;

            width: 100%;
            max-width: 1250px;
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

            color: white;
            text-decoration: none;
        }

        .brand-icon {
            width: 45px;
            height: 45px;
            flex-shrink: 0;
        }

        .brand-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-text h1 {
            font-size: 21px;
            font-weight: 800;
            letter-spacing: .7px;
        }

        .brand-text p {
            margin-top: 3px;
            color: #D5D8DB;
            font-size: 11px;
        }

        .back-home {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;

            padding: 11px 19px;

            color: white;
            background: rgba(255,255,255,.10);
            border: 1px solid rgba(255,255,255,.35);
            border-radius: 30px;

            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;

            transition: all .3s ease;
        }

        .back-home:hover {
            color: white;
            background: var(--copper);
            border-color: var(--copper);
            transform: translateY(-2px);
        }

        .back-icon {
            font-size: 19px;
            line-height: 1;
        }

        /* =========================================
           3. HERO
        ========================================= */

        .hero {
            position: relative;
            width: 100%;
            min-height: 420px;
            padding: 65px 22px 100px;
            overflow: hidden;
            background: transparent;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;

            background: radial-gradient(
                ellipse at center,
                rgba(255,255,255,.78) 0%,
                rgba(255,255,255,.38) 48%,
                transparent 100%
            );

            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 900px;
            margin: auto;
            text-align: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 9px;

            padding: 11px 22px;

            border: 1px solid rgba(198,107,50,.38);
            border-radius: 40px;

            background: rgba(255,247,239,.94);
            color: var(--copper-dark);

            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;

            box-shadow: 0 5px 20px rgba(41,47,54,.07);

            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .hero-badge svg {
            width: 17px;
            height: 17px;
        }

        .hero h2 {
            margin: 22px 0 12px;

            color: var(--dark);
            font-size: clamp(40px, 5vw, 61px);
            line-height: 1.15;
            font-weight: 800;
            letter-spacing: -2px;

            text-shadow: 0 2px 12px rgba(255,255,255,.45);
        }

        .hero h2 span {
            color: var(--copper);
            font-style: italic;
        }

        .hero-description {
            max-width: 650px;
            margin: 18px auto 0;

            color: #37434E;
            font-size: 14px;
            line-height: 1.9;
            font-weight: 600;
        }

        .hero-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 25px;
        }

        .hero-divider span {
            width: 53px;
            height: 2px;
            background: rgba(41,47,54,.4);
        }

        .hero-divider b {
            width: 64px;
            height: 5px;
            margin: 0 5px;
            border-radius: 20px;
            background: var(--copper);
        }

        /* =========================================
           4. SERVICES CONTAINER
        ========================================= */

        .services {
            position: relative;
            isolation: isolate;

            width: min(1170px, calc(100% - 48px));
            margin: -20px auto 0;

            padding-bottom: 250px;
        }

        .service-grid {
            position: relative;
            z-index: 2;

            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
        }

        /* =========================================
           5. SERVICE CARD
        ========================================= */

        .service-card {
            position: relative;

            display: grid;
            grid-template-columns: minmax(0, 1fr) 205px;
            grid-template-rows: 1fr auto;

            min-width: 0;
            min-height: 238px;
            overflow: hidden;

            background: rgba(255,255,255,.94);

            border: 1px solid rgba(255,255,255,.96);
            border-left: 6px solid #E5A071;
            border-radius: 20px;

            box-shadow: 0 12px 30px rgba(41,47,54,.15);

            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);

            transition: transform .3s ease, box-shadow .3s ease;
            animation: cardEnter .65s ease both;
        }

        .service-card:nth-child(2) {
            animation-delay: .08s;
        }

        .service-card:nth-child(3) {
            animation-delay: .16s;
        }

        .service-card:nth-child(4) {
            animation-delay: .24s;
        }

        .service-card:nth-child(5) {
            animation-delay: .32s;
        }

        .service-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 20px 40px rgba(41,47,54,.21);
        }

        .service-content {
            min-width: 0;
            padding: 22px 0 0 22px;
        }

        .service-top {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 12px;
        }

        /* ICON */

        .service-icon {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 57px;
            height: 57px;
            flex-shrink: 0;

            border-radius: 15px;
            border: 1px solid #F5DECC;

            background: linear-gradient(145deg, #FFF5EC, #FCE6D4);
            color: var(--copper);

            transition: transform .3s ease;
        }

        .service-card:hover .service-icon {
            transform: rotate(-7deg) scale(1.08);
        }

        .service-icon svg {
            width: 31px;
            height: 31px;

            fill: none;
            stroke: currentColor;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .service-label {
            padding: 6px 10px;
            border-radius: 30px;

            background: #F0EFEC;
            color: #505962;

            font-size: 9px;
            font-weight: 800;
            letter-spacing: .5px;
        }

        .service-card h3 {
            margin: 0 0 8px;
            color: var(--dark);

            font-size: 20px;
            font-weight: 800;
            line-height: 1.4;
        }

        .service-card .description {
            max-width: 330px;
            margin: 0;

            color: #626D78;
            font-size: 12px;
            line-height: 1.8;
        }

        /* =========================================
           6. SERVICE PHOTOS
        ========================================= */

        .service-photo {
            position: relative;
            min-width: 0;
            min-height: 150px;

            overflow: hidden;
            border-radius: 0 19px 0 42px;
            background: #E9DED3;
        }

        .service-photo img {
            position: absolute;
            inset: 0;

            display: block;
            width: 100%;
            height: 100%;

            object-fit: cover;
            transition: transform .55s ease;
        }

        .service-card:hover .service-photo img {
            transform: scale(1.09);
        }

        .service-photo::after {
            content: "";
            position: absolute;
            inset: 0;

            background: linear-gradient(
                120deg,
                rgba(255,255,255,.18),
                transparent 70%
            );

            pointer-events: none;
        }

        /* =========================================
           7. CARD FOOTER
        ========================================= */

        .service-footer {
            grid-column: 1 / -1;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;

            margin: 0 20px 17px 22px;
            padding-top: 13px;

            border-top: 1px solid #EEEAE5;
        }

        .official-label {
            display: flex;
            align-items: center;
            gap: 7px;

            color: #59616A;
            font-size: 10px;
            font-weight: 600;
        }

        .official-label svg {
            width: 18px;
            height: 18px;
            flex-shrink: 0;

            fill: none;
            stroke: var(--copper);
            stroke-width: 1.9;
        }

        .service-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;

            padding: 11px 17px;
            flex-shrink: 0;

            border-radius: 9px;

            background: linear-gradient(120deg, #D77B3E, #B95725);
            color: white;
            text-decoration: none;

            font-size: 11px;
            font-weight: 800;

            box-shadow: 0 4px 12px rgba(198,107,50,.22);
            transition: all .25s ease;
        }

        .service-button:hover {
            background: var(--copper-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 17px rgba(198,107,50,.3);
        }

        .service-button span {
            font-size: 17px;
            transition: transform .25s ease;
        }

        .service-button:hover span {
            transform: translateX(4px);
        }

        /* =========================================
           8. UPT LAB
        ========================================= */

        .service-card.lab-card {
            grid-column: 1 / -1;

            width: min(760px, 100%);
            justify-self: center;

            min-height: 230px;
            grid-template-columns: minmax(0, 1fr) 245px;
        }

        /* =========================================
           9. FULL WIDTH ORANGE WAVES
        ========================================= */

        .wave-decoration {
            position: absolute;
            z-index: 1;

            left: 50%;
            bottom: 0;

            width: 100vw;
            max-width: none;
            height: 250px;

            transform: translateX(-50%);

            overflow: hidden;
            pointer-events: none;
        }

        .wave-decoration svg {
            display: block;
            width: 100%;
            height: 100%;
        }

        /* =========================================
           10. EMPTY STATE
        ========================================= */

        .empty {
            position: relative;
            z-index: 2;

            padding: 55px 25px;
            text-align: center;

            border-radius: 20px;
            background: rgba(255,255,255,.94);

            box-shadow: 0 10px 25px rgba(41,47,54,.08);
        }

        .empty h3 {
            margin-bottom: 8px;
        }

        .empty p {
            color: var(--muted);
            font-size: 13px;
        }

        /* =========================================
           11. FOOTER
        ========================================= */

        .footer {
            position: relative;
            z-index: 3;

            width: 100%;
            padding: 27px 20px;

            text-align: center;
            color: white;

            background: var(--dark);
            border-top: 4px solid var(--copper);

            font-size: 12px;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer .muted {
            color: #C2C7CB;
        }

        /* =========================================
           12. ANIMATION
        ========================================= */

        @keyframes cardEnter {
            from {
                opacity: 0;
                transform: translateY(22px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                transition-duration: .01ms !important;
            }
        }

        /* =========================================
           13. TABLET
        ========================================= */

        @media (max-width: 950px) {
            .service-card {
                grid-template-columns: minmax(0, 1fr) 150px;
            }

            .service-card h3 {
                font-size: 18px;
            }

            .service-content {
                padding-left: 17px;
            }

            .service-footer {
                margin-left: 17px;
                margin-right: 14px;
            }
        }

        /* =========================================
           14. MOBILE
        ========================================= */

        @media (max-width: 650px) {
            body {
                background-attachment: scroll;
                background-position: center top;
            }

            .header {
                padding: 12px 15px;
            }

            .header-inner {
                gap: 10px;
            }

            .brand {
                gap: 8px;
            }

            .brand-icon {
                width: 37px;
                height: 37px;
            }

            .brand-text h1 {
                font-size: 16px;
            }

            .brand-text p {
                max-width: 155px;
                font-size: 9px;
                line-height: 1.4;
            }

            .back-home {
                padding: 9px 11px;
                gap: 5px;
                font-size: 9px;
            }

            .back-icon {
                font-size: 15px;
            }

            .hero {
                min-height: 390px;
                padding: 47px 17px 85px;
            }

            .hero h2 {
                font-size: 39px;
                letter-spacing: -1.5px;
            }

            .hero-description {
                font-size: 12px;
            }

            .services {
                width: calc(100% - 30px);
                margin-top: -15px;
                padding-bottom: 180px;
            }

            .service-grid {
                grid-template-columns: minmax(0, 1fr);
                gap: 18px;
            }

            .service-card,
            .service-card.lab-card {
                grid-column: auto;

                width: 100%;
                min-height: 225px;

                grid-template-columns: minmax(0, 1fr) 120px;
            }

            .service-content {
                padding: 18px 0 0 15px;
            }

            .service-top {
                gap: 8px;
            }

            .service-icon {
                width: 48px;
                height: 48px;
            }

            .service-icon svg {
                width: 26px;
                height: 26px;
            }

            .service-label {
                padding: 5px 8px;
                font-size: 8px;
            }

            .service-card h3 {
                font-size: 16px;
            }

            .service-card .description {
                font-size: 10px;
            }

            .service-photo {
                min-height: 125px;
            }

            .service-footer {
                margin: 0 11px 14px 15px;
                padding-top: 11px;
            }

            .official-label {
                gap: 5px;
                font-size: 9px;
            }

            .official-label svg {
                width: 15px;
                height: 15px;
            }

            .service-button {
                padding: 10px 11px;
                gap: 5px;
                font-size: 9px;
            }

            .wave-decoration {
                width: 100vw;
                max-width: none;
                height: 160px;
            }

            .footer {
                padding: 23px 15px;
                font-size: 10px;
            }
        }

        /* =========================================
           15. SMALL MOBILE
        ========================================= */

        @media (max-width: 380px) {
            .brand-text p {
                max-width: 120px;
            }

            .back-home {
                padding: 8px 9px;
                font-size: 8px;
            }

            .service-card,
            .service-card.lab-card {
                grid-template-columns: minmax(0, 1fr) 100px;
            }

            .service-button {
                padding: 9px;
                font-size: 8px;
            }

            .official-label {
                font-size: 8px;
            }
        }

    </style>
</head>

<body>

    <!-- =====================================
         HEADER
    ====================================== -->

    <header class="header">

        <div class="header-inner">

            <a href="{{ url('/') }}" class="brand">

                <div class="brand-icon">
                    <img
                        src="{{ asset('images/logo-sulawesi-tengah.png') }}"
                        alt="Logo Sulawesi Tengah"
                    >
                </div>

                <div class="brand-text">
                    <h1>SICANTIK</h1>
                    <p>Dinas Energi dan Sumber Daya Mineral</p>
                </div>

            </a>

            <a href="{{ url('/') }}" class="back-home">
                <span class="back-icon">←</span>
                <span>Kembali ke Beranda</span>
            </a>

        </div>

    </header>


    <!-- =====================================
         HERO
    ====================================== -->

    <section class="hero">

        <div class="hero-content">

            <div class="hero-badge">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2">

                    <rect x="3" y="3" width="7" height="7" rx="1"/>
                    <rect x="14" y="3" width="7" height="7" rx="1"/>
                    <rect x="3" y="14" width="7" height="7" rx="1"/>
                    <rect x="14" y="14" width="7" height="7" rx="1"/>

                </svg>

                LAYANAN DIGITAL

            </div>

            <h2>
                Layanan <span>Online</span>
            </h2>

            <p class="hero-description">
                Akses berbagai layanan Dinas Energi dan Sumber Daya Mineral
                secara mudah, cepat, dan transparan melalui satu platform digital.
            </p>

            <div class="hero-divider">
                <span></span>
                <b></b>
                <span></span>
            </div>

        </div>

    </section>


    <!-- =====================================
         DAFTAR LAYANAN
    ====================================== -->

    <main class="services">

        @if($bidangLayanans->count())

            <div class="service-grid">

                @foreach($bidangLayanans as $bidang)

                    @php
                        $nama = strtolower($bidang->nama);

                        $foto = 'ebt.jpeg';
                        $label = 'BIDANG ESDM';
                        $isLab = false;

                        if(str_contains($nama, 'geologi')) {

                            $foto = 'geologi.jpeg';

                        } elseif(str_contains($nama, 'ketenagalistrikan')) {

                            $foto = 'ketenagalistrikan.jpeg';

                        } elseif(str_contains($nama, 'minerba') || str_contains($nama, 'mineral')) {

                            $foto = 'minerba.jpeg';

                        } elseif(str_contains($nama, 'upt') || str_contains($nama, 'lab')) {

                            $foto = 'upt-lab.jpeg';
                            $label = 'UPT ESDM';
                            $isLab = true;

                        } elseif(str_contains($nama, 'ebt') || str_contains($nama, 'energi')) {

                            $foto = 'ebt.jpeg';

                        }
                    @endphp


                    <article class="service-card {{ $isLab ? 'lab-card' : '' }}">

                        <!-- KONTEN CARD -->

                        <div class="service-content">

                            <div class="service-top">

                                <div class="service-icon">

                                    @if(str_contains($nama, 'ebt') || str_contains($nama, 'energi'))

                                        <!-- EBT -->
                                        <svg viewBox="0 0 24 24">

                                            <circle cx="12" cy="12" r="4"/>

                                            <path d="
                                                M12 2v2
                                                m0 16v2
                                                M4.93 4.93l1.42 1.42
                                                m11.3 11.3 1.42 1.42
                                                M2 12h2
                                                m16 0h2
                                                M4.93 19.07l1.42-1.42
                                                m11.3-11.3 1.42-1.42
                                            "/>

                                        </svg>

                                    @elseif(str_contains($nama, 'geologi'))

                                        <!-- GEOLOGI -->
                                        <svg viewBox="0 0 24 24">

                                            <path d="m2 20 8-14 4 7 3-5 5 12H2Z"/>
                                            <path d="m7 20 3-5 3 3 3-4 3 6"/>

                                        </svg>

                                    @elseif(str_contains($nama, 'ketenagalistrikan'))

                                        <!-- KETENAGALISTRIKAN -->
                                        <svg viewBox="0 0 24 24">

                                            <path d="m13 2-9 12h7l-1 8 10-13h-7l1-7Z"/>

                                        </svg>

                                    @elseif(str_contains($nama, 'minerba') || str_contains($nama, 'mineral'))

                                        <!-- MINERBA -->
                                        <svg viewBox="0 0 24 24">

                                            <path d="M3 18h18M5 18V8l7-5 7 5v10"/>
                                            <path d="M9 18v-6h6v6"/>

                                        </svg>

                                    @elseif($isLab)

                                        <!-- UPT LAB -->
                                        <svg viewBox="0 0 24 24">

                                            <path d="M9 3h6M10 3v7l-5 9a1 1 0 0 0 1 2h12a1 1 0 0 0 1-2l-5-9V3"/>
                                            <path d="M8 15h8M9 18h6"/>

                                        </svg>

                                    @else

                                        <!-- ICON DEFAULT -->
                                        <svg viewBox="0 0 24 24">

                                            <path d="M3 21h18M5 21V8l7-5 7 5v13"/>
                                            <path d="M9 21v-7h6v7"/>

                                        </svg>

                                    @endif

                                </div>

                                <span class="service-label">
                                    {{ $label }}
                                </span>

                            </div>


                            <h3>{{ $bidang->nama }}</h3>

                            <p class="description">
                                {{ $bidang->deskripsi ?: 'Layanan informasi dan pengajuan bidang ESDM melalui SICANTIK.' }}
                            </p>

                        </div>


                        <!-- FOTO -->

                        <div class="service-photo">

                            <img
                                src="{{ asset('images/layanan/' . $foto) }}"
                                alt="Layanan {{ $bidang->nama }}"
                                loading="lazy"
                            >

                        </div>


                        <!-- FOOTER CARD -->

                        <div class="service-footer">

                            <div class="official-label">

                                <svg viewBox="0 0 24 24">

                                    <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/>
                                    <path d="m9 12 2 2 4-4"/>

                                </svg>

                                Layanan resmi SICANTIK

                            </div>


                            <a
                                href="{{ route('layanan-online.show', $bidang) }}"
                                class="service-button"
                            >

                                Lihat Layanan

                                <span>→</span>

                            </a>

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            <div class="empty">

                <h3>Belum Ada Layanan</h3>

                <p>
                    Saat ini belum tersedia layanan online.
                </p>

            </div>

        @endif


        <!-- =================================
             FULL WIDTH ORANGE WAVES
        ================================== -->

        <div class="wave-decoration">

            <svg viewBox="0 0 1440 250" preserveAspectRatio="none">

                <path
                    d="M0 75 C230 170 360 25 600 105 S1050 215 1440 55 V250 H0Z"
                    fill="#FBE8D8"
                />

                <path
                    d="M0 135 C250 220 430 70 680 145 S1100 235 1440 100 V250 H0Z"
                    fill="#F2B17F"
                />

                <path
                    d="M0 195 C280 245 460 140 730 190 S1160 255 1440 150 V250 H0Z"
                    fill="#C66B32"
                />

                <path
                    d="M0 225 C300 255 520 195 780 230 S1200 260 1440 200 V250 H0Z"
                    fill="#A95125"
                />

            </svg>

        </div>

    </main>


    <!-- =====================================
         FOOTER
    ====================================== -->

    <footer class="footer">

        <p>
            <strong>SICANTIK</strong> -
            Dinas Energi dan Sumber Daya Mineral
        </p>

        <p class="muted">
            Layanan informasi dan pengajuan secara online
        </p>

    </footer>

</body>
</html>