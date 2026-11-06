
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengajuan Berhasil - Si Cantik</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --charcoal: #292F36;
            --charcoal-light: #343C45;
            --copper: #C66B32;
            --copper-dark: #A95425;
            --warm-white: #F5F5F3;
            --white: #FFFFFF;
            --gray: #68717A;
            --gray-light: #E7E7E3;
            --pale-copper: #FCEBDD;
            --success: #267A55;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--warm-white);
            color: var(--charcoal);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        /* HEADER */

        .header {
            background: var(--charcoal);
            color: white;
            padding: 20px 7%;
            border-bottom: 3px solid var(--copper);
        }

        .header-inner {
            max-width: 1100px;
            margin: auto;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .brand-logo {
            width: 55px;
            height: 55px;
            object-fit: contain;
            background: white;
            border-radius: 12px;
            padding: 5px;
        }

        .brand h1 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 22px;
            font-weight: 800;
        }

        .brand p {
            color: #D1D5D8;
            font-size: 12px;
            margin-top: 3px;
        }

        .brand-line {
            width: 35px;
            height: 3px;
            background: var(--copper);
            margin-top: 6px;
            border-radius: 5px;
        }

        /* CONTAINER */

        .container {
            max-width: 900px;
            margin: auto;
            padding: 55px 20px 70px;
        }

        /* SUCCESS CARD */

        .success-card {
            position: relative;
            overflow: hidden;
            background: var(--white);
            border: 1px solid var(--gray-light);
            border-radius: 18px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 12px 35px rgba(41, 47, 54, .07);
        }

        .success-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--copper);
        }

        .success-icon {
            width: 78px;
            height: 78px;
            margin: 0 auto 22px;
            border-radius: 50%;
            background: var(--pale-copper);
            border: 2px solid #F1C7A9;
            color: var(--copper-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 37px;
            font-weight: 700;
        }

        .success-card h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--charcoal);
            font-size: 27px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .success-message {
            max-width: 600px;
            margin: 0 auto 30px;
            color: var(--gray);
            font-size: 13px;
            line-height: 1.9;
        }

        .success-label {
            display: inline-block;
            color: var(--success);
            background: #E9F5EE;
            border: 1px solid #C9E5D4;
            border-radius: 30px;
            padding: 6px 14px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .5px;
            margin-bottom: 20px;
        }

        /* NOMOR PENGAJUAN */

        .nomor-box {
            background: var(--pale-copper);
            border: 1px solid #EEC6A8;
            border-radius: 13px;
            padding: 24px;
            margin-bottom: 28px;
        }

        .nomor-label {
            display: block;
            color: var(--gray);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 9px;
        }

        .nomor {
            display: block;
            color: var(--copper-dark);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 27px;
            font-weight: 800;
            letter-spacing: 1px;
            word-break: break-word;
        }

        .nomor-help {
            margin-top: 10px;
            color: var(--gray);
            font-size: 11px;
        }

        /* DETAIL */

        .detail {
            text-align: left;
            border-top: 1px solid var(--gray-light);
            border-bottom: 1px solid var(--gray-light);
            margin: 25px 0;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            padding: 16px 5px;
            border-bottom: 1px solid #EEEEEA;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            color: var(--gray);
            font-size: 12px;
        }

        .detail-value {
            max-width: 65%;
            color: var(--charcoal);
            font-size: 12px;
            font-weight: 700;
            text-align: right;
            overflow-wrap: anywhere;
        }

        .status {
            color: var(--copper-dark);
            background: var(--pale-copper);
            border-radius: 20px;
            padding: 5px 12px;
            font-size: 11px;
        }

        /* IMPORTANT */

        .important {
            background: #F8F8F5;
            border: 1px solid var(--gray-light);
            border-left: 4px solid var(--copper);
            border-radius: 10px;
            padding: 17px 19px;
            text-align: left;
            color: var(--gray);
            font-size: 12px;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        .important strong {
            display: block;
            color: var(--charcoal);
            margin-bottom: 5px;
            font-size: 13px;
        }

        /* BUTTON */

        .actions {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 46px;
            padding: 12px 21px;
            border-radius: 9px;
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            font-weight: 700;
            transition: .25s;
        }

        .btn-primary {
            background: var(--copper);
            color: white;
            box-shadow: 0 5px 13px rgba(198, 107, 50, .2);
        }

        .btn-primary:hover {
            background: var(--copper-dark);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: #F0F0ED;
            border: 1px solid #E2E2DE;
            color: var(--charcoal);
        }

        .btn-secondary:hover {
            background: #E5E5E0;
        }

        /* FOOTER */

        .footer {
            background: var(--charcoal);
            border-top: 3px solid var(--copper);
            color: white;
            text-align: center;
            padding: 25px 20px;
            font-size: 12px;
        }

        .footer p {
            margin: 5px 0;
        }

        .muted {
            color: #AEB5BB;
            font-size: 11px;
        }

        /* RESPONSIVE */

        @media (max-width: 600px) {
            .header {
                padding: 17px 20px;
            }

            .brand-logo {
                width: 46px;
                height: 46px;
            }

            .brand h1 {
                font-size: 19px;
            }

            .brand p {
                font-size: 10px;
            }

            .container {
                padding: 30px 15px 45px;
            }

            .success-card {
                padding: 32px 20px;
            }

            .success-card h2 {
                font-size: 22px;
            }

            .nomor {
                font-size: 21px;
            }

            .detail-row {
                flex-direction: column;
                gap: 6px;
            }

            .detail-value {
                max-width: 100%;
                text-align: left;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<header class="header">
    <div class="header-inner">

        <img
            src="{{ asset('images/logo-sulawesi-tengah.png') }}"
            alt="Logo Sulawesi Tengah"
            class="brand-logo"
        >

        <div class="brand">
            <h1>Si Cantik</h1>
            <p>Dinas Energi dan Sumber Daya Mineral</p>
            <div class="brand-line"></div>
        </div>

    </div>
</header>

<main class="container">

    <div class="success-card">

        <div class="success-icon">
            ✓
        </div>

        <span class="success-label">
            PENGAJUAN TERCATAT
        </span>

        <h2>Pengajuan Berhasil Dikirim</h2>

        <p class="success-message">
            Pengajuan layanan Anda telah berhasil diterima oleh sistem.
            Silakan simpan nomor pengajuan berikut untuk melakukan
            pengecekan status pengajuan.
        </p>

        {{-- NOMOR PENGAJUAN --}}
        <div class="nomor-box">

            <span class="nomor-label">
                NOMOR PENGAJUAN
            </span>

            <span class="nomor">
                {{ $pengajuanLayanan->nomor_pengajuan }}
            </span>

            <p class="nomor-help">
                Simpan nomor ini untuk pengecekan status pengajuan.
            </p>

        </div>

        {{-- DETAIL --}}
        <div class="detail">

            <div class="detail-row">
                <span class="detail-label">Layanan</span>

                <span class="detail-value">
                    {{ $pengajuanLayanan->layanan->nama }}
                </span>
            </div>

            <div class="detail-row">
                <span class="detail-label">Bidang</span>

                <span class="detail-value">
                    {{ $pengajuanLayanan->layanan->bidangLayanan->nama }}
                </span>
            </div>

            <div class="detail-row">
                <span class="detail-label">Nama Pemohon</span>

                <span class="detail-value">
                    {{ $pengajuanLayanan->nama_lengkap }}
                </span>
            </div>

            <div class="detail-row">
                <span class="detail-label">Status</span>

                <span class="detail-value status">
                    {{ $pengajuanLayanan->status }}
                </span>
            </div>

        </div>

        {{-- PERINGATAN --}}
        <div class="important">

            <strong>Penting</strong>

            Jangan kehilangan nomor pengajuan Anda.
            Nomor tersebut diperlukan untuk melihat perkembangan
            status pengajuan layanan Anda.

        </div>

        {{-- ACTION --}}
        <div class="actions">

            <a
                href="{{ route('pengajuan-bantuan.cek-status') }}"
                class="btn btn-primary"
            >
                Cek Status Pengajuan →
            </a>

            <a
                href="{{ route('layanan-online.index') }}"
                class="btn btn-secondary"
            >
                Kembali ke Layanan Online
            </a>

        </div>

    </div>

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