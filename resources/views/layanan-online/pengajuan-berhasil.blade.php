<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengajuan Berhasil - Si Cantik</title>

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
        }

        .header-inner {
            max-width: 900px;
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
            font-size: 16px;
            font-weight: bold;
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

        /* =========================
           CONTAINER
        ========================= */
        .container {
            max-width: 850px;
            margin: 0 auto;
            padding: 45px 20px 60px;
        }

        /* =========================
           SUCCESS CARD
        ========================= */
        .success-card {
            background: white;
            border-radius: 18px;
            padding: 40px;
            border: 1px solid #e5eaf0;
            box-shadow: 0 8px 28px rgba(15,76,129,.08);
            text-align: center;
        }

        .success-icon {
            width: 72px;
            height: 72px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #dcfce7;
            color: #15803d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            font-weight: bold;
        }

        .success-card h2 {
            margin: 0 0 10px;
            color: #123c69;
            font-size: 28px;
        }

        .success-message {
            margin: 0 auto 30px;
            max-width: 600px;
            color: #6b7280;
            line-height: 1.7;
            font-size: 15px;
        }

        /* =========================
           NOMOR PENGAJUAN
        ========================= */
        .nomor-box {
            background: #f0f7ff;
            border: 1px solid #bfdbfe;
            border-radius: 12px;
            padding: 22px;
            margin-bottom: 25px;
        }

        .nomor-label {
            display: block;
            color: #64748b;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .nomor {
            display: block;
            color: #155aa8;
            font-size: 27px;
            font-weight: bold;
            letter-spacing: 1px;
            word-break: break-word;
        }

        .nomor-help {
            margin: 10px 0 0;
            color: #64748b;
            font-size: 12px;
        }

        /* =========================
           DETAIL
        ========================= */
        .detail {
            text-align: left;
            border-top: 1px solid #e5e7eb;
            border-bottom: 1px solid #e5e7eb;
            margin: 25px 0;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 15px 5px;
            border-bottom: 1px solid #edf0f4;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            color: #64748b;
            font-size: 14px;
        }

        .detail-value {
            color: #1f2937;
            font-size: 14px;
            font-weight: bold;
            text-align: right;
        }

        .status {
            color: #b45309;
        }

        /* =========================
           IMPORTANT
        ========================= */
        .important {
            background: #fffbeb;
            border: 1px solid #fde68a;
            border-radius: 10px;
            padding: 16px;
            text-align: left;
            color: #92400e;
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 28px;
        }

        .important strong {
            display: block;
            margin-bottom: 4px;
        }

        /* =========================
           BUTTON
        ========================= */
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
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .btn-primary {
            background: #155aa8;
            color: white;
        }

        .btn-primary:hover {
            background: #0d4789;
        }

        .btn-secondary {
            background: #f1f5f9;
            color: #475569;
        }

        .btn-secondary:hover {
            background: #e2e8f0;
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

        .muted {
            opacity: .75;
        }

        /* =========================
           RESPONSIVE
        ========================= */
        @media (max-width: 600px) {

            .container {
                padding: 30px 16px 45px;
            }

            .success-card {
                padding: 28px 20px;
            }

            .success-card h2 {
                font-size: 24px;
            }

            .nomor {
                font-size: 22px;
            }

            .detail-row {
                flex-direction: column;
                gap: 5px;
            }

            .detail-value {
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

    <div class="success-card">

        <div class="success-icon">
            ✓
        </div>

        <h2>
            Pengajuan Berhasil Dikirim
        </h2>

        <p class="success-message">
            Pengajuan layanan Anda telah berhasil diterima oleh sistem.
            Silakan simpan nomor pengajuan berikut untuk melakukan pengecekan
            status pengajuan.
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

                <span class="detail-label">
                    Layanan
                </span>

                <span class="detail-value">
                    {{ $pengajuanLayanan->layanan->nama }}
                </span>

            </div>


            <div class="detail-row">

                <span class="detail-label">
                    Bidang
                </span>

                <span class="detail-value">
                    {{ $pengajuanLayanan->layanan->bidangLayanan->nama }}
                </span>

            </div>


            <div class="detail-row">

                <span class="detail-label">
                    Nama Pemohon
                </span>

                <span class="detail-value">
                    {{ $pengajuanLayanan->nama_lengkap }}
                </span>

            </div>


            <div class="detail-row">

                <span class="detail-label">
                    Status
                </span>

                <span class="detail-value status">
                    {{ $pengajuanLayanan->status }}
                </span>

            </div>

        </div>


        {{-- PERINGATAN --}}
        <div class="important">

            <strong>
                Penting
            </strong>

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