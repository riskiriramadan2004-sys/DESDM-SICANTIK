<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Detail Pengajuan Bantuan - Admin
    </title>

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
            ← Kembali
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


    {{-- VALIDATION ERROR --}}
    @if($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    {{-- NOMOR DAN STATUS --}}
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body">

            <div class="row">

                <div class="col-md-6">

                    <small class="text-muted">
                        Nomor Pengajuan
                    </small>

                    <h5 class="fw-bold">
                        {{ $pengajuanBantuan->nomor_pengajuan }}
                    </h5>

                </div>


                <div class="col-md-6">

                    <small class="text-muted">
                        Status Saat Ini
                    </small>

                    <div>

                        @if($pengajuanBantuan->status === 'Menunggu Verifikasi')

                            <span class="badge bg-warning text-dark fs-6">
                                Menunggu Verifikasi
                            </span>

                        @elseif($pengajuanBantuan->status === 'Diverifikasi')

                            <span class="badge bg-primary fs-6">
                                Diverifikasi
                            </span>

                        @elseif($pengajuanBantuan->status === 'Disetujui')

                            <span class="badge bg-success fs-6">
                                Disetujui
                            </span>

                        @elseif($pengajuanBantuan->status === 'Ditolak')

                            <span class="badge bg-danger fs-6">
                                Ditolak
                            </span>

                        @else

                            <span class="badge bg-secondary fs-6">
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

        <div class="card-header bg-white">

            <h5 class="fw-bold mb-0">
                Data Pemohon
            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <strong>
                        Nama Lengkap
                    </strong>

                    <div>
                        {{ $pengajuanBantuan->nama_lengkap }}
                    </div>

                </div>


                <div class="col-md-6 mb-3">

                    <strong>
                        NIK
                    </strong>

                    <div>
                        {{ $pengajuanBantuan->nik }}
                    </div>

                </div>


                <div class="col-md-6 mb-3">

                    <strong>
                        Nomor KK
                    </strong>

                    <div>
                        {{ $pengajuanBantuan->nomor_kk }}
                    </div>

                </div>


                <div class="col-md-6 mb-3">

                    <strong>
                        Nomor HP
                    </strong>

                    <div>
                        {{ $pengajuanBantuan->nomor_hp }}
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ALAMAT --}}
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-header bg-white">

            <h5 class="fw-bold mb-0">
                Alamat
            </h5>

        </div>

        <div class="card-body">

            <p class="mb-2">

                <strong>
                    Alamat:
                </strong>

                <br>

                {{ $pengajuanBantuan->alamat }}

            </p>


            <div class="row">

                <div class="col-md-6 mb-2">

                    <strong>
                        Desa/Kelurahan:
                    </strong>

                    <br>

                    {{ $pengajuanBantuan->desa_kelurahan }}

                </div>


                <div class="col-md-6 mb-2">

                    <strong>
                        Kecamatan:
                    </strong>

                    <br>

                    {{ $pengajuanBantuan->kecamatan }}

                </div>


                <div class="col-md-6 mb-2">

                    <strong>
                        Kabupaten/Kota:
                    </strong>

                    <br>

                    {{ $pengajuanBantuan->kabupaten_kota }}

                </div>


                <div class="col-md-6 mb-2">

                    <strong>
                        Provinsi:
                    </strong>

                    <br>

                    {{ $pengajuanBantuan->provinsi }}

                </div>

            </div>

        </div>

    </div>


    {{-- KONDISI RUMAH DAN LISTRIK --}}
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-header bg-white">

            <h5 class="fw-bold mb-0">
                Kondisi Rumah dan Listrik
            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <strong>
                        Status Kepemilikan Rumah
                    </strong>

                    <div>
                        {{ $pengajuanBantuan->status_kepemilikan_rumah }}
                    </div>

                </div>


                <div class="col-md-6 mb-3">

                    <strong>
                        Kondisi Rumah
                    </strong>

                    <div>
                        {{ $pengajuanBantuan->kondisi_rumah }}
                    </div>

                </div>


                <div class="col-md-6 mb-3">

                    <strong>
                        Sumber Listrik
                    </strong>

                    <div>
                        {{ $pengajuanBantuan->sumber_listrik ?? '-' }}
                    </div>

                </div>


                <div class="col-md-6 mb-3">

                    <strong>
                        Daya Listrik
                    </strong>

                    <div>
                        {{ $pengajuanBantuan->daya_listrik ?? '-' }}
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ALASAN --}}
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-header bg-white">

            <h5 class="fw-bold mb-0">
                Alasan Pengajuan
            </h5>

        </div>

        <div class="card-body">

            {{ $pengajuanBantuan->alasan_pengajuan }}

        </div>

    </div>


    {{-- DOKUMEN --}}
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-header bg-white">

            <h5 class="fw-bold mb-0">
                Dokumen Persyaratan
            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                {{-- KTP --}}
                <div class="col-md-4 mb-3">

                    <strong>
                        KTP
                    </strong>

                    @if($pengajuanBantuan->dokumen_ktp)

                        <div class="mt-2">

                            <a
                                href="{{ asset('storage/' . $pengajuanBantuan->dokumen_ktp) }}"
                                target="_blank"
                                class="btn btn-outline-primary btn-sm"
                            >
                                Lihat Dokumen
                            </a>

                        </div>

                    @else

                        <div class="text-muted mt-2">
                            Tidak tersedia
                        </div>

                    @endif

                </div>


                {{-- KK --}}
                <div class="col-md-4 mb-3">

                    <strong>
                        KK
                    </strong>

                    @if($pengajuanBantuan->dokumen_kk)

                        <div class="mt-2">

                            <a
                                href="{{ asset('storage/' . $pengajuanBantuan->dokumen_kk) }}"
                                target="_blank"
                                class="btn btn-outline-primary btn-sm"
                            >
                                Lihat Dokumen
                            </a>

                        </div>

                    @else

                        <div class="text-muted mt-2">
                            Tidak tersedia
                        </div>

                    @endif

                </div>


                {{-- DOKUMEN PENDUKUNG --}}
                <div class="col-md-4 mb-3">

                    <strong>
                        Dokumen Pendukung
                    </strong>

                    @if($pengajuanBantuan->dokumen_pendukung)

                        <div class="mt-2">

                            <a
                                href="{{ asset('storage/' . $pengajuanBantuan->dokumen_pendukung) }}"
                                target="_blank"
                                class="btn btn-outline-primary btn-sm"
                            >
                                Lihat Dokumen
                            </a>

                        </div>

                    @else

                        <div class="text-muted mt-2">
                            Tidak tersedia
                        </div>

                    @endif

                </div>

            </div>

        </div>

    </div>


    {{-- VERIFIKASI --}}
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-header bg-white">

            <h5 class="fw-bold mb-0">
                Verifikasi Pengajuan
            </h5>

        </div>

        <div class="card-body">

            <form
                action="{{ route(
                    'admin.pengajuan-bantuan.verifikasi',
                    $pengajuanBantuan
                ) }}"
                method="POST"
            >

                @csrf

                @method('PUT')


                {{-- STATUS --}}
                <div class="mb-3">

                    <label
                        for="status"
                        class="form-label fw-semibold"
                    >
                        Ubah Status
                    </label>

                    <select
                        name="status"
                        id="status"
                        class="form-select"
                        required
                    >

                        <option value="">
                            -- Pilih Status --
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


                {{-- KETERANGAN --}}
                <div class="mb-3">

                    <label
                        for="keterangan"
                        class="form-label fw-semibold"
                    >
                        Keterangan
                    </label>

                    <textarea
                        name="keterangan"
                        id="keterangan"
                        class="form-control"
                        rows="4"
                        placeholder="Masukkan keterangan verifikasi..."
                    ></textarea>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Simpan Verifikasi
                </button>

            </form>

        </div>

    </div>


    {{-- RIWAYAT STATUS --}}
    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white">

            <h5 class="fw-bold mb-0">
                Riwayat Status Pengajuan
            </h5>

        </div>

        <div class="card-body">

            @forelse($pengajuanBantuan->riwayat as $riwayat)

                <div class="border-start border-3 ps-3 mb-4">

                    <div class="d-flex justify-content-between align-items-center">

                        <strong>
                            {{ $riwayat->status }}
                        </strong>

                        <small class="text-muted">
                            {{ $riwayat->created_at->format('d/m/Y H:i') }}
                        </small>

                    </div>

                    @if($riwayat->keterangan)

                        <p class="mb-0 mt-2 text-muted">
                            {{ $riwayat->keterangan }}
                        </p>

                    @endif

                </div>

            @empty

                <p class="text-muted mb-0">
                    Belum ada riwayat perubahan status.
                </p>

            @endforelse

        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>