<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Detail Pengajuan Bantuan - Admin</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">

    <div class="container">

        <a
            href="{{ url('/') }}"
            class="navbar-brand fw-bold"
        >
            SICANTIK
        </a>

        <span class="navbar-text text-white">
            Admin / Pengelola
        </span>

    </div>

</nav>


<div class="container py-5">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                Detail Pengajuan Bantuan
            </h2>

            <p class="text-muted mb-0">
                Informasi lengkap pengajuan bantuan masyarakat.
            </p>

        </div>

        <a
            href="{{ route('admin.pengajuan-bantuan.index') }}"
            class="btn btn-secondary"
        >
            &larr; Kembali
        </a>

    </div>


    {{-- SUCCESS --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>

        </div>

    @endif


    {{-- ERROR --}}
    @if(session('error'))

        <div class="alert alert-danger alert-dismissible fade show">

            {{ session('error') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>

        </div>

    @endif


    <div class="row g-4">

        {{-- DATA PENGAJUAN --}}
        <div class="col-lg-8">

            <div class="card border-0 shadow-sm mb-4">

                <div class="card-header bg-white py-3">

                    <h5 class="mb-0 fw-bold">
                        Data Pengajuan
                    </h5>

                </div>

                <div class="card-body">

                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="text-muted small">
                                Nomor Pengajuan
                            </label>

                            <div class="fw-bold text-primary">
                                {{ $pengajuanBantuan->nomor_pengajuan }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Status
                            </label>

                            <div>

                                @if($pengajuanBantuan->status === 'Menunggu Verifikasi')

                                    <span class="badge bg-warning text-dark">
                                        Menunggu Verifikasi
                                    </span>

                                @elseif($pengajuanBantuan->status === 'Diverifikasi')

                                    <span class="badge bg-primary">
                                        Diverifikasi
                                    </span>

                                @elseif($pengajuanBantuan->status === 'Disetujui')

                                    <span class="badge bg-success">
                                        Disetujui
                                    </span>

                                @elseif($pengajuanBantuan->status === 'Ditolak')

                                    <span class="badge bg-danger">
                                        Ditolak
                                    </span>

                                @else

                                    <span class="badge bg-secondary">
                                        {{ $pengajuanBantuan->status }}
                                    </span>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- DATA PEMOHON --}}
            <div class="card border-0 shadow-sm mb-4">

                <div class="card-header bg-white py-3">

                    <h5 class="mb-0 fw-bold">
                        Data Pemohon
                    </h5>

                </div>

                <div class="card-body">

                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="text-muted small">
                                Nama Lengkap
                            </label>

                            <div class="fw-semibold">
                                {{ $pengajuanBantuan->nama_lengkap }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                NIK
                            </label>

                            <div>
                                {{ $pengajuanBantuan->nik }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Nomor KK
                            </label>

                            <div>
                                {{ $pengajuanBantuan->nomor_kk }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Nomor HP
                            </label>

                            <div>
                                {{ $pengajuanBantuan->nomor_hp }}
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ALAMAT --}}
            <div class="card border-0 shadow-sm mb-4">

                <div class="card-header bg-white py-3">

                    <h5 class="mb-0 fw-bold">
                        Alamat Pemohon
                    </h5>

                </div>

                <div class="card-body">

                    <div class="mb-3">

                        <label class="text-muted small">
                            Alamat
                        </label>

                        <div>
                            {{ $pengajuanBantuan->alamat }}
                        </div>

                    </div>


                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="text-muted small">
                                Desa/Kelurahan
                            </label>

                            <div>
                                {{ $pengajuanBantuan->desa_kelurahan }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Kecamatan
                            </label>

                            <div>
                                {{ $pengajuanBantuan->kecamatan }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Kabupaten/Kota
                            </label>

                            <div>
                                {{ $pengajuanBantuan->kabupaten_kota }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Provinsi
                            </label>

                            <div>
                                {{ $pengajuanBantuan->provinsi }}
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- KONDISI RUMAH --}}
            <div class="card border-0 shadow-sm mb-4">

                <div class="card-header bg-white py-3">

                    <h5 class="mb-0 fw-bold">
                        Kondisi Rumah & Listrik
                    </h5>

                </div>

                <div class="card-body">

                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="text-muted small">
                                Status Kepemilikan Rumah
                            </label>

                            <div>
                                {{ $pengajuanBantuan->status_kepemilikan_rumah }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Kondisi Rumah
                            </label>

                            <div>
                                {{ $pengajuanBantuan->kondisi_rumah }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Sumber Listrik
                            </label>

                            <div>
                                {{ $pengajuanBantuan->sumber_listrik }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Daya Listrik
                            </label>

                            <div>
                                {{ $pengajuanBantuan->daya_listrik ?: '-' }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Penghasilan
                            </label>

                            <div>
                                {{ $pengajuanBantuan->penghasilan ?: '-' }}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="text-muted small">
                                Jumlah Anggota Keluarga
                            </label>

                            <div>
                                {{ $pengajuanBantuan->jumlah_anggota_keluarga ?: '-' }}
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ALASAN --}}
            <div class="card border-0 shadow-sm mb-4">

                <div class="card-header bg-white py-3">

                    <h5 class="mb-0 fw-bold">
                        Alasan Pengajuan
                    </h5>

                </div>

                <div class="card-body">

                    <p class="mb-0">
                        {{ $pengajuanBantuan->alasan_pengajuan }}
                    </p>

                </div>

            </div>


        {{-- DOKUMEN --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">
                    Dokumen Pendukung
                </h5>
            </div>

            <div class="card-body">

                <div class="d-flex flex-column gap-2">

                    @if($pengajuanBantuan->dokumen_ktp)

                        <a
                            href="{{ route('admin.pengajuan-bantuan.dokumen', [$pengajuanBantuan, 'ktp']) }}"
                            target="_blank"
                            class="btn btn-outline-primary text-start"
                        >
                            Lihat Dokumen KTP
                        </a>

                    @else

                        <span class="text-muted">
                            Dokumen KTP tidak tersedia.
                        </span>

                    @endif


                    @if($pengajuanBantuan->dokumen_kk)

                        <a
                            href="{{ route('admin.pengajuan-bantuan.dokumen', [$pengajuanBantuan, 'kk']) }}"
                            target="_blank"
                            class="btn btn-outline-primary text-start"
                        >
                            Lihat Dokumen KK
                        </a>

                    @else

                        <span class="text-muted">
                            Dokumen KK tidak tersedia.
                        </span>

                    @endif


                    @if($pengajuanBantuan->dokumen_pendukung)

                        <a
                            href="{{ route('admin.pengajuan-bantuan.dokumen', [$pengajuanBantuan, 'pendukung']) }}"
                            target="_blank"
                            class="btn btn-outline-primary text-start"
                        >
                            Lihat Dokumen Pendukung
                        </a>

                    @else

                        <span class="text-muted">
                            Tidak ada dokumen pendukung tambahan.
                        </span>

                    @endif

                </div>

            </div>

        </div>


        {{-- SIDEBAR VERIFIKASI --}}
        <div class="col-lg-4">

            <div
                class="card border-0 shadow-sm"
                style="position: sticky; top: 20px;"
            >

                <div class="card-header bg-primary text-white py-3">

                    <h5 class="mb-0 fw-bold">
                        Verifikasi Pengajuan
                    </h5>

                </div>

                <div class="card-body">

                    <form
                        action="{{ route('admin.pengajuan-bantuan.verifikasi', $pengajuanBantuan) }}"
                        method="POST"
                    >

                        @csrf
                        @method('PUT')


                        <div class="mb-3">

                            <label
                                for="status"
                                class="form-label fw-semibold"
                            >
                                Status Pengajuan
                            </label>

                            <select
                                name="status"
                                id="status"
                                class="form-select"
                                required
                            >

                                <option
                                    value=""
                                    disabled
                                    {{ !in_array($pengajuanBantuan->status, ['Diverifikasi', 'Disetujui', 'Ditolak']) ? 'selected' : '' }}
                                >
                                    Pilih Status
                                </option>

                                <option
                                    value="Diverifikasi"
                                    {{ $pengajuanBantuan->status === 'Diverifikasi' ? 'selected' : '' }}
                                >
                                    Diverifikasi
                                </option>

                                <option
                                    value="Disetujui"
                                    {{ $pengajuanBantuan->status === 'Disetujui' ? 'selected' : '' }}
                                >
                                    Disetujui
                                </option>

                                <option
                                    value="Ditolak"
                                    {{ $pengajuanBantuan->status === 'Ditolak' ? 'selected' : '' }}
                                >
                                    Ditolak
                                </option>

                            </select>

                        </div>


                        <div class="mb-3">

                            <label
                                for="keterangan"
                                class="form-label fw-semibold"
                            >
                                Catatan Petugas
                            </label>

                            <textarea
                                name="keterangan"
                                id="keterangan"
                                rows="5"
                                class="form-control"
                                placeholder="Masukkan catatan atau keterangan..."
                            >{{ old('keterangan', $pengajuanBantuan->catatan_petugas) }}</textarea>

                        </div>


                        <button
                            type="submit"
                            class="btn btn-primary w-100"
                        >
                            Simpan Verifikasi
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>