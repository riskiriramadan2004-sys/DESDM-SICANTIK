<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaduan Berhasil - DESDM SICANTIK</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .header {
            background: #0f4c81;
            color: white;
            padding: 20px 0;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: auto;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .brand h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .brand p {
            font-size: 14px;
            opacity: 0.9;
        }

        .back-link {
            color: white;
            text-decoration: none;
            border: 1px solid rgba(255,255,255,0.7);
            padding: 9px 15px;
            border-radius: 6px;
            font-size: 14px;
        }

        .back-link:hover {
            background: rgba(255,255,255,0.15);
        }

        .page {
            padding: 50px 0;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        .icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            font-weight: bold;
        }

        .title {
            color: #15803d;
            font-size: 28px;
            margin-bottom: 12px;
        }

        .description {
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .nomor-box {
            background: #f0f7ff;
            border: 1px solid #bfdbfe;
            border-radius: 10px;
            padding: 22px;
            margin-bottom: 25px;
        }

        .nomor-label {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .nomor {
            color: #0f4c81;
            font-size: 26px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .info {
            background: #fff7ed;
            border: 1px solid #fed7aa;
            color: #9a3412;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 30px;
            line-height: 1.6;
            font-size: 14px;
        }

        .button {
            display: inline-block;
            text-decoration: none;
            border-radius: 7px;
            padding: 12px 22px;
            margin: 5px;
            font-size: 15px;
        }

        .button-primary {
            background: #0f4c81;
            color: white;
        }

        .button-primary:hover {
            background: #0b3b65;
        }

        .button-secondary {
            background: #e5e7eb;
            color: #374151;
        }

        .button-secondary:hover {
            background: #d1d5db;
        }

        @media (max-width: 700px) {
            .header-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .card {
                padding: 25px 20px;
            }

            .nomor {
                font-size: 21px;
            }

            .button {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="container header-content">

            <div class="brand">
                <h1>DESDM-SICANTIK</h1>
                <p>Dinas Energi dan Sumber Daya Mineral</p>
            </div>

            <a href="/" class="back-link">
                ← Kembali ke Beranda
            </a>

        </div>
    </header>

    <main class="page">
        <div class="container">

            <div class="card">

                <div class="icon">
                    ✓
                </div>

                <h2 class="title">
                    Pengaduan Berhasil Dikirim
                </h2>

                <p class="description">
                    Terima kasih. Pengaduan Anda telah berhasil diterima
                    oleh DESDM-SICANTIK dan akan ditindaklanjuti oleh petugas.
                </p>

                <div class="nomor-box">

                    <div class="nomor-label">
                        Nomor Pengaduan Anda
                    </div>

                    <div class="nomor">
                        {{ $pengaduan->nomor_pengaduan }}
                    </div>

                </div>

                <div class="info">
                    <strong>Informasi:</strong><br>

                    Simpan nomor pengaduan tersebut sebagai bukti bahwa
                    pengaduan telah berhasil dikirim.

                    Hasil atau tanggapan dari petugas akan disampaikan
                    melalui nomor WhatsApp yang Anda masukkan pada formulir
                    pengaduan.
                </div>

                <a
                    href="{{ route('pengaduan.create') }}"
                    class="button button-primary"
                >
                    Buat Pengaduan Baru
                </a>

                <a
                    href="/"
                    class="button button-secondary"
                >
                    Kembali ke Beranda
                </a>

            </div>

        </div>
    </main>

</body>
</html>