<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring Pengajuan Bantuan | DESDM SICANTIK</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- FONT AWESOME -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>
        /* =========================================
           1. IDENTITAS VISUAL SI CANTIK
        ========================================= */

        :root {
            --charcoal: #292F36;
            --charcoal-light: #3B4249;
            --copper: #C66B32;
            --copper-dark: #A95325;
            --warm-white: #F5F5F3;
            --white: #FFFFFF;
            --gray: #68717A;
            --pale-copper: #FCEBDD;
            --border: #E3E5E6;

            --status-waiting: #98602F;
            --status-waiting-bg: #FFF3DF;

            --status-verified: #37658A;
            --status-verified-bg: #EAF2F9;

            --status-approved: #39765A;
            --status-approved-bg: #E6F2EC;

            --status-rejected: #A64A43;
            --status-rejected-bg: #FBE9E8;
        }

        /* =========================================
           2. RESET DAN GLOBAL
        ========================================= */

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: var(--warm-white);
            color: var(--charcoal);
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        button,
        input,
        select {
            font-family: inherit;
        }

        /* =========================================
           3. HEADER ADMIN
        ========================================= */

        .topbar {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            min-height: 76px;
            padding: 12px clamp(18px, 4vw, 55px);
            background: var(--charcoal);
            border-bottom: 3px solid var(--copper);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
            min-width: 0;
            text-decoration: none;
        }

        .brand-logo {
            width: 46px;
            height: 46px;
            flex: 0 0 46px;
            display: grid;
            place-items: center;
            padding: 4px;
            border-radius: 10px;
            background: var(--white);
            overflow: hidden;
        }

        .brand-logo img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-name {
            margin: 0;
            color: var(--white);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 15px;
            font-weight: 800;
            letter-spacing: .3px;
        }

        .brand-description {
            margin: 4px 0 0;
            color: #D4D9DC;
            font-size: 10px;
            letter-spacing: .7px;
        }

        .topbar-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #F0D0B9;
            font-size: 11px;
            font-weight: 600;
        }

        /* =========================================
           4. KONTEN UTAMA
        ========================================= */

        .main-container {
            width: min(1500px, 100%);
            margin: 0 auto;
            padding: 30px clamp(15px, 2.5vw, 35px) 50px;
        }

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 25px 27px;
            margin-bottom: 20px;
            border: 1px solid rgba(41,47,54,.05);
            border-top: 3px solid var(--copper);
            border-radius: 15px;
            background: var(--white);
            box-shadow: 0 8px 26px rgba(41,47,54,.055);
        }

        .page-heading {
            display: flex;
            align-items: center;
            gap: 15px;
            min-width: 0;
        }

        .page-icon {
            width: 49px;
            height: 49px;
            flex: 0 0 49px;
            display: grid;
            place-items: center;
            border-radius: 13px;
            background: var(--pale-copper);
            color: var(--copper-dark);
            font-size: 19px;
        }

        .page-title {
            margin: 0;
            color: var(--charcoal);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(19px, 2.5vw, 25px);
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .page-description {
            margin: 6px 0 0;
            color: var(--gray);
            font-size: 12px;
            line-height: 1.6;
        }

        /* =========================================
           5. TOMBOL KEMBALI
        ========================================= */

        .btn-back {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            flex-shrink: 0;
            padding: 11px 16px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: var(--white);
            color: var(--charcoal);
            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
            transition: .2s ease;
        }

        .btn-back:hover {
            border-color: var(--copper);
            background: var(--pale-copper);
            color: var(--copper-dark);
            transform: translateY(-1px);
        }

        /* =========================================
           6. CARD UMUM
        ========================================= */

        .content-card {
            padding: 23px;
            margin-bottom: 20px;
            border: 1px solid rgba(41,47,54,.05);
            border-radius: 15px;
            background: var(--white);
            box-shadow: 0 8px 26px rgba(41,47,54,.055);
        }

        .section-title {
            margin: 0 0 19px;
            color: var(--charcoal);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 17px;
            font-weight: 800;
        }

        .section-title i {
            margin-right: 8px;
            color: var(--copper);
        }

        /* =========================================
           7. FORM FILTER
        ========================================= */

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--charcoal);
            font-size: 12px;
            font-weight: 700;
        }

        .form-control,
        .form-select {
            min-height: 45px;
            border: 1px solid #D9DEE1;
            border-radius: 9px;
            background-color: var(--white);
            color: var(--charcoal);
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            box-shadow: none;
            transition: border-color .2s ease, box-shadow .2s ease;
        }

        .form-control::placeholder {
            color: #9AA2A8;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--copper);
            box-shadow: 0 0 0 4px rgba(198,107,50,.11);
        }

        /* =========================================
           8. TOMBOL CARI
        ========================================= */

        .btn-search {
            min-height: 45px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 19px;
            border: 1px solid var(--copper);
            border-radius: 9px;
            background: var(--copper);
            color: var(--white);
            font-size: 12px;
            font-weight: 800;
            transition: .2s ease;
        }

        .btn-search:hover {
            border-color: var(--copper-dark);
            background: var(--copper-dark);
            color: var(--white);
            transform: translateY(-1px);
        }

        /* =========================================
           9. JUDUL DAFTAR DAN TOTAL
        ========================================= */

        .table-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 18px;
        }

        .table-heading .section-title {
            margin: 0;
        }

        .total-label {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 12px;
            border: 1px solid #F2D6C1;
            border-radius: 999px;
            background: var(--pale-copper);
            color: var(--copper-dark);
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
        }

        /* =========================================
           10. TABEL PENGAJUAN
        ========================================= */

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .application-table {
            width: 100%;
            min-width: 900px;
            margin: 0;
            border-collapse: separate;
            border-spacing: 0;
        }

        .application-table thead th {
            padding: 14px 13px;
            border: 0;
            background: var(--charcoal);
            color: var(--white);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
            vertical-align: middle;
        }

        .application-table thead th:first-child {
            border-radius: 8px 0 0 8px;
            padding-left: 17px;
        }

        .application-table thead th:last-child {
            border-radius: 0 8px 8px 0;
        }

        .application-table tbody td {
            padding: 15px 13px;
            border-bottom: 1px solid #EAECED;
            color: #46515A;
            font-size: 12px;
            vertical-align: middle;
        }

        .application-table tbody tr {
            transition: background .18s ease;
        }

        .application-table tbody tr:hover {
            background: #FCFAF8;
        }

        .application-table tbody tr:last-child td {
            border-bottom: 0;
        }

        .application-number {
            color: var(--charcoal) !important;
            font-weight: 800;
            white-space: nowrap;
        }

        .applicant-name {
            color: var(--charcoal) !important;
            font-weight: 600;
        }

        /* =========================================
           11. BADGE STATUS
        ========================================= */

        .status-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 7px 11px;
            border: 1px solid transparent;
            border-radius: 999px;
            font-size: 10px;
            font-weight: 700;
            white-space: nowrap;
        }

        .status-menunggu {
            border-color: #F2DFBE;
            background: var(--status-waiting-bg);
            color: var(--status-waiting);
        }

        .status-diverifikasi {
            border-color: #D4E3F0;
            background: var(--status-verified-bg);
            color: var(--status-verified);
        }

        .status-disetujui {
            border-color: #D1E8DB;
            background: var(--status-approved-bg);
            color: var(--status-approved);
        }

        .status-ditolak {
            border-color: #F3D5D2;
            background: var(--status-rejected-bg);
            color: var(--status-rejected);
        }

        /* =========================================
           12. TOMBOL DETAIL
        ========================================= */

        .btn-detail {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            min-height: 34px;
            padding: 8px 12px;
            border: 1px solid var(--copper);
            border-radius: 8px;
            background: var(--copper);
            color: var(--white);
            text-decoration: none;
            font-size: 10px;
            font-weight: 800;
            white-space: nowrap;
            transition: .2s ease;
        }

        .btn-detail:hover {
            border-color: var(--copper-dark);
            background: var(--copper-dark);
            color: var(--white);
            transform: translateY(-1px);
        }

        /* =========================================
           13. EMPTY STATE
        ========================================= */

        .empty-state {
            padding: 55px 20px;
            text-align: center;
            color: var(--gray);
        }

        .empty-icon {
            width: 65px;
            height: 65px;
            display: grid;
            place-items: center;
            margin: 0 auto 17px;
            border-radius: 50%;
            background: var(--pale-copper);
            color: var(--copper);
            font-size: 25px;
        }

        .empty-state h5 {
            margin-bottom: 8px;
            color: var(--charcoal);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 16px;
            font-weight: 800;
        }

        .empty-state p {
            margin: 0;
            font-size: 12px;
            line-height: 1.7;
        }

        /* =========================================
           14. PAGINATION
        ========================================= */

        .pagination-wrapper {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .pagination {
            gap: 4px;
            margin: 0;
        }

        .pagination .page-link {
            border: 1px solid var(--border);
            border-radius: 7px !important;
            color: var(--charcoal);
            font-size: 11px;
            box-shadow: none;
        }

        .pagination .page-link:hover {
            border-color: #F2D6C1;
            background: var(--pale-copper);
            color: var(--copper-dark);
        }

        .pagination .active .page-link {
            border-color: var(--copper);
            background: var(--copper);
            color: var(--white);
        }

        .pagination .disabled .page-link {
            color: #A5ADB2;
        }

        /* =========================================
           15. RESPONSIVE TABLET
        ========================================= */

        @media (max-width: 768px) {
            .main-container {
                padding-top: 22px;
            }

            .page-header {
                align-items: flex-start;
                padding: 20px;
            }

            .page-heading {
                gap: 11px;
            }

            .page-icon {
                width: 42px;
                height: 42px;
                flex-basis: 42px;
                font-size: 16px;
            }

            .page-description {
                font-size: 11px;
            }

            .content-card {
                padding: 18px;
            }

            .table-heading {
                align-items: flex-start;
            }

            .pagination-wrapper {
                justify-content: center;
            }
        }

        /* =========================================
           16. RESPONSIVE HP
        ========================================= */

        @media (max-width: 520px) {
            .topbar {
                min-height: 68px;
                padding: 10px 14px;
            }

            .brand {
                gap: 9px;
            }

            .brand-logo {
                width: 39px;
                height: 39px;
                flex-basis: 39px;
            }

            .brand-name {
                font-size: 12px;
            }

            .brand-description {
                max-width: 220px;
                font-size: 8px;
                letter-spacing: .3px;
            }

            .topbar-label {
                font-size: 9px;
            }

            .main-container {
                padding: 17px 11px 30px;
            }

            .page-header {
                flex-direction: column;
                gap: 17px;
                padding: 17px;
                border-radius: 12px;
            }

            .page-title {
                font-size: 18px;
            }

            .page-description {
                font-size: 10px;
            }

            .btn-back {
                width: 100%;
                min-height: 40px;
            }

            .content-card {
                padding: 15px;
                border-radius: 12px;
            }

            .section-title {
                font-size: 15px;
            }

            .table-heading {
                flex-direction: column;
                gap: 11px;
            }

            .total-label {
                font-size: 10px;
            }

            .pagination-wrapper {
                overflow-x: auto;
                justify-content: flex-start;
            }
        }

        /* =========================================
           17. AKSESIBILITAS
        ========================================= */

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- =========================================
         HEADER SI CANTIK
    ========================================= -->

    <header class="topbar">

        <a href="{{ route('admin.monitoring.index') }}" class="brand">

            <div class="brand-logo">
                <img
                    src="{{ asset('images/logo-sulawesi-tengah.png') }}"
                    alt="Logo Provinsi Sulawesi Tengah"
                >
            </div>

            <div>
                <h1 class="brand-name">DESDM SICANTIK</h1>
                <p class="brand-description">
                    DINAS ENERGI DAN SUMBER DAYA MINERAL
                </p>
            </div>

        </a>

        <div class="topbar-label">
            <i class="fa-solid fa-shield-halved"></i>
            Area Administrator
        </div>

    </header>


    <main class="main-container">

        <!-- =====================================
             HEADER HALAMAN
        ====================================== -->

        <section class="page-header">

            <div class="page-heading">

                <div class="page-icon">
                    <i class="fa-solid fa-file-circle-check"></i>
                </div>

                <div>
                    <h2 class="page-title">
                        Monitoring Pengajuan Bantuan
                    </h2>

                    <p class="page-description">
                        Monitoring seluruh pengajuan bantuan listrik
                    </p>
                </div>

            </div>

            <a
                href="{{ route('admin.monitoring.index') }}"
                class="btn-back"
            >
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </a>

        </section>


        <!-- =====================================
             FILTER PENGAJUAN
        ====================================== -->

        <section class="content-card">

            <h3 class="section-title">
                <i class="fa-solid fa-filter"></i>
                Filter Pengajuan
            </h3>

            <form
                action="{{ route('admin.monitoring.bantuan') }}"
                method="GET"
            >

                <div class="row g-3 align-items-end">

                    <!-- NOMOR PENGAJUAN -->

                    <div class="col-lg-4 col-md-6">

                        <label class="form-label" for="nomor_pengajuan">
                            Nomor Pengajuan
                        </label>

                        <input
                            type="text"
                            id="nomor_pengajuan"
                            name="nomor_pengajuan"
                            class="form-control"
                            placeholder="Cari nomor pengajuan..."
                            value="{{ request('nomor_pengajuan') }}"
                        >

                    </div>


                    <!-- STATUS -->

                    <div class="col-lg-3 col-md-6">

                        <label class="form-label" for="status">
                            Status
                        </label>

                        <select
                            id="status"
                            name="status"
                            class="form-select"
                        >

                            <option value="">
                                Semua Status
                            </option>

                            <option
                                value="Menunggu Verifikasi"
                                {{ request('status') == 'Menunggu Verifikasi' ? 'selected' : '' }}
                            >
                                Menunggu Verifikasi
                            </option>

                            <option
                                value="Diverifikasi"
                                {{ request('status') == 'Diverifikasi' ? 'selected' : '' }}
                            >
                                Diverifikasi
                            </option>

                            <option
                                value="Disetujui"
                                {{ request('status') == 'Disetujui' ? 'selected' : '' }}
                            >
                                Disetujui
                            </option>

                            <option
                                value="Ditolak"
                                {{ request('status') == 'Ditolak' ? 'selected' : '' }}
                            >
                                Ditolak
                            </option>

                        </select>

                    </div>


                    <!-- TANGGAL MULAI -->

                    <div class="col-lg-2 col-md-6">

                        <label class="form-label" for="tanggal_mulai">
                            Dari Tanggal
                        </label>

                        <input
                            type="date"
                            id="tanggal_mulai"
                            name="tanggal_mulai"
                            class="form-control"
                            value="{{ request('tanggal_mulai') }}"
                        >

                    </div>


                    <!-- TANGGAL AKHIR -->

                    <div class="col-lg-2 col-md-6">

                        <label class="form-label" for="tanggal_akhir">
                            Sampai Tanggal
                        </label>

                        <input
                            type="date"
                            id="tanggal_akhir"
                            name="tanggal_akhir"
                            class="form-control"
                            value="{{ request('tanggal_akhir') }}"
                        >

                    </div>


                    <!-- TOMBOL CARI -->

                    <div class="col-lg-1 col-md-12">

                        <button
                            type="submit"
                            class="btn-search w-100"
                        >
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Cari
                        </button>

                    </div>

                </div>

            </form>

        </section>


        <!-- =====================================
             DAFTAR PENGAJUAN
        ====================================== -->

        <section class="content-card">

            <div class="table-heading">

                <h3 class="section-title">
                    <i class="fa-solid fa-list-check"></i>
                    Daftar Pengajuan
                </h3>

                <span class="total-label">
                    <i class="fa-solid fa-database"></i>
                    Total: {{ $pengajuan->total() }}
                </span>

            </div>


            @if($pengajuan->count() > 0)

                <div class="table-responsive">

                    <table class="table application-table">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nomor Pengajuan</th>
                                <th>Nama Pemohon</th>
                                <th>Nomor HP</th>
                                <th>Kabupaten/Kota</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>


                        <tbody>

                            @foreach($pengajuan as $item)

                                <tr>

                                    <td>
                                        {{ $pengajuan->firstItem() + $loop->index }}
                                    </td>

                                    <td class="application-number">
                                        {{ $item->nomor_pengajuan }}
                                    </td>

                                    <td class="applicant-name">
                                        {{ $item->nama_lengkap }}
                                    </td>

                                    <td>
                                        {{ $item->nomor_hp }}
                                    </td>

                                    <td>
                                        {{ $item->kabupaten_kota }}
                                    </td>


                                    <!-- STATUS -->

                                    <td>

                                        @php
                                            $statusClass = match($item->status) {
                                                'Menunggu Verifikasi' => 'status-menunggu',
                                                'Diverifikasi' => 'status-diverifikasi',
                                                'Disetujui' => 'status-disetujui',
                                                'Ditolak' => 'status-ditolak',
                                                default => 'status-menunggu',
                                            };

                                            $statusIcon = match($item->status) {
                                                'Menunggu Verifikasi' => 'fa-clock',
                                                'Diverifikasi' => 'fa-clipboard-check',
                                                'Disetujui' => 'fa-circle-check',
                                                'Ditolak' => 'fa-circle-xmark',
                                                default => 'fa-circle-info',
                                            };
                                        @endphp

                                        <span class="status-badge {{ $statusClass }}">
                                            <i class="fa-solid {{ $statusIcon }}"></i>
                                            {{ $item->status }}
                                        </span>

                                    </td>


                                    <!-- TANGGAL -->

                                    <td>
                                        {{ $item->created_at->format('d/m/Y') }}
                                    </td>


                                    <!-- AKSI -->

                                    <td>

                                        <a
                                            href="{{ route('admin.pengajuan-bantuan.show', $item) }}"
                                            class="btn-detail"
                                        >
                                            <i class="fa-solid fa-eye"></i>
                                            Detail
                                        </a>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->

                <div class="pagination-wrapper">

                    {{ $pengajuan->links() }}

                </div>

            @else

                <!-- EMPTY STATE -->

                <div class="empty-state">

                    <div class="empty-icon">
                        <i class="fa-solid fa-folder-open"></i>
                    </div>

                    <h5>
                        Belum Ada Pengajuan
                    </h5>

                    <p>
                        Belum terdapat data pengajuan bantuan listrik
                        yang dapat ditampilkan.
                    </p>

                </div>

            @endif

        </section>

    </main>

</body>
</html>