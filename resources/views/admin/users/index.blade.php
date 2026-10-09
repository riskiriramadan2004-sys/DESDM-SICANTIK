<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manajemen User - DESDM SICANTIK</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f6fb;
            color: #172033;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            background: linear-gradient(135deg, #1268e8, #176ff2);
            color: white;
            padding: 24px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-title h1 {
            margin: 0;
            font-size: 26px;
        }

        .header-title p {
            margin: 5px 0 0;
            font-size: 15px;
            opacity: .9;
        }

        .btn-dashboard {
            background: white;
            color: #1268e8;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .btn-dashboard:hover {
            background: #eef5ff;
        }

        /* =========================
           CONTENT
        ========================= */

        .container {
            max-width: 1350px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .page-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }

        .page-heading h2 {
            margin: 0;
            font-size: 21px;
        }

        .btn-add {
            background: #1268e8;
            color: white;
            text-decoration: none;
            padding: 11px 17px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .btn-add:hover {
            background: #0959cc;
        }

        /* =========================
           ALERT
        ========================= */

        .alert {
            padding: 14px 18px;
            border-radius: 9px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .alert-success {
            background: #e8f8ef;
            color: #16743b;
            border: 1px solid #bde8cd;
        }

        .alert-error {
            background: #fdecec;
            color: #a62626;
            border: 1px solid #f2c2c2;
        }

        /* =========================
           TABLE
        ========================= */

        .table-card {
            background: white;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #25292d;
            color: white;
            padding: 14px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #e6e9ee;
            font-size: 14px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .user-name {
            font-weight: bold;
        }

        /* =========================
           ROLE BADGE
        ========================= */

        .badge {
            display: inline-block;
            padding: 7px 13px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .badge-super {
            background: #eadcff;
            color: #54259a;
        }

        .badge-informasi {
            background: #d8e8ff;
            color: #1259aa;
        }

        .badge-pengaduan {
            background: #ffd9dc;
            color: #a52935;
        }

        .badge-bantuan {
            background: #fff0c9;
            color: #956900;
        }

        .badge-layanan {
            background: #d9f1e7;
            color: #18734e;
        }

        /* =========================
           BUTTON
        ========================= */

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .btn {
            border: none;
            border-radius: 8px;
            padding: 9px 15px;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-edit {
            background: #ffbd00;
            color: #171717;
        }

        .btn-edit:hover {
            background: #e8a900;
        }

        .btn-delete {
            background: #df3045;
            color: white;
        }

        .btn-delete:hover {
            background: #c82339;
        }

        /* =========================
           PAGINATION
        ========================= */

        .pagination-wrapper {
            margin-top: 20px;
        }

        /* =========================
           MODAL HAPUS
        ========================= */

        .delete-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .55);

            display: none;

            align-items: center;
            justify-content: center;

            z-index: 99999;

            padding: 20px;
        }

        .delete-modal-overlay.active {
            display: flex;
        }

        .delete-modal {
            width: 100%;
            max-width: 440px;
            background: white;
            border-radius: 18px;
            padding: 30px;

            text-align: center;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, .25);

            animation: modalShow .2s ease-out;
        }

        @keyframes modalShow {
            from {
                opacity: 0;
                transform: translateY(-15px) scale(.96);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .delete-icon {
            width: 68px;
            height: 68px;

            margin: 0 auto 18px;

            border-radius: 50%;

            background: #fff0f1;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #df3045;

            font-size: 32px;
        }

        .delete-modal h3 {
            margin: 0 0 10px;
            font-size: 21px;
            color: #172033;
        }

        .delete-modal p {
            margin: 0 auto 25px;
            color: #657085;
            line-height: 1.6;
            font-size: 14px;
        }

        .delete-modal strong {
            color: #172033;
        }

        .modal-actions {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .modal-btn {
            min-width: 130px;
            padding: 12px 18px;

            border: none;
            border-radius: 9px;

            font-weight: bold;
            font-size: 14px;

            cursor: pointer;
        }

        .btn-cancel {
            background: #edf0f5;
            color: #3f4858;
        }

        .btn-cancel:hover {
            background: #dfe4ec;
        }

        .btn-confirm-delete {
            background: #df3045;
            color: white;
        }

        .btn-confirm-delete:hover {
            background: #c82339;
        }

        @media (max-width: 768px) {

            .header {
                padding: 20px;
            }

            .header-title h1 {
                font-size: 21px;
            }

            .header-title p {
                font-size: 13px;
            }

            .btn-dashboard {
                padding: 9px 12px;
                font-size: 12px;
            }

            .page-heading {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .table-card {
                padding: 12px;
            }

            th,
            td {
                padding: 11px 9px;
                white-space: nowrap;
            }

            .actions {
                flex-direction: column;
                align-items: stretch;
            }

            .modal-actions {
                flex-direction: column;
            }

            .modal-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    {{-- =========================
         HEADER
    ========================= --}}

    <header class="header">

        <div class="header-title">

            <h1>Manajemen User</h1>

            <p>
                Pengelolaan akun administrator sistem DESDM-SICANTIK
            </p>

        </div>

        <a
            href="{{ route('admin.dashboard') }}"
            class="btn-dashboard"
        >
            ← Kembali ke Dashboard
        </a>

    </header>


    {{-- =========================
         CONTENT
    ========================= --}}

    <main class="container">

        <div class="page-heading">

            <h2>
                Daftar Administrator
            </h2>

            <a
                href="{{ route('admin.users.create') }}"
                class="btn-add"
            >
                + Tambah User
            </a>

        </div>


        {{-- =========================
             SUCCESS MESSAGE
        ========================= --}}

        @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif


        {{-- =========================
             ERROR MESSAGE
        ========================= --}}

        @if($errors->any())

            <div class="alert alert-error">

                <ul style="margin:0; padding-left:20px;">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- =========================
             TABLE
        ========================= --}}

        <div class="table-card">

            <table>

                <thead>

                    <tr>

                        <th style="width:60px;">
                            No
                        </th>

                        <th>
                            Nama
                        </th>

                        <th>
                            Email
                        </th>

                        <th>
                            Role
                        </th>

                        <th>
                            Dibuat
                        </th>

                        <th style="width:180px;">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($users as $user)

                        <tr>

                            <td>
                                {{ $users->firstItem() + $loop->index }}
                            </td>

                            <td class="user-name">
                                {{ $user->name }}
                            </td>

                            <td>
                                {{ $user->email }}
                            </td>

                            <td>

                                @switch($user->role)

                                    @case('super_admin')

                                        <span class="badge badge-super">
                                            Super Admin
                                        </span>

                                        @break

                                    @case('admin_informasi')

                                        <span class="badge badge-informasi">
                                            Admin Informasi
                                        </span>

                                        @break

                                    @case('admin_pengaduan')

                                        <span class="badge badge-pengaduan">
                                            Admin Pengaduan
                                        </span>

                                        @break

                                    @case('admin_bantuan')

                                        <span class="badge badge-bantuan">
                                            Admin Bantuan
                                        </span>

                                        @break

                                    @case('admin_layanan')

                                        <span class="badge badge-layanan">
                                            Admin Layanan
                                        </span>

                                        @break

                                    @default

                                        <span class="badge">
                                            {{ $user->role }}
                                        </span>

                                @endswitch

                            </td>

                            <td>
                                {{ $user->created_at?->format('d-m-Y H:i') }}
                            </td>

                            <td>

                                <div class="actions">

                                    {{-- EDIT --}}

                                    <a
                                        href="{{ route('admin.users.edit', $user) }}"
                                        class="btn btn-edit"
                                    >
                                        Edit
                                    </a>


                                    {{-- HAPUS --}}

                                    @if(auth()->id() !== $user->id)

                                        <button
                                            type="button"
                                            class="btn btn-delete"
                                            onclick="openDeleteModal(
                                                '{{ $user->id }}',
                                                @js($user->name)
                                            )"
                                        >
                                            Hapus
                                        </button>

                                    @else

                                        <span
                                            style="
                                                font-size:12px;
                                                color:#8a93a3;
                                            "
                                        >
                                            Akun aktif
                                        </span>

                                    @endif

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="6"
                                style="
                                    text-align:center;
                                    padding:40px;
                                    color:#7a8495;
                                "
                            >
                                Belum ada data administrator.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>


            {{-- PAGINATION --}}

            @if($users->hasPages())

                <div class="pagination-wrapper">

                    {{ $users->links() }}

                </div>

            @endif

        </div>

    </main>


    {{-- =========================================================
         MODAL KONFIRMASI HAPUS
    ========================================================== --}}

    <div
        id="deleteModal"
        class="delete-modal-overlay"
        onclick="closeDeleteModal(event)"
    >

        <div
            class="delete-modal"
            onclick="event.stopPropagation()"
        >

            <div class="delete-icon">
                ⚠
            </div>

            <h3>
                Hapus User?
            </h3>

            <p>
                Apakah Anda yakin ingin menghapus user
                <strong id="deleteUserName"></strong>?
                <br>
                Akun ini akan dihapus dari sistem dan
                tidak dapat digunakan untuk login lagi.
            </p>


            <div class="modal-actions">

                <button
                    type="button"
                    class="modal-btn btn-cancel"
                    onclick="closeDeleteModal()"
                >
                    Batal
                </button>


                <button
                    type="button"
                    class="modal-btn btn-confirm-delete"
                    onclick="confirmDelete()"
                >
                    Ya, Hapus
                </button>

            </div>

        </div>

    </div>


    {{-- FORM HAPUS TERSEMBUNYI --}}

    <form
        id="deleteForm"
        method="POST"
        style="display:none;"
    >

        @csrf

        @method('DELETE')

    </form>


    {{-- =========================
         JAVASCRIPT MODAL
    ========================= --}}

    <script>

        let selectedUserId = null;


        /*
        |--------------------------------------------------------------------------
        | BUKA MODAL
        |--------------------------------------------------------------------------
        */

        function openDeleteModal(userId, userName)
        {
            selectedUserId = userId;

            document.getElementById('deleteUserName').textContent = userName;

            document
                .getElementById('deleteModal')
                .classList.add('active');

            document.body.style.overflow = 'hidden';
        }


        /*
        |--------------------------------------------------------------------------
        | TUTUP MODAL
        |--------------------------------------------------------------------------
        */

        function closeDeleteModal(event = null)
        {
            if (
                event &&
                event.target !== document.getElementById('deleteModal')
            ) {
                return;
            }

            document
                .getElementById('deleteModal')
                .classList.remove('active');

            document.body.style.overflow = '';

            selectedUserId = null;
        }


        /*
        |--------------------------------------------------------------------------
        | KONFIRMASI HAPUS
        |--------------------------------------------------------------------------
        */

        function confirmDelete()
        {
            if (!selectedUserId) {
                return;
            }

            const form = document.getElementById('deleteForm');

            form.action = `/admin/users/${selectedUserId}`;

            form.submit();
        }


        /*
        |--------------------------------------------------------------------------
        | TOMBOL ESC
        |--------------------------------------------------------------------------
        */

        document.addEventListener('keydown', function(event) {

            if (event.key === 'Escape') {

                closeDeleteModal();

            }

        });

    </script>

</body>
</html>