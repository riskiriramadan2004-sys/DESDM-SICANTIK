<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring - DESDM SICANTIK</title>

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

        .monitoring-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 25px;
            height: 100%;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: 0.2s;
        }

        .monitoring-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.10);
        }

        .monitoring-icon {
            width: 55px;
            height: 55px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            margin-bottom: 15px;
        }

        .btn-monitoring {
            width: 100%;
        }
    </style>
</head>

<body>

<div class="container py-5">

    {{-- HEADER --}}
    <div class="page-header">
        <h3 class="fw-bold mb-2">
            Monitoring
        </h3>

        <p class="text-muted mb-0">
            Monitoring pengajuan bantuan, layanan online, dan pengaduan masyarakat.
        </p>
    </div>


    {{-- MENU MONITORING --}}
    <div class="row g-4">

        {{-- MONITORING PENGAJUAN BANTUAN --}}
        <div class="col-md-4">
            <div class="monitoring-card">

                <div class="monitoring-icon bg-primary-subtle text-primary">
                    🏠
                </div>

                <h5 class="fw-bold">
                    Pengajuan Bantuan
                </h5>

                <p class="text-muted">
                    Monitoring pengajuan bantuan listrik masyarakat.
                </p>

                <a
                    href="{{ route('admin.monitoring.bantuan') }}"
                    class="btn btn-primary btn-monitoring"
                >
                    Lihat Pengajuan
                </a>

            </div>
        </div>


        {{-- MONITORING LAYANAN ONLINE --}}
        <div class="col-md-4">
            <div class="monitoring-card">

                <div class="monitoring-icon bg-success-subtle text-success">
                    📋
                </div>

                <h5 class="fw-bold">
                    Layanan Online
                </h5>

                <p class="text-muted">
                    Monitoring pengajuan layanan online masyarakat.
                </p>

                <a
                    href="{{ route('admin.monitoring.layanan') }}"
                    class="btn btn-success btn-monitoring"
                >
                    Lihat Pengajuan
                </a>

            </div>
        </div>


        {{-- MONITORING PENGADUAN --}}
        <div class="col-md-4">
            <div class="monitoring-card">

                <div class="monitoring-icon bg-warning-subtle text-warning">
                    📢
                </div>

                <h5 class="fw-bold">
                    Pengaduan Masyarakat
                </h5>

                <p class="text-muted">
                    Monitoring pengaduan yang disampaikan masyarakat.
                </p>

                <a
                    href="{{ route('admin.monitoring.pengaduan') }}"
                    class="btn btn-warning btn-monitoring"
                >
                    Lihat Pengaduan
                </a>

            </div>
        </div>

    </div>

</div>

</body>
</html>