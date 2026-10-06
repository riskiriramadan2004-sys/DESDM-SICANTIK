<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaduan Masyarakat - Admin</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #212529;
        }

        .header {
            background: #0d6efd;
            color: white;
            padding: 20px 30px;
        }

        .header h1 {
            margin: 0;
            font-size: 25px;
        }

        .header p {
            margin: 6px 0 0;
            opacity: .9;
        }

        .container {
            width: 95%;
            max-width: 1400px;
            margin: 30px auto;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 3px 15px rgba(0,0,0,.08);
        }

        .alert {
            padding: 14px 18px;
            background: #d1e7dd;
            color: #0f5132;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1100px;
        }

        th {
            background: #212529;
            color: white;
            padding: 14px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #e9ecef;
            font-size: 14px;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .badge {
            display: inline-block;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .badge-baru {
            background: #cfe2ff;
            color: #084298;
        }

        .badge-proses {
            background: #fff3cd;
            color: #664d03;
        }

        .badge-selesai {
            background: #d1e7dd;
            color: #0f5132;
        }

        .btn {
            display: inline-block;
            padding: 8px 13px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 13px;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #0b5ed7;
        }

        .empty {
            text-align: center;
            padding: 50px 20px;
            color: #6c757d;
        }

        .pagination {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Pengaduan Masyarakat</h1>
        <p>Daftar pengaduan yang masuk dari masyarakat</p>
    </div>

    <div class="container">

        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">

            @if($pengaduans->count() > 0)

                <div class="table-wrapper">

                    <table>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Pengaduan</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($pengaduans as $item)

                                <tr>

                                    <td>
                                        {{ $pengaduans->firstItem() + $loop->index }}
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
                                        {{ $item->nomor_hp }}
                                    </td>

                                    <td>
                                        {{ $item->kategori }}
                                    </td>

                                    <td>
                                        {{ $item->judul }}
                                    </td>

                                    <td>

                                        @if($item->status === 'Baru')

                                            <span class="badge badge-baru">
                                                Baru
                                            </span>

                                        @elseif($item->status === 'Diproses')

                                            <span class="badge badge-proses">
                                                Diproses
                                            </span>

                                        @elseif($item->status === 'Selesai')

                                            <span class="badge badge-selesai">
                                                Selesai
                                            </span>

                                        @else

                                            <span class="badge">
                                                {{ $item->status }}
                                            </span>

                                        @endif

                                    </td>

                                    <td>
                                        {{ $item->created_at->format('d-m-Y H:i') }}
                                    </td>

                                    <td>

                                        <a
                                            href="{{ route('admin.pengaduan.show', $item->id) }}"
                                            class="btn"
                                        >
                                            Detail
                                        </a>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

                <div class="pagination">
                    {{ $pengaduans->links() }}
                </div>

            @else

                <div class="empty">

                    <h3>Belum Ada Pengaduan</h3>

                    <p>
                        Belum ada pengaduan masyarakat yang masuk.
                    </p>

                </div>

            @endif

        </div>

    </div>

</body>
</html>