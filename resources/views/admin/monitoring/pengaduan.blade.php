<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring Pengaduan Masyarakat</title>

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
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }

        .content-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }

        .table th {
            white-space: nowrap;
        }
    </style>
</head>

<body>

<div class="container py-5">

    {{-- HEADER --}}
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">

            <div>
                <h3 class="fw-bold mb-2">
                    Monitoring Pengaduan Masyarakat
                </h3>

                <p class="text-muted mb-0">
                    Monitoring pengaduan yang disampaikan oleh masyarakat.
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
    <div class="content-card mb-4">

        <h5 class="fw-bold mb-3">
            Filter Pengaduan
        </h5>

        <form
            action="{{ route('admin.monitoring.pengaduan') }}"
            method="GET"
        >

            <div class="row g-3">

                {{-- NOMOR PENGADUAN --}}
                <div class="col-md-4">

                    <label class="form-label">
                        Nomor Pengaduan
                    </label>

                    <input
                        type="text"
                        name="nomor_pengaduan"
                        class="form-control"
                        placeholder="Masukkan nomor pengaduan"
                        value="{{ request('nomor_pengaduan') }}"
                    >

                </div>


                {{-- KATEGORI --}}
                <div class="col-md-3">

                    <label class="form-label">
                        Kategori
                    </label>

                    <select
                        name="kategori"
                        class="form-select"
                    >

                        <option value="">
                            Semua Kategori
                        </option>

                        @foreach ($kategori as $item)

                            <option
                                value="{{ $item }}"
                                {{ request('kategori') == $item ? 'selected' : '' }}
                            >
                                {{ $item }}
                            </option>

                        @endforeach

                    </select>

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
                            value="Baru"
                            {{ request('status') == 'Baru' ? 'selected' : '' }}
                        >
                            Baru
                        </option>

                        <option
                            value="Diproses"
                            {{ request('status') == 'Diproses' ? 'selected' : '' }}
                        >
                            Diproses
                        </option>

                        <option
                            value="Selesai"
                            {{ request('status') == 'Selesai' ? 'selected' : '' }}
                        >
                            Selesai
                        </option>

                    </select>

                </div>


                {{-- TOMBOL --}}
                <div class="col-md-2 d-flex align-items-end">

                    <button
                        type="submit"
                        class="btn btn-primary w-100"
                    >
                        Filter
                    </button>

                </div>

            </div>


            {{-- FILTER TANGGAL --}}
            <div class="row g-3 mt-1">

                <div class="col-md-4">

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


                <div class="col-md-4">

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


                <div class="col-md-4 d-flex align-items-end">

                    <a
                        href="{{ route('admin.monitoring.pengaduan') }}"
                        class="btn btn-outline-secondary w-100"
                    >
                        Reset Filter
                    </a>

                </div>

            </div>

        </form>

    </div>


    {{-- DATA PENGADUAN --}}
    <div class="content-card">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h5 class="fw-bold mb-0">
                Daftar Pengaduan
            </h5>

            <span class="badge bg-primary">
                {{ $pengaduan->total() }} Pengaduan
            </span>

        </div>


        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">

                    <tr>
                        <th>No</th>
                        <th>Nomor Pengaduan</th>
                        <th>Nama Pelapor</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>

                </thead>


                <tbody>

                    @forelse ($pengaduan as $item)

                        <tr>

                            <td>
                                {{ $pengaduan->firstItem() + $loop->index }}
                            </td>

                            <td>
                                <strong>
                                    {{ $item->nomor_pengaduan }}
                                </strong>
                            </td>

                            <td>
                                {{ $item->nama_lengkap }}
                            </td>

                            <td>
                                {{ $item->kategori }}
                            </td>

                            <td>
                                {{ $item->judul }}
                            </td>

                            <td>

                                @if ($item->status === 'Baru')

                                    <span class="badge bg-primary">
                                        Baru
                                    </span>

                                @elseif ($item->status === 'Diproses')

                                    <span class="badge bg-warning text-dark">
                                        Diproses
                                    </span>

                                @elseif ($item->status === 'Selesai')

                                    <span class="badge bg-success">
                                        Selesai
                                    </span>

                                @else

                                    <span class="badge bg-secondary">
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

                            <td
                                colspan="7"
                                class="text-center py-5 text-muted"
                            >
                                Belum ada data pengaduan.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- PAGINATION --}}
        @if ($pengaduan->hasPages())

            <div class="mt-4">

                {{ $pengaduan->links() }}

            </div>

        @endif

    </div>

</div>

</body>
</html>