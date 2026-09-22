<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengajuan Berhasil - SICANTIK</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand fw-bold">
                SICANTIK
            </a>

            <a
                href="{{ route('information.index') }}"
                class="btn btn-outline-light"
            >
                Informasi ESDM
            </a>
        </div>
    </nav>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card shadow-sm border-0">

                    <div class="card-body p-4 p-md-5 text-center">

                        <div class="mb-4">
                            <div
                                class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center"
                                style="width: 70px; height: 70px; font-size: 32px;"
                            >
                                ✓
                            </div>
                        </div>

                        <h2 class="fw-bold text-success">
                            Pengajuan Berhasil!
                        </h2>

                        <p class="text-muted">
                            Pengajuan bantuan listrik Anda berhasil
                            dikirim dan akan diproses oleh petugas.
                        </p>

                        <div class="alert alert-primary mt-4">

                            <div class="small text-muted mb-1">
                                NOMOR PENGAJUAN
                            </div>

                            <div class="fs-3 fw-bold">
                                {{ $pengajuan->nomor_pengajuan }}
                            </div>

                            <div class="small mt-2">
                                Simpan nomor pengajuan ini untuk
                                mengecek status pengajuan Anda.
                            </div>

                        </div>

                        <div class="text-start mt-4">

                            <div class="mb-3">
                                <strong>Nama Pemohon</strong>
                                <br>
                                {{ $pengajuan->nama_lengkap }}
                            </div>

                            <div class="mb-3">
                                <strong>NIK</strong>
                                <br>
                                {{ $pengajuan->nik }}
                            </div>

                            <div class="mb-3">
                                <strong>Status</strong>
                                <br>
                                <span class="badge bg-warning text-dark">
                                    {{ $pengajuan->status }}
                                </span>
                            </div>

                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-center gap-2 flex-wrap">

                            <a
                                href="{{ route('pengajuan-bantuan.cek-status') }}"
                                class="btn btn-primary"
                            >
                                Cek Status Pengajuan
                            </a>

                            <a
                                href="{{ url('/') }}"
                                class="btn btn-secondary"
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