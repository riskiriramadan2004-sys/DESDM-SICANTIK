<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Si Cantik - Dinas ESDM Sulawesi Tengah</title>
    <link rel="stylesheet" href="{{ asset('css/desdm-theme.css') }}">

    <!-- TES SICANTIK -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
      cleat      scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f8fc;
            color: #1f2937;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            background: #123f6d;
            color: white;
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6%;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-logo {
            width: 46px;
            height: 46px;
            background: #f5c400;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #123f6d;
            font-weight: bold;
            font-size: 22px;
        }

        .brand-text h1 {
            font-size: 22px;
            line-height: 1.1;
        }

        .brand-text span {
            font-size: 12px;
            opacity: 0.85;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-menu a {
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s;
        }

        .nav-menu a:hover {
            color: #ffd329;
        }

        .login-button {
            background: #f5c400;
            color: #123f6d !important;
            padding: 10px 17px;
            border-radius: 8px;
            font-weight: bold !important;
        }

        .login-button:hover {
            background: #ffd83d;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            background:
                linear-gradient(
                    90deg,
                    rgba(10, 48, 83, 0.96),
                    rgba(20, 89, 139, 0.78),
                    rgba(25, 104, 158, 0.42)
                ),
                linear-gradient(135deg, #17669a, #4e9bc2);

            min-height: 475px;
            display: flex;
            align-items: center;
            padding: 70px 7%;
            color: white;
        }

        .hero-content {
            max-width: 700px;
        }

        .hero-label {
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 10px;
            color: #ffd329;
        }

        .hero h2 {
            font-size: clamp(42px, 6vw, 72px);
            line-height: 0.95;
            color: #ffd329;
            margin-bottom: 20px;
            font-weight: 800;
        }

        .hero h3 {
            font-size: 25px;
            line-height: 1.3;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.6;
            max-width: 650px;
            margin-bottom: 30px;
        }

        /* =========================
           SEARCH
        ========================= */

        .search-box {
            display: flex;
            max-width: 620px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.18);
        }

        .search-box input {
            flex: 1;
            border: none;
            outline: none;
            padding: 16px 18px;
            font-size: 15px;
            color: #333;
        }

        .search-box button {
            border: none;
            background: #f5c400;
            color: #123f6d;
            font-weight: bold;
            padding: 0 27px;
            cursor: pointer;
        }

        .search-box button:hover {
            background: #ffd83d;
        }

        /* =========================
           QUICK SERVICES
        ========================= */

        .services-section {
            padding: 55px 7%;
            margin-top: -25px;
            position: relative;
            z-index: 2;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 18px;
        }

        .service-card {
            min-height: 190px;
            border-radius: 15px;
            padding: 25px 18px;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.12);
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.18);
        }

        .service-icon {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background: rgba(255,255,255,0.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 29px;
            margin-bottom: 15px;
        }

        .service-card h3 {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .service-card p {
            font-size: 13px;
            line-height: 1.5;
            opacity: 0.95;
        }

        .blue {
            background: #478ec5;
        }

        .blue-dark {
            background: #356fa5;
        }

        .green {
            background: #42b847;
        }

        .orange {
            background: #ef8b13;
        }

        .red {
            background: #df4a3f;
        }

        /* =========================
           INFORMATION
        ========================= */

        .info-section {
            padding: 40px 7% 70px;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-heading span {
            display: inline-block;
            color: #17669a;
            background: #e4f1fb;
            padding: 7px 15px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .section-heading h2 {
            font-size: 32px;
            color: #123f6d;
            margin-bottom: 10px;
        }

        .section-heading p {
            color: #667085;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .info-card {
            background: white;
            border-radius: 13px;
            padding: 25px;
            border: 1px solid #e4e9ef;
            box-shadow: 0 5px 16px rgba(0, 0, 0, 0.06);
            min-height: 210px;
        }

        .info-card-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: #e4f1fb;
            color: #17669a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 16px;
        }

        .info-card h3 {
            color: #123f6d;
            margin-bottom: 10px;
            font-size: 19px;
        }

        .info-card p {
            color: #667085;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 0;
        }

        .info-note {
            margin-top: 14px;
            color: #17669a;
            font-size: 13px;
            font-weight: bold;
        }

        /* =========================
           CTA
        ========================= */

        .cta {
            margin: 0 7% 70px;
            background: #123f6d;
            color: white;
            border-radius: 18px;
            padding: 45px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .cta h2 {
            margin-bottom: 10px;
            font-size: 28px;
        }

        .cta p {
            color: #d9e8f5;
            line-height: 1.5;
        }

        .cta-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .cta-button {
            padding: 13px 20px;
            border-radius: 8px;
            font-weight: bold;
            background: #f5c400;
            color: #123f6d;
        }

        .cta-button.secondary {
            background: white;
            color: #123f6d;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #0c3155;
            color: white;
            padding: 40px 7% 25px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 30px;
        }

        .footer-content h3 {
            margin-bottom: 13px;
        }

        .footer-content p {
            color: #cbd9e6;
            line-height: 1.6;
            font-size: 14px;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 9px;
        }

        .footer-links span {
            color: #cbd9e6;
            font-size: 14px;
            cursor: default;
            user-select: none;
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.15);
            padding-top: 20px;
            text-align: center;
            color: #cbd9e6;
            font-size: 13px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1000px) {
            .nav-menu {
                gap: 13px;
            }

            .nav-menu a {
                font-size: 12px;
            }

            .service-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .info-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 12px 5%;
                flex-direction: row;
                gap: 12px;
            }

            .brand-text h1 {
                font-size: 19px;
            }

            .brand-text span {
                font-size: 10px;
            }

            .nav-menu {
                width: auto;
                justify-content: flex-end;
                flex-wrap: nowrap;
            }

            .login-button {
                padding: 9px 12px;
                white-space: nowrap;
                font-size: 12px !important;
            }

            .hero {
                padding: 60px 6%;
            }

            .hero h3 {
                font-size: 20px;
            }

            .search-box {
                flex-direction: column;
            }

            .search-box button {
                padding: 14px;
            }

            .services-section {
                margin-top: 0;
                padding: 35px 6%;
            }

            .service-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .cta {
                margin: 0 6% 50px;
                padding: 30px;
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 450px) {
            .service-grid {
                grid-template-columns: 1fr;
            }

            .hero h2 {
                font-size: 45px;
            }
        }
        
/* =========================
   BERITA ACARA PUBLIK
========================= */
.berita-publik {
    padding: 45px 7% 60px;
    background: #f7faff;
}

.berita-publik-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 22px;
    margin-top: 30px;
}

.berita-publik-card {
    min-width: 0;
    background: #ffffff;
    border: 1px solid #e4eaf2;
    border-radius: 14px;
    padding: 24px;
    box-shadow: 0 5px 18px rgba(18, 63, 109, 0.07);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    overflow-wrap: anywhere;
}

.berita-publik-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(18, 63, 109, 0.12);
}

.berita-publik-card small {
    display: block;
    color: #17669a;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 14px;
}

.berita-publik-card h3 {
    color: #123f6d;
    font-size: 19px;
    line-height: 1.5;
    margin: 0 0 12px;
}

.berita-publik-card p {
    color: #667085;
    font-size: 13px;
    line-height: 1.6;
    margin: 0 0 12px;
}

.berita-publik-isi {
    color: #526174;
    font-size: 14px;
    line-height: 1.8;
    white-space: pre-line;
    overflow-wrap: anywhere;
}

.berita-publik-card a {
    display: inline-block;
    margin-top: 18px;
    color: #17669a;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
}

.berita-publik-card a:hover {
    color: #0b4c78;
    text-decoration: underline;
}

.berita-publik-grid > p {
    grid-column: 1 / -1;
    padding: 25px;
    text-align: center;
    color: #667085;
    background: #ffffff;
    border: 1px solid #e4eaf2;
    border-radius: 12px;
}

@media (max-width: 1000px) {
    .berita-publik-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 700px) {
    .berita-publik {
        padding: 35px 6% 45px;
    }

    .berita-publik-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }

    .berita-publik-card {
        padding: 20px;
    }

    .berita-publik-card h3 {
        font-size: 17px;
    }
}
    </style>
