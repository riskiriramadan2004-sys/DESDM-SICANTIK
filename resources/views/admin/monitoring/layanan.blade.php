<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring Pengajuan Layanan Online</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background-color: #f5f7fb;
        }

        .page-header {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,.05);
        }

        .filter-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,.05);
        }

        .table-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,.05);
        }

        .table th {
            white-space: nowrap;
        }

        .status {
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-menunggu {
            background: #fff3cd;
            color: #856404;
        }

        .status-diverifikasi {
            background: #cff4fc;
            color: #055160;
        }

        .status-disetujui {
            background: #d1e7dd;
            color: #0f5132;
        }

        .status-ditolak {
            background: #f8d7da;
            color: #842029;
        }
    </style>
</head>

<body>

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div>
                <h3 class="mb-1">Monitoring Pengajuan Layanan Online</h3>
                <p class="text-muted mb-0">
                    Monitoring proses pengajuan layanan online masyarakat.
                </p>
            </div>

            <a href="{{ route('admin.monitoring.index') }}"
               class="btn btn-secondary">
                ? Kembali
            </a>
        </div>
    </div>


    {{-- FILTER --}}
    <div class="filter-card">

        <h5 class="mb-3">Filter Pengajuan</h5>

        <form method="GET"
              action="{{ route('admin.monitoring.layanan') }}">

            <div class="row g-3">

                {{-- Nomor Pengajuan --}}
                <div class="col-md-3">
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


                {{-- Layanan --}}
                <div class="col-md-3">
                    <label class="form-label">
                        Layanan
                    </label>

                    <select name="layanan_id"
                            class="form-select">

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


                {{-- Status --}}
                <div class="col-md-2">
                    <label class="form-label">
                        Status
                    </label>

                    <select name="status"
                            class="form-select">

                        <option value="">
                            Semua Status
                        </option>

                        <option value="menunggu_verifikasi"
                            {{ request('status') == 'menunggu_verifikasi' ? 'selected' : '' }}>
                            Menunggu Verifikasi
                        </option>

                        <option value="Diverifikasi"
                            {{ request('status') == 'Diverifikasi' ? 'selected' : '' }}>
                            Diverifikasi
                        </option>

                        <option value="Disetujui"
                            {{ request('status') == 'Disetujui' ? 'selected' : '' }}>
                            Disetujui
                        </option>

                        <option value="Ditolak"
                            {{ request('status') == 'Ditolak' ? 'selected' : '' }}>
                            Ditolak
                        </option>

                    </select>
                </div>


                {{-- Tanggal Mulai --}}
                <div class="col-md-2">
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


                {{-- Tanggal Akhir --}}
                <div class="col-md-2">
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


            <div class="mt-3 d-flex gap-2">

                <button type="submit"
                        class="btn btn-primary">
                    ?? Filter
                </button>

                <a href="{{ route('admin.monitoring.layanan') }}"
                   class="btn btn-outline-secondary">
                    Reset
                </a>

            </div>

        </form>

    </div>


    {{-- DATA --}}
    <div class="table-card">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h5 class="mb-0">
                Daftar Pengajuan
            </h5>

            <span class="text-muted">
                Total: {{ $pengajuan->total() }} pengajuan
            </span>

        </div>


        @if ($pengajuan->count() > 0)

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-light">

                        <tr>
                            <th>No</th>
                            <th>Nomor Pengajuan</th>
                            <th>Nama Pemohon</th>
                            <th>Layanan</th>
                            <th>NIK</th>
                            <th>No. HP</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($pengajuan as $item)

                            @php
                                $statusClass = match (strtolower($item->status)) {
                                    'menunggu_verifikasi' => 'status-menunggu',
                                    'diverifikasi' => 'status-diverifikasi',
                                    'disetujui' => 'status-disetujui',
                                    'ditolak' => 'status-ditolak',
                                    default => 'status-menunggu',
                                };
                            @endphp

                            <tr>

                                <td>
                                    {{ $pengajuan->firstItem() + $loop->index }}
                                </td>

                                <td>
                                    <strong>
                                        {{ $item->nomor_pengajuan }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $item->nama_lengkap }}
                                </td>

                                <td>
                                    {{ $item->layanan?->nama ?? '-' }}
                                </td>

                                <td>
                                    {{ $item->nik }}
                                </td>

                                <td>
                                    {{ $item->nomor_hp }}
                                </td>

                                <td>
                                    <span class="status {{ $statusClass }}">
                                        {{ str_replace('_', ' ', $item->status) }}
                                    </span>
                                </td>

                                <td>
                                    {{ $item->created_at?->format('d/m/Y H:i') }}
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>


            {{-- PAGINATION --}}
            <div class="mt-3">
                {{ $pengajuan->links() }}
            </div>

        @else

            <div class="text-center py-5">

                <div style="font-size: 45px;">
                    ??
                </div>

                <h5 class="mt-3">
                    Belum Ada Pengajuan
                </h5>

                <p class="text-muted mb-0">
                    Belum terdapat data pengajuan layanan online.
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
