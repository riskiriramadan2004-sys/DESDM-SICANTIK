<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $bidangLayanan->nama }} - Si Cantik</title>

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

        .header {
            background: linear-gradient(135deg, #0f4c81, #1976c5);
            color: white;
            padding: 24px 20px;
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
            background: rgba(255,255,255,.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
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

        .container {
            max-width: 1050px;
            margin: 0 auto;
            padding: 40px 20px 60px;
        }

        .back {
            display: inline-block;
            margin-bottom: 25px;
            color: #155aa8;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .back:hover {
            text-decoration: underline;
        }

        .heading {
            background: white;
            border-radius: 16px;
            padding: 28px;
            border: 1px solid #e5eaf0;
            box-shadow: 0 5px 20px rgba(15,76,129,.07);
            margin-bottom: 28px;
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

        .heading h2 {
            margin: 0 0 10px;
            color: #123c69;
            font-size: 28px;
        }

        .heading p {
            margin: 0;
            color: #6b7280;
            line-height: 1.7;
        }

        .section-title {
            margin: 0 0 18px;
            color: #123c69;
            font-size: 22px;
        }

        .service-list {
            display: grid;
            gap: 18px;
        }

        .service-card {
            background: white;
            border-radius: 14px;
            padding: 24px;
            border: 1px solid #e5eaf0;
            box-shadow: 0 4px 16px rgba(15,76,129,.06);
        }

        .service-card h3 {
            margin: 0 0 10px;
            color: #123c69;
            font-size: 20px;
        }

        .description {
            color: #6b7280;
            line-height: 1.7;
            margin-bottom: 18px;
        }

        .service-number {
            display: inline-block;
            background: #f1f5f9;
            padding: 8px 12px;
            border-radius: 7px;
            font-size: 13px;
            color: #475569;
            margin-bottom: 18px;
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
        }

        .btn:hover {
            background: #0d4789;
        }

        .empty {
            background: white;
            border: 1px dashed #cbd5e1;
            border-radius: 14px;
            padding: 40px 20px;
            text-align: center;
            color: #6b7280;
        }

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

        @media (max-width: 600px) {
            .container {
                padding: 30px 16px 45px;
            }

            .heading {
                padding: 22px;
            }

            .heading h2 {
                font-size: 24px;
            }

            .service-card {
                padding: 20px;
            }

            .btn {
                width: 100%;
                justify-content: center;
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

    <a href="{{ route('layanan-online.index') }}" class="back">
        ← Kembali ke Layanan Online
    </a>

    <section class="heading">

        <span class="badge">
            BIDANG LAYANAN
        </span>

        <h2>
            {{ $bidangLayanan->nama }}
        </h2>

        @if($bidangLayanan->deskripsi)
            <p>
                {{ $bidangLayanan->deskripsi }}
            </p>
        @endif

    </section>

    <h2 class="section-title">
        Daftar Layanan
    </h2>

    @if($layanans->count())

        <div class="service-list">

            @foreach($layanans as $layanan)

                <div class="service-card">

                    <h3>
                        {{ $layanan->nama }}
                    </h3>

                    @if($layanan->deskripsi)
                        <div class="description">
                            {{ $layanan->deskripsi }}
                        </div>
                    @endif

                    <div class="service-number">
                        Nomor Layanan:
                        <strong>{{ $layanan->nomor_layanan }}</strong>
                    </div>

                    <br>

                    <a
                        href="{{ route('layanan-online.pengajuan.create', $layanan) }}"
                        class="btn"
                    >
                        Ajukan Layanan
                        <span>→</span>
                    </a>

                </div>

            @endforeach

        </div>

    @else

        <div class="empty">

            <h3>Belum Ada Layanan</h3>

            <p>
                Belum tersedia layanan pada bidang ini.
            </p>

        </div>

    @endif

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