</head>

<body>

    {{-- =========================
         NAVBAR
    ========================== --}}
   
<header class="navbar">
    <a href="{{ url('/') }}" class="brand">
        <div class="brand-logo">
    <img
        src="{{ asset('images/logo-sulawesi-tengah.png') }}"
        alt="Lambang Provinsi Sulawesi Tengah"
    >
</div>

        <div class="brand-text">
            <h1 style="color: #FFFFFF !important;">Si Cantik</h1>
            <span style="color: #F5F5F3 !important;">
                Dinas Energi dan Sumber Daya Mineral
            </span>
        </div>
    </a>

    <nav class="nav-menu">
        <a href="{{ url('/admin/informasi') }}" class="login-button">
            Login Admin
        </a>
    </nav>
</header>


    {{-- =========================
         HERO
    ========================== --}}
    <main>
        
<section class="hero-section" id="beranda">
    <div class="hero-slides" aria-hidden="true">
        <div class="hero-slide active"
             style="background-image: url('{{ asset('images/hero-esdm-1.jpeg') }}')"></div>
        <div class="hero-slide"
             style="background-image: url('{{ asset('images/hero-esdm-2.jpeg') }}')"></div>
        <div class="hero-slide"
             style="background-image: url('{{ asset('images/hero-esdm-3.jpeg') }}')"></div>
    </div>

    <div class="hero-shade"></div>

    <div class="container hero-inner">
        <div class="hero-content">
            <div class="eyebrow">
                <span class="eyebrow-dot"></span>
                DINAS ENERGI DAN SUMBER DAYA MINERAL
            </div>

        <h1 style="color: #FFFFFF !important;">
            SICANTIK
            <span style="color: #FFFFFF !important;">
                  Untuk Pelayanan Publik.
             </span>
        </h1>
        
            <p>
                Sistem Informasi Cepat, Akurat, Transparan, Inovatif
                dan Kolaboratif. Akses informasi dan layanan ESDM
                Provinsi Sulawesi Tengah dengan mudah secara online.
            </p>

            
