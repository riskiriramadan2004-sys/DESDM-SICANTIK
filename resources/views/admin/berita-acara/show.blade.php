
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita Acara | SiCantik ESDM</title>

    <style>
        :root {
            --charcoal: #292F36;
            --copper: #C66B32;
            --background: #F5F5F3;
            --border: #E3E4E1;
            --muted: #6B7075;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--background);
            color: var(--charcoal);
            font-family: Arial, Helvetica, sans-serif;
        }

        a { text-decoration: none; }

        .topbar {
            min-height: 76px;
            padding: 16px 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            background: white;
            border-bottom: 1px solid var(--border);
        }

        .brand { font-size: 20px; font-weight: 700; }

        .brand small {
            display: block;
            margin-top: 5px;
            font-size: 12px;
            font-weight: 400;
            color: var(--muted);
        }

        .back-link {
            color: var(--copper);
            font-size: 14px;
            font-weight: 600;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 38px 22px 60px;
        }

        .breadcrumb {
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 22px;
        }

        .heading {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 26px;
        }

        h1 {
            margin: 0 0 10px;
            font-size: 32px;
            line-height: 1.3;
            overflow-wrap: anywhere;
        }

        .subtitle {
            margin: 0;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.7;
        }

        .card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .card-heading {
            padding: 21px 24px;
            border-bottom: 1px solid var(--border);
            font-weight: 700;
            font-size: 17px;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            padding: 8px 24px;
        }

        .detail {
            padding: 17px 0;
            border-bottom: 1px solid #EEEEEC;
            min-width: 0;
        }

        .detail.full { grid-column: 1 / -1; }

        .detail-label {
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 8px;
        }

        .detail-value {
            font-size: 14px;
            line-height: 1.8;
            overflow-wrap: anywhere;
            white-space: pre-line;
        }

        .status {
            display: inline-block;
            padding: 6px 11px;
            border-radius: 20px;
            background: #F5E8DE;
            color: #91491F;
            font-size: 12px;
            font-weight: 600;
            white-space: nowrap;
        }

        .status.published {
            background: #E3F3E8;
            color: #24683C;
        }

        .content {
            padding: 24px;
            font-size: 14px;
            line-height: 1.9;
            overflow-wrap: anywhere;
        }

        .document {
            padding: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .document-info strong {
            display: block;
            margin-bottom: 7px;
            font-size: 15px;
        }

        .document-info p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
        }

        .button {
            min-height: 44px;
            padding: 0 17px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border: 1px solid var(--border);
            border-radius: 7px;
            background: white;
            color: var(--charcoal);
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .button-primary {
            color: white;
            background: var(--copper);
            border-color: var(--copper);
        }

        .button-primary:hover { background: #A95526; }

        .button-danger {
            color: #B42318;
            border-color: #E8C7C3;
        }

        .footer-actions {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 26px;
        }

        .action-group {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        @media (max-width: 600px) {
            .topbar { padding: 16px 20px; }
            .container { padding: 26px 15px 40px; }
            .heading { flex-direction: column; }
            h1 { font-size: 26px; }
            .details { grid-template-columns: 1fr; }
            .detail.full { grid-column: auto; }
            .document { align-items: flex-start; flex-direction: column; }
            .footer-actions { flex-direction: column; }
            .action-group { flex-direction: column; }
            .footer-actions .button,
            .action-group .button { width: 100%; }
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
        Dashboard Admin / Berita Acara / Detail
    </div>

    <div class="heading">
        <div>
            <h1>{{ $beritaAcara->judul }}</h1>
            <p class="subtitle">Detail berita acara kegiatan ESDM.</p>
        </div>

        <span class="status {{ $beritaAcara->status === 'published' ? 'published' : '' }}">
            {{ $beritaAcara->status === 'published' ? 'Dipublikasikan' : 'Draft' }}
        </span>
    </div>

    <section class="card">
        <div class="card-heading">Informasi Berita Acara</div>

        <div class="details">
            <div class="detail">
                <div class="detail-label">Nomor Berita Acara</div>
                <div class="detail-value">
                    {{ $beritaAcara->nomor_berita_acara ?: 'Belum dicantumkan' }}
                </div>
            </div>

            <div class="detail">
                <div class="detail-label">Tanggal Kegiatan</div>
                <div class="detail-value">
                    {{ $beritaAcara->tanggal_kegiatan
                        ? $beritaAcara->tanggal_kegiatan->format('d-m-Y')
                        : 'Belum dicantumkan' }}
                </div>
            </div>

            <div class="detail full">
                <div class="detail-label">Deskripsi / Ringkasan</div>
                <div class="detail-value">{{ $beritaAcara->deskripsi ?: 'Belum ada deskripsi.' }}</div>
            </div>
        </div>
    </section>

    <section class="card">
        <div class="card-heading">Isi Lengkap Berita Acara</div>

        <div class="content">{{ $beritaAcara->isi_berita_acara ?: 'Belum ada isi berita acara.' }}</div>
    </section>

    @if ($beritaAcara->dokumen_pdf)
        <section class="card">
            <div class="card-heading">Lampiran Dokumen</div>

            <div class="document">
                <div class="document-info">
                    <strong>Dokumen PDF Berita Acara</strong>
                    <p>Unduh lampiran jika dokumen PDF tersedia.</p>
                </div>

                <a
                    href="{{ route('admin.berita-acara.download', $beritaAcara) }}"
                    class="button button-primary"
                >
                    Unduh PDF
                </a>
            </div>
        </section>
    @endif

    <div class="footer-actions">
        <a href="{{ route('admin.berita-acara.index') }}" class="button">
            ← Kembali ke Daftar
        </a>

        <div class="action-group">
            <a
                href="{{ route('admin.berita-acara.edit', $beritaAcara) }}"
                class="button button-primary"
            >
                Edit Berita Acara
            </a>

            <form
                action="{{ route('admin.berita-acara.destroy', $beritaAcara) }}"
                method="POST"
                onsubmit="return confirm('Yakin ingin menghapus seluruh berita acara ini beserta lampiran PDF-nya?')"
            >
                @csrf
                @method('DELETE')

                <button type="submit" class="button button-danger">
                    Hapus Berita
                </button>
            </form>
        </div>
    </div>

</main>

</body>
</html>
