<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring Pengajuan Bantuan - DESDM SICANTIK</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
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
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .filter-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .table-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .status-badge {
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

        .empty-state {
            padding: 60px 20px;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>

<body>

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="page-header">

        <div class="d-flex justify-content-between align-items-center">

            <div>
                <h3 class="mb-1">
                    Monitoring Pengajuan Bantuan
                </h3>

                <p class="text-muted mb-0">
                    Monitoring seluruh pengajuan bantuan listrik
                </p>
            </div>

            <a
                href="{{ route('admin.monitoring.index') }}"
                class="btn btn-secondary"
            >
                ← Kembali
            </a>

        </div>

    </div>


    {{-- FILTER --}}
    <div class="filter-card">

        <h5 class="mb-3">
            Filter Pengajuan
        </h5>

        <form
            action="{{ route('admin.monitoring.bantuan') }}"
            method="GET"
        >

            <div class="row g-3">

                {{-- NOMOR PENGAJUAN --}}
                <div class="col-md-4">

                    <label class="form-label">
                        Nomor Pengajuan
                    </label>

                    <input
                        type="text"
                        name="nomor_pengajuan"
                        class="form-control"
                        placeholder="Cari nomor pengajuan..."
                        value="{{ request('nomor_pengajuan') }}"
                    >

                </div>


                {{-- STATUS --}}
                <div class="col-md-3">

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


                {{-- TANGGAL MULAI --}}
                <div class="col-md-2">

                    <label class="form-label">
                        Dari Tanggal
                    </label>

                    <input
                        type="date"
                        name="tanggal_mulai"
                        class="form-control"
                        value="{{ request('tanggal_mulai') }}"
                    >

                </div>


                {{-- TANGGAL AKHIR --}}
                <div class="col-md-2">

                    <label class="form-label">
                        Sampai Tanggal
                    </label>

                    <input
                        type="date"
                        name="tanggal_akhir"
                        class="form-control"
                        value="{{ request('tanggal_akhir') }}"
                    >

                </div>


                {{-- BUTTON --}}
                <div class="col-md-1 d-flex align-items-end">

                    <button
                        type="submit"
                        class="btn btn-primary w-100"
                    >
                        Cari
                    </button>

                </div>

            </div>

        </form>

    </div>


    {{-- TABLE --}}
    <div class="table-card">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h5 class="mb-0">
                Daftar Pengajuan
            </h5>

            <span class="text-muted">
                Total: {{ $pengajuan->total() }}
            </span>

        </div>


        @if($pengajuan->count() > 0)

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

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

                                <td>
                                    <strong>
                                        {{ $item->nomor_pengajuan }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $item->nama_lengkap }}
                                </td>

                                <td>
                                    {{ $item->nomor_hp }}
                                </td>

                                <td>
                                    {{ $item->kabupaten_kota }}
                                </td>

                                <td>

                                    @php
                                        $statusClass = match($item->status) {
                                            'Menunggu Verifikasi' => 'status-menunggu',
                                            'Diverifikasi' => 'status-diverifikasi',
                                            'Disetujui' => 'status-disetujui',
                                            'Ditolak' => 'status-ditolak',
                                            default => 'status-menunggu',
                                        };
                                    @endphp

                                    <span class="status-badge {{ $statusClass }}">
                                        {{ $item->status }}
                                    </span>

                                </td>

                                <td>
                                    {{ $item->created_at->format('d/m/Y') }}
                                </td>

                                <td>

                                    <a
                                        href="{{ route('admin.pengajuan-bantuan.show', $item) }}"
                                        class="btn btn-sm btn-primary"
                                    >
                                        Detail
                                    </a>

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

            <div class="empty-state">

                <h5>
                    Belum Ada Pengajuan
                </h5>

                <p class="mb-0">
                    Belum terdapat data pengajuan bantuan listrik
                    yang dapat ditampilkan.
                </p>

            </div>

        @endif

    </div>

</div>

</body>
</html>