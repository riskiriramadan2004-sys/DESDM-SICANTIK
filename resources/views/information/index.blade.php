<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Informasi ESDM - SICANTIK</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            SICANTIK
        </a>

        <div>
            <a href="{{ route('information.index') }}"
               class="btn btn-outline-light btn-sm">
                Informasi ESDM
            </a>

            <a href="{{ route('admin.informasi.index') }}"
               class="btn btn-success btn-sm">
                Admin
            </a>
        </div>
    </div>
</nav>

<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Informasi ESDM</h1>

        <p class="text-muted">
            Informasi seputar program, kegiatan, bantuan,
            energi dan ketenagalistrikan.
        </p>
    </div>

    {{-- Search --}}
    <form method="GET"
          action="{{ route('information.index') }}"
          class="mb-4">

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

            <div class="col-md-3">
                <select name="category" class="form-select">

                    <option value="">
                        Semua Kategori
                    </option>

                    @foreach($categories as $category)

                        <option
                            value="{{ $category->slug }}"
                            @selected(request('category') === $category->slug)
                        >
                            {{ $category->name }}
                        </option>

                    @endforeach

                </select>
            </div>

            <div class="col-md-1">
                <button class="btn btn-success w-100">
                    Cari
                </button>
            </div>

        </div>

    </form>

    {{-- Card Informasi --}}
    <div class="row g-4">

        @forelse($information as $item)

            <div class="col-md-4">

                <div class="card h-100 shadow-sm border-0">

                    @if($item->image)

                        <img
                            src="{{ asset('storage/' . $item->image) }}"
                            class="card-img-top"
                            style="height: 220px; object-fit: cover;"
                            alt="{{ $item->title }}"
                        >

                    @else

                        <div
                            class="bg-secondary text-white d-flex align-items-center justify-content-center"
                            style="height: 220px;"
                        >
                            Tidak ada gambar
                        </div>

                    @endif

                    <div class="card-body">

                        <span class="badge bg-success mb-2">
                            {{ $item->category->name }}
                        </span>

                        <h5 class="card-title fw-bold">
                            {{ $item->title }}
                        </h5>

                        <p class="text-muted small">
                            {{ $item->published_at?->format('d F Y') }}
                        </p>

                        <p class="card-text">
                            {{ $item->excerpt ?: Str::limit(strip_tags($item->content), 120) }}
                        </p>

                        <a
                            href="{{ route('information.show', $item) }}"
                            class="btn btn-outline-success"
                        >
                            Baca Selengkapnya
                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">

                <div class="alert alert-info text-center">
                    Belum ada informasi yang tersedia.
                </div>

            </div>

        @endforelse

    </div>

    <div class="mt-5 d-flex justify-content-center">
        {{ $information->links() }}
    </div>

</div>

</body>
</html>