<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cek Status Pengajuan - Dinas ESDM</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            color: #1f2937;
        }

        .container {
            width: 90%;
            max-width: 700px;
            margin: 60px auto;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 35px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            text-align: center;
            color: #123c69;
        }

        .subtitle {
            text-align: center;
            color: #6b7280;
            margin-bottom: 30px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 15px;
            margin-bottom: 15px;
        }

        input:focus {
            outline: none;
            border-color: #2563eb;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #123c69;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #0d2f52;
        }

        .alert {
            padding: 14px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
        }

        .result {
            margin-top: 30px;
            padding: 25px;
            background: #f8fafc;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }

        .result h2 {
            margin-top: 0;
            color: #123c69;
        }

        .row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 12px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .row:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: bold;
        }

        .status {
            font-weight: bold;
            color: #b45309;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #123c69;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Cek Status Pengajuan</h1>

        <p class="subtitle">
            Masukkan nomor pengajuan untuk melihat status pengajuan bantuan Anda.
        </p>

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('pengajuan-bantuan.hasil-status') }}" method="POST">
            @csrf

            <label for="nomor_pengajuan">
                Nomor Pengajuan
            </label>

            <input
                type="text"
                id="nomor_pengajuan"
                name="nomor_pengajuan"
                value="{{ old('nomor_pengajuan') }}"
                placeholder="Contoh: ESDM-20260921-0001"
                required
            >

            <button type="submit">
                Cek Status
            </button>
        </form>

        @isset($pengajuan)

            <div class="result">

                <h2>Hasil Pengajuan</h2>

                <div class="row">
                    <span class="label">Nomor Pengajuan</span>
                    <span>
                        {{ $pengajuan->nomor_pengajuan }}
                    </span>
                </div>

                <div class="row">
                    <span class="label">Nama Lengkap</span>
                    <span>
                        {{ $pengajuan->nama_lengkap }}
                    </span>
                </div>

                <div class="row">
                    <span class="label">Status</span>
                    <span class="status">
                        {{ $pengajuan->status }}
                    </span>
                </div>

            </div>

        @endisset

        <a href="{{ url('/') }}" class="back">
            ← Kembali ke halaman utama
        </a>

    </div>

</div>

</body>
</html>