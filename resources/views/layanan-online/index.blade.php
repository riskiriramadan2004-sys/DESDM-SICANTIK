<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Layanan Online - Si Cantik</title>

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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.10);
        }

        .header-inner {
            max-width: 1150px;
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
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
        }

        .brand-text h1 {
            margin: 0;
            font-size: 25px;
            line-height: 1.2;
        }

        .brand-text p {
            margin: 5px 0 0;
            font-size: 14px;
            opacity: 0.9;
        }

        /* =========================
           CONTAINER
        ========================= */
        .container {
            max-width: 1150px;
            margin: 0 auto;
            padding: 45px 20px 60px;
        }

        /* =========================
           INTRO
        ========================= */
        .intro {
            text-align: center;
            margin-bottom: 38px;
        }

        .intro-badge {
            display: inline-block;
            background: #e7f1fb;
            color: #155aa8;
            padding: 7px 15px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 13px;
        }

        .intro h2 {
            margin: 0 0 10px;
            font-size: 30px;
            color: #123c69;
        }

        .intro p {
            margin: 0 auto;
            max-width: 650px;
            color: #6b7280;
            line-height: 1.7;
            font-size: 15px;
        }

        /* =========================
           GRID
        ========================= */
        .bidang-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        /* =========================
           CARD
        ========================= */
        .bidang-card {
            background: white;
            border-radius: 16px;
            padding: 28px;
            border: 1px solid #e5eaf0;
            box-shadow: 0 5px 20px rgba(15, 76, 129, 0.07);
            transition: all 0.25s ease;
            position: relative;
            overflow: hidden;
        }

        .bidang-card::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 5px;
            height: 100%;
            background: #1976c5;
        }

        .bidang-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(15, 76, 129, 0.13);
        }

        .card-icon {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            background: #eaf3fb;
            color: #155aa8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        .bidang-card h3 {
            margin: 0 0 10px;
            color: #123c69;
            font-size: 21px;
        }

        .bidang-card p {
            margin: 0;
            color: #6b7280;
            line-height: 1.7;
            min-height: 52px;
            font-size: 14px;
        }

        /* =========================
           BUTTON
        ========================= */
        .card-footer {
            margin-top: 22px;
            padding-top: 18px;
            border-top: 1px solid #edf0f4;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 18px;
            background: #155aa8;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: #0d4789;
        }

        .btn-arrow {
            font-size: 17px;
            line-height: 1;
        }

        /* =========================
           EMPTY STATE
        ========================= */
        .empty {
            background: white;
            border: 1px dashed #cbd5e1;
            border-radius: 14px;
            padding: 40px 20px;
            text-align: center;
            color: #6b7280;
        }

        .empty h3 {
            margin: 0 0 8px;
            color: #374151;
        }

        .empty p {
            margin: 0;
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

        .footer .muted {
            opacity: 0.75;
        }

        /* =========================
           RESPONSIVE
        ========================= */
        @media (max-width: 800px) {
            .bidang-grid {
                grid-template-columns: 1fr;
            }

            .intro h2 {
                font-size: 26px;
            }
        }

        @media (max-width: 600px) {
            .header {
                padding: 20px 16px;
            }

            .brand-icon {
                width: 42px;
                height: 42px;
                font-size: 20px;
            }

            .brand-text h1 {
                font-size: 21px;
            }

            .brand-text p {
                font-size: 12px;
            }

            .container {
                padding: 32px 16px 45px;
            }

            .intro {
                margin-bottom: 28px;
            }

            .intro h2 {
                font-size: 24px;
            }

            .bidang-card {
                padding: 23px;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    {{-- =========================
         HEADER
    ========================= --}}
    <header class="header">
        <div class="header-inner">

            <div class="brand">

                <div class="brand-icon">
                    E
                </div>

                <div class="brand-text">
                    <h1>Si Cantik</h1>
                    <p>Dinas Energi dan Sumber Daya Mineral</p>
                </div>

            </div>

        </div>
    </header>


    {{-- =========================
         CONTENT
    ========================= --}}
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


    {{-- =========================
         FOOTER
    ========================= --}}
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