<div class="hero-address">
    <span class="hero-address-icon"></span>
    <span>
        Jl. Sam Ratulangi No. 25, Besusu Bar., Kec. Palu Tim.,
        Kota Palu, Sulawesi Tengah 94118
    </span>
</div>

            

            <div class="hero-actions">
                <a href="#dashboard" class="btn btn-primary btn-lg">
                    Jelajahi Layanan
                </a>
                <a href="{{ route('information.index') }}"
                   class="btn btn-outline-light btn-lg">
                    Lihat Informasi
                </a>
            </div>
        </div>
    </div>
</section>

        {{-- =========================
             LAYANAN CEPAT
        ========================== --}}
        <section class="services-section" id="dashboard">

            <div class="service-grid">

                {{-- Informasi --}}
                <a
                    href="{{ route('information.index') }}"
                    class="service-card blue"
                >
                    <div class="service-icon">
                        ℹ
                    </div>

                    <h3>
                        Informasi
                    </h3>

                    <p>
                        Berita, informasi<br>
                        dan ESDM
                    </p>
                </a>


                {{-- Layanan --}}
                <a
                    href="{{ route('layanan-online.index') }}"
                    class="service-card blue-dark"
                >
                    <div class="service-icon">
                        ☰
                    </div>

                    <h3>
                        Layanan
                    </h3>

                    <p>
                        Permohonan<br>
                        layanan online
                    </p>
                </a>


                {{-- Bantuan --}}
                <a
                    href="{{ route('pengajuan-bantuan.create') }}"
                    class="service-card green"
                >
                    <div class="service-icon">
                        ⚡
                    </div>

                    <h3>
                        Bantuan Listrik
                    </h3>

                    <p>
                        Pengajuan bantuan<br>
                        listrik masyarakat
                    </p>
                </a>


                {{-- Cek Status --}}
                <a
                    href="{{ route('pengajuan-bantuan.cek-status') }}"
                    class="service-card orange"
                >
                    <div class="service-icon">
                        ⚙
                    </div>

                    <h3>
                        Cek Status
                    </h3>

                    <p>
                        Pantau status<br>
                        pengajuan
                    </p>
                </a>


                {{-- Pengaduan --}}
                <a
                    href="{{ route('pengaduan.create') }}"
                    class="service-card red"
                >
                    <div class="service-icon">
                        !
                    </div>

                    <h3>
                        Pengaduan
                    </h3>

                    <p>
                        Aduan &<br>
                        konsultasi masyarakat
                    </p>
                </a>

            </div>

        </section>

        {{-- =========================
     BERITA ACARA TERBARU
========================== --}}
<section class="berita-publik">
    <div class="section-heading">
        <span>INFORMASI RESMI ESDM</span>
        <h2>Berita Acara Terbaru</h2>
        <p>Baca berita acara dan informasi kegiatan ESDM Sulawesi Tengah.</p>
    </div>

    <div class="berita-publik-grid">
        @forelse ($beritaAcaras as $berita)
            <article class="berita-publik-card">
                <small>
                    📄 Berita Acara
                    @if ($berita->tanggal_kegiatan)
                        · {{ \Carbon\Carbon::parse($berita->tanggal_kegiatan)->format('d M Y') }}
                    @endif
                </small>

                <h3>{{ $berita->judul }}</h3>

                @if ($berita->nomor_berita_acara)
                    <p>Nomor: {{ $berita->nomor_berita_acara }}</p>
                @endif

                <div class="berita-publik-isi">
                    {{ $berita->isi_berita_acara ?: $berita->deskripsi }}
                </div>

                @if ($berita->dokumen_pdf)
                    <a
                        href="{{ asset('storage/' . $berita->dokumen_pdf) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Baca dokumen PDF →
                    </a>
                @endif
            </article>
        @empty
            <p>Belum ada berita acara yang dipublikasikan.</p>
        @endforelse
    </div>
