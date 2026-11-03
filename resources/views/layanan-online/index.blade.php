<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Layanan Online - SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            /* area di luar body (saat overscroll / zoom out) ikut charcoal */
            background: #292F36;
        }

        /* Body dibuat kolom setinggi layar supaya footer selalu menempel di dasar */
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #F5F5F3;
            color: #292F36;
        }

        /* HEADER */
        .header {
            position: relative;
            overflow: hidden;
            color: white;
            /* kiri-kanan: tidak mepet, tapi lebih ke kiri dari sebelumnya */
            padding: 16px clamp(20px, 8vw, 150px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, .08);
            background:
                /* garis copper tipis di bawah, dari tengah ke kanan */
                linear-gradient(90deg, rgba(198, 107, 50, 0) 40%, #C66B32 70%, #E6A078 100%) left bottom / 100% 2px no-repeat,
                /* dua garis diagonal tipis */
                linear-gradient(115deg, transparent calc(50% - .6px), rgba(230, 160, 120, .7) 50%, transparent calc(50% + .6px)) 80% 0 / 150px 100% no-repeat,
                linear-gradient(115deg, transparent calc(50% - .6px), rgba(255, 255, 255, .28) 50%, transparent calc(50% + .6px)) 85% 0 / 150px 100% no-repeat,
                /* gradasi copper lembut dari kanan sampai tengah */
                linear-gradient(270deg, rgba(198, 107, 50, .45) 0%, rgba(198, 107, 50, .2) 25%, rgba(198, 107, 50, 0) 52%),
                #292F36;
        }

        .header::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 7px;
            height: 100%;
            background: linear-gradient(
                to bottom,
                #F2B17F,
                #C66B32,
                #8F421F
            );
        }

        /* Tidak lagi dipusatkan: logo & teks rata kiri */
        .header-inner {
            max-width: none;
            margin: 0;
            padding: 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .brand-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-text h1 {
            margin: 0;
            font-size: 21px;
            font-weight: 800;
            letter-spacing: .5px;
        }

        .brand-text p {
            margin: 4px 0 0;
            font-size: 12px;
            color: #D1D5D8;
        }

        /* MAIN CONTAINER
           (margin kiri-kanan saja; "margin: auto" di dalam flex kolom
           akan ikut menengahkan secara vertikal) */
        .container {
            width: 100%;
            max-width: 1150px;
            margin: 0 auto;
            padding: 55px 24px 70px;
        }

        /* INTRO */
        .intro {
            text-align: center;
            margin-bottom: 42px;
        }

        .intro-badge {
            display: inline-block;
            background: #FCEBDD;
            color: #A94F23;
            padding: 8px 17px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .intro h2 {
            margin: 0 0 12px;
            font-size: 32px;
            color: #292F36;
            font-weight: 800;
        }

        .intro p {
            margin: auto;
            max-width: 650px;
            color: #68717A;
            line-height: 1.8;
            font-size: 15px;
        }

        /* GRID */
        .bidang-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 25px;
        }

        /* CARD */
        .bidang-card {
            background: #FFFFFF;
            border-radius: 15px;
            padding: 28px;
            border: 1px solid #E8E5E1;
            box-shadow: 0 5px 20px rgba(41, 47, 54, .05);
            transition: transform .25s ease, box-shadow .25s ease;
            position: relative;
            overflow: hidden;
        }

        .bidang-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(
                to bottom,
                #F2B17F,
                #C66B32,
                #8F421F
            );
        }

        .bidang-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(41, 47, 54, .11);
        }

        .card-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 58px;
            min-height: 58px;
            padding: 0 12px;
            border-radius: 13px;
            background: #FCEBDD;
            color: #A94F23;
            font-size: 14px;
            font-weight: 800;
            margin-bottom: 19px;
        }

        .bidang-card h3 {
            margin: 0 0 11px;
            color: #292F36;
            font-size: 21px;
            font-weight: 700;
            line-height: 1.4;
        }

        .bidang-card p {
            margin: 0;
            color: #68717A;
            line-height: 1.8;
            min-height: 52px;
            font-size: 14px;
        }

        /* BUTTON */
        .card-footer {
            margin-top: 23px;
            padding-top: 18px;
            border-top: 1px solid #F0EEEB;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 12px 19px;
            background: #C66B32;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: all .2s ease;
        }

        .btn:hover {
            background: #A95125;
            color: white;
            transform: translateY(-2px);
        }

        .btn-arrow {
            font-size: 18px;
            line-height: 1;
        }

        /* EMPTY STATE */
        .empty {
            background: white;
            border: 1px dashed #D6D1CA;
            border-radius: 14px;
            padding: 40px 20px;
            text-align: center;
            color: #68717A;
        }

        .empty h3 {
            margin: 0 0 8px;
            color: #292F36;
        }

        .empty p {
            margin: 0;
        }

        /* FOOTER: menempel di dasar halaman, seluruh area bawah charcoal */
        .footer {
            margin-top: auto;
            background: #292F36;
            color: white;
            text-align: center;
            padding: 25px 20px;
            font-size: 13px;
            border-top: 4px solid #C66B32;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer .muted {
            color: #B9BEC3;
        }

        /* RESPONSIVE */
        @media (max-width: 800px) {
            .bidang-grid {
                grid-template-columns: 1fr;
            }

            .intro h2 {
                font-size: 27px;
            }
        }

        @media (max-width: 600px) {
            .header {
                padding: 16px 16px;
            }

            .brand-icon {
                width: 40px;
                height: 40px;
            }

            .brand-text h1 {
                font-size: 19px;
            }

            .brand-text p {
                font-size: 11px;
            }

            .container {
                padding: 38px 17px 50px;
            }

            .intro h2 {
                font-size: 24px;
            }

            .bidang-card {
                padding: 23px;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="header-inner">

            <div class="brand">

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

            </div>

        </div>
    </header>

    <!-- CONTENT -->
    <main class="container">

        <div class="intro">

            <span class="intro-badge">
                LAYANAN DIGITAL
            </span>

            <h2>Layanan Online</h2>

            <p>
                Akses berbagai layanan Dinas Energi dan Sumber Daya Mineral
                secara mudah dan online.
            </p>

        </div>

        @if($bidangLayanans->count())

            <div class="bidang-grid">

                @foreach ($bidangLayanans as $bidang)

                    <div class="bidang-card">

                        <div class="card-icon">
                            ESDM
                        </div>

                        <h3>
                            {{ $bidang->nama }}
                        </h3>

                        <p>
                            {{ $bidang->deskripsi }}
                        </p>

                        <div class="card-footer">

                            <a
                                href="{{ route('layanan-online.show', $bidang) }}"
                                class="btn"
                            >
                                Lihat Layanan

                                <span class="btn-arrow">
                                    →
                                </span>
                            </a>

                        </div>

                    </div>

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

    </main>

    <!-- FOOTER -->
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