<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>{{ $information->title }}</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <span class="badge bg-success mb-3">
                {{ $information->category->name }}
            </span>

            <h1 class="fw-bold">
                {{ $information->title }}
            </h1>

            <p class="text-muted">
                Status:

                @if($information->status === 'published')
                    <span class="badge bg-success">Terbit</span>
                @else
                    <span class="badge bg-warning text-dark">Draft</span>
                @endif
            </p>

            @if($information->image)

                <img
                    src="{{ asset('storage/' . $information->image) }}"
                    class="img-fluid rounded mb-4"
                    style="max-height: 450px;"
                >

            @endif

            @if($information->excerpt)

                <div class="alert alert-light border">
                    {{ $information->excerpt }}
                </div>

            @endif

            <div class="mt-4">
                {!! nl2br(e($information->content)) !!}
            </div>

            <hr>

            <a
                href="{{ route('admin.informasi.index') }}"
                class="btn btn-secondary"
            >
                Kembali
            </a>

            <a
                href="{{ route('admin.informasi.edit', $information) }}"
                class="btn btn-warning"
            >
                Edit
            </a>

        </div>

    </div>

</div>

</body>
</html>