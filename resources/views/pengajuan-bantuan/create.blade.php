<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengajuan Bantuan Listrik - SICANTIK</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    {{-- Navbar --}}
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand fw-bold">
                SICANTIK
            </a>

            <a href="{{ route('information.index') }}"
               class="btn btn-outline-light">
                Informasi ESDM
            </a>
        </div>
    </nav>

    {{-- Content --}}
    <div class="container py-5">

        <div class="text-center mb-5">
            <h1 class="fw-bold">Pengajuan Bantuan Listrik</h1>

            <p class="text-muted">
                Silakan lengkapi data berikut untuk mengajukan bantuan listrik.
            </p>
        </div>

        <div class="card shadow-sm border-0">

            <div class="card-body p-4 p-md-5">

                {{-- FORM --}}
                <form
                    action="{{ route('pengajuan-bantuan.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf


                    {{-- DATA PEMOHON --}}
                    <h4 class="fw-bold mb-4">
                        1. Data Pemohon
                    </h4>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                NIK <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="nik"
                                class="form-control"
                                maxlength="16"
                                placeholder="Masukkan NIK"
                                value="{{ old('nik') }}"
                                required
                            >

                            @error('nik')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="nama_lengkap"
                                class="form-control"
                                placeholder="Masukkan nama lengkap"
                                value="{{ old('nama_lengkap') }}"
                                required
                            >

                            @error('nama_lengkap')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Nomor KK <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="nomor_kk"
                                class="form-control"
                                maxlength="16"
                                placeholder="Masukkan nomor KK"
                                value="{{ old('nomor_kk') }}"
                                required
                            >

                            @error('nomor_kk')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Nomor HP <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="nomor_hp"
                                class="form-control"
                                placeholder="08xxxxxxxxxx"
                                value="{{ old('nomor_hp') }}"
                                required
                            >

                            @error('nomor_hp')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>


                    {{-- ALAMAT --}}
                    <hr class="my-4">

                    <h4 class="fw-bold mb-4">
                        2. Alamat Pemohon
                    </h4>

                    <div class="mb-3">
                        <label class="form-label">
                            Alamat Lengkap <span class="text-danger">*</span>
                        </label>

                        <textarea
                            name="alamat"
                            class="form-control"
                            rows="3"
                            placeholder="Masukkan alamat lengkap"
                            required
                        >{{ old('alamat') }}</textarea>

                        @error('alamat')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Desa/Kelurahan <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="desa_kelurahan"
                                class="form-control"
                                value="{{ old('desa_kelurahan') }}"
                                required
                            >

                            @error('desa_kelurahan')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Kecamatan <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="kecamatan"
                                class="form-control"
                                value="{{ old('kecamatan') }}"
                                required
                            >

                            @error('kecamatan')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Kabupaten/Kota <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="kabupaten_kota"
                                class="form-control"
                                value="{{ old('kabupaten_kota') }}"
                                required
                            >

                            @error('kabupaten_kota')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Provinsi <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="provinsi"
                                class="form-control"
                                value="{{ old('provinsi', 'Sulawesi Tengah') }}"
                                required
                            >

                            @error('provinsi')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>


                    {{-- KONDISI RUMAH --}}
                    <hr class="my-4">

                    <h4 class="fw-bold mb-4">
                        3. Kondisi Rumah dan Listrik
                    </h4>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Status Kepemilikan Rumah
                                <span class="text-danger">*</span>
                            </label>

                            <select
                                name="status_kepemilikan_rumah"
                                class="form-select"
                                required
                            >
                                <option value="">-- Pilih Status --</option>

                                <option
                                    value="Milik Sendiri"
                                    {{ old('status_kepemilikan_rumah') == 'Milik Sendiri' ? 'selected' : '' }}
                                >
                                    Milik Sendiri
                                </option>

                                <option
                                    value="Sewa"
                                    {{ old('status_kepemilikan_rumah') == 'Sewa' ? 'selected' : '' }}
                                >
                                    Sewa
                                </option>

                                <option
                                    value="Menumpang"
                                    {{ old('status_kepemilikan_rumah') == 'Menumpang' ? 'selected' : '' }}
                                >
                                    Menumpang
                                </option>

                                <option
                                    value="Lainnya"
                                    {{ old('status_kepemilikan_rumah') == 'Lainnya' ? 'selected' : '' }}
                                >
                                    Lainnya
                                </option>
                            </select>

                            @error('status_kepemilikan_rumah')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Kondisi Rumah
                                <span class="text-danger">*</span>
                            </label>

                            <select
                                name="kondisi_rumah"
                                class="form-select"
                                required
                            >
                                <option value="">-- Pilih Kondisi --</option>

                                <option
                                    value="Baik"
                                    {{ old('kondisi_rumah') == 'Baik' ? 'selected' : '' }}
                                >
                                    Baik
                                </option>

                                <option
                                    value="Sedang"
                                    {{ old('kondisi_rumah') == 'Sedang' ? 'selected' : '' }}
                                >
                                    Sedang
                                </option>

                                <option
                                    value="Kurang Layak"
                                    {{ old('kondisi_rumah') == 'Kurang Layak' ? 'selected' : '' }}
                                >
                                    Kurang Layak
                                </option>

                                <option
                                    value="Tidak Layak"
                                    {{ old('kondisi_rumah') == 'Tidak Layak' ? 'selected' : '' }}
                                >
                                    Tidak Layak
                                </option>
                            </select>

                            @error('kondisi_rumah')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Sumber Listrik
                                <span class="text-danger">*</span>
                            </label>

                            <select
                                name="sumber_listrik"
                                class="form-select"
                                required
                            >
                                <option value="">-- Pilih Sumber --</option>

                                <option
                                    value="PLN"
                                    {{ old('sumber_listrik') == 'PLN' ? 'selected' : '' }}
                                >
                                    PLN
                                </option>

                                <option
                                    value="Non-PLN"
                                    {{ old('sumber_listrik') == 'Non-PLN' ? 'selected' : '' }}
                                >
                                    Non-PLN
                                </option>

                                <option
                                    value="Tidak Ada Listrik"
                                    {{ old('sumber_listrik') == 'Tidak Ada Listrik' ? 'selected' : '' }}
                                >
                                    Tidak Ada Listrik
                                </option>
                            </select>

                            @error('sumber_listrik')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Daya Listrik Saat Ini
                            </label>

                            <input
                                type="text"
                                name="daya_listrik"
                                class="form-control"
                                placeholder="Contoh: 450 VA"
                                value="{{ old('daya_listrik') }}"
                            >

                            @error('daya_listrik')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>


                    {{-- ALASAN --}}
                    <hr class="my-4">

                    <h4 class="fw-bold mb-4">
                        4. Alasan Pengajuan
                    </h4>

                    <div class="mb-3">

                        <label class="form-label">
                            Alasan Membutuhkan Bantuan
                            <span class="text-danger">*</span>
                        </label>

                        <textarea
                            name="alasan_pengajuan"
                            class="form-control"
                            rows="5"
                            placeholder="Jelaskan alasan pengajuan bantuan..."
                            required
                        >{{ old('alasan_pengajuan') }}</textarea>

                        @error('alasan_pengajuan')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- DOKUMEN --}}
                    <hr class="my-4">

                    <h4 class="fw-bold mb-4">
                        5. Dokumen Persyaratan
                    </h4>

                    <div class="alert alert-warning">
                        <strong>Perhatian:</strong>
                        Silakan upload dokumen dalam format PDF, JPG, JPEG,
                        atau PNG. Ukuran setiap file maksimal 2 MB.
                    </div>


                    {{-- KTP --}}
                    <div class="mb-4">

                        <label for="dokumen_ktp" class="form-label fw-semibold">
                            KTP <span class="text-danger">*</span>
                        </label>

                        <input
                            type="file"
                            name="dokumen_ktp"
                            id="dokumen_ktp"
                            class="form-control"
                            accept=".pdf,.jpg,.jpeg,.png"
                            required
                        >

                        <div class="form-text">
                            Format: PDF, JPG, JPEG, PNG. Maksimal 2 MB.
                        </div>

                        @error('dokumen_ktp')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- KK --}}
                    <div class="mb-4">

                        <label for="dokumen_kk" class="form-label fw-semibold">
                            Kartu Keluarga (KK)
                            <span class="text-danger">*</span>
                        </label>

                        <input
                            type="file"
                            name="dokumen_kk"
                            id="dokumen_kk"
                            class="form-control"
                            accept=".pdf,.jpg,.jpeg,.png"
                            required
                        >

                        <div class="form-text">
                            Format: PDF, JPG, JPEG, PNG. Maksimal 2 MB.
                        </div>

                        @error('dokumen_kk')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- DOKUMEN PENDUKUNG --}}
                    <div class="mb-4">

                        <label for="dokumen_pendukung" class="form-label fw-semibold">
                            Dokumen Pendukung
                        </label>

                        <input
                            type="file"
                            name="dokumen_pendukung"
                            id="dokumen_pendukung"
                            class="form-control"
                            accept=".pdf,.jpg,.jpeg,.png"
                        >

                        <div class="form-text">
                            Opsional. Format: PDF, JPG, JPEG, PNG.
                            Maksimal 2 MB.
                        </div>

                        @error('dokumen_pendukung')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- INFO --}}
                    <div class="alert alert-info">
                        <strong>Perhatian:</strong>
                        Pastikan seluruh data yang Anda masukkan sudah benar
                        sebelum mengirimkan pengajuan.
                    </div>


                    {{-- BUTTON --}}
                    <div class="d-flex justify-content-end gap-2 mt-4">

                        <a
                            href="{{ url('/') }}"
                            class="btn btn-secondary"
                        >
                            Batal
                        </a>

                        <button
                            type="submit"
                            class="btn btn-success px-4"
                        >
                            Kirim Pengajuan
                        </button>

                    </div>

                </form>

            </div>
        </div>

    </div>

</body>
</html>