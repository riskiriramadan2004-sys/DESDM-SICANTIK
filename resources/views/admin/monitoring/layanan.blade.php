
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Layanan Online | SICANTIK</title>

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

        .top-header {
            background: var(--charcoal);
            color: white;
            padding: 35px 5%;
            border-bottom: 4px solid var(--copper);
        }

        .header-content {
            max-width: 1450px;
            margin: auto;
        }

        .header-label {
            color: #E9A477;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .top-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            margin: 0;
        }

        .top-header p {
            color: #D1D5D8;
            margin: 8px 0 0;
            font-size: 14px;
        }

        .page-container {
            max-width: 1450px;
            width: 90%;
            margin: 30px auto 60px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--charcoal);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 25px;
            transition: .2s;
        }

        .back-button:hover {
            color: var(--copper);
        }

        .page-heading {
            margin-bottom: 25px;
        }

        .page-heading h2 {
            font-family: 'Playfair Display', serif;
            font-size: 27px;
            margin: 0 0 7px;
        }

        .page-heading p {
            color: var(--muted);
            font-size: 14px;
            margin: 0;
        }

        /* SUMMARY */

        .summary-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 25px;
        }

        .summary-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 13px;
            padding: 22px;
            position: relative;
            overflow: hidden;
        }

        .summary-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--copper);
        }

        .summary-title {
            color: var(--muted);
            font-size: 13px;
            font-weight: 600;
        }

        .summary-number {
            font-size: 29px;
            font-weight: 800;
            margin-top: 8px;
            color: var(--charcoal);
        }

        .summary-description {
            color: var(--muted);
            font-size: 12px;
            margin-top: 4px;
        }

        /* CONTENT */

        .content-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 25px;
            margin-bottom: 22px;
            box-shadow: 0 5px 20px rgba(41, 47, 54, .035);
        }

        .card-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 22px;
            flex-wrap: wrap;
        }

        .card-heading h3 {
            font-size: 17px;
            font-weight: 800;
            margin: 0;
        }

        .card-heading p {
            font-size: 12px;
            color: var(--muted);
            margin: 5px 0 0;
        }

        .result-count {
            color: var(--copper);
            background: #FFF2E9;
            padding: 8px 13px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
        }

        /* FILTER */

        .filter-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 17px;
        }

        .filter-group label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .filter-control {
            width: 100%;
            min-height: 43px;
            padding: 10px 12px;
            border: 1px solid #DCDDD9;
            border-radius: 8px;
            background: white;
            color: var(--charcoal);
            font-family: inherit;
            font-size: 13px;
            outline: none;
            transition: .2s;
        }

        .filter-control:focus {
            border-color: var(--copper);
            box-shadow: 0 0 0 3px rgba(198, 107, 50, .10);
        }

        .filter-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 19px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            font-family: inherit;
            font-size: 13px;
            font-weight: 700;
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

        .btn-reset {
            background: #F0F0ED;
            color: var(--charcoal);
        }

        .btn-reset:hover {
            background: #E5E4DF;
        }

        /* TABLE */

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1050px;
            border-collapse: collapse;
        }

        thead th {
            background: #F6F3EF;
            color: #555D65;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .5px;
            padding: 15px 13px;
            text-align: left;
            white-space: nowrap;
            border-bottom: 1px solid var(--border);
        }

        tbody td {
            padding: 15px 13px;
            font-size: 13px;
            border-bottom: 1px solid #EEEEEB;
            vertical-align: middle;
        }

        tbody tr {
            transition: .2s;
        }

        tbody tr:hover {
            background: #FCFAF7;
        }

        .number {
            color: var(--muted);
            font-weight: 700;
        }

        .application-number {
            color: var(--copper);
            font-weight: 800;
        }

        .applicant-name {
            font-weight: 700;
            color: var(--charcoal);
        }

        .service-name {
            font-weight: 600;
        }

        .sub-text {
            display: block;
            color: var(--muted);
            font-size: 11px;
            margin-top: 4px;
        }

        /* STATUS */

        .status {
            display: inline-flex;
            align-items: center;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 800;
            white-space: nowrap;
        }

        .status-menunggu {
            background: #FFF3D9;
            color: #93630A;
        }

        .status-diproses {
            background: #E8EFFB;
            color: #355B98;
        }

        .status-diverifikasi {
            background: #E1F4F4;
            color: #247777;
        }

        .status-disetujui,
        .status-selesai {
            background: #E3F2E7;
            color: #347348;
        }

        .status-ditolak {
            background: #FBE7E6;
            color: #A6423D;
        }

        .status-default {
            background: #EEEEEB;
            color: #555D65;
        }

        .btn-detail {
            background: var(--charcoal);
            color: white;
            padding: 8px 12px;
            border-radius: 7px;
            font-size: 11px;
            white-space: nowrap;
        }

        .btn-detail:hover {
            background: var(--copper);
            color: white;
        }

        /* EMPTY */

        .empty-state {
            text-align: center;
            padding: 55px 20px;
        }

        .empty-icon {
            font-size: 38px;
            margin-bottom: 12px;
        }

        .empty-state h4 {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            margin-bottom: 7px;
        }

        .empty-state p {
            color: var(--muted);
            font-size: 13px;
        }

        /* PAGINATION */

        .pagination-wrapper {
            margin-top: 22px;
        }

        .pagination {
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            gap: 5px;
        }

        .pagination svg {
            width: 16px;
            height: 16px;
        }

        .pagination nav {
            display: flex;
            justify-content: flex-end;
        }

        .pagination a,
        .pagination span {
            font-size: 12px;
        }

        @media (max-width: 900px) {
            .filter-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 600px) {
            .top-header {
                padding: 27px 6%;
            }

            .top-header h1 {
                font-size: 25px;
            }

            .page-container {
                width: 92%;
                margin-top: 22px;
            }

            .page-heading h2 {
                font-size: 23px;
            }

            .summary-grid {
                grid-template-columns: 1fr;
            }

            .filter-grid {
                grid-template-columns: 1fr;
            }

            .content-card {
                padding: 18px 15px;
            }

            .filter-actions .btn {
                flex: 1;
            }
        }
    </style>
