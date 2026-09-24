<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Pengaduan - DESDM-SICANTIK</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f6fa;
            color: #172033;
        }

        .header {
            background: #146cf5;
            color: white;
            padding: 28px 40px;
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 30px;
        }

        .header p {
            margin: 0;
            font-size: 17px;
        }

        .container {
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            border-radius: 14px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 25px;
        }

        .nomor {
            background: #eaf3ff;
            border: 1px solid #b9d8ff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .nomor small {
            color: #5d6b7e;
            display: block;
            margin-bottom: 8px;
        }

        .nomor strong {
            font-size: 25px;
            color: #12599a;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .field {
            margin-bottom: 20px;
        }

        .field label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
            color: #344054;
        }

        .field-value {
            background: #f8fafc;
            border: 1px solid #d9e0e8;
            border-radius: 8px;
            padding: 12px 14px;
            min-height: 45px;
        }

        .isi {
            white-space: pre-line;
            line-height: 1.7;
        }

        .foto {
            max-width: 500px;
            max-height: 400px;
            border-radius: 10px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }

        .status-form {
            background: #f8fafc;
            border-radius: 10px;
            padding: 25px;
            border: 1px solid #e0e6ed;
        }

        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
            font-family: inherit;
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            border: none;
            border-radius: 8px;
            padding: 12px 22px;
            font-size: 15px;
            cursor: pointer;
            text-decoration: none;
            font-family: inherit;
        }

        .btn-primary {
            background: #146cf5;
            color: white;
        }

        .btn-primary:hover {
            background: #0d5ed7;
        }

        .btn-secondary {
            background: #e5e7eb;
            color: #374151;
        }

        .btn-secondary:hover {
            background: #d1d5db;
        }

        .btn-whatsapp {
            background: #25D366;
            color: white;
        }

        .btn-whatsapp:hover {
            background: #1ebe5d;
        }

        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .status-info {
            margin-bottom: 20px;
        }

        .status-badge {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }

        .status-baru {
            background: #cfe2ff;
            color: #084298;
        }

        .status-diproses {
            background: #fff3cd;
            color: #664d03;
        }

        .status-selesai {
            background: #d1e7dd;
            color: #0f5132;
        }

        .wa-info {
            background: #ecfdf3;
            border: 1px solid #a7f3d0;
            color: #065f46;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            line-height: 1.6;
        }

        @media (max-width: 700px) {
            .grid {
                grid-template-columns: 1fr;
            }

            .header {
                padding: 25px 20px;
            }

            .card {
                padding: 20px;
            }

            .buttons {
                flex-direction: column;
            }

            .btn {
                text-align: center;
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="header">
    <h1>Detail Pengaduan</h1>
    <p>DESDM-SICANTIK</p>
</div>

<div class="container">

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Pesan error --}}
    @if(session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif


    {{-- ========================================= --}}
    {{-- INFORMASI PENGADUAN --}}
    {{-- ========================================= --}}

    <div class="card">

        <div class="nomor">
            <small>Nomor Pengaduan</small>

            <strong>
                {{ $pengaduan->nomor_pengaduan }}
            </strong>
        </div>


        <div class="status-info">

            <label style="font-weight: bold; margin-right: 10px;">
                Status Saat Ini:
            </label>

            @if($pengaduan->status === 'Baru')

                <span class="status-badge status-baru">
                    Baru
                </span>

            @elseif($pengaduan->status === 'Diproses')

                <span class="status-badge status-diproses">
                    Diproses
                </span>

            @elseif($pengaduan->status === 'Selesai')

                <span class="status-badge status-selesai">
                    Selesai
                </span>

            @endif

        </div>


        <div class="grid">

            <div class="field">
                <label>Nama Lengkap</label>

                <div class="field-value">
                    {{ $pengaduan->nama_lengkap }}
                </div>
            </div>


            <div class="field">
                <label>Nomor HP / WhatsApp</label>

                <div class="field-value">
                    {{ $pengaduan->nomor_hp }}
                </div>
            </div>


            <div class="field">
                <label>Kategori</label>

                <div class="field-value">
                    {{ $pengaduan->kategori }}
                </div>
            </div>


            <div class="field">
                <label>Judul Pengaduan</label>

                <div class="field-value">
                    {{ $pengaduan->judul }}
                </div>
            </div>

        </div>


        <div class="field">

            <label>Isi Pengaduan</label>

            <div class="field-value isi">
                {{ $pengaduan->isi_pengaduan }}
            </div>

        </div>


        {{-- FOTO --}}

        @if($pengaduan->foto)

            <div class="field">

                <label>Foto Pendukung</label>

                <img
                    src="{{ asset('storage/' . $pengaduan->foto) }}"
                    alt="Foto Pengaduan"
                    class="foto"
                >

            </div>

        @endif


        {{-- DOKUMEN --}}

        @if($pengaduan->dokumen)

            <div class="field">

                <label>Dokumen Pendukung</label>

                <div class="field-value">

                    <a
                        href="{{ asset('storage/' . $pengaduan->dokumen) }}"
                        target="_blank"
                    >
                        Lihat / Download Dokumen
                    </a>

                </div>

            </div>

        @endif

    </div>



    {{-- ========================================= --}}
    {{-- TINDAK LANJUT --}}
    {{-- ========================================= --}}

    <div class="card">

        <h2>Tindak Lanjut Pengaduan</h2>

        <p style="color:#667085;">
            Perbarui status dan berikan tanggapan kepada masyarakat.
        </p>


        <form
            action="{{ route('admin.pengaduan.update', $pengaduan) }}"
            method="POST"
        >

            @csrf

            @method('PUT')


            <div class="status-form">

                {{-- STATUS --}}

                <div class="form-group">

                    <label for="status">
                        Status Pengaduan
                    </label>

                    <select
                        name="status"
                        id="status"
                        required
                    >

                        <option
                            value="Baru"
                            {{ $pengaduan->status === 'Baru' ? 'selected' : '' }}
                        >
                            Baru
                        </option>

                        <option
                            value="Diproses"
                            {{ $pengaduan->status === 'Diproses' ? 'selected' : '' }}
                        >
                            Diproses
                        </option>

                        <option
                            value="Selesai"
                            {{ $pengaduan->status === 'Selesai' ? 'selected' : '' }}
                        >
                            Selesai
                        </option>

                    </select>

                </div>


                {{-- TANGGAPAN --}}

                <div class="form-group">

                    <label for="tanggapan">
                        Tanggapan Petugas
                    </label>

                    <textarea
                        name="tanggapan"
                        id="tanggapan"
                        placeholder="Tuliskan tanggapan untuk masyarakat..."
                    >{{ old('tanggapan', $pengaduan->tanggapan) }}</textarea>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Simpan Tanggapan
                </button>

            </div>

        </form>

    </div>



    {{-- ========================================= --}}
    {{-- KIRIM HASIL KE WHATSAPP --}}
    {{-- ========================================= --}}

    <div class="card">

        <h2>Hasil Pengaduan</h2>

        <p style="color:#667085;">
            Kirim status dan tanggapan pengaduan kepada masyarakat melalui WhatsApp.
        </p>


        <div class="wa-info">

            <strong>Nomor WhatsApp:</strong>

            {{ $pengaduan->nomor_hp }}

            <br>

            <strong>Status:</strong>

            {{ $pengaduan->status }}

            <br>

            <strong>Tanggapan:</strong>

            {{ $pengaduan->tanggapan ?: 'Belum ada tanggapan.' }}

        </div>


        <div class="buttons">

            <a
                href="{{ route('admin.pengaduan.whatsapp', $pengaduan) }}"
                target="_blank"
                class="btn btn-whatsapp"
            >
                📱 Kirim Hasil ke WhatsApp
            </a>

        </div>

    </div>



    {{-- ========================================= --}}
    {{-- KEMBALI --}}
    {{-- ========================================= --}}

    <div class="buttons">

        <a
            href="{{ route('admin.pengaduan.index') }}"
            class="btn btn-secondary"
        >
            ← Kembali ke Daftar Pengaduan
        </a>

    </div>

</div>

</body>
</html>