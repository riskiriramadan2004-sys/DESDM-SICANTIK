<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita Acara | SiCantik ESDM</title>

    <style>
        :root {
            --charcoal: #292F36;
            --copper: #C66B32;
            --white: #FFFFFF;
            --background: #F5F5F3;
            --border: #E3E4E1;
            --muted: #6B7075;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--background);
            color: var(--charcoal);
            font-family: Arial, Helvetica, sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .topbar {
            min-height: 76px;
            background: var(--white);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 16px 5%;
        }

        .brand {
            font-size: 20px;
            font-weight: 700;
        }

        .brand small {
            display: block;
            margin-top: 5px;
            font-size: 12px;
            color: var(--muted);
            font-weight: 400;
        }

        .back-link {
            font-size: 14px;
            font-weight: 600;
            color: var(--copper);
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 38px 22px 60px;
        }

        .breadcrumb {
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 22px;
        }

        h1 {
            margin: 0 0 10px;
            font-size: 32px;
            letter-spacing: -0.7px;
        }

        .intro {
            color: var(--muted);
            line-height: 1.7;
            margin: 0 0 28px;
        }

        .card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
        }

        .card-heading {
            padding: 22px 26px;
            border-bottom: 1px solid var(--border);
        }

        .card-heading h2 {
            margin: 0 0 7px;
            font-size: 19px;
        }

        .card-heading p {
            margin: 0;
            font-size: 13px;
            line-height: 1.6;
            color: var(--muted);
        }

        .form-body {
            padding: 26px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
        }

        .field {
            min-width: 0;
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin-bottom: 9px;
            font-size: 14px;
            font-weight: 600;
        }

        .required {
            color: var(--copper);
        }

        input,
        textarea,
        select {
            width: 100%;
            min-height: 46px;
            padding: 11px 13px;
            border: 1px solid #D5D7D4;
            border-radius: 7px;
            background: white;
            color: var(--charcoal);
            font: inherit;
            font-size: 14px;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
            line-height: 1.7;
        }

        #isi_berita_acara {
            min-height: 300px;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: 2px solid rgba(198, 107, 50, .2);
            border-color: var(--copper);
        }

        .help {
            display: block;
            margin-top: 8px;
            font-size: 12px;
            color: var(--muted);
            line-height: 1.6;
        }

        .upload-box {
            padding: 22px;
            border: 1px dashed #C7C9C5;
            border-radius: 9px;
            background: #FAFAF8;
        }

        .upload-box input {
            border: 0;
            padding: 8px 0;
            min-height: auto;
            background: transparent;
        }

        .error {
            margin-top: 7px;
            color: #B42318;
            font-size: 12px;
        }

        .notice {
            padding: 14px 16px;
            background: #FCEBE8;
            color: #9F241B;
            border-radius: 8px;
            margin-bottom: 22px;
            font-size: 14px;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            padding: 20px 26px;
            border-top: 1px solid var(--border);
            background: #FCFCFB;
        }

        .button {
            min-height: 46px;
            padding: 0 19px;
            border-radius: 7px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid transparent;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .button-primary {
            color: white;
            background: var(--copper);
        }

        .button-primary:hover {
            background: #A95526;
        }

        .button-secondary {
            background: white;
            border-color: var(--border);
        }

        .footer-note {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.6;
        }

        @media (max-width: 650px) {
            .topbar {
                padding: 16px 20px;
            }

            .container {
                padding: 26px 15px 40px;
            }

            h1 {
                font-size: 26px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .full {
                grid-column: auto;
            }

            .form-body,
            .card-heading {
                padding: 20px;
            }

            .form-footer {
                padding: 18px 20px;
                align-items: stretch;
                flex-direction: column-reverse;
            }

            .form-footer .button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<header class="topbar">
    <div class="brand">
        SICANTIK
        <small>Dinas ESDM Provinsi Sulawesi Tengah</small>
    </div>

    <a href="{{ route('admin.berita-acara.index') }}" class="back-link">
        ← Kembali ke daftar
    </a>
</header>

<main class="container">

    <div class="breadcrumb">
        Dashboard Admin / Berita Acara / Tambah
    </div>

    <h1>Tambah Berita Acara</h1>

    <p class="intro">
        Tulis isi berita acara secara langsung atau lampirkan dokumen PDF
        untuk dikelola melalui portal DESDM-SICANTIK.
    </p>

    @if ($errors->any())
        <div class="notice" role="alert">
            <strong>Data belum dapat disimpan.</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('admin.berita-acara.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        <section class="card">

            <div class="card-heading">
                <h2>Informasi Berita Acara</h2>
                <p>
                    Isi informasi dan naskah berita acara sesuai kegiatan
                    yang sebenarnya.
                </p>
            </div>

            <div class="form-body">
                <div class="form-grid">

                    <div class="field full">
                        <label for="judul">
                            Judul Berita Acara
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="judul"
                            name="judul"
                            value="{{ old('judul') }}"
                            placeholder="Masukkan judul berita acara"
                            maxlength="255"
                            required
                        >

                        @error('judul')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="nomor_berita_acara">
                            Nomor Berita Acara
                        </label>

                        <input
                            type="text"
                            id="nomor_berita_acara"
                            name="nomor_berita_acara"
                            value="{{ old('nomor_berita_acara') }}"
                            placeholder="Contoh: 001/BA/ESDM/2026"
                            maxlength="255"
                        >

                        <small class="help">
                            Isi sesuai nomor dokumen resmi jika tersedia.
                        </small>

                        @error('nomor_berita_acara')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="tanggal_kegiatan">
                            Tanggal Kegiatan
                        </label>

                        <input
                            type="date"
                            id="tanggal_kegiatan"
                            name="tanggal_kegiatan"
                            value="{{ old('tanggal_kegiatan') }}"
                        >

                        @error('tanggal_kegiatan')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field full">
                        <label for="deskripsi">
                            Deskripsi / Ringkasan
                        </label>

                        <textarea
                            id="deskripsi"
                            name="deskripsi"
                            placeholder="Tuliskan ringkasan kegiatan..."
                        >{{ old('deskripsi') }}</textarea>

                        <small class="help">
                            Ringkasan singkat tentang tujuan dan hasil kegiatan.
                        </small>

                        @error('deskripsi')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field full">
                        <label for="isi_berita_acara">
                            Isi Lengkap Berita Acara
                            <span class="required">*</span>
                        </label>

                        <textarea
                            id="isi_berita_acara"
                            name="isi_berita_acara"
                            placeholder="Tuliskan isi lengkap berita acara di sini. Contoh: Pada hari..., tanggal..., bertempat di..., telah dilaksanakan..."
                            required
                        >{{ old('isi_berita_acara') }}</textarea>

                        <small class="help">
                            Tuliskan isi berita acara secara lengkap.
                            Gunakan paragraf dan baris baru sesuai kebutuhan.
                        </small>

                        @error('isi_berita_acara')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field full">
                        <label for="dokumen_pdf">
                            Lampiran Dokumen PDF
                            <span style="font-weight:400;color:#6B7075">
                                (Opsional)
                            </span>
                        </label>

                        <div class="upload-box">
                            <input
                                type="file"
                                id="dokumen_pdf"
                                name="dokumen_pdf"
                                accept=".pdf,application/pdf"
                            >

                            <small class="help">
                                PDF tidak wajib diunggah. Kamu bisa menyimpan
                                berita dengan mengetik isinya langsung di atas.
                                Jika mengunggah PDF, ukuran maksimal 10 MB.
                            </small>
                        </div>

                        @error('dokumen_pdf')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field full">
                        <label for="status">
                            Status Publikasi
                            <span class="required">*</span>
                        </label>

                        <select id="status" name="status" required>
                            <option
                                value="draft"
                                {{ old('status', 'draft') === 'draft' ? 'selected' : '' }}
                            >
                                Draft — Belum dipublikasikan
                            </option>

                            <option
                                value="published"
                                {{ old('status') === 'published' ? 'selected' : '' }}
                            >
                                Dipublikasikan
                            </option>
                        </select>

                        <small class="help">
                            Pilih Draft untuk menyimpan berita tanpa
                            memublikasikannya kepada masyarakat.
                        </small>

                        @error('status')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="form-footer">
                <div class="footer-note">
                    <span class="required">*</span> Wajib diisi.
                    <br>
                    Periksa kembali data sebelum menyimpan.
                </div>

                <div style="display:flex;gap:10px;flex-wrap:wrap">
                    <a
                        href="{{ route('admin.berita-acara.index') }}"
                        class="button button-secondary"
                    >
                        Batal
                    </a>

                    <button type="submit" class="button button-primary">
                        Simpan Berita Acara
                    </button>
                </div>
            </div>

        </section>
    </form>

</main>

</body>
</html>
