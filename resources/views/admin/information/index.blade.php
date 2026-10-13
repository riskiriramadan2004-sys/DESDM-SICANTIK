<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kepegawaian - Admin SICANTIK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f4f7fb; color: #243247; }
        .navbar { background: #142b4a; }
        .stat-card { border: 0; border-radius: 14px; }
        .stat-number { font-size: 1.8rem; font-weight: 700; }
        .content-card { border: 0; border-radius: 14px; }
        .table thead th { white-space: nowrap; }
        .table td { vertical-align: middle; }
    </style>
</head>

<body>
<nav class="navbar navbar-dark">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold" href="{{ route('admin.informasi.index') }}">
            ADMIN SICANTIK
        </a>

        <div class="d-flex gap-2">

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid px-4 py-4">

    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h2 class="fw-bold mb-1">Data Kepegawaian ESDM</h2>
            <p class="text-secondary mb-0">
                Pengelolaan data pegawai secara internal untuk administrator.
            </p>
        </div>

        <a href="{{ route('admin.informasi.create') }}" class="btn btn-primary">
            + Tambah Pegawai
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Periksa kembali data:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row g-3 mb-4">
        <div class="col-6 col-xl-3">
            <div class="card stat-card shadow-sm h-100">
                <div class="card-body">
                    <div class="text-secondary">Total Pegawai</div>
                    <div class="stat-number">{{ $statistik['total'] }}</div>
                </div>
            </div>
        </div>

        <div class="col-6 col-xl-3">
            <div class="card stat-card shadow-sm h-100">
                <div class="card-body">
                    <div class="text-secondary">Laki-laki</div>
                    <div class="stat-number">{{ $statistik['laki_laki'] }}</div>
                </div>
            </div>
        </div>

        <div class="col-6 col-xl-3">
            <div class="card stat-card shadow-sm h-100">
                <div class="card-body">
                    <div class="text-secondary">Perempuan</div>
                    <div class="stat-number">{{ $statistik['perempuan'] }}</div>
                </div>
            </div>
        </div>

        <div class="col-6 col-xl-3">
            <div class="card stat-card shadow-sm h-100">
                <div class="card-body">
                    <div class="text-secondary">Perkiraan Pensiun 5 Tahun</div>
                    <div class="stat-number">{{ $statistik['mendekati_pensiun'] }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card content-card shadow-sm mb-4">
        <div class="card-body">
            <h5 class="fw-bold mb-3">Impor Data Pegawai (CSV)</h5>
            <p class="text-secondary small">
                Gunakan CSV sesuai template dengan tanggal berformat YYYY-MM-DD.
                Impor akan ditolak jika data tidak valid atau NIP sudah terdaftar.
            </p>

            <form action="{{ route('admin.informasi.import') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="row g-3 align-items-end">
                @csrf

                <div class="col-md-8">
                    <label for="file_csv" class="form-label">Pilih file CSV</label>
                    <input type="file" name="file_csv" id="file_csv"
                           class="form-control" accept=".csv,.txt" required>
                </div>

                <div class="col-md-4">
                    <button type="submit" class="btn btn-outline-primary w-100">
                        Impor CSV
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="card content-card shadow-sm">
        <div class="card-body border-bottom">
            <h5 class="fw-bold mb-3">Daftar Pegawai</h5>

            <form method="GET" action="{{ route('admin.informasi.index') }}"
                  class="row g-2">
                <div class="col-md-6">
                    <input type="text" name="cari" class="form-control"
                           value="{{ request('cari') }}"
                           placeholder="Cari nama, NIP, jabatan, atau unit kerja">
                </div>

                <div class="col-md-2">
                    <select name="jenis_kelamin" class="form-select">
                        <option value="">Semua Gender</option>
                        <option value="Laki-laki" @selected(request('jenis_kelamin') === 'Laki-laki')>Laki-laki</option>
                        <option value="Perempuan" @selected(request('jenis_kelamin') === 'Perempuan')>Perempuan</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <select name="status_pegawai" class="form-select">
                        <option value="">Semua Status</option>
                        <option value="aktif" @selected(request('status_pegawai') === 'aktif')>Aktif</option>
                        <option value="pensiun" @selected(request('status_pegawai') === 'pensiun')>Pensiun</option>
                        <option value="nonaktif" @selected(request('status_pegawai') === 'nonaktif')>Nonaktif</option>
                    </select>
                </div>

                <div class="col-md-2 d-flex gap-2">
                    <button type="submit" class="btn btn-dark flex-fill">Cari</button>
                    <a href="{{ route('admin.informasi.index') }}"
                       class="btn btn-outline-secondary">Reset</a>
                </div>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
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
                            <td>{{ $pegawai->firstItem() + $loop->index }}</td>
                            <td>{{ $item->nip ?: '-' }}</td>
                            <td class="fw-semibold">{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->jabatan ?: '-' }}</td>
                            <td>{{ $item->unit_kerja ?: '-' }}</td>
                            <td>{{ $item->status_kepegawaian }}</td>
                            <td>
                                @if($item->status_pegawai === 'aktif')
                                    <span class="badge bg-success">Aktif</span>
                                @elseif($item->status_pegawai === 'pensiun')
                                    <span class="badge bg-secondary">Pensiun</span>
                                @else
                                    <span class="badge bg-warning text-dark">Nonaktif</span>
                                @endif
                            </td>
                            <td>
                                {{ $item->tanggal_pensiun
                                    ? $item->tanggal_pensiun->format('d/m/Y')
                                    : '-' }}
                            </td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{ route('admin.informasi.edit', $item) }}"
                                       class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.informasi.destroy', $item) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus data pegawai ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center py-5 text-secondary">
                                Belum ada data pegawai. Tambahkan secara manual atau impor CSV.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-body">
            {{ $pegawai->links() }}
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```