<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaduan Masyarakat - DESDM SICANTIK</title>

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
            max-width: 1000px;
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
            padding: 40px 0;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        .title {
            margin-bottom: 8px;
            color: #0f4c81;
            font-size: 26px;
        }

        .description {
            color: #6b7280;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .required {
            color: #dc2626;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 15px;
            font-family: inherit;
            outline: none;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #0f4c81;
            box-shadow: 0 0 0 3px rgba(15, 76, 129, 0.1);
        }

        textarea {
            min-height: 150px;
            resize: vertical;
        }

        .help {
            margin-top: 6px;
            font-size: 13px;
            color: #6b7280;
        }

        .error {
            margin-top: 6px;
            color: #dc2626;
            font-size: 13px;
        }

        .button-area {
            margin-top: 30px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .button {
            border: none;
            border-radius: 7px;
            padding: 12px 22px;
            font-size: 15px;
            cursor: pointer;
        }

        .button-reset {
            background: #e5e7eb;
            color: #374151;
        }

        .button-submit {
            background: #0f4c81;
            color: white;
        }

        .button-submit:hover {
            background: #0b3b65;
        }

        .alert {
            padding: 15px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
        }

        @media (max-width: 700px) {
            .header-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .card {
                padding: 20px;
            }

            .button-area {
                flex-direction: column;
            }

            .button {
                width: 100%;
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

                <h2 class="title">Pengaduan Masyarakat</h2>

                <p class="description">
                    Sampaikan pengaduan, keluhan, atau laporan terkait pelayanan
                    Dinas Energi dan Sumber Daya Mineral. Silakan isi data dengan
                    lengkap dan benar agar pengaduan dapat ditindaklanjuti.
                </p>

                @if ($errors->any())
                    <div class="alert alert-error">
                        <strong>Terjadi kesalahan:</strong>

                        <ul style="margin-top: 8px; padding-left: 20px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form
                    action="{{ route('pengaduan.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf

                    <div class="form-group">
                        <label for="nama_lengkap">
                            Nama Lengkap <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="nama_lengkap"
                            name="nama_lengkap"
                            value="{{ old('nama_lengkap') }}"
                            placeholder="Masukkan nama lengkap"
                            required
                        >

                        @error('nama_lengkap')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nomor_hp">
                            Nomor HP / WhatsApp <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="nomor_hp"
                            name="nomor_hp"
                            value="{{ old('nomor_hp') }}"
                            placeholder="Contoh: 081234567890"
                            required
                        >

                        <div class="help">
                            Nomor ini digunakan untuk memberikan hasil atau tanggapan
                            atas pengaduan melalui WhatsApp.
                        </div>

                        @error('nomor_hp')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="kategori">
                            Kategori Pengaduan <span class="required">*</span>
                        </label>

                        <select
                            id="kategori"
                            name="kategori"
                            required
                        >
                            <option value="">-- Pilih Kategori --</option>
                            <option value="Kelistrikan"
                                {{ old('kategori') == 'Kelistrikan' ? 'selected' : '' }}>
                                Kelistrikan
                            </option>

                            <option value="Energi"
                                {{ old('kategori') == 'Energi' ? 'selected' : '' }}>
                                Energi
                            </option>

                            <option value="Pertambangan"
                                {{ old('kategori') == 'Pertambangan' ? 'selected' : '' }}>
                                Pertambangan
                            </option>

                            <option value="Pelayanan"
                                {{ old('kategori') == 'Pelayanan' ? 'selected' : '' }}>
                                Pelayanan
                            </option>

                            <option value="Lainnya"
                                {{ old('kategori') == 'Lainnya' ? 'selected' : '' }}>
                                Lainnya
                            </option>
                        </select>

                        @error('kategori')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="judul">
                            Judul Pengaduan <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="judul"
                            name="judul"
                            value="{{ old('judul') }}"
                            placeholder="Masukkan judul pengaduan"
                            required
                        >

                        @error('judul')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="isi_pengaduan">
                            Isi Pengaduan <span class="required">*</span>
                        </label>

                        <textarea
                            id="isi_pengaduan"
                            name="isi_pengaduan"
                            placeholder="Tuliskan pengaduan atau keluhan Anda secara lengkap..."
                            required
                        >{{ old('isi_pengaduan') }}</textarea>

                        @error('isi_pengaduan')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="foto">
                            Foto Pendukung
                        </label>

                        <input
                            type="file"
                            id="foto"
                            name="foto"
                            accept=".jpg,.jpeg,.png"
                        >

                        <div class="help">
                            Format JPG, JPEG, atau PNG. Maksimal 2 MB.
                        </div>

                        @error('foto')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="dokumen">
                            Dokumen Pendukung
                        </label>

                        <input
                            type="file"
                            id="dokumen"
                            name="dokumen"
                            accept=".pdf,.doc,.docx"
                        >

                        <div class="help">
                            Format PDF, DOC, atau DOCX. Maksimal 5 MB.
                        </div>

                        @error('dokumen')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="button-area">

                        <button
                            type="reset"
                            class="button button-reset"
                        >
                            Reset
                        </button>

                        <button
                            type="submit"
                            class="button button-submit"
                        >
                            Kirim Pengaduan
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </main>

</body>
</html>