
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengaduan | SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --charcoal: #292F36;
            --copper: #C66B32;
            --white: #FFFFFF;
            --offwhite: #F5F5F3;
            --muted: #7B828A;
            --border: #E8E7E3;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--offwhite);
            color: var(--charcoal);
            font-family: 'DM Sans', sans-serif;
        }

        .header {
            background: var(--charcoal);
            color: white;
            padding: 32px 5%;
            border-bottom: 4px solid var(--copper);
        }

        .header-inner {
            max-width: 1100px;
            margin: auto;
        }

        .header-label {
            color: #E9A477;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            margin-bottom: 9px;
        }

        .header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            margin: 0;
        }

        .header p {
            color: #D1D5D8;
            font-size: 13px;
            margin: 8px 0 0;
        }

        .container {
            max-width: 1100px;
            width: 90%;
            margin: 30px auto 60px;
        }

        .back-link {
            display: inline-flex;
            text-decoration: none;
            color: var(--charcoal);
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 23px;
            transition: .2s;
        }

        .back-link:hover {
            color: var(--copper);
        }

        .card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 27px;
            margin-bottom: 22px;
            box-shadow: 0 5px 20px rgba(41,47,54,.035);
        }

        .section-label {
            color: var(--copper);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            margin: 0;
        }

        .card-description {
            color: var(--muted);
            font-size: 12px;
            margin: 7px 0 22px;
            line-height: 1.6;
        }

        /* ALERT */

        .alert {
            padding: 14px 17px;
            border-radius: 9px;
            margin-bottom: 18px;
            font-size: 13px;
            font-weight: 600;
        }

        .alert-success {
            background: #E5F3E8;
            color: #28623A;
            border: 1px solid #C7E5CE;
        }

        .alert-error {
            background: #FBE8E6;
            color: #9D3732;
            border: 1px solid #F1CECA;
        }

        /* NOMOR PENGADUAN */

        .number-box {
            background: #FAF7F3;
            border: 1px solid #F0E6DC;
            border-radius: 11px;
            padding: 20px;
            margin-bottom: 22px;
        }

        .number-box small {
            display: block;
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .number-box strong {
            font-size: 20px;
            color: var(--copper);
            overflow-wrap: anywhere;
        }

        /* STATUS */

        .status-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }

        .status-label {
            font-size: 13px;
            font-weight: 700;
        }

        .status-badge {
            display: inline-flex;
            padding: 7px 13px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 800;
        }

        .status-baru {
            background: #FFF3D9;
            color: #93630A;
        }

        .status-diproses {
            background: #E8EFFB;
            color: #355B98;
        }

        .status-selesai {
            background: #E3F2E7;
            color: #347348;
        }

        .status-default {
            background: #EEEEEB;
            color: #555D65;
        }

        /* DETAIL */

        .detail-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0 24px;
        }

        .field {
            min-width: 0;
            padding: 14px 0;
            border-bottom: 1px solid var(--border);
        }

        .field.full {
            grid-column: 1 / -1;
        }

        .field label {
            display: block;
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .field-value {
            color: var(--charcoal);
            font-size: 13px;
            font-weight: 600;
            line-height: 1.7;
            overflow-wrap: anywhere;
        }

        .field-value.long-text {
            white-space: pre-line;
            font-weight: 400;
        }

        /* FOTO DAN DOKUMEN */

        .foto {
            display: block;
            max-width: 100%;
            max-height: 420px;
            object-fit: contain;
            border-radius: 9px;
            border: 1px solid var(--border);
            margin-top: 10px;
        }

        .document-link {
            display: inline-flex;
            color: var(--copper);
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            margin-top: 5px;
        }

        .document-link:hover {
            text-decoration: underline;
        }

        /* FORM */

        .form-box {
            background: #FAF9F7;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 22px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 9px;
        }

        .form-control {
            width: 100%;
            min-height: 45px;
            padding: 12px 14px;
            background: white;
            border: 1px solid #DCDDD9;
            border-radius: 8px;
            color: var(--charcoal);
            font-family: inherit;
            font-size: 13px;
            outline: none;
            transition: .2s;
        }

        .form-control:focus {
            border-color: var(--copper);
            box-shadow: 0 0 0 3px rgba(198,107,50,.10);
        }

        textarea.form-control {
            min-height: 130px;
            resize: vertical;
            line-height: 1.6;
        }

        .form-hint {
            color: var(--muted);
            font-size: 11px;
            margin-top: 7px;
        }

        /* BUTTON */

        .buttons {
            display: flex;
            align-items: center;
            gap: 11px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 19px;
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            transition: .2s;
        }

        .btn-primary {
            background: var(--copper);
            color: white;
        }

        .btn-primary:hover {
            background: #A95425;
        }

        .btn-secondary {
            background: #EEEEEB;
            color: var(--charcoal);
        }

        .btn-secondary:hover {
            background: #DFDFD9;
        }

        .btn-whatsapp {
            background: #218C58;
            color: white;
        }

        .btn-whatsapp:hover {
            background: #176D43;
        }

        /* WHATSAPP */

        .whatsapp-box {
            background: #F0F8F2;
            border: 1px solid #D5EBDD;
            border-left: 4px solid #218C58;
            border-radius: 9px;
            padding: 18px;
            line-height: 1.8;
            font-size: 13px;
            overflow-wrap: anywhere;
        }

        .whatsapp-box strong {
            color: #28623A;
        }

        .whatsapp-box p {
            margin: 5px 0;
        }

        @media (max-width: 650px) {
            .header {
                padding: 26px 6%;
            }

            .header h1 {
                font-size: 25px;
            }

            .container {
                width: 92%;
                margin-top: 22px;
            }

            .card {
                padding: 19px;
            }

            .card-title {
                font-size: 20px;
            }

            .detail-grid {
                grid-template-columns: 1fr;
            }

            .field.full {
                grid-column: auto;
            }

            .form-box {
                padding: 16px;
            }

            .buttons {
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
        <div class="header-label">SICANTIK · ADMINISTRATOR</div>
        <h1>Detail Pengaduan Masyarakat</h1>
        <p>Informasi pengaduan dan tindak lanjut petugas.</p>
    </div>
</header>

<main class="container">

    <a href="{{ route('admin.pengaduan.index') }}" class="back-link">
        ← Kembali ke Daftar Pengaduan
    </a>

    {{-- NOTIFIKASI --}}

    @if(session('success'))
        <div class="alert alert-success">
            ✓ {{ session('success') }}
        </div>
    @endif

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

    {{-- INFORMASI PENGADUAN --}}

    <section class="card">

        <div class="section-label">Informasi Pengaduan</div>
        <h2 class="card-title">Data Pengaduan Masyarakat</h2>
        <p class="card-description">
            Informasi lengkap laporan yang disampaikan oleh masyarakat.
        </p>

        <div class="number-box">
            <small>NOMOR PENGADUAN</small>
            <strong>{{ $pengaduan->nomor_pengaduan }}</strong>
        </div>

        @php
            $statusClass = \Illuminate\Support\Str::slug(
                $pengaduan->status ?? 'default'
            );
        @endphp

        <div class="status-row">
            <span class="status-label">Status Pengaduan Saat Ini</span>

            <span class="status-badge status-{{ $statusClass }}">
                {{ $pengaduan->status ?: 'Belum ada status' }}
            </span>
        </div>

        <div class="section-label">Identitas Pelapor</div>

        <div class="detail-grid">

            <div class="field">
                <label>Nama Lengkap</label>
                <div class="field-value">
                    {{ $pengaduan->nama_lengkap ?: '-' }}
                </div>
            </div>

            <div class="field">
                <label>Nomor HP / WhatsApp</label>
                <div class="field-value">
                    {{ $pengaduan->nomor_hp ?: '-' }}
                </div>
            </div>

            <div class="field">
                <label>Kategori Pengaduan</label>
                <div class="field-value">
                    {{ $pengaduan->kategori ?: '-' }}
                </div>
            </div>

            <div class="field">
                <label>Judul Pengaduan</label>
                <div class="field-value">
                    {{ $pengaduan->judul ?: '-' }}
                </div>
            </div>

            <div class="field full">
                <label>Isi Pengaduan</label>
                <div class="field-value long-text">
                    {{ $pengaduan->isi_pengaduan ?: '-' }}
                </div>
            </div>

        </div>

        {{-- FOTO PENDUKUNG --}}

        @if($pengaduan->foto)
            <div class="field">
                <label>Foto Pendukung</label>

                <a
                    href="{{ asset('storage/' . $pengaduan->foto) }}"
                    target="_blank"
                >
                    <img
                        src="{{ asset('storage/' . $pengaduan->foto) }}"
                        alt="Foto Pengaduan"
                        class="foto"
                    >
                </a>
            </div>
        @endif

        {{-- DOKUMEN PENDUKUNG --}}

        @if($pengaduan->dokumen)
            <div class="field">
                <label>Dokumen Pendukung</label>

                <a
                    href="{{ asset('storage/' . $pengaduan->dokumen) }}"
                    target="_blank"
                    class="document-link"
                >
                    Lihat / Download Dokumen →
                </a>
            </div>
        @endif

    </section>

    {{-- TINDAK LANJUT --}}

    <section class="card">

        <div class="section-label">Tindak Lanjut Admin</div>
        <h2 class="card-title">Tanggapan Pengaduan</h2>

        <p class="card-description">
            Perbarui status dan berikan tanggapan kepada masyarakat.
        </p>

        <form
            action="{{ route('admin.pengaduan.update', $pengaduan) }}"
            method="POST"
        >
            @csrf
            @method('PUT')

            <div class="form-box">

                <div class="form-group">
                    <label for="status">Status Pengaduan</label>

                    <select
                        name="status"
                        id="status"
                        class="form-control"
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

                    <div class="form-hint">
                        Pilih status sesuai hasil tindak lanjut pengaduan.
                    </div>
                </div>

                <div class="form-group">
                    <label for="tanggapan">Tanggapan Petugas</label>

                    <textarea
                        name="tanggapan"
                        id="tanggapan"
                        class="form-control"
                        placeholder="Tuliskan tanggapan untuk masyarakat..."
                    >{{ old('tanggapan', $pengaduan->tanggapan) }}</textarea>

                    <div class="form-hint">
                        Tanggapan ini dapat disampaikan kepada pelapor melalui WhatsApp.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Tanggapan
                </button>

            </div>

        </form>

    </section>

    {{-- HASIL PENGADUAN / WHATSAPP --}}

    <section class="card">

        <div class="section-label">Komunikasi Pelapor</div>
        <h2 class="card-title">Hasil Pengaduan</h2>

        <p class="card-description">
            Kirim status dan tanggapan pengaduan kepada masyarakat melalui WhatsApp.
        </p>

        <div class="whatsapp-box">
            <p>
                <strong>Nomor WhatsApp:</strong>
                {{ $pengaduan->nomor_hp ?: '-' }}
            </p>

            <p>
                <strong>Status:</strong>
                {{ $pengaduan->status ?: '-' }}
            </p>

            <p>
                <strong>Tanggapan:</strong>
                {{ $pengaduan->tanggapan ?: 'Belum ada tanggapan.' }}
            </p>
        </div>

        <div class="buttons">
            <a
                href="{{ route('admin.pengaduan.whatsapp', $pengaduan) }}"
                target="_blank"
                class="btn btn-whatsapp"
            >
                Kirim Hasil ke WhatsApp
            </a>
        </div>

    </section>

    <div class="buttons">
        <a
            href="{{ route('admin.pengaduan.index') }}"
            class="btn btn-secondary"
        >
            ← Kembali ke Daftar Pengaduan
        </a>
    </div>

</main>

</body>
</html>
