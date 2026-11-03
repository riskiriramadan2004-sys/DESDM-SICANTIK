
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $information->title }} - SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/desdm-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/information.css') }}?v=6">

    <style>
        .information-detail {
            max-width: 900px;
            margin: 0 auto;
            background: #FFFFFF;
            border: 1px solid #E1E2DF;
            border-radius: 18px;
            overflow: hidden;
        }

        .information-detail-image {
            width: 100%;
            max-height: 480px;
            object-fit: cover;
        }

        .information-detail-content {
            padding: 45px;
        }

        .information-detail-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(27px, 4vw, 38px);
            font-weight: 800;
            line-height: 1.4;
            color: #292F36;
            margin: 15px 0;
        }

        .information-detail-meta {
            color: #899198;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .information-detail-excerpt {
            background: #F5F5F3;
            border-left: 4px solid #C66B32;
            padding: 20px;
            border-radius: 0 10px 10px 0;
            color: #505961;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .information-detail-text {
            color: #505961;
            font-size: 15px;
            line-height: 2;
            overflow-wrap: anywhere;
        }

        .information-detail-text p {
            margin-bottom: 20px;
        }

        .information-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            background: #FCEBDD;
            color: #A95324;
            border-radius: 9px;
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            transition: .2s ease;
        }

        .information-back:hover {
            background: #C66B32;
            color: #FFFFFF;
        }

        @media (max-width: 768px) {
            .information-detail-content {
                padding: 25px 20px;
            }

            .information-detail-image {
                max-height: 280px;
            }
        }
    </style>
</head>

<body class="information-page">

<nav class="navbar information-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            SICANTIK
        </a>

        <a href="{{ route('information.index') }}"
           class="btn btn-outline-light btn-sm">
            Semua Informasi
        </a>
    </div>
</nav>

<main class="container py-5">

    <div class="information-detail">

        @if($information->image)
            <img
                src="{{ asset('storage/' . $information->image) }}"
                class="information-detail-image"
                alt="{{ $information->title }}"
            >
        @endif

        <article class="information-detail-content">

            @if($information->category)
                <span class="information-category">
                    {{ $information->category->name }}
                </span>
            @endif

            <h1 class="information-detail-title">
                {{ $information->title }}
            </h1>

            <div class="information-detail-meta">
                Dipublikasikan:
                {{ $information->published_at?->format('d F Y, H:i') ?? '-' }}
            </div>

            @if($information->excerpt)
                <div class="information-detail-excerpt">
                    <strong>{{ $information->excerpt }}</strong>
                </div>
            @endif

            <div class="information-detail-text">
                {!! nl2br(e($information->content)) !!}
            </div>

            <hr class="my-4">

            <a href="{{ route('information.index') }}"
               class="information-back">
                ← Kembali ke Daftar Informasi
            </a>

        </article>

    </div>

</main>

<footer class="information-footer">
    <div class="container text-center">
        © {{ date('Y') }} SICANTIK - Dinas Energi dan Sumber Daya Mineral.
    </div>
</footer>

</body>
</html>
