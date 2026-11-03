
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $bidangLayanan->nama }} - SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #F5F5F3;
            color: #292F36;
        }

        /* HEADER */
        .header {
            background: #292F36;
            color: white;
            padding: 16px 24px;
            position: relative;
            overflow: hidden;
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

        .header-inner {
            max-width: 1150px;
            margin: auto;
            padding: 0 16px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 46px;
            height: 46px;
            flex-shrink: 0;
        }

        .brand-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand h1 {
            margin: 0;
            font-size: 21px;
            font-weight: 800;
            letter-spacing: .5px;
        }

        .brand p {
            margin: 4px 0 0;
            font-size: 12px;
            color: #D1D5D8;
        }

        /* CONTAINER */
        .container {
            max-width: 1050px;
            margin: auto;
            padding: 45px 24px 70px;
        }

        /* BACK BUTTON */
        .back {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 25px;
            color: #A95125;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
        }

        .back:hover {
            color: #C66B32;
        }

        /* HEADING */
        .heading {
            background: white;
            border-radius: 16px;
            padding: 30px;
            border: 1px solid #E8E5E1;
            box-shadow: 0 5px 20px rgba(41, 47, 54, .05);
            margin-bottom: 35px;
            position: relative;
            overflow: hidden;
        }

        .heading::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(
                to bottom,
                #F2B17F,
                #C66B32,
                #8F421F
            );
        }

        .badge {
            display: inline-block;
            background: #FCEBDD;
            color: #A94F23;
            padding: 7px 14px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 13px;
        }

        .heading h2 {
            margin: 0 0 12px;
            color: #292F36;
            font-size: 29px;
            font-weight: 800;
        }

        .heading p {
            margin: 0;
            color: #68717A;
            line-height: 1.8;
            font-size: 14px;
        }

        /* SECTION */
        .section-title {
            margin: 0 0 20px;
            color: #292F36;
            font-size: 22px;
            font-weight: 800;
        }

        .section-subtitle {
            color: #68717A;
            font-size: 14px;
            margin: -10px 0 23px;
        }

        /* SERVICE LIST */
        .service-list {
            display: grid;
            gap: 20px;
        }

        .service-card {
            background: white;
            border-radius: 15px;
            padding: 26px;
            border: 1px solid #E8E5E1;
            box-shadow: 0 4px 16px rgba(41, 47, 54, .05);
            transition: all .25s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(41, 47, 54, .09);
        }

        .service-card h3 {
            margin: 0 0 12px;
            color: #292F36;
            font-size: 20px;
            font-weight: 700;
        }

        .description {
            color: #68717A;
            line-height: 1.8;
            margin: 0 0 18px;
            font-size: 14px;
        }

        .service-number {
            display: inline-block;
            background: #FCEBDD;
            padding: 8px 12px;
            border-radius: 7px;
            font-size: 12px;
            color: #A95125;
            font-weight: 700;
            margin-bottom: 18px;
        }

        /* BUTTON */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 12px 20px;
            background: #C66B32;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            transition: all .2s ease;
        }

        .btn:hover {
            background: #A95125;
            color: white;
            transform: translateY(-2px);
        }

        /* EMPTY */
        .empty {
            background: white;
            border: 1px dashed #D6D1CA;
            border-radius: 14px;
            padding: 42px 20px;
            text-align: center;
            color: #68717A;
        }

        .empty h3 {
            margin: 0 0 10px;
            color: #292F36;
        }

        .empty p {
            margin: 0;
            line-height: 1.7;
        }

        /* FOOTER */
        .footer {
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

        .muted {
            color: #B9BEC3;
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {
            .header {
                padding: 16px 12px;
            }

            .header-inner {
                padding: 0 8px;
            }

            .brand-icon {
                width: 40px;
                height: 40px;
            }

            .brand h1 {
                font-size: 19px;
            }

            .brand p {
                font-size: 11px;
            }

            .container {
                padding: 30px 17px 50px;
            }

            .heading {
                padding: 23px;
            }

            .heading h2 {
                font-size: 24px;
            }

            .service-card {
                padding: 21px;
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

                <div>
                    <h1>SICANTIK</h1>
                    <p>Dinas Energi dan Sumber Daya Mineral</p>
                </div>

            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="container">

        <a href="{{ route('layanan-online.index') }}" class="back">
            <span>&larr;</span>
            Kembali ke Daftar Layanan
        </a>

        <!-- INFORMASI BIDANG -->
        <section class="heading">

            <span class="badge">
                DETAIL LAYANAN
            </span>

            <h2>{{ $bidangLayanan->nama }}</h2>

            <p>
                {{ $bidangLayanan->deskripsi ?: 'Informasi layanan Dinas Energi dan Sumber Daya Mineral.' }}
            </p>

        </section>

        <!-- DAFTAR LAYANAN -->
        <section>

            <h2 class="section-title">
                Daftar Layanan
            </h2>

            <p class="section-subtitle">
                Pilih layanan yang ingin Anda ajukan secara online.
            </p>

            @if($layanans->count())

                <div class="service-list">

                    @foreach($layanans as $layanan)

                        <article class="service-card">

                            <span class="service-number">
                                LAYANAN ONLINE
                            </span>

                            <h3>
                                {{ $layanan->nama }}
                            </h3>

                            <p class="description">
                                {{ $layanan->deskripsi ?: 'Silakan pilih layanan ini untuk melihat dan mengisi formulir pengajuan.' }}
                            </p>

                            <a
                                href="{{ route('layanan-online.pengajuan.create', $layanan) }}"
                                class="btn"
                            >
                                Ajukan Layanan
                                <span>&rarr;</span>
                            </a>

                        </article>

                    @endforeach

                </div>

            @else

                <div class="empty">

                    <h3>Belum Ada Layanan</h3>

                    <p>
                        Saat ini belum tersedia layanan pada bidang ini.
                        Silakan periksa kembali di lain waktu.
                    </p>

                </div>

            @endif

        </section>

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
