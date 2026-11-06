
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring Pengaduan | DESDM SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --dark: #292F36;
            --dark-soft: #353D46;
            --copper: #C66B32;
            --copper-light: #F8E9DF;
            --white: #FFFFFF;
            --background: #F5F5F3;
            --muted: #858B91;
            --border: #E8E8E4;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--background);
            color: var(--dark);
            font-family: 'DM Sans', sans-serif;
        }

        .topbar {
            background: var(--dark);
            color: white;
            padding: 17px 4%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            border-radius: 11px;
            background: var(--copper);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 17px;
        }

        .brand-name {
            font-weight: 800;
            letter-spacing: 1px;
            font-size: 15px;
        }

        .brand-subtitle {
            font-size: 11px;
            color: #C7CBD0;
        }

        .admin-label {
            font-size: 12px;
            color: #E4E5E7;
            background: rgba(255,255,255,.09);
            padding: 9px 15px;
            border-radius: 30px;
        }

        .page-container {
            max-width: 1500px;
            margin: auto;
            padding: 35px 4% 60px;
        }

        .breadcrumb-custom {
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 23px;
        }

        .breadcrumb-custom a {
            color: var(--copper);
            text-decoration: none;
            font-weight: 600;
        }

        .page-heading {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 20px;
            margin-bottom: 28px;
        }

        .eyebrow {
            color: var(--copper);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 9px;
        }

        .page-heading h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(26px, 3vw, 36px);
            font-weight: 700;
            margin: 0 0 8px;
        }

        .page-heading p {
            color: var(--muted);
            font-size: 14px;
            margin: 0;
        }

        .btn-back {
            background: white;
            color: var(--dark);
            border: 1px solid var(--border);
            border-radius: 9px;
            padding: 11px 17px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
            transition: .2s;
        }

        .btn-back:hover {
            border-color: var(--copper);
            color: var(--copper);
        }

        .summary-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 13px;
            padding: 22px 24px;
            margin-bottom: 25px;
        }

        .summary-label {
            color: var(--muted);
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .summary-number {
            font-size: 29px;
            font-weight: 800;
            color: var(--dark);
        }

        .summary-caption {
            color: var(--muted);
            font-size: 11px;
            margin-top: 4px;
        }

        .summary-icon {
            width: 43px;
            height: 43px;
            background: var(--copper-light);
            color: var(--copper);
            border-radius: 11px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        .content-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 25px;
            margin-bottom: 24px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .section-description {
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 23px;
        }

        .form-label {
            font-size: 12px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            min-height: 43px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-family: inherit;
            font-size: 12px;
            box-shadow: none !important;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--copper);
        }

        .btn-filter {
            min-height: 43px;
            width: 100%;
            border: none;
            border-radius: 8px;
            background: var(--dark);
            color: white;
            font-size: 12px;
            font-weight: 700;
        }

        .btn-filter:hover {
            background: var(--copper);
            color: white;
        }

        .btn-reset {
            min-height: 43px;
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: white;
            color: var(--dark);
            font-size: 12px;
            font-weight: 700;
        }

        .table-responsive {
            border: 1px solid var(--border);
            border-radius: 10px;
        }

        .table {
            margin-bottom: 0;
            min-width: 950px;
        }

        .table thead th {
            background: #F7F7F5;
            color: #666E75;
            border-bottom: 1px solid var(--border);
            padding: 15px 14px;
            font-size: 10px;
            letter-spacing: .7px;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 16px 14px;
            border-bottom: 1px solid #F0F0ED;
            vertical-align: middle;
            font-size: 12px;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .table tbody tr:hover {
            background: #FCFAF8;
        }

        .number-cell {
            color: var(--muted);
            font-weight: 700;
        }

        .complaint-number {
            color: var(--copper);
            font-weight: 800;
        }

        .name-cell {
            font-weight: 700;
            color: var(--dark);
        }

        .category-cell {
            color: #626970;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border-radius: 30px;
            padding: 6px 11px;
            font-size: 10px;
            font-weight: 800;
            white-space: nowrap;
        }

        .status-badge::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: currentColor;
        }

        .status-baru {
            color: #3566A8;
            background: #EAF1FA;
        }

        .status-diproses {
            color: #A66A18;
            background: #FFF3DE;
        }

        .status-selesai {
            color: #28734E;
            background: #E4F3E9;
        }

        .status-default {
            color: #646B72;
            background: #EFF0F1;
        }

        .empty-state {
            text-align: center;
            padding: 50px 20px !important;
            color: var(--muted);
        }

        .empty-icon {
            font-size: 32px;
            margin-bottom: 12px;
        }

        .empty-state strong {
            display: block;
            color: var(--dark);
            font-size: 14px;
            margin-bottom: 5px;
        }

        .pagination-wrapper {
            padding-top: 22px;
        }

        .pagination {
            margin-bottom: 0;
        }

        .pagination .page-link {
            border: 1px solid var(--border);
            color: var(--dark);
            font-size: 12px;
        }

        .pagination .active .page-link {
            background: var(--copper);
            border-color: var(--copper);
            color: white;
        }

        .result-info {
            color: var(--muted);
            font-size: 11px;
        }

        .footer-note {
            text-align: center;
            color: var(--muted);
            font-size: 11px;
            padding-top: 15px;
        }

        @media(max-width: 768px) {
            .topbar {
                padding: 14px 5%;
            }

            .admin-label {
                display: none;
            }

            .page-container {
                padding: 25px 5% 40px;
            }

            .page-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .content-card {
                padding: 18px;
            }

            .summary-card {
                padding: 18px;
            }
        }
    </style>
</head>

<body>

    {{-- TOPBAR --}}
    <header class="topbar">
        <div class="brand">
            <div class="brand-mark">S</div>
            <div>
                <div class="brand-name">DESDM SICANTIK</div>
                <div class="brand-subtitle">Layanan Digital ESDM</div>
            </div>
        </div>

        <div class="admin-label">
            AREA ADMINISTRATOR
        </div>
    </header>

    <main class="page-container">

        {{-- BREADCRUMB --}}
        <div class="breadcrumb-custom">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span> / </span>
            <a href="{{ route('admin.monitoring.index') }}">Monitoring</a>
            <span> / Pengaduan Masyarakat</span>
        </div>

        {{-- HEADER --}}
        <div class="page-heading">
            <div>
                <div class="eyebrow">Pusat Monitoring</div>

                <h1>Pengaduan Masyarakat</h1>

                <p>
                    Pantau dan telusuri pengaduan yang disampaikan masyarakat.
                </p>
            </div>

            <a href="{{ route('admin.monitoring.index') }}" class="btn-back">
                ← Kembali ke Monitoring
            </a>
        </div>

        {{-- SUMMARY --}}
        <div class="row g-3 mb-2">

            <div class="col-md-4">
                <div class="summary-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="summary-label">Total Data Pengaduan</div>
                            <div class="summary-number">
                                {{ $pengaduan->total() }}
                            </div>
                            <div class="summary-caption">
                                Seluruh data yang tercatat
                            </div>
                        </div>

                        <div class="summary-icon">▤</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="summary-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="summary-label">Pengaduan Ditampilkan</div>
                            <div class="summary-number">
                                {{ $pengaduan->count() }}
                            </div>
                            <div class="summary-caption">
                                Data pada halaman ini
                            </div>
                        </div>

                        <div class="summary-icon">⌕</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="summary-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="summary-label">Kategori Tersedia</div>
                            <div class="summary-number">
                                {{ $kategori->count() }}
                            </div>
                            <div class="summary-caption">
                                Jenis kategori pengaduan
                            </div>
                        </div>

                        <div class="summary-icon">▧</div>
                    </div>
                </div>
            </div>

        </div>

        {{-- FILTER --}}
        <section class="content-card">

            <div class="section-title">Pencarian dan Filter</div>

            <div class="section-description">
                Gunakan filter untuk menemukan data pengaduan secara lebih spesifik.
            </div>

            <form method="GET" action="{{ route('admin.monitoring.pengaduan') }}">

                <div class="row g-3">

                    <div class="col-lg-4 col-md-6">
                        <label class="form-label">Nomor Pengaduan</label>

                        <input
                            type="text"
                            name="nomor_pengaduan"
                            class="form-control"
                            placeholder="Masukkan nomor pengaduan"
                            value="{{ request('nomor_pengaduan') }}"
                        >
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">Kategori</label>

                        <select name="kategori" class="form-select">
                            <option value="">Semua Kategori</option>

                            @foreach($kategori as $itemKategori)
                                <option
                                    value="{{ $itemKategori }}"
                                    {{ request('kategori') == $itemKategori ? 'selected' : '' }}
                                >
                                    {{ $itemKategori }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">Status</label>

                        <select name="status" class="form-select">
                            <option value="">Semua Status</option>

                            <option value="Baru" {{ request('status') == 'Baru' ? 'selected' : '' }}>
                                Baru
                            </option>

                            <option value="Diproses" {{ request('status') == 'Diproses' ? 'selected' : '' }}>
                                Diproses
                            </option>

                            <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>
                                Selesai
                            </option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">Tanggal Mulai</label>

                        <input
                            type="date"
                            name="tanggal_mulai"
                            class="form-control"
                            value="{{ request('tanggal_mulai') }}"
                        >
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">Tanggal Akhir</label>

                        <input
                            type="date"
                            name="tanggal_akhir"
                            class="form-control"
                            value="{{ request('tanggal_akhir') }}"
                        >
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <button type="submit" class="btn-filter">
                            Terapkan Filter
                        </button>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <a
                            href="{{ route('admin.monitoring.pengaduan') }}"
                            class="btn-reset d-flex align-items-center justify-content-center text-decoration-none"
                        >
                            Reset Filter
                        </a>
                    </div>

                </div>

            </form>

        </section>

        {{-- TABLE --}}
        <section class="content-card">

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">

                <div>
                    <div class="section-title">Daftar Pengaduan</div>

                    <div class="section-description mb-0">
                        Informasi pengaduan masyarakat yang masuk ke sistem.
                    </div>
                </div>

                <div class="result-info">
                    Menampilkan {{ $pengaduan->firstItem() ?? 0 }}
                    – {{ $pengaduan->lastItem() ?? 0 }}
                    dari {{ $pengaduan->total() }} data
                </div>

            </div>

            <div class="table-responsive">

                <table class="table">

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Pengaduan</th>
                            <th>Nama Pelapor</th>
                            <th>Kategori</th>
                            <th>Judul Pengaduan</th>
                            <th>Status</th>
                            <th>Tanggal Masuk</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($pengaduan as $loopIndex => $item)

                            <tr>

                                <td class="number-cell">
                                    {{ $pengaduan->firstItem() + $loop->index }}
                                </td>

                                <td>
                                    <span class="complaint-number">
                                        {{ $item->nomor_pengaduan }}
                                    </span>
                                </td>

                                <td class="name-cell">
                                    {{ $item->nama_lengkap }}
                                </td>

                                <td class="category-cell">
                                    {{ $item->kategori }}
                                </td>

                                <td>
                                    {{ $item->judul }}
                                </td>

                                <td>
                                    @if($item->status === 'Baru')
                                        <span class="status-badge status-baru">Baru</span>
                                    @elseif($item->status === 'Diproses')
                                        <span class="status-badge status-diproses">Diproses</span>
                                    @elseif($item->status === 'Selesai')
                                        <span class="status-badge status-selesai">Selesai</span>
                                    @else
                                        <span class="status-badge status-default">
                                            {{ $item->status }}
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    {{ $item->created_at->format('d/m/Y H:i') }}
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="empty-state">
                                    <div class="empty-icon">▤</div>
                                    <strong>Belum Ada Data Pengaduan</strong>
                                    Belum terdapat pengaduan yang sesuai dengan pencarian.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            {{-- PAGINATION --}}
            @if($pengaduan->hasPages())
                <div class="pagination-wrapper">
                    {{ $pengaduan->links() }}
                </div>
            @endif

        </section>

        <div class="footer-note">
            DESDM SICANTIK — Sistem Informasi Layanan Digital ESDM
        </div>

    </main>

</body>
</html>
8