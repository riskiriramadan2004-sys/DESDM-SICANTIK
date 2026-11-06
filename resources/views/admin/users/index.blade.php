<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manajemen User | DESDM SICANTIK</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* =====================================
           1. IDENTITAS VISUAL SI CANTIK
        ===================================== */

        :root {
            --charcoal: #292F36;
            --charcoal-light: #3B4249;
            --copper: #C66B32;
            --copper-dark: #A95325;
            --warm-white: #F5F5F3;
            --white: #FFFFFF;
            --gray: #68717A;
            --pale-copper: #FCEBDD;
            --border: #E3E5E6;

            --danger: #B42332;
            --danger-bg: #FFF0F0;

            --success: #18794E;
            --success-bg: #EAF7EF;
        }

        /* =====================================
           2. RESET DAN GLOBAL
        ===================================== */

        * {
            box-sizing: border-box;
        }

        html {
            min-height: 100%;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            background: var(--warm-white);
            color: var(--charcoal);
            -webkit-font-smoothing: antialiased;
        }

        a,
        button {
            font-family: inherit;
        }

        /* =====================================
           3. HEADER SI CANTIK
        ===================================== */

        .header {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 17px clamp(20px, 4vw, 58px);
            color: var(--white);
            background: var(--charcoal);
            border-bottom: 3px solid var(--copper);
        }

        .header-title {
            display: flex;
            align-items: center;
            gap: 15px;
            min-width: 0;
        }

        /* LOGO SULAWESI TENGAH */

        .header-logo {
            width: 48px;
            height: 48px;
            flex: 0 0 48px;
            display: grid;
            place-items: center;
            padding: 4px;
            border-radius: 10px;
            background: var(--white);
            overflow: hidden;
        }

        .header-logo img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .header-title h1 {
            margin: 0;
            color: var(--white);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(19px, 2vw, 25px);
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .header-title p {
            margin: 5px 0 0;
            color: #D4D9DC;
            font-size: 12px;
            line-height: 1.5;
        }

        /* TOMBOL DASHBOARD */

        .btn-dashboard {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            flex-shrink: 0;
            padding: 11px 16px;
            border: 1px solid rgba(255,255,255,.3);
            border-radius: 9px;
            background: rgba(255,255,255,.08);
            color: var(--white);
            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
            transition: .2s ease;
        }

        .btn-dashboard:hover {
            color: var(--white);
            background: var(--copper);
            border-color: var(--copper);
            transform: translateY(-1px);
        }

        /* =====================================
           4. KONTEN UTAMA
        ===================================== */

        .container {
            width: min(1350px, 100%);
            margin: 0 auto;
            padding: 32px 24px 48px;
        }

        .page-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 20px;
        }

        .page-heading h2 {
            margin: 0;
            color: var(--charcoal);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -.4px;
        }

        /* TOMBOL TAMBAH USER */

        .btn-add {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 11px 17px;
            border: 1px solid var(--copper);
            border-radius: 9px;
            background: var(--copper);
            color: var(--white);
            text-decoration: none;
            font-size: 12px;
            font-weight: 800;
            box-shadow: 0 5px 14px rgba(198,107,50,.16);
            transition: .2s ease;
        }

        .btn-add:hover {
            background: var(--copper-dark);
            border-color: var(--copper-dark);
            transform: translateY(-1px);
        }

        /* =====================================
           5. ALERT
        ===================================== */

        .alert {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 13px 16px;
            margin-bottom: 18px;
            border-radius: 10px;
            font-size: 13px;
            line-height: 1.7;
        }

        .alert-success {
            background: var(--success-bg);
            color: var(--success);
            border: 1px solid #CBE8D5;
        }

        .alert-error {
            background: var(--danger-bg);
            color: var(--danger);
            border: 1px solid #F2D0D3;
        }

        /* =====================================
           6. TABEL USER
        ===================================== */

        .table-card {
            padding: 22px;
            border: 1px solid rgba(41,47,54,.05);
            border-radius: 17px;
            background: var(--white);
            box-shadow: 0 12px 35px rgba(41,47,54,.07);
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 760px;
            border-collapse: separate;
            border-spacing: 0;
        }

        thead th {
            padding: 15px 16px;
            background: var(--charcoal);
            color: var(--white);
            text-align: left;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }

        thead th:first-child {
            border-radius: 9px 0 0 9px;
        }

        thead th:last-child {
            border-radius: 0 9px 9px 0;
        }

        tbody td {
            padding: 16px;
            border-bottom: 1px solid #EAECED;
            color: #46515A;
            font-size: 13px;
            vertical-align: middle;
        }

        tbody tr:last-child td {
            border-bottom: 0;
        }

        tbody tr {
            transition: background .18s ease;
        }

        tbody tr:hover {
            background: #FCFAF8;
        }

        .user-name {
            color: var(--charcoal);
            font-weight: 700;
        }

        /* =====================================
           7. BADGE ROLE
        ===================================== */

        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 7px 12px;
            border: 1px solid transparent;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
        }

        .badge-super {
            background: #F0E8FA;
            color: #68429A;
            border-color: #E5D8F5;
        }

        .badge-informasi {
            background: #E8EFF8;
            color: #365F91;
            border-color: #D7E3F2;
        }

        .badge-pengaduan {
            background: #FBE9E8;
            color: #A64A43;
            border-color: #F3D5D2;
        }

        .badge-bantuan {
            background: var(--pale-copper);
            color: #98602F;
            border-color: #F3D8C2;
        }

        .badge-layanan {
            background: #E6F2EC;
            color: #39765A;
            border-color: #D1E8DB;
        }

        /* =====================================
           8. TOMBOL AKSI
        ===================================== */

        .actions {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 36px;
            padding: 8px 13px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            transition: .2s ease;
        }

        .btn-edit {
            background: var(--pale-copper);
            color: var(--copper-dark);
            border-color: #F2D6C1;
        }

        .btn-edit:hover {
            background: var(--copper);
            color: var(--white);
            border-color: var(--copper);
        }

        .btn-delete {
            background: #FBE9E8;
            color: var(--danger);
            border-color: #F3D5D2;
        }

        .btn-delete:hover {
            background: var(--danger);
            color: var(--white);
            border-color: var(--danger);
        }

        /* =====================================
           9. PAGINATION
        ===================================== */

        .pagination-wrapper {
            margin-top: 20px;
        }

        .pagination-wrapper nav {
            display: flex;
            justify-content: flex-end;
        }

        .pagination-wrapper svg {
            width: 17px;
            height: 17px;
        }

        .pagination-wrapper a,
        .pagination-wrapper span {
            font-size: 12px;
        }

        /* =====================================
           10. MODAL HAPUS USER
        ===================================== */

        .delete-modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 99999;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(25,31,37,.62);
            backdrop-filter: blur(4px);
        }

        .delete-modal-overlay.active {
            display: flex;
        }

        .delete-modal {
            width: 100%;
            max-width: 440px;
            padding: 30px;
            border: 1px solid rgba(255,255,255,.8);
            border-radius: 18px;
            background: var(--white);
            text-align: center;
            box-shadow: 0 24px 70px rgba(0,0,0,.25);
            animation: modalShow .2s ease-out;
        }

        @keyframes modalShow {
            from {
                opacity: 0;
                transform: translateY(-12px) scale(.97);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .delete-icon {
            width: 65px;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 17px;
            border-radius: 50%;
            background: #FBE9E8;
            color: var(--danger);
            font-size: 27px;
        }

        .delete-modal h3 {
            margin: 0 0 10px;
            color: var(--charcoal);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 20px;
            font-weight: 800;
        }

        .delete-modal p {
            margin: 0 auto 24px;
            color: var(--gray);
            font-size: 13px;
            line-height: 1.7;
        }

        .delete-modal strong {
            color: var(--charcoal);
        }

        .modal-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .modal-btn {
            min-width: 125px;
            padding: 11px 17px;
            border: 1px solid transparent;
            border-radius: 9px;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            transition: .2s ease;
        }

        .btn-cancel {
            background: var(--warm-white);
            color: var(--charcoal);
            border-color: var(--border);
        }

        .btn-cancel:hover {
            background: #E9EAE7;
        }

        .btn-confirm-delete {
            background: var(--danger);
            color: var(--white);
        }

        .btn-confirm-delete:hover {
            background: #941D2A;
        }

        /* =====================================
           11. RESPONSIVE TABLET
        ===================================== */

        @media (max-width: 768px) {
            .header {
                align-items: flex-start;
                padding: 17px 20px;
            }

            .header-title {
                gap: 11px;
            }

            .header-logo {
                width: 42px;
                height: 42px;
                flex-basis: 42px;
            }

            .header-title h1 {
                font-size: 19px;
            }

            .header-title p {
                max-width: 360px;
                font-size: 11px;
            }

            .btn-dashboard {
                padding: 9px 11px;
                font-size: 11px;
                white-space: nowrap;
            }

            .container {
                padding: 25px 16px 35px;
            }

            .page-heading {
                align-items: flex-start;
                flex-direction: column;
                gap: 13px;
            }

            .page-heading h2 {
                font-size: 18px;
            }

            .table-card {
                padding: 13px;
                border-radius: 13px;
            }

            .actions {
                flex-wrap: nowrap;
            }

            .modal-actions {
                flex-direction: column-reverse;
            }

            .modal-btn {
                width: 100%;
            }
        }

        /* =====================================
           12. RESPONSIVE HP
        ===================================== */

        @media (max-width: 480px) {
            .header {
                flex-direction: column;
                gap: 14px;
            }

            .btn-dashboard {
                align-self: flex-start;
            }

            .container {
                padding-right: 12px;
                padding-left: 12px;
            }

            .table-card {
                padding: 9px;
            }

            .delete-modal {
                padding: 25px 20px;
            }
        }

        /* =====================================
           13. AKSESIBILITAS
        ===================================== */

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                transition-duration: .01ms !important;
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

            <div class="header-logo">
                <img
                    src="{{ asset('images/logo-sulawesi-tengah.png') }}"
                    alt="Logo Provinsi Sulawesi Tengah"
                >
            </div>

            <div>
                <h1>Manajemen User</h1>

                <p>
                    Pengelolaan akun administrator sistem DESDM-SICANTIK
                </p>
            </div>

        </div>

        <a
            href="{{ route('admin.dashboard') }}"
            class="btn-dashboard"
        >
            <i class="fa-solid fa-arrow-left"></i>
            Kembali ke Dashboard
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
                <i class="fa-solid fa-plus"></i>
                Tambah User
            </a>

        </div>


        {{-- SUCCESS MESSAGE --}}

        @if(session('success'))

            <div class="alert alert-success">

                <i class="fa-solid fa-circle-check"></i>

                {{ session('success') }}

            </div>

        @endif


        {{-- ERROR MESSAGE --}}

        @if($errors->any())

            <div class="alert alert-error">

                <i class="fa-solid fa-circle-exclamation"></i>

                <ul style="margin:0; padding-left:20px;">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- TABLE --}}

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
                                        <i class="fa-solid fa-pen-to-square"></i>
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
                                            <i class="fa-solid fa-trash"></i>
                                            Hapus
                                        </button>

                                    @else

                                        <span
                                            style="
                                                font-size:11px;
                                                color:#68717A;
                                                white-space:nowrap;
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
                                    color:#68717A;
                                "
                            >

                                <i class="fa-solid fa-users"
                                   style="font-size:25px; margin-bottom:12px; display:block; color:#C66B32;">
                                </i>

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


    {{-- =========================================
         MODAL KONFIRMASI HAPUS
    ========================================== --}}

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
                <i class="fa-solid fa-trash-can"></i>
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
                    <i class="fa-solid fa-trash"></i>
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


    {{-- =========================================
         JAVASCRIPT MODAL
    ========================================== --}}

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