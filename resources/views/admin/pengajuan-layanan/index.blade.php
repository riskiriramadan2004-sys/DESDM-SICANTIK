<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengajuan Layanan - Admin</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            color: #1f2937;
        }

        .container {
            width: 95%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,.08);
        }

        h1 {
            margin-top: 0;
            color: #123c69;
        }

        .table-wrapper {
            overflow-x: auto;
            margin-top: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 13px 12px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
            vertical-align: top;
        }

        th {
            background: #f8fafc;
            color: #374151;
        }

        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }

        .menunggu {
            background: #fef3c7;
            color: #92400e;
        }

        .diverifikasi {
            background: #dbeafe;
            color: #1e40af;
        }

        .disetujui {
            background: #dcfce7;
            color: #166534;
        }

        .ditolak {
            background: #fee2e2;
            color: #991b1b;
        }

        .btn {
            display: inline-block;
            padding: 8px 13px;
            background: #123c69;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            font-size: 14px;
        }

        .btn:hover {
            background: #0d2f52;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #6b7280;
        }

        .pagination {
            margin-top: 25px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Pengajuan Layanan Online</h1>

        <p>
            Daftar pengajuan layanan yang masuk dari masyarakat.
        </p>

        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Pengajuan</th>
                        <th>Pemohon</th>
                        <th>Layanan</th>
                        <th>Bidang</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse ($pengajuanLayanans as $pengajuan)

                    @php
                        $statusClass = match ($pengajuan->status) {
                            'Menunggu Verifikasi', 'menunggu_verifikasi'
                                => 'menunggu',

                            'Diverifikasi'
                                => 'diverifikasi',

                            'Disetujui'
                                => 'disetujui',

                            'Ditolak'
                                => 'ditolak',

                            default
                                => 'menunggu',
                        };
                    @endphp

                    <tr>

                        <td>
                            {{ $pengajuanLayanans->firstItem() + $loop->index }}
                        </td>

                        <td>
                            <strong>
                                {{ $pengajuan->nomor_pengajuan }}
                            </strong>
                        </td>

                        <td>
                            {{ $pengajuan->nama_lengkap }}

                            <br>

                            <small>
                                NIK: {{ $pengajuan->nik }}
                            </small>
                        </td>

                        <td>
                            {{ $pengajuan->layanan->nama ?? '-' }}
                        </td>

                        <td>
                            {{ $pengajuan->layanan->bidangLayanan->nama ?? '-' }}
                        </td>

                        <td>
                            <span class="badge {{ $statusClass }}">
                                {{ $pengajuan->status }}
                            </span>
                        </td>

                        <td>
                            <a
                                href="{{ route('admin.pengajuan-layanan.show', $pengajuan) }}"
                                class="btn"
                            >
                                Detail
                            </a>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="7" class="empty">
                            Belum ada pengajuan layanan.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

        <div class="pagination">
            {{ $pengajuanLayanans->links() }}
        </div>

    </div>

</div>

</body>
</html>