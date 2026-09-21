<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Pengajuan Bantuan - Admin</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    {{-- NAVBAR --}}
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


    {{-- CONTENT --}}
    <div class="container py-5">

        {{-- HEADER --}}
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>

                <h2 class="fw-bold mb-1">
                    Daftar Pengajuan Bantuan
                </h2>

                <p class="text-muted mb-0">
                    Kelola dan pantau pengajuan bantuan listrik masyarakat.
                </p>

            </div>

        </div>


        {{-- ALERT SUCCESS --}}
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


        {{-- ALERT ERROR --}}
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


        {{-- CARD TABLE --}}
        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-dark">

                            <tr>

                                <th width="60">
                                    No
                                </th>

                                <th>
                                    Nomor Pengajuan
                                </th>

                                <th>
                                    Nama Pemohon
                                </th>

                                <th>
                                    NIK
                                </th>

                                <th>
                                    Nomor HP
                                </th>

                                <th>
                                    Status
                                </th>

                                <th width="100">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($pengajuan as $item)

                                <tr>

                                    {{-- NOMOR --}}
                                    <td>
                                        {{ $pengajuan->firstItem() + $loop->index }}
                                    </td>


                                    {{-- NOMOR PENGAJUAN --}}
                                    <td>

                                        <strong>
                                            {{ $item->nomor_pengajuan }}
                                        </strong>

                                    </td>


                                    {{-- NAMA --}}
                                    <td>
                                        {{ $item->nama_lengkap }}
                                    </td>


                                    {{-- NIK --}}
                                    <td>
                                        {{ $item->nik }}
                                    </td>


                                    {{-- NOMOR HP --}}
                                    <td>
                                        {{ $item->nomor_hp }}
                                    </td>


                                    {{-- STATUS --}}
                                    <td>

                                        @if($item->status === 'Menunggu Verifikasi')

                                            <span class="badge bg-warning text-dark">
                                                Menunggu Verifikasi
                                            </span>

                                        @elseif($item->status === 'Diverifikasi')

                                            <span class="badge bg-primary">
                                                Diverifikasi
                                            </span>

                                        @elseif($item->status === 'Disetujui')

                                            <span class="badge bg-success">
                                                Disetujui
                                            </span>

                                        @elseif($item->status === 'Ditolak')

                                            <span class="badge bg-danger">
                                                Ditolak
                                            </span>

                                        @else

                                            <span class="badge bg-secondary">
                                                {{ $item->status }}
                                            </span>

                                        @endif

                                    </td>


                                    {{-- AKSI --}}
                                    <td>

                                        <a
                                            href="{{ route('admin.pengajuan-bantuan.show', $item) }}"
                                            class="btn btn-sm btn-primary"
                                        >
                                            Detail
                                        </a>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td
                                        colspan="7"
                                        class="text-center py-5"
                                    >

                                        <div class="text-muted">

                                            <h5 class="mb-2">
                                                Belum Ada Pengajuan
                                            </h5>

                                            <p class="mb-0">
                                                Belum ada masyarakat yang
                                                mengirimkan pengajuan bantuan.
                                            </p>

                                        </div>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>


                {{-- PAGINATION --}}
                @if($pengajuan->hasPages())

                    <div class="mt-4">

                        {{ $pengajuan->links() }}

                    </div>

                @endif

            </div>

        </div>

    </div>


    {{-- BOOTSTRAP JS --}}
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>

</html>