<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring Layanan Online - Super Admin</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f4f7fb;
            color: #1f2937;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* HEADER */
        .top-header {
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            color: white;
            padding: 28px 35px;
            box-shadow: 0 4px 15px rgba(13, 110, 253, .18);
        }

        .top-header h1 {
            margin: 0;
            font-size: 27px;
            font-weight: 700;
        }

        .top-header p {
            margin: 7px 0 0;
            opacity: .9;
        }

        .page-container {
            width: 95%;
            max-width: 1500px;
            margin: 30px auto;
        }

        /* BACK BUTTON */
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #0d6efd;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .back-button:hover {
            color: #084298;
        }

        /* SUMMARY */
        .summary-card {
            background: white;
            border-radius: 14px;
            padding: 22px 25px;
            margin-bottom: 24px;
            box-shadow: 0 3px 15px rgba(0,0,0,.06);
            border-left: 5px solid #0d6efd;
        }

        .summary-title {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 5px;
        }

        .summary-number {
            font-size: 28px;
            font-weight: 700;
            color: #0d6efd;
        }

        /* CARD */
        .content-card {
            background: white;
            border-radius: 14px;
            padding: 25px;
            margin-bottom: 24px;
            box-shadow: 0 3px 15px rgba(0,0,0,.06);
        }

        .card-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* FILTER */
        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: #495057;
        }

        .form-control,
        .form-select {
            min-height: 42px;
            border-radius: 8px;
        }

        .btn-primary {
            background: #0d6efd;
            border-color: #0d6efd;
            border-radius: 8px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background: #0b5ed7;
            border-color: #0b5ed7;
        }

        .btn-reset {
            border-radius: 8px;
            font-weight: 600;
        }

        /* TABLE */
        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1100px;
            border-collapse: collapse;
        }

        thead th {
            background: #0d6efd;
            color: white;
            padding: 14px;
            font-size: 13px;
            white-space: nowrap;
            border: none;
        }

        tbody td {
            padding: 14px;
            border-bottom: 1px solid #e9ecef;
            vertical-align: middle;
            font-size: 14px;
        }

        tbody tr:hover {
            background: #f8fbff;
        }

        .number {
            font-weight: 700;
            color: #6c757d;
        }

        .application-number {
            font-weight: 700;
            color: #0d6efd;
        }

        .service-name {
            font-weight: 600;
            color: #212529;
        }

        /* STATUS */
        .status {
            display: inline-block;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }

        .status-menunggu {
            background: #fff3cd;
            color: #664d03;
        }

        .status-diproses {
            background: #cfe2ff;
            color: #084298;
        }

        .status-diverifikasi {
            background: #cff4fc;
            color: #055160;
        }

        .status-disetujui {
            background: #d1e7dd;
            color: #0f5132;
        }

        .status-selesai {
            background: #d1e7dd;
            color: #0f5132;
        }

        .status-ditolak {
            background: #f8d7da;
            color: #842029;
        }

        .status-default {
            background: #e9ecef;
            color: #495057;
        }

        /* EMPTY */
        .empty-state {
            text-align: center;
            padding: 65px 20px;
            color: #6c757d;
        }

        .empty-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .empty-state h4 {
            color: #343a40;
            font-weight: 700;
        }

        /* PAGINATION */
        .pagination-wrapper {
            margin-top: 25px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {

            .top-header {
                padding: 22px 20px;
            }

            .top-header h1 {
                font-size: 22px;
            }

            .page-container {
                width: 94%;
                margin-top: 20px;
            }

            .content-card {
                padding: 18px;
            }
        }
    </style>
</head>

<body>

    {{-- HEADER --}}
    <div class="top-header">
        <h1>Monitoring Layanan Online</h1>

        <p>
            Pemantauan seluruh pengajuan layanan online masyarakat
        </p>
    </div>


    <div class="page-container">

        {{-- KEMBALI KE DASHBOARD --}}
        <a
            href="{{ route('admin.dashboard') }}"
            class="back-button"
        >
            ← Kembali ke Dashboard Super Admin
        </a>


        {{-- RINGKASAN --}}
        <div class="summary-card">

            <div class="summary-title">
                Total Pengajuan Layanan
            </div>

            <div class="summary-number">
                {{ $pengajuan->total() }}
            </div>

        </div>


        {{-- FILTER --}}
        <div class="content-card">

            <div class="card-title">
                Filter Pengajuan Layanan
            </div>

            <form
                method="GET"
                action="{{ route('admin.monitoring.layanan') }}"
            >

                <div class="row g-3">

                    {{-- NOMOR --}}
                    <div class="col-lg-3 col-md-6">

                        <label class="form-label">
                            Nomor Pengajuan
                        </label>

                        <input
                            type="text"
                            name="nomor_pengajuan"
                            class="form-control"
                            value="{{ request('nomor_pengajuan') }}"
                            placeholder="Cari nomor pengajuan..."
                        >

                    </div>


                    {{-- LAYANAN --}}
                    <div class="col-lg-3 col-md-6">

                        <label class="form-label">
                            Jenis Layanan
                        </label>

                        <select
                            name="layanan_id"
                            class="form-select"
                        >

                            <option value="">
                                Semua Layanan
                            </option>

                            @foreach ($layanan as $item)

                                <option
                                    value="{{ $item->id }}"
                                    {{ request('layanan_id') == $item->id ? 'selected' : '' }}
                                >
                                    {{ $item->nama }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- STATUS --}}
                    <div class="col-lg-2 col-md-6">

                        <label class="form-label">
                            Status
                        </label>

                        <select
                            name="status"
                            class="form-select"
                        >

                            <option value="">
                                Semua Status
                            </option>

                            <option
                                value="menunggu_verifikasi"
                                {{ request('status') == 'menunggu_verifikasi' ? 'selected' : '' }}
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


                    {{-- TANGGAL MULAI --}}
                    <div class="col-lg-2 col-md-6">

                        <label class="form-label">
                            Tanggal Mulai
                        </label>

                        <input
                            type="date"
                            name="tanggal_mulai"
                            class="form-control"
                            value="{{ request('tanggal_mulai') }}"
                        >

                    </div>


                    {{-- TANGGAL AKHIR --}}
                    <div class="col-lg-2 col-md-6">

                        <label class="form-label">
                            Tanggal Akhir
                        </label>

                        <input
                            type="date"
                            name="tanggal_akhir"
                            class="form-control"
                            value="{{ request('tanggal_akhir') }}"
                        >

                    </div>

                </div>


                <div class="mt-4 d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-primary px-4"
                    >
                        🔎 Filter
                    </button>

                    <a
                        href="{{ route('admin.monitoring.layanan') }}"
                        class="btn btn-outline-secondary btn-reset px-4"
                    >
                        Reset
                    </a>

                </div>

            </form>

        </div>


        {{-- DATA --}}
        <div class="content-card">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>

                    <div class="card-title mb-1">
                        Data Pengajuan Layanan
                    </div>

                    <small class="text-muted">
                        Data terbaru ditampilkan terlebih dahulu.
                    </small>

                </div>

                <span class="badge bg-primary rounded-pill px-3 py-2">
                    {{ $pengajuan->total() }} Pengajuan
                </span>

            </div>


            @if ($pengajuan->count() > 0)

                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>

                                <th>No</th>

                                <th>Nomor Pengajuan</th>

                                <th>Nama Pemohon</th>

                                <th>Layanan</th>

                                <th>NIK</th>

                                <th>No. HP</th>

                                <th>Status</th>

                                <th>Tanggal Pengajuan</th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach ($pengajuan as $item)

                                @php

                                    $status = strtolower(
                                        trim($item->status ?? '')
                                    );

                                    $statusClass = match ($status) {

                                        'menunggu_verifikasi'
                                            => 'status-menunggu',

                                        'menunggu'
                                            => 'status-menunggu',

                                        'diproses'
                                            => 'status-diproses',

                                        'diverifikasi'
                                            => 'status-diverifikasi',

                                        'disetujui'
                                            => 'status-disetujui',

                                        'selesai'
                                            => 'status-selesai',

                                        'ditolak'
                                            => 'status-ditolak',

                                        default
                                            => 'status-default',
                                    };


                                    $statusLabel = match ($status) {

                                        'menunggu_verifikasi'
                                            => 'Menunggu Verifikasi',

                                        'menunggu'
                                            => 'Menunggu',

                                        'diproses'
                                            => 'Diproses',

                                        'diverifikasi'
                                            => 'Diverifikasi',

                                        'disetujui'
                                            => 'Disetujui',

                                        'selesai'
                                            => 'Selesai',

                                        'ditolak'
                                            => 'Ditolak',

                                        default
                                            => $item->status ?? 'Tidak Diketahui',
                                    };

                                @endphp


                                <tr>

                                    {{-- NO --}}
                                    <td class="number">

                                        {{ $pengajuan->firstItem() + $loop->index }}

                                    </td>


                                    {{-- NOMOR --}}
                                    <td>

                                        <span class="application-number">

                                            {{ $item->nomor_pengajuan }}

                                        </span>

                                    </td>


                                    {{-- NAMA --}}
                                    <td>

                                        {{ $item->nama_lengkap ?? '-' }}

                                    </td>


                                    {{-- LAYANAN --}}
                                    <td>

                                        <span class="service-name">

                                            {{ $item->layanan?->nama ?? '-' }}

                                        </span>

                                    </td>


                                    {{-- NIK --}}
                                    <td>

                                        {{ $item->nik ?? '-' }}

                                    </td>


                                    {{-- HP --}}
                                    <td>

                                        {{ $item->nomor_hp ?? '-' }}

                                    </td>


                                    {{-- STATUS --}}
                                    <td>

                                        <span
                                            class="status {{ $statusClass }}"
                                        >
                                            {{ $statusLabel }}
                                        </span>

                                    </td>


                                    {{-- TANGGAL --}}
                                    <td>

                                        {{ $item->created_at?->format('d/m/Y H:i') ?? '-' }}

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


                {{-- PAGINATION --}}
                <div class="pagination-wrapper">

                    {{ $pengajuan->links() }}

                </div>

            @else

                {{-- EMPTY STATE --}}
                <div class="empty-state">

                    <div class="empty-icon">
                        📭
                    </div>

                    <h4>
                        Belum Ada Pengajuan Layanan
                    </h4>

                    <p class="mb-0">
                        Belum terdapat pengajuan layanan online
                        dari masyarakat.
                    </p>

                </div>

            @endif

        </div>

    </div>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>