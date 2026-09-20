<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Tambah Informasi</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <h3 class="fw-bold mb-4">
                        Tambah Informasi ESDM
                    </h3>

                    @if($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form
                        action="{{ route('admin.informasi.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Kategori
                            </label>

                            <select
                                name="category_id"
                                class="form-select"
                                required
                            >

                                <option value="">
                                    -- Pilih Kategori --
                                </option>

                                @foreach($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        @selected(old('category_id') == $category->id)
                                    >
                                        {{ $category->name }}
                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Judul
                            </label>

                            <input
                                type="text"
                                name="title"
                                value="{{ old('title') }}"
                                class="form-control"
                                required
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Ringkasan
                            </label>

                            <textarea
                                name="excerpt"
                                rows="3"
                                class="form-control"
                            >{{ old('excerpt') }}</textarea>

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Isi Informasi
                            </label>

                            <textarea
                                name="content"
                                rows="10"
                                class="form-control"
                                required
                            >{{ old('content') }}</textarea>

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Gambar
                            </label>

                            <input
                                type="file"
                                name="image"
                                class="form-control"
                                accept=".jpg,.jpeg,.png,.webp"
                            >

                            <small class="text-muted">
                                Maksimal 2 MB.
                            </small>

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label fw-semibold">
                                    Status
                                </label>

                                <select
                                    name="status"
                                    class="form-select"
                                    required
                                >

                                    <option
                                        value="draft"
                                        @selected(old('status') === 'draft')
                                    >
                                        Draft
                                    </option>

                                    <option
                                        value="published"
                                        @selected(old('status') === 'published')
                                    >
                                        Terbit
                                    </option>

                                </select>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label fw-semibold">
                                    Tanggal Publikasi
                                </label>

                                <input
                                    type="datetime-local"
                                    name="published_at"
                                    value="{{ old('published_at') }}"
                                    class="form-control"
                                >

                            </div>

                        </div>

                        <div class="d-flex gap-2">

                            <a
                                href="{{ route('admin.informasi.index') }}"
                                class="btn btn-secondary"
                            >
                                Kembali
                            </a>

                            <button
                                type="submit"
                                class="btn btn-success"
                            >
                                Simpan Informasi
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>