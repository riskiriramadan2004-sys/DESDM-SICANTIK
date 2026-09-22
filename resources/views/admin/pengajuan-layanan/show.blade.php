<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Pengajuan Layanan - Admin</title>

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
            max-width: 900px;
            margin: 40px auto;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,.08);
        }

        h1,
        h2 {
            color: #123c69;
        }

        h1 {
            margin-top: 0;
        }

        .row {
            display: flex;
            gap: 20px;
            padding: 13px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .row:last-child {
            border-bottom: none;
        }

        .label {
            width: 220px;
            font-weight: bold;
        }

        .value {
            flex: 1;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 15px;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-group {
            margin-bottom: 20px;
        }

        button {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            background: #123c69;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #0d2f52;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            color: #123c69;
            text-decoration: none;
        }

        .alert {
            padding: 14px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
        }

        .status {
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    @if(session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert error">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="card">

        <h1>Detail Pengajuan Layanan</h1>

        <div class="row">
            <div class="label">Nomor Pengajuan</div>

            <div class="value">
                <strong>
                    {{ $pengajuanLayanan->nomor_pengajuan }}
                </strong>
            </div>
        </div>

        <div class="row">
            <div class="label">Layanan</div>

            <div class="value">
                {{ $pengajuanLayanan->layanan->nama ?? '-' }}
            </div>
        </div>

        <div class="row">
            <div class="label">Bidang</div>

            <div class="value">
                {{ $pengajuanLayanan->layanan->bidangLayanan->nama ?? '-' }}
            </div>
        </div>

        <div class="row">
            <div class="label">NIK</div>

            <div class="value">
                {{ $pengajuanLayanan->nik }}
            </div>
        </div>

        <div class="row">
            <div class="label">Nama Lengkap</div>

            <div class="value">
                {{ $pengajuanLayanan->nama_lengkap }}
            </div>
        </div>

        <div class="row">
            <div class="label">Nomor HP</div>

            <div class="value">
                {{ $pengajuanLayanan->nomor_hp }}
            </div>
        </div>

        <div class="row">
            <div class="label">Alamat</div>

            <div class="value">
                {{ $pengajuanLayanan->alamat }}
            </div>
        </div>

        <div class="row">
            <div class="label">Desa/Kelurahan</div>

            <div class="value">
                {{ $pengajuanLayanan->desa_kelurahan }}
            </div>
        </div>

        <div class="row">
            <div class="label">Kecamatan</div>

            <div class="value">
                {{ $pengajuanLayanan->kecamatan }}
            </div>
        </div>

        <div class="row">
            <div class="label">Kabupaten/Kota</div>

            <div class="value">
                {{ $pengajuanLayanan->kabupaten_kota }}
            </div>
        </div>

        <div class="row">
            <div class="label">Provinsi</div>

            <div class="value">
                {{ $pengajuanLayanan->provinsi }}
            </div>
        </div>

        <div class="row">
            <div class="label">Keperluan</div>

            <div class="value">
                {{ $pengajuanLayanan->keperluan }}
            </div>
        </div>

        <div class="row">
            <div class="label">Status Saat Ini</div>

            <div class="value status">
                {{ $pengajuanLayanan->status }}
            </div>
        </div>

        <div class="row">
            <div class="label">Catatan Petugas</div>

            <div class="value">
                {{ $pengajuanLayanan->catatan_petugas ?: '-' }}
            </div>
        </div>

    </div>


    <div class="card">

        <h2>Verifikasi Pengajuan</h2>

        <form
            action="{{ route(
                'admin.pengajuan-layanan.verifikasi',
                $pengajuanLayanan
            ) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="form-group">

                <label for="status">
                    Status Pengajuan
                </label>

                <select
                    name="status"
                    id="status"
                    required
                >

                    <option
                        value="Menunggu Verifikasi"
                        @selected(
                            $pengajuanLayanan->status === 'Menunggu Verifikasi'
                            || $pengajuanLayanan->status === 'menunggu_verifikasi'
                        )
                    >
                        Menunggu Verifikasi
                    </option>

                    <option
                        value="Diverifikasi"
                        @selected(
                            $pengajuanLayanan->status === 'Diverifikasi'
                        )
                    >
                        Diverifikasi
                    </option>

                    <option
                        value="Disetujui"
                        @selected(
                            $pengajuanLayanan->status === 'Disetujui'
                        )
                    >
                        Disetujui
                    </option>

                    <option
                        value="Ditolak"
                        @selected(
                            $pengajuanLayanan->status === 'Ditolak'
                        )
                    >
                        Ditolak
                    </option>

                </select>

            </div>


            <div class="form-group">

                <label for="keterangan">
                    Catatan / Keterangan Petugas
                </label>

                <textarea
                    name="keterangan"
                    id="keterangan"
                    placeholder="Masukkan catatan jika diperlukan..."
                >{{ old(
                    'keterangan',
                    $pengajuanLayanan->catatan_petugas
                ) }}</textarea>

            </div>


            <button type="submit">
                Simpan Perubahan
            </button>

        </form>

        <a
            href="{{ route('admin.pengajuan-layanan.index') }}"
            class="back"
        >
            ← Kembali ke Daftar Pengajuan
        </a>

    </div>

</div>

</body>
</html>