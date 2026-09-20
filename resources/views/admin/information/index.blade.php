<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Kelola Informasi - Admin SICANTIK</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">

        <span class="navbar-brand fw-bold">
            ADMIN SICANTIK
        </span>

        <a
            href="{{ route('information.index') }}"
            class="btn btn-outline-light btn-sm"
        >
            Lihat Website
        </a>

    </div>
</nav>

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold">
                Informasi ESDM
            </h2>

            <p class="text-muted mb-0">
                Kelola informasi yang ditampilkan kepada masyarakat.
            </p>
        </div>

        <a
            href="{{ route('admin.informasi.create') }}"
            class="btn btn-success"
        >
            + Tambah Informasi
        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    {{-- Filter --}}
    <form method="GET"
          class="card card-body border-0 shadow-sm mb-4">

        <div class="row g-2">

            <div class="col-md-8">

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    class="form-control"
                    placeholder="Cari informasi..."
                >

            </div>

            <div class="col-md-2">

                <select
                    name="status"
                    class="form-select"
                >

                    <option value="">
                        Semua Status
                    </option>

                    <option
                        value="published"
                        @selected(request('status') === 'published')
                    >
                        Terbit
                    </option>

                    <option
                        value="draft"
                        @selected(request('status') === 'draft')
                    >
                        Draft
                    </option>

                </select>

            </div>

            <div class="col-md-2">

                <button class="btn btn-dark w-100">
                    Filter
                </button>

            </div>

        </div>

    </form>

    <div class="card border-0 shadow-sm">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-dark">

                    <tr>
                        <th>#</th>
                        <th>Informasi</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th width="220">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($information as $item)

                        <tr>

                            <td>
                                {{ $information->firstItem() + $loop->index }}
                            </td>

                            <td>
                                <strong>
                                    {{ $item->title }}
                                </strong>
                            </td>

                            <td>
                                <span class="badge bg-secondary">
                                    {{ $item->category->name }}
                                </span>
                            </td>

                            <td>

                                @if($item->status === 'published')

                                    <span class="badge bg-success">
                                        Terbit
                                    </span>

                                @else

                                    <span class="badge bg-warning text-dark">
                                        Draft
                                    </span>

                                @endif

                            </td>

                            <td>
                                {{ $item->created_at->format('d/m/Y') }}
                            </td>

                            <td>

                                <a
                                    href="{{ route('admin.informasi.show', $item) }}"
                                    class="btn btn-sm btn-info text-white"
                                >
                                    Lihat
                                </a>

                                <a
                                    href="{{ route('admin.informasi.edit', $item) }}"
                                    class="btn btn-sm btn-warning"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('admin.informasi.destroy', $item) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus informasi ini?')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-danger"
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="6"
                                class="text-center py-5"
                            >
                                Belum ada data informasi.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="p-3">
            {{ $information->links() }}
        </div>

    </div>

</div>

</body>
</html>