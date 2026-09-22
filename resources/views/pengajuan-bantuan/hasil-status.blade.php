<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hasil Status Pengajuan - Dinas ESDM</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-5">

                    {{-- ================================================= --}}
                    {{-- HASIL LAYANAN ONLINE --}}
                    {{-- ================================================= --}}

                    @if(isset($pengajuanLayanan))

                        <div class="text-center mb-4">

                            <div class="mb-3">
                                <span class="badge bg-success fs-6 px-3 py-2">
                                    Pengajuan Ditemukan
                                </span>
                            </div>

                            <h2 class="fw-bold">
                                Status Layanan Online
                            </h2>

                            <p class="text-muted">
                                Berikut informasi pengajuan layanan online Anda.
                            </p>

                        </div>


                        {{-- NOMOR PENGAJUAN --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Nomor Pengajuan
                            </label>

                            <div class="form-control bg-light fw-bold">
                                {{ $pengajuanLayanan->nomor_pengajuan }}
                            </div>

                        </div>


                        {{-- NAMA PEMOHON --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Nama Pemohon
                            </label>

                            <div class="form-control bg-light">
                                {{ $pengajuanLayanan->nama_lengkap }}
                            </div>

                        </div>


                        {{-- NIK --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                NIK
                            </label>

                            <div class="form-control bg-light">
                                {{ $pengajuanLayanan->nik }}
                            </div>

                        </div>


                        {{-- NOMOR HP --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Nomor HP
                            </label>

                            <div class="form-control bg-light">
                                {{ $pengajuanLayanan->nomor_hp }}
                            </div>

                        </div>


                        {{-- BIDANG --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Bidang Layanan
                            </label>

                            <div class="form-control bg-light">
                                {{ $pengajuanLayanan->layanan->bidangLayanan->nama }}
                            </div>

                        </div>


                        {{-- NAMA LAYANAN --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Layanan
                            </label>

                            <div class="form-control bg-light">
                                {{ $pengajuanLayanan->layanan->nama }}
                            </div>

                        </div>


                        {{-- KEPERLUAN --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Keperluan
                            </label>

                            <div class="form-control bg-light">
                                {{ $pengajuanLayanan->keperluan }}
                            </div>

                        </div>


                        {{-- STATUS LAYANAN --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Status Pengajuan
                            </label>

                            <div>

                                @if($pengajuanLayanan->status === 'Menunggu Verifikasi')

                                    <span class="badge bg-warning text-dark fs-6 px-3 py-2">
                                        Menunggu Verifikasi
                                    </span>

                                @elseif($pengajuanLayanan->status === 'Diverifikasi')

                                    <span class="badge bg-primary fs-6 px-3 py-2">
                                        Diverifikasi
                                    </span>

                                @elseif($pengajuanLayanan->status === 'Disetujui')

                                    <span class="badge bg-success fs-6 px-3 py-2">
                                        Disetujui
                                    </span>

                                @elseif($pengajuanLayanan->status === 'Ditolak')

                                    <span class="badge bg-danger fs-6 px-3 py-2">
                                        Ditolak
                                    </span>

                                @else

                                    <span class="badge bg-secondary fs-6 px-3 py-2">
                                        {{ $pengajuanLayanan->status }}
                                    </span>

                                @endif

                            </div>

                        </div>


                        {{-- CATATAN PETUGAS LAYANAN ONLINE --}}

                        @if($pengajuanLayanan->catatan_petugas)

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Catatan Pengelola
                                </label>

                                @if($pengajuanLayanan->status === 'Ditolak')

                                    <div class="alert alert-danger mb-0">

                                        <div class="fw-bold mb-1">
                                            Alasan Pengajuan Ditolak:
                                        </div>

                                        <div>
                                            {{ $pengajuanLayanan->catatan_petugas }}
                                        </div>

                                    </div>

                                @else

                                    <div class="alert alert-info mb-0">

                                        <div class="fw-bold mb-1">
                                            Catatan Pengelola:
                                        </div>

                                        <div>
                                            {{ $pengajuanLayanan->catatan_petugas }}
                                        </div>

                                    </div>

                                @endif

                            </div>

                        @endif


                        {{-- INFORMASI BERDASARKAN STATUS LAYANAN --}}

                        @if($pengajuanLayanan->status === 'Menunggu Verifikasi')

                            <div class="alert alert-warning">

                                <strong>Informasi:</strong>

                                Pengajuan layanan Anda sedang menunggu proses
                                verifikasi oleh pengelola.

                            </div>

                        @elseif($pengajuanLayanan->status === 'Diverifikasi')

                            <div class="alert alert-info">

                                <strong>Informasi:</strong>

                                Pengajuan layanan Anda telah diverifikasi
                                oleh pengelola dan sedang dalam proses selanjutnya.

                            </div>

                        @elseif($pengajuanLayanan->status === 'Disetujui')

                            <div class="alert alert-success">

                                <strong>Selamat!</strong>

                                Pengajuan layanan Anda telah disetujui
                                oleh pengelola.

                            </div>

                        @elseif($pengajuanLayanan->status === 'Ditolak')

                            <div class="alert alert-danger">

                                <strong>Informasi:</strong>

                                Pengajuan layanan Anda belum dapat disetujui.

                                Silakan perhatikan alasan atau catatan
                                pengelola yang tercantum di atas.

                            </div>

                        @else

                            <div class="alert alert-info">

                                <strong>Informasi:</strong>

                                Status pengajuan Anda saat ini:
                                {{ $pengajuanLayanan->status }}

                            </div>

                        @endif


                    {{-- ================================================= --}}
                    {{-- HASIL BANTUAN LISTRIK --}}
                    {{-- ================================================= --}}

                    @elseif(isset($pengajuan))

                        <div class="text-center mb-4">

                            @if($pengajuan)

                                <div class="mb-3">

                                    <span class="badge bg-success fs-6 px-3 py-2">
                                        Pengajuan Ditemukan
                                    </span>

                                </div>

                                <h2 class="fw-bold">
                                    Status Pengajuan
                                </h2>

                                <p class="text-muted">
                                    Berikut informasi pengajuan bantuan listrik Anda.
                                </p>

                            @endif

                        </div>


                        {{-- NOMOR PENGAJUAN --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Nomor Pengajuan
                            </label>

                            <div class="form-control bg-light fw-bold">
                                {{ $pengajuan->nomor_pengajuan }}
                            </div>

                        </div>


                        {{-- NAMA PEMOHON --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Nama Pemohon
                            </label>

                            <div class="form-control bg-light">
                                {{ $pengajuan->nama_lengkap }}
                            </div>

                        </div>


                        {{-- NIK --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                NIK
                            </label>

                            <div class="form-control bg-light">
                                {{ $pengajuan->nik }}
                            </div>

                        </div>


                        {{-- NOMOR HP --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Nomor HP
                            </label>

                            <div class="form-control bg-light">
                                {{ $pengajuan->nomor_hp }}
                            </div>

                        </div>


                        {{-- STATUS PENGAJUAN --}}

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Status Pengajuan
                            </label>

                            <div>

                                @if($pengajuan->status === 'Menunggu Verifikasi')

                                    <span class="badge bg-warning text-dark fs-6 px-3 py-2">
                                        Menunggu Verifikasi
                                    </span>

                                @elseif($pengajuan->status === 'Diverifikasi')

                                    <span class="badge bg-primary fs-6 px-3 py-2">
                                        Diverifikasi
                                    </span>

                                @elseif($pengajuan->status === 'Disetujui')

                                    <span class="badge bg-success fs-6 px-3 py-2">
                                        Disetujui
                                    </span>

                                @elseif($pengajuan->status === 'Ditolak')

                                    <span class="badge bg-danger fs-6 px-3 py-2">
                                        Ditolak
                                    </span>

                                @else

                                    <span class="badge bg-secondary fs-6 px-3 py-2">
                                        {{ $pengajuan->status }}
                                    </span>

                                @endif

                            </div>

                        </div>


                        {{-- CATATAN / ALASAN DARI ADMIN --}}

                        @if($pengajuan->catatan_petugas)

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Catatan Pengelola
                                </label>

                                @if($pengajuan->status === 'Ditolak')

                                    <div class="alert alert-danger mb-0">

                                        <div class="fw-bold mb-1">
                                            Alasan Pengajuan Ditolak:
                                        </div>

                                        <div>
                                            {{ $pengajuan->catatan_petugas }}
                                        </div>

                                    </div>

                                @else

                                    <div class="alert alert-info mb-0">

                                        <div class="fw-bold mb-1">
                                            Catatan Pengelola:
                                        </div>

                                        <div>
                                            {{ $pengajuan->catatan_petugas }}
                                        </div>

                                    </div>

                                @endif

                            </div>

                        @endif


                        {{-- INFORMASI BERDASARKAN STATUS --}}

                        @if($pengajuan->status === 'Menunggu Verifikasi')

                            <div class="alert alert-warning">

                                <strong>Informasi:</strong>

                                Pengajuan Anda sedang menunggu proses verifikasi
                                oleh pengelola.

                            </div>

                        @elseif($pengajuan->status === 'Diverifikasi')

                            <div class="alert alert-info">

                                <strong>Informasi:</strong>

                                Pengajuan Anda telah diverifikasi oleh pengelola
                                dan sedang dalam proses selanjutnya.

                            </div>

                        @elseif($pengajuan->status === 'Disetujui')

                            <div class="alert alert-success">

                                <strong>Selamat!</strong>

                                Pengajuan bantuan listrik Anda telah disetujui
                                oleh pengelola.

                            </div>

                        @elseif($pengajuan->status === 'Ditolak')

                            <div class="alert alert-danger">

                                <strong>Informasi:</strong>

                                Pengajuan bantuan listrik Anda belum dapat
                                disetujui.

                                Silakan perhatikan alasan atau catatan
                                pengelola yang tercantum di atas.

                            </div>

                        @else

                            <div class="alert alert-info">

                                <strong>Informasi:</strong>

                                Status pengajuan Anda saat ini:
                                {{ $pengajuan->status }}

                            </div>

                        @endif


                    {{-- ================================================= --}}
                    {{-- TIDAK DITEMUKAN --}}
                    {{-- ================================================= --}}

                    @else

                        <div class="text-center mb-4">

                            <div class="mb-3">

                                <span class="badge bg-danger fs-6 px-3 py-2">
                                    Pengajuan Tidak Ditemukan
                                </span>

                            </div>

                            <h2 class="fw-bold">
                                Data Tidak Ditemukan
                            </h2>

                            <p class="text-muted">
                                Nomor pengajuan yang Anda masukkan tidak ditemukan.
                            </p>

                        </div>


                        <div class="alert alert-danger text-center">

                            Nomor pengajuan tidak ditemukan.

                            <br>

                            Silakan periksa kembali nomor pengajuan Anda.

                        </div>

                    @endif


                    {{-- ================================================= --}}
                    {{-- TOMBOL --}}
                    {{-- ================================================= --}}

                    <div class="text-center mt-4">

                        <a
                            href="{{ route('pengajuan-bantuan.cek-status') }}"
                            class="btn btn-primary px-4"
                        >
                            ← Cek Nomor Lain
                        </a>

                        <a
                            href="{{ url('/') }}"
                            class="btn btn-outline-secondary px-4 ms-2"
                        >
                            Kembali ke Beranda
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>