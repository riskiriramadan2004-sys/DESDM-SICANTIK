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

        /* ==============================
           HEADER ADMIN
        ============================== */

        .header {
            background: #0d6efd;
            color: white;
            padding: 20px 30px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .header-left h1 {
            margin: 0;
            font-size: 25px;
        }

        .header-left p {
            margin: 6px 0 0;
            opacity: .9;
        }

        /* ==============================
           BAGIAN KANAN HEADER
        ============================== */

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .admin-info {
            text-align: right;
        }

        .admin-info small {
            display: block;
            font-size: 11px;
            opacity: .8;
            margin-bottom: 3px;
        }

        .admin-info strong {
            display: block;
            font-size: 14px;
        }

        /* ==============================
           TOMBOL LOGOUT
        ============================== */

        .logout-form {
            margin: 0;
        }

        .logout-button {
            border: 1px solid rgba(255,255,255,.8);
            background: white;
            color: #0d6efd;

            padding: 10px 16px;

            border-radius: 7px;

            font-size: 13px;
            font-weight: bold;

            cursor: pointer;

            transition: .2s;
        }

        .logout-button:hover {
            background: #eaf2ff;
            transform: translateY(-1px);
        }

        /* ==============================
           CONTAINER
        ============================== */

        .container {
            width: 95%;
            max-width: 1400px;
            margin: 30px auto;
        }

        /* ==============================
           CARD
        ============================== */

        .card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 3px 15px rgba(0,0,0,.08);
        }

        /* ==============================
           ALERT
        ============================== */

        .alert {
            padding: 14px 18px;
            background: #d1e7dd;
            color: #0f5132;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* ==============================
           TABLE
        ============================== */

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

        /* ==============================
           STATUS
        ============================== */

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

        /* ==============================
           BUTTON DETAIL
        ============================== */

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

        /* ==============================
           EMPTY
        ============================== */

        .empty {
            text-align: center;
            padding: 50px 20px;
            color: #6c757d;
        }

        .pagination {
            margin-top: 20px;
        }

        /* ==============================
           RESPONSIVE
        ============================== */

        @media (max-width: 700px) {

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-right {
                width: 100%;
                justify-content: space-between;
            }

            .admin-info {
                text-align: left;
            }
        }
    </style>
</head>

<body>

    <!-- =====================================
         HEADER ADMIN PENGADUAN
    ====================================== -->

    <div class="header">

        <div class="header-left">

            <h1>
                Pengaduan Masyarakat
            </h1>

            <p>
                Daftar pengaduan yang masuk dari masyarakat
            </p>

        </div>


        <div class="header-right">

            <!-- Nama Admin -->

            <div class="admin-info">

                <small>
                    LOGIN SEBAGAI
                </small>

                <strong>
                    {{ Auth::user()->name ?? 'Admin Pengaduan' }}
                </strong>

            </div>


            <!-- Logout -->

            <form
                action="{{ route('admin.logout') }}"
                method="POST"
                class="logout-form"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >
                    ⏻ Keluar
                </button>

            </form>

        </div>

    </div>


    <!-- =====================================
         CONTENT
    ====================================== -->

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

                                <th>
                                    Nomor Pengaduan
                                </th>

                                <th>
                                    Nama
                                </th>

                                <th>
                                    No. HP
                                </th>

                                <th>
                                    Kategori
                                </th>

                                <th>
                                    Judul
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Tanggal
                                </th>

                                <th>
                                    Aksi
                                </th>

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

                    <h3>
                        Belum Ada Pengaduan
                    </h3>

                    <p>
                        Belum ada pengaduan masyarakat yang masuk.
                    </p>

                </div>

            @endif

        </div>

    </div>

</body>
</html>