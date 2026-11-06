<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Kepegawaian | Admin SICANTIK</title>

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
           1. DESIGN SYSTEM SI CANTIK
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

            --success: #18794E;
            --success-bg: #EAF7EF;

            --danger: #B42332;
            --danger-bg: #FFF0F0;
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
           3. HEADER
        ========================================= */

        .navbar {
            min-height: 76px;
            padding: 11px 0;
            background: var(--charcoal) !important;
            border-bottom: 3px solid var(--copper);
        }

        .navbar .container-fluid {
            padding-left: clamp(16px, 3vw, 42px);
            padding-right: clamp(16px, 3vw, 42px);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 13px;
            margin: 0;
            color: var(--white) !important;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 16px;
            font-weight: 800;
            letter-spacing: .4px;
        }

        .brand-logo {
            width: 46px;
            height: 46px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4px;
            border-radius: 10px;
            background: var(--white);
            overflow: hidden;
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: contain;
        }

        .brand-text small {
            display: block;
            margin-top: 3px;
            color: #D1D7DB;
            font-family: 'Inter', sans-serif;
            font-size: 9px;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .btn-logout {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 9px 16px;
            border: 1px solid rgba(255,255,255,.35);
            border-radius: 9px;
            background: rgba(255,255,255,.07);
            color: var(--white);
            font-size: 12px;
            font-weight: 700;
            transition: .2s ease;
        }

        .btn-logout:hover {
            border-color: var(--copper);
            background: var(--copper);
            color: var(--white);
        }

        /* =========================================
           4. KONTEN UTAMA
        ========================================= */

        .main-container {
            width: 100%;
            max-width: 1600px;
            margin: 0 auto;
            padding: 32px clamp(16px, 2.5vw, 40px) 50px;
        }

        .page-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 27px;
        }

        .page-title {
            margin: 0;
            color: var(--charcoal);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(23px, 3vw, 31px);
            font-weight: 800;
            letter-spacing: -.8px;
        }

        .page-description {
            margin: 7px 0 0;
            color: var(--gray);
            font-size: 13px;
            line-height: 1.7;
        }

        /* =========================================
           5. TOMBOL TAMBAH PEGAWAI
        ========================================= */

        .btn-add {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            flex-shrink: 0;
            padding: 12px 18px;
            border: 1px solid var(--copper);
            border-radius: 9px;
            background: var(--copper);
            color: var(--white);
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(198,107,50,.17);
            transition: .2s ease;
        }

        .btn-add:hover {
            background: var(--copper-dark);
            border-color: var(--copper-dark);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* =========================================
           6. ALERT
        ========================================= */

        .alert {
            display: flex;
            align-items: flex-start;
            gap: 11px;
            padding: 14px 16px;
            margin-bottom: 20px;
            border-radius: 10px;
            font-size: 12px;
            line-height: 1.7;
        }

        .alert-success {
            background: var(--success-bg);
            color: var(--success);
            border: 1px solid #CBE8D5;
        }

        .alert-danger {
            background: var(--danger-bg);
            color: var(--danger);
            border: 1px solid #F2D0D3;
        }

        .alert .btn-close {
            margin-left: auto;
            flex-shrink: 0;
        }

        /* =========================================
           7. KARTU STATISTIK
        ========================================= */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 25px;
        }

        .stat-card {
            position: relative;
            min-width: 0;
            min-height: 120px;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            overflow: hidden;
            border: 1px solid rgba(41,47,54,.05);
            border-radius: 15px;
            background: var(--white);
            box-shadow: 0 7px 24px rgba(41,47,54,.055);
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(41,47,54,.09);
        }

        .stat-icon {
            width: 47px;
            height: 47px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: var(--pale-copper);
            color: var(--copper-dark);
            font-size: 18px;
        }

        .stat-icon.male {
            background: #E9EFF8;
            color: #456A99;
        }

        .stat-icon.female {
            background: #F8EAF0;
            color: #A64D76;
        }

        .stat-icon.retirement {
            background: #E9F2EC;
            color: #39765A;
        }

        .stat-info {
            min-width: 0;
        }

        .stat-label {
            margin-bottom: 7px;
            color: var(--gray);
            font-size: 11px;
            line-height: 1.5;
        }

        .stat-number {
            color: var(--charcoal);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 29px;
            font-weight: 800;
            line-height: 1.1;
        }

        /* =========================================
           8. KARTU KONTEN
        ========================================= */

        .content-card {
            margin-bottom: 24px;
            border: 1px solid rgba(41,47,54,.05);
            border-radius: 16px;
            background: var(--white);
            box-shadow: 0 9px 28px rgba(41,47,54,.055);
            overflow: hidden;
        }

        .content-card-body {
            padding: 23px;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 10px;
            color: var(--charcoal);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 17px;
            font-weight: 800;
        }

        .section-title i {
            color: var(--copper);
            font-size: 16px;
        }

        .section-description {
            margin: 0 0 20px;
            color: var(--gray);
            font-size: 12px;
            line-height: 1.8;
        }

        /* =========================================
           9. FORM DAN INPUT
        ========================================= */

        .form-label {
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

        input[type="file"].form-control {
            padding: 8px 11px;
        }

        /* =========================================
           10. TOMBOL IMPOR
        ========================================= */

        .btn-import {
            min-height: 45px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 17px;
            border: 1px solid var(--copper);
            border-radius: 9px;
            background: var(--white);
            color: var(--copper-dark);
            font-size: 12px;
            font-weight: 800;
            transition: .2s ease;
        }

        .btn-import:hover {
            background: var(--copper);
            color: var(--white);
        }

        /* =========================================
           11. TOMBOL FILTER
        ========================================= */

        .btn-search {
            min-height: 45px;
            padding: 10px 17px;
            border: 1px solid var(--charcoal);
            border-radius: 9px;
            background: var(--charcoal);
            color: var(--white);
            font-size: 12px;
            font-weight: 700;
            transition: .2s ease;
        }

        .btn-search:hover {
            border-color: var(--copper);
            background: var(--copper);
            color: var(--white);
        }

        .btn-reset {
            min-height: 45px;
            padding: 10px 15px;
            border: 1px solid #D4D9DC;
            border-radius: 9px;
            background: var(--white);
            color: var(--gray);
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: .2s ease;
        }

        .btn-reset:hover {
            border-color: var(--copper);
            background: var(--pale-copper);
            color: var(--copper-dark);
        }

        /* =========================================
           12. TABEL PEGAWAI
        ========================================= */

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .employee-table {
            width: 100%;
            min-width: 1100px;
            margin: 0;
            border-collapse: separate;
            border-spacing: 0;
        }

        .employee-table thead th {
            padding: 15px 14px;
            border: 0;
            background: var(--charcoal);
            color: var(--white);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
            vertical-align: middle;
        }

        .employee-table thead th:first-child {
            padding-left: 19px;
        }

        .employee-table tbody td {
            padding: 15px 14px;
            border-bottom: 1px solid #EAECED;
            color: #46515A;
            font-size: 11px;
            vertical-align: middle;
        }

        .employee-table tbody tr {
            transition: background .18s ease;
        }

        .employee-table tbody tr:hover {
            background: #FCFAF8;
        }

        .employee-table tbody tr:last-child td {
            border-bottom: 0;
        }

        .employee-name {
            color: var(--charcoal) !important;
            font-weight: 700;
        }

        .employee-table .text-center {
            text-align: center;
        }

        /* =========================================
           13. BADGE STATUS
        ========================================= */

        .status-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 6px 11px;
            border: 1px solid transparent;
            border-radius: 999px;
            font-size: 10px;
            font-weight: 700;
            white-space: nowrap;
        }

        .status-active {
            background: #E6F2EC;
            color: #39765A;
            border-color: #D1E8DB;
        }

        .status-retired {
            background: #ECEEF0;
            color: #68717A;
            border-color: #DFE2E4;
        }

        .status-inactive {
            background: var(--pale-copper);
            color: #98602F;
            border-color: #F3D8C2;
        }

        /* =========================================
           14. TOMBOL AKSI TABEL
        ========================================= */

        .action-group {
            display: flex;
            align-items: center;
            gap: 7px;
            white-space: nowrap;
        }

        .btn-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            min-height: 32px;
            padding: 7px 11px;
            border: 1px solid transparent;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            transition: .2s ease;
        }

        .btn-edit {
            border-color: #F2D6C1;
            background: var(--pale-copper);
            color: var(--copper-dark);
        }

        .btn-edit:hover {
            border-color: var(--copper);
            background: var(--copper);
            color: var(--white);
        }

        .btn-delete {
            border-color: #F3D5D2;
            background: #FBE9E8;
            color: var(--danger);
        }

        .btn-delete:hover {
            border-color: var(--danger);
            background: var(--danger);
            color: var(--white);
        }

        /* =========================================
           15. PAGINATION
        ========================================= */

        .pagination-container {
            display: flex;
            justify-content: flex-end;
            padding: 18px 23px;
            border-top: 1px solid #EAECED;
        }

        .pagination-container nav {
            margin: 0;
        }

        .pagination {
            margin: 0;
            gap: 4px;
        }

        .pagination .page-link {
            border: 1px solid var(--border);
            border-radius: 7px !important;
            color: var(--charcoal);
            font-size: 11px;
            box-shadow: none;
        }

        .pagination .page-link:hover {
            background: var(--pale-copper);
            border-color: #F2D6C1;
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
           16. EMPTY STATE
        ========================================= */

        .empty-state {
            padding: 45px 20px !important;
            text-align: center;
            color: var(--gray) !important;
            line-height: 1.8;
        }

        .empty-state i {
            display: block;
            margin-bottom: 13px;
            color: var(--copper);
            font-size: 30px;
        }

        /* =========================================
           17. RESPONSIVE TABLET
        ========================================= */

        @media (max-width: 992px) {
            .stats-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .main-container {
                padding-top: 25px;
            }
        }

        /* =========================================
           18. RESPONSIVE HP
        ========================================= */

        @media (max-width: 576px) {
            .navbar {
                min-height: 68px;
            }

            .brand-logo {
                width: 40px;
                height: 40px;
            }

            .navbar-brand {
                gap: 10px;
                font-size: 13px;
            }

            .brand-text small {
                font-size: 8px;
            }

            .btn-logout {
                padding: 8px 11px;
                font-size: 10px;
            }

            .main-container {
                padding: 23px 13px 35px;
            }

            .page-heading {
                align-items: flex-start;
                flex-direction: column;
                gap: 15px;
            }

            .page-title {
                font-size: 23px;
            }

            .page-description {
                font-size: 11px;
            }

            .btn-add {
                width: 100%;
                min-height: 43px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .stat-card {
                min-height: 105px;
                gap: 10px;
                padding: 13px 11px;
                border-radius: 12px;
            }

            .stat-icon {
                width: 36px;
                height: 36px;
                border-radius: 9px;
                font-size: 14px;
            }

            .stat-label {
                font-size: 9px;
            }

            .stat-number {
                font-size: 23px;
            }

            .content-card {
                border-radius: 13px;
                margin-bottom: 18px;
            }

            .content-card-body {
                padding: 17px;
            }

            .section-title {
                font-size: 15px;
            }

            .section-description {
                font-size: 11px;
            }

            .pagination-container {
                justify-content: center;
                padding: 15px 10px;
            }
        }

        /* =========================================
           19. AKSESIBILITAS
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
         HEADER ADMIN
    ========================================= -->

    <nav class="navbar navbar-dark">

        <div class="container-fluid">

            <a class="navbar-brand"
               href="{{ route('admin.informasi.index') }}">

                <div class="brand-logo">
                    <img
                        src="{{ asset('images/logo-sulawesi-tengah.png') }}"
                        alt="Logo Provinsi Sulawesi Tengah"
                    >
                </div>

                <div class="brand-text">
                    ADMIN SICANTIK
                    <small>DINAS ESDM PROVINSI SULAWESI TENGAH</small>
                </div>

            </a>

            <div>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="btn-logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </button>
                </form>
            </div>

        </div>

    </nav>


    <!-- =========================================
         KONTEN UTAMA
    ========================================= -->

    <main class="main-container">

        <!-- JUDUL HALAMAN -->

        <div class="page-heading">

            <div>
                <h1 class="page-title">
                    Data Kepegawaian ESDM
                </h1>

                <p class="page-description">
                    Pengelolaan data pegawai secara internal untuk administrator.
                </p>
            </div>

            <a
                href="{{ route('admin.informasi.create') }}"
                class="btn-add"
            >
                <i class="fa-solid fa-user-plus"></i>
                Tambah Pegawai
            </a>

        </div>


        <!-- =====================================
             PESAN BERHASIL
        ====================================== -->

        @if(session('success'))

            <div class="alert alert-success alert-dismissible fade show"
                 role="alert">

                <i class="fa-solid fa-circle-check mt-1"></i>

                <div>
                    {{ session('success') }}
                </div>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Tutup"
                ></button>

            </div>

        @endif


        <!-- =====================================
             PESAN ERROR
        ====================================== -->

        @if(session('error'))

            <div class="alert alert-danger alert-dismissible fade show"
                 role="alert">

                <i class="fa-solid fa-circle-exclamation mt-1"></i>

                <div>
                    {{ session('error') }}
                </div>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Tutup"
                ></button>

            </div>

        @endif


        @if($errors->any())

            <div class="alert alert-danger">

                <i class="fa-solid fa-circle-exclamation mt-1"></i>

                <div>
                    <strong>Periksa kembali data:</strong>

                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>

        @endif


        <!-- =====================================
             STATISTIK PEGAWAI
        ====================================== -->

        <div class="stats-grid">

            <!-- TOTAL PEGAWAI -->

            <div class="stat-card">

                <div class="stat-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <div class="stat-info">

                    <div class="stat-label">
                        Total Pegawai
                    </div>

                    <div class="stat-number">
                        {{ $statistik['total'] }}
                    </div>

                </div>

            </div>


            <!-- LAKI-LAKI -->

            <div class="stat-card">

                <div class="stat-icon male">
                    <i class="fa-solid fa-person"></i>
                </div>

                <div class="stat-info">

                    <div class="stat-label">
                        Laki-laki
                    </div>

                    <div class="stat-number">
                        {{ $statistik['laki_laki'] }}
                    </div>

                </div>

            </div>


            <!-- PEREMPUAN -->

            <div class="stat-card">

                <div class="stat-icon female">
                    <i class="fa-solid fa-person-dress"></i>
                </div>

                <div class="stat-info">

                    <div class="stat-label">
                        Perempuan
                    </div>

                    <div class="stat-number">
                        {{ $statistik['perempuan'] }}
                    </div>

                </div>

            </div>


            <!-- PERKIRAAN PENSIUN -->

            <div class="stat-card">

                <div class="stat-icon retirement">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>

                <div class="stat-info">

                    <div class="stat-label">
                        Perkiraan Pensiun 5 Tahun
                    </div>

                    <div class="stat-number">
                        {{ $statistik['mendekati_pensiun'] }}
                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================
             IMPOR DATA CSV
        ====================================== -->

        <section class="content-card">

            <div class="content-card-body">

                <h2 class="section-title">
                    <i class="fa-solid fa-file-csv"></i>
                    Impor Data Pegawai (CSV)
                </h2>

                <p class="section-description">
                    Gunakan CSV sesuai template dengan tanggal berformat
                    YYYY-MM-DD. Impor akan ditolak jika data tidak valid
                    atau NIP sudah terdaftar.
                </p>

                <form
                    action="{{ route('admin.informasi.import') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="row g-3 align-items-end"
                >

                    @csrf

                    <div class="col-md-8">

                        <label for="file_csv" class="form-label">
                            <i class="fa-solid fa-paperclip me-1"></i>
                            Pilih File CSV
                        </label>

                        <input
                            type="file"
                            name="file_csv"
                            id="file_csv"
                            class="form-control"
                            accept=".csv,.txt"
                            required
                        >

                    </div>

                    <div class="col-md-4">

                        <button
                            type="submit"
                            class="btn-import w-100"
                        >
                            <i class="fa-solid fa-upload"></i>
                            Impor CSV
                        </button>

                    </div>

                </form>

            </div>

        </section>


        <!-- =====================================
             DAFTAR PEGAWAI
        ====================================== -->

        <section class="content-card">

            <!-- HEADER DAN FILTER -->

            <div class="content-card-body border-bottom">

                <h2 class="section-title">
                    <i class="fa-solid fa-address-book"></i>
                    Daftar Pegawai
                </h2>

                <p class="section-description">
                    Cari dan kelola informasi data kepegawaian ESDM.
                </p>


                <!-- FORM PENCARIAN -->

                <form
                    method="GET"
                    action="{{ route('admin.informasi.index') }}"
                    class="row g-2 align-items-center"
                >

                    <!-- PENCARIAN -->

                    <div class="col-lg-6 col-md-12">

                        <input
                            type="text"
                            name="cari"
                            class="form-control"
                            value="{{ request('cari') }}"
                            placeholder="Cari nama, NIP, jabatan, atau unit kerja"
                        >

                    </div>


                    <!-- FILTER GENDER -->

                    <div class="col-lg-2 col-md-4">

                        <select
                            name="jenis_kelamin"
                            class="form-select"
                        >

                            <option value="">
                                Semua Gender
                            </option>

                            <option
                                value="Laki-laki"
                                @selected(request('jenis_kelamin') === 'Laki-laki')
                            >
                                Laki-laki
                            </option>

                            <option
                                value="Perempuan"
                                @selected(request('jenis_kelamin') === 'Perempuan')
                            >
                                Perempuan
                            </option>

                        </select>

                    </div>


                    <!-- FILTER STATUS -->

                    <div class="col-lg-2 col-md-4">

                        <select
                            name="status_pegawai"
                            class="form-select"
                        >

                            <option value="">
                                Semua Status
                            </option>

                            <option
                                value="aktif"
                                @selected(request('status_pegawai') === 'aktif')
                            >
                                Aktif
                            </option>

                            <option
                                value="pensiun"
                                @selected(request('status_pegawai') === 'pensiun')
                            >
                                Pensiun
                            </option>

                            <option
                                value="nonaktif"
                                @selected(request('status_pegawai') === 'nonaktif')
                            >
                                Nonaktif
                            </option>

                        </select>

                    </div>


                    <!-- TOMBOL CARI DAN RESET -->

                    <div class="col-lg-2 col-md-4 d-flex gap-2">

                        <button
                            type="submit"
                            class="btn-search flex-fill"
                        >
                            <i class="fa-solid fa-magnifying-glass me-1"></i>
                            Cari
                        </button>

                        <a
                            href="{{ route('admin.informasi.index') }}"
                            class="btn-reset d-flex align-items-center justify-content-center"
                        >
                            Reset
                        </a>

                    </div>

                </form>

            </div>


            <!-- =====================================
                 TABEL DATA PEGAWAI
            ====================================== -->

            <div class="table-responsive">

                <table class="table employee-table">

                    <thead>

                        <tr>

                            <th>No.</th>

                            <th>NIP</th>

                            <th>Nama Pegawai</th>

                            <th>Gender</th>

                            <th>Jabatan</th>

                            <th>Unit Kerja</th>

                            <th>Status Kepegawaian</th>

                            <th>Status</th>

                            <th>Perkiraan Pensiun</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($pegawai as $item)

                            <tr>

                                <td>
                                    {{ $pegawai->firstItem() + $loop->index }}
                                </td>

                                <td>
                                    {{ $item->nip ?: '-' }}
                                </td>

                                <td class="employee-name">
                                    {{ $item->nama }}
                                </td>

                                <td>
                                    {{ $item->jenis_kelamin }}
                                </td>

                                <td>
                                    {{ $item->jabatan ?: '-' }}
                                </td>

                                <td>
                                    {{ $item->unit_kerja ?: '-' }}
                                </td>

                                <td>
                                    {{ $item->status_kepegawaian }}
                                </td>


                                <!-- STATUS PEGAWAI -->

                                <td>

                                    @if($item->status_pegawai === 'aktif')

                                        <span class="status-badge status-active">
                                            <i class="fa-solid fa-circle-check"></i>
                                            Aktif
                                        </span>

                                    @elseif($item->status_pegawai === 'pensiun')

                                        <span class="status-badge status-retired">
                                            <i class="fa-solid fa-circle-minus"></i>
                                            Pensiun
                                        </span>

                                    @else

                                        <span class="status-badge status-inactive">
                                            <i class="fa-solid fa-circle-exclamation"></i>
                                            Nonaktif
                                        </span>

                                    @endif

                                </td>


                                <!-- PERKIRAAN PENSIUN -->

                                <td>
                                    {{ $item->tanggal_pensiun
                                        ? $item->tanggal_pensiun->format('d/m/Y')
                                        : '-' }}
                                </td>


                                <!-- AKSI -->

                                <td>

                                    <div class="action-group">

                                        <!-- EDIT -->

                                        <a
                                            href="{{ route('admin.informasi.edit', $item) }}"
                                            class="btn-action btn-edit"
                                        >
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            Edit
                                        </a>


                                        <!-- HAPUS -->

                                        <form
                                            action="{{ route('admin.informasi.destroy', $item) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus data pegawai ini?')"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn-action btn-delete"
                                            >
                                                <i class="fa-solid fa-trash"></i>
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="10" class="empty-state">

                                    <i class="fa-solid fa-users"></i>

                                    Belum ada data pegawai.

                                    <br>

                                    Tambahkan secara manual atau impor CSV.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            <!-- =====================================
                 PAGINATION
            ====================================== -->

            <div class="pagination-container">

                {{ $pegawai->links() }}

            </div>

        </section>

    </main>


    <!-- BOOTSTRAP JAVASCRIPT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>