</head>

<body>

    <header class="top-header">
        <div class="header-content">
            <div class="header-label">SICANTIK · ADMINISTRATOR</div>
            <h1>Monitoring Layanan Online</h1>
            <p>Pemantauan seluruh pengajuan layanan online masyarakat.</p>
        </div>
    </header>

    <main class="page-container">

        <a href="{{ route('admin.dashboard') }}" class="back-button">
            ← Kembali ke Dashboard
        </a>

        <div class="page-heading">
            <h2>Data Pengajuan Layanan</h2>
            <p>Kelola dan pantau perkembangan pengajuan layanan masyarakat.</p>
        </div>

        {{-- RINGKASAN --}}
        <section class="summary-grid">
            <div class="summary-card">
                <div class="summary-title">Total Hasil Pengajuan</div>
                <div class="summary-number">{{ $pengajuan->total() }}</div>
                <div class="summary-description">Data sesuai pencarian dan filter yang digunakan</div>
            </div>

            <div class="summary-card">
                <div class="summary-title">Data pada Halaman Ini</div>
                <div class="summary-number">{{ $pengajuan->count() }}</div>
                <div class="summary-description">Jumlah pengajuan yang sedang ditampilkan</div>
            </div>
        </section>

        {{-- FILTER --}}
        <section class="content-card">
            <div class="card-heading">
                <div>
                    <h3>Filter dan Pencarian</h3>
                    <p>Gunakan filter untuk menemukan data pengajuan tertentu.</p>
                </div>
            </div>

            <form action="{{ route('admin.monitoring.layanan') }}" method="GET">

                <div class="filter-grid">

                    <div class="filter-group">
                        <label for="nomor_pengajuan">Nomor Pengajuan</label>
                        <input
                            type="text"
                            id="nomor_pengajuan"
                            name="nomor_pengajuan"
                            class="filter-control"
                            placeholder="Masukkan nomor pengajuan"
                            value="{{ request('nomor_pengajuan') }}"
                        >
                    </div>

                    <div class="filter-group">
                        <label for="layanan_id">Jenis Layanan</label>
                        <select id="layanan_id" name="layanan_id" class="filter-control">
                            <option value="">Semua Layanan</option>
                            @foreach($layanan as $itemLayanan)
                                <option
                                    value="{{ $itemLayanan->id }}"
                                    {{ request('layanan_id') == $itemLayanan->id ? 'selected' : '' }}
                                >
                                    {{ $itemLayanan->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="filter-group">
                        <label for="status">Status Pengajuan</label>
                        <select id="status" name="status" class="filter-control">
                            <option value="">Semua Status</option>
                            <option value="Menunggu" {{ request('status') == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                            <option value="Diproses" {{ request('status') == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                            <option value="Diverifikasi" {{ request('status') == 'Diverifikasi' ? 'selected' : '' }}>Diverifikasi</option>
                            <option value="Disetujui" {{ request('status') == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                            <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            <option value="Ditolak" {{ request('status') == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                        </select>
                    </div>

                    <div class="filter-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input
                            type="date"
                            id="tanggal_mulai"
                            name="tanggal_mulai"
                            class="filter-control"
                            value="{{ request('tanggal_mulai') }}"
                        >
                    </div>

                    <div class="filter-group">
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                        <input
                            type="date"
                            id="tanggal_akhir"
                            name="tanggal_akhir"
                            class="filter-control"
                            value="{{ request('tanggal_akhir') }}"
                        >
                    </div>

                </div>

                <div class="filter-actions">
                    <button type="submit" class="btn btn-primary">
                        Cari Pengajuan
                    </button>

                    <a href="{{ route('admin.monitoring.layanan') }}" class="btn btn-reset">
                        Reset Filter
                    </a>
                </div>

            </form>
        </section>

        {{-- TABEL DATA --}}
        <section class="content-card">

            <div class="card-heading">
                <div>
                    <h3>Daftar Pengajuan Layanan</h3>
                    <p>Informasi pengajuan layanan online masyarakat.</p>
                </div>

                <span class="result-count">
                    {{ $pengajuan->total() }} Data
                </span>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Pengajuan</th>
                            <th>Nama Pemohon</th>
                            <th>Jenis Layanan</th>
                            <th>Nomor HP</th>
                            <th>Status</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($pengajuan as $index => $item)
                            @php
                                $statusClass = \Illuminate\Support\Str::slug($item->status ?? 'default');
                            @endphp

                            <tr>
                                <td class="number">
                                    {{ $pengajuan->firstItem() + $index }}
                                </td>

                                <td>
                                    <span class="application-number">
                                        {{ $item->nomor_pengajuan }}
                                    </span>
                                </td>

                                <td>
                                    <span class="applicant-name">
                                        {{ $item->nama_lengkap }}
                                    </span>
                                    <span class="sub-text">
                                        NIK: {{ $item->nik ?: '-' }}
                                    </span>
                                </td>

                                <td>
                                    <span class="service-name">
                                        {{ $item->layanan->nama ?? 'Layanan tidak tersedia' }}
                                    </span>
                                </td>

                                <td>{{ $item->nomor_hp ?: '-' }}</td>

                                <td>
                                    <span class="status status-{{ $statusClass }}">
                                        {{ $item->status ?: 'Belum ada status' }}
                                    </span>
                                </td>

                                <td>
                                    {{ $item->created_at ? $item->created_at->format('d/m/Y') : '-' }}
                                    <span class="sub-text">
                                        {{ $item->created_at ? $item->created_at->format('H:i') . ' WIB' : '' }}
                                    </span>
                                </td>

                                <td>
                                    <a
                                        href="{{ route('admin.pengajuan-layanan.show', $item->id) }}"
                                        class="btn btn-detail"
                                    >
                                        Lihat Detail →
                                    </a>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="8">
                                    <div class="empty-state">
                                        <div class="empty-icon">📋</div>
                                        <h4>Belum Ada Data Pengajuan</h4>
                                        <p>
                                            Data pengajuan layanan tidak ditemukan.
                                            Silakan ubah kata kunci atau filter pencarian.
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="pagination-wrapper">
                {{ $pengajuan->links() }}
            </div>

        </section>

    </main>

</body>
</html>
