
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Acara | SiCantik ESDM</title>

    <style>
        :root {
            --charcoal: #292F36;
            --copper: #C66B32;
            --white: #FFFFFF;
            --background: #F5F5F3;
            --border: #E4E5E2;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--charcoal);
            background: var(--background);
        }

        .topbar {
            background: var(--white);
            border-bottom: 1px solid var(--border);
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
        }

        .brand {
            font-size: 20px;
            font-weight: 700;
        }

        .brand small {
            display: block;
            font-size: 12px;
            font-weight: 400;
            margin-top: 5px;
            color: #73777C;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 24px;
        }

        .heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 28px;
        }

        h1 {
            font-size: 30px;
            margin: 0 0 9px;
        }

        .subtitle {
            color: #696E73;
            margin: 0;
            line-height: 1.6;
        }

        .button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            min-height: 44px;
            padding: 0 18px;
            border-radius: 8px;
            background: var(--copper);
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background: #A95526;
        }

        .notice {
            padding: 14px 16px;
            background: #E7F5EA;
            border: 1px solid #B9DFC1;
            border-radius: 8px;
            margin-bottom: 20px;
            color: #245C32;
        }

        .panel {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
        }

        .panel-heading {
            padding: 20px 22px;
            border-bottom: 1px solid var(--border);
            font-weight: 700;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        th, td {
            padding: 16px 20px;
            text-align: left;
            border-bottom: 1px solid #EEEEEC;
            font-size: 14px;
        }

        th {
            background: #FAFAF8;
            color: #686D72;
            font-size: 12px;
            font-weight: 600;
        }

        .status {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            background: #F5E8DE;
            color: #91491F;
            font-size: 12px;
            font-weight: 600;
        }

        .status.published {
            background: #E3F3E8;
            color: #24683C;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .action {
            color: var(--copper);
            font-weight: 600;
            text-decoration: none;
        }

        .empty {
            text-align: center;
            padding: 48px 20px;
            color: #777C80;
            line-height: 1.8;
        }

        .empty strong {
            display: block;
            color: var(--charcoal);
            margin-bottom: 8px;
            font-size: 16px;
        }

        .pagination {
            padding: 20px;
        }

        @media (max-width: 650px) {
            .topbar {
                padding: 18px 20px;
            }

            .container {
                padding: 28px 16px;
            }

            .heading {
                align-items: flex-start;
                flex-direction: column;
            }

            h1 {
                font-size: 25px;
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

    <a href="{{ route('admin.dashboard') }}"
       class="action">
        ← Dashboard
    </a>
</header>

<main class="container">

    <div class="heading">
        <div>
            <h1>Berita Acara</h1>
            <p class="subtitle">
                Kelola dokumen berita acara kegiatan dan publikasi resmi ESDM.
            </p>
        </div>

        <a href="{{ route('admin.berita-acara.create') }}"
           class="button">
            + Upload Berita Acara
        </a>
    </div>

    @if (session('success'))
        <div class="notice">
            {{ session('success') }}
        </div>
    @endif

    <section class="panel">
        <div class="panel-heading">
            Daftar Dokumen
        </div>

        @if ($beritaAcaras->count())
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Judul Berita Acara</th>
                            <th>Nomor Dokumen</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($beritaAcaras as $item)
                            <tr>
                                <td>{{ $item->judul }}</td>

                                <td>
                                    {{ $item->nomor_berita_acara ?: '-' }}
                                </td>

                                <td>
                                    {{ $item->tanggal_kegiatan
                                        ? $item->tanggal_kegiatan->format('d/m/Y')
                                        : '-' }}
                                </td>

                                <td>
                                    <span class="status {{ $item->status === 'published' ? 'published' : '' }}">
                                        {{ $item->status === 'published'
                                            ? 'Dipublikasikan'
                                            : 'Draft' }}
                                    </span>
                                </td>

                                <td>
                                    <div class="actions">
                                        <a class="action"
                                           href="{{ route('admin.berita-acara.show', $item) }}">
                                            Detail
                                        </a>

                                        <a class="action"
                                           href="{{ route('admin.berita-acara.edit', $item) }}">
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('admin.berita-acara.destroy', $item) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus berita acara ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                style="border:0;background:none;color:#B42318;cursor:pointer;font-weight:600">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                {{ $beritaAcaras->links() }}
            </div>
        @else
            <div class="empty">
                <strong>Belum ada berita acara</strong>
                Dokumen yang diunggah akan ditampilkan di halaman ini.
                <br>
                Gunakan tombol Upload Berita Acara untuk memulai.
            </div>
        @endif
    </section>

</main>

</body>
</html>
