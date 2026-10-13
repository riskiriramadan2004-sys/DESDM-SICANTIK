
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Kepegawaian | ESDM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card border-0 shadow-sm mx-auto" style="max-width: 1050px">
        <div class="card-body p-4 p-md-5">
            <h3 class="fw-bold mb-2">Tambah Data Kepegawaian</h3>
            <p class="text-secondary mb-4">Masukkan informasi pegawai Dinas ESDM.</p>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Data belum dapat disimpan:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.informasi.store') }}" method="POST">
                @csrf

                <h5 class="fw-bold mb-3">Identitas Pegawai</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input id="nip" name="nip" class="form-control"
                               value="{{ old('nip') }}" maxlength="30">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input id="nama" name="nama" class="form-control"
                               value="{{ old('nama') }}" maxlength="150" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-select">
                            <option value="">-- Pilih jenis kelamin --</option>
                            <option value="Laki-laki" @selected(old('jenis_kelamin') === 'Laki-laki')>Laki-laki</option>
                            <option value="Perempuan" @selected(old('jenis_kelamin') === 'Perempuan')>Perempuan</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input id="tempat_lahir" name="tempat_lahir" class="form-control"
                               value="{{ old('tempat_lahir') }}" maxlength="100">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input id="tanggal_lahir" type="date" name="tanggal_lahir" class="form-control"
                               value="{{ old('tanggal_lahir') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                        <input id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control"
                               value="{{ old('pendidikan_terakhir') }}" maxlength="100">
                    </div>
                </div>

                <hr class="my-4">
                <h5 class="fw-bold mb-3">Informasi Kepegawaian</h5>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="status_kepegawaian" class="form-label">Status Kepegawaian <span class="text-danger">*</span></label>
                        <input id="status_kepegawaian" name="status_kepegawaian" class="form-control"
                               value="{{ old('status_kepegawaian') }}"
                               placeholder="Contoh: PNS, PPPK, atau Honorer" maxlength="100" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="status_pegawai" class="form-label">Status Pegawai <span class="text-danger">*</span></label>
                        <select id="status_pegawai" name="status_pegawai" class="form-select" required>
                            <option value="aktif" @selected(old('status_pegawai', 'aktif') === 'aktif')>Aktif</option>
                            <option value="nonaktif" @selected(old('status_pegawai') === 'nonaktif')>Nonaktif</option>
                            <option value="pensiun" @selected(old('status_pegawai') === 'pensiun')>Pensiun</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input id="jabatan" name="jabatan" class="form-control"
                               value="{{ old('jabatan') }}" maxlength="150">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="jenis_jabatan" class="form-label">Jenis Jabatan</label>
                        <input id="jenis_jabatan" name="jenis_jabatan" class="form-control"
                               value="{{ old('jenis_jabatan') }}" maxlength="100">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="unit_kerja" class="form-label">Unit Kerja</label>
                        <input id="unit_kerja" name="unit_kerja" class="form-control"
                               value="{{ old('unit_kerja') }}" maxlength="150">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="pangkat_golongan" class="form-label">Pangkat/Golongan</label>
                        <input id="pangkat_golongan" name="pangkat_golongan" class="form-control"
                               value="{{ old('pangkat_golongan') }}" maxlength="100">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tanggal_mulai_kerja" class="form-label">Tanggal Mulai Kerja</label>
                        <input id="tanggal_mulai_kerja" type="date" name="tanggal_mulai_kerja"
                               class="form-control" value="{{ old('tanggal_mulai_kerja') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tanggal_mulai_jabatan" class="form-label">Tanggal Mulai Jabatan</label>
                        <input id="tanggal_mulai_jabatan" type="date" name="tanggal_mulai_jabatan"
                               class="form-control" value="{{ old('tanggal_mulai_jabatan') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="batas_usia_pensiun" class="form-label">Batas Usia Pensiun</label>
                        <input id="batas_usia_pensiun" type="number" name="batas_usia_pensiun"
                               min="1" max="100" class="form-control"
                               value="{{ old('batas_usia_pensiun') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tanggal_pensiun" class="form-label">Tanggal Pensiun</label>
                        <input id="tanggal_pensiun" type="date" name="tanggal_pensiun"
                               class="form-control" value="{{ old('tanggal_pensiun') }}">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea id="keterangan" name="keterangan" rows="3"
                                  class="form-control">{{ old('keterangan') }}</textarea>
                    </div>
                </div>

                <p class="text-secondary small"><span class="text-danger">*</span> Wajib diisi.</p>

                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('admin.informasi.index') }}" class="btn btn-outline-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        Simpan Data Pegawai
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
