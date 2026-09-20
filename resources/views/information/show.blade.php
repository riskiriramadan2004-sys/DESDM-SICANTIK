<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $information->title }} - SICANTIK</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a
            href="{{ route('information.index') }}"
            class="navbar-brand fw-bold"
        >
            SICANTIK
        </a>
    </div>
</nav>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="card border-0 shadow-sm">

                @if($information->image)

                    <img
                        src="{{ asset('storage/' . $information->image) }}"
                        class="card-img-top"
                        style="max-height: 500px; object-fit: cover;"
                        alt="{{ $information->title }}"
                    >

                @endif

                <div class="card-body p-4 p-lg-5">

                    <span class="badge bg-success mb-3">
                        {{ $information->category->name }}
                    </span>

                    <h1 class="fw-bold">
                        {{ $information->title }}
                    </h1>

                    <p class="text-muted">
                        {{ $information->published_at?->format('d F Y H:i') }}
                    </p>

                    @if($information->excerpt)

                        <div class="alert alert-light border">
                            <strong>
                                {{ $information->excerpt }}
                            </strong>
                        </div>

                    @endif

                    <div class="mt-4">
                        {!! nl2br(e($information->content)) !!}
                    </div>

                    <hr class="my-4">

                    <a
                        href="{{ route('information.index') }}"
                        class="btn btn-outline-secondary"
                    >
                        ← Kembali
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>