</section>

        {{-- =========================
             INFORMASI & PANDUAN
        ========================== --}}
        <section class="info-section">

            <div class="section-heading">

                <span>
                    INFORMASI &amp; PANDUAN
                </span>

                <h2>
                    Panduan Menggunakan Si Cantik
                </h2>

                <p>
                    Informasi singkat untuk membantu masyarakat
                    menggunakan layanan Si Cantik dengan mudah.
                </p>

            </div>


            <div class="info-grid">

                <div class="info-card">

                    <div class="info-card-icon">
                        1
                    </div>

                    <h3>
                        Panduan Pengajuan
                    </h3>

                    <p>
                        Pilih layanan yang dibutuhkan pada menu utama,
                        kemudian ikuti formulir dan petunjuk pengajuan
                        yang tersedia sampai proses selesai.
                    </p>

                    <div class="info-note">
                        Siapkan data sebelum mengajukan.
                    </div>

                </div>


                <div class="info-card">

                    <div class="info-card-icon">
                        ✓
                    </div>

                    <h3>
                        Persyaratan Layanan
                    </h3>

                    <p>
                        Pastikan data diri, dokumen pendukung, dan
                        persyaratan lainnya sudah disiapkan sesuai
                        layanan yang akan diajukan.
                    </p>

                    <div class="info-note">
                        Periksa kembali dokumen sebelum dikirim.
                    </div>

                </div>


                <div class="info-card">

                    <div class="info-card-icon">
                        ?
                    </div>

                    <h3>
                        Butuh Bantuan?
                    </h3>

                    <p>
                        Jika mengalami kendala saat menggunakan
                        Si Cantik, gunakan menu Pengaduan untuk
                        menyampaikan pertanyaan, aduan, atau konsultasi.
                    </p>

                    <div class="info-note">
                        Sampaikan kendala melalui menu Pengaduan.
                    </div>

                </div>

            </div>

        </section>


        {{-- =========================
             CTA
        ========================== --}}
        <section class="cta">

            <div>

                <h2>
                    Sudah Mengajukan Permohonan?
                </h2>

                <p>
                    Cek perkembangan pengajuan menggunakan
                    nomor pengajuan yang telah diberikan.
                </p>

            </div>

            <div class="cta-buttons">

                <a
                    href="{{ route('pengajuan-bantuan.cek-status') }}"
                    class="cta-button"
                >
                    Cek Status
                </a>

            </div>

        </section>

    </main>


    {{-- =========================
         FOOTER
    ========================== --}}
    <footer id="kontak">

        <div class="footer-content">

            <div>

                <h3>
                    Si Cantik
                </h3>

                <p>
                    Sistem Informasi Cepat, Akurat,
                    Transparan, Inovatif dan Kolaboratif.
                </p>

                <p>
                    Dinas Energi dan Sumber Daya Mineral
                    Provinsi Sulawesi Tengah.
                </p>

            </div>


            <div>

                <h3>
                    Menu
                </h3>

                <div class="footer-links">

                    <span>Beranda</span>
                    <span>Informasi</span>
                    <span>Layanan Online</span>
                    <span>Pengaduan</span>

                </div>

            </div>


            <div>

                <h3>
                    Pengajuan
                </h3>

                <div class="footer-links">

                    <span>Bantuan Listrik</span>
                    <span>Cek Status</span>
                    <span>Layanan Online</span>

                </div>

            </div>

        </div>


        <div class="copyright">

            © {{ date('Y') }} Si Cantik -
            Dinas Energi dan Sumber Daya Mineral
            Provinsi Sulawesi Tengah

        </div>

    </footer>
    <script src="{{ asset('js/desdm-ui.js') }}" defer></script>
</body>
</html>
