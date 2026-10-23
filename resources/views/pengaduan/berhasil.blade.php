<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaduan Berhasil | DESDM SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --charcoal: #292F36;
            --copper: #C66B32;
            --copper-dark: #AD5523;
            --copper-light: #FFF0E5;
            --off-white: #F5F5F3;
            --white: #FFFFFF;
            --text: #303943;
            --muted: #78818A;
            --border: #E2E4E5;
            --green: #258451;
            --green-light: #E7F8ED;
            --shadow: 0 22px 70px rgba(37, 42, 47, .13);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
            background: var(--off-white);
        }

        a, button {
            font: inherit;
            -webkit-tap-highlight-color: transparent;
        }

        /* NAVBAR */

        .navbar {
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(circle at 100% 0%, rgba(198,107,50,.2), transparent 24%),
                linear-gradient(110deg, #293139, #343C44);
            border-bottom: 1px solid rgba(255,255,255,.12);
        }

        .navbar::after {
            content: "";
            position: absolute;
            top: -90px;
            right: -40px;
            width: 145px;
            height: 200px;
            border: 2px solid rgba(223,133,77,.5);
            border-radius: 55% 0 55% 0;
            transform: rotate(35deg);
            pointer-events: none;
        }

        .nav-inner {
            width: min(1180px, calc(100% - 48px));
            min-height: 94px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
        }

        .brand-logo {
            width: 59px;
            height: 66px;
            object-fit: contain;
        }

        .brand-name {
            color: white;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .brand-subtitle {
            margin-top: 4px;
            color: rgba(255,255,255,.82);
            font-size: 12px;
            line-height: 1.6;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 44px;
            padding: 0 17px;
            border: 1px solid rgba(255,255,255,.75);
            border-radius: 11px;
            color: white;
            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
            transition: .2s ease;
        }

        .back-link:hover {
            color: var(--charcoal);
            background: white;
            transform: translateY(-2px);
        }

        /* BACKGROUND */

        .success-page {
            position: relative;
            isolation: isolate;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 94px);
            padding: 48px 20px 58px;
            overflow: hidden;
        }

        .success-page::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -2;
            background:
                linear-gradient(
                    120deg,
                    rgba(248,245,240,.91),
                    rgba(248,245,240,.83) 45%,
                    rgba(248,245,240,.95)
                ),
                url("{{ asset('images/hero-esdm-3.jpeg') }}") center / cover;
        }

        .success-page::after {
            content: "";
            position: absolute;
            top: -140px;
            left: -180px;
            z-index: -1;
            width: 350px;
            height: 600px;
            border: 1px solid rgba(198,107,50,.15);
            border-radius: 50%;
            box-shadow:
                18px 0 0 rgba(255,255,255,.18),
                36px 0 0 rgba(198,107,50,.06),
                54px 0 0 rgba(255,255,255,.14);
            pointer-events: none;
        }

        /* SUCCESS CARD */

        .success-card {
            position: relative;
            width: min(760px, 100%);
            padding: 43px 48px 38px;
            overflow: hidden;
            border: 1px solid rgba(220,220,216,.9);
            border-top: 4px solid var(--copper);
            border-radius: 21px;
            background: rgba(255,255,255,.96);
            box-shadow: var(--shadow);
            text-align: center;
            animation: reveal .65s ease both;
        }

        .success-card::before {
            content: "";
            position: absolute;
            top: -105px;
            right: -90px;
            width: 220px;
            height: 290px;
            border: 1px solid rgba(198,107,50,.12);
            border-radius: 50%;
            box-shadow:
                -14px 0 0 rgba(255,255,255,.2),
                -28px 0 0 rgba(198,107,50,.045);
            pointer-events: none;
        }

        .success-card::after {
            content: "";
            position: absolute;
            bottom: -190px;
            left: -100px;
            width: 260px;
            height: 300px;
            border: 1px solid rgba(198,107,50,.09);
            border-radius: 50%;
            pointer-events: none;
        }

        .card-content {
            position: relative;
            z-index: 1;
        }

        /* SUCCESS ICON */

        .success-icon-wrap {
            display: grid;
            place-items: center;
            width: 86px;
            height: 86px;
            margin: 0 auto 22px;
            border-radius: 50%;
            background: var(--green-light);
            animation: popIn .65s .15s ease both;
        }

        .success-icon {
            display: grid;
            place-items: center;
            width: 64px;
            height: 64px;
            border: 2px solid rgba(37,132,81,.18);
            border-radius: 50%;
            color: var(--green);
            font-size: 30px;
        }

        .success-eyebrow {
            margin-bottom: 10px;
            color: var(--copper-dark);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .success-title {
            color: var(--charcoal);
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(27px, 4vw, 36px);
            font-weight: 700;
            line-height: 1.25;
        }

        .success-description {
            max-width: 540px;
            margin: 13px auto 28px;
            color: #626B73;
            font-size: 13px;
            line-height: 1.9;
        }

        /* TRACKING NUMBER */

        .number-card {
            padding: 22px 20px;
            border: 1px solid #E8C7AF;
            border-radius: 13px;
            background:
                linear-gradient(135deg, rgba(255,246,239,.96), rgba(255,252,249,.98));
            text-align: center;
        }

        .number-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #7D7772;
            font-size: 11px;
            font-weight: 600;
        }

        .number-label i {
            color: var(--copper);
        }

        .complaint-number {
            margin-top: 10px;
            color: var(--charcoal);
            font-size: clamp(20px, 3.5vw, 30px);
            font-weight: 800;
            letter-spacing: .5px;
            overflow-wrap: anywhere;
        }

        .number-caption {
            margin-top: 7px;
            color: #89847F;
            font-size: 10px;
        }

        .number-actions {
            display: flex;
            justify-content: center;
            margin-top: 16px;
        }

        .copy-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 37px;
            padding: 0 14px;
            border: 1px solid #DFC2AF;
            border-radius: 9px;
            color: var(--copper-dark);
            background: white;
            cursor: pointer;
            font-size: 11px;
            font-weight: 700;
            transition: .2s ease;
        }

        .copy-btn:hover {
            background: var(--copper-light);
            border-color: var(--copper);
        }

        .copy-btn.copied {
            color: var(--green);
            border-color: #B8E4C7;
            background: var(--green-light);
        }

        /* INFORMATION BOX */

        .info-box {
            display: flex;
            align-items: flex-start;
            gap: 13px;
            margin-top: 19px;
            padding: 17px 18px;
            border: 1px solid #E9D8C4;
            border-radius: 12px;
            background: #FFF9F1;
            text-align: left;
        }

        .info-icon {
            display: grid;
            place-items: center;
            width: 35px;
            height: 35px;
            flex-shrink: 0;
            border-radius: 10px;
            color: var(--copper-dark);
            background: #FBE9D9;
            font-size: 14px;
        }

        .info-box h3 {
            margin-bottom: 5px;
            color: #75421F;
            font-size: 12px;
            font-weight: 800;
        }

        .info-box p {
            color: #756A60;
            font-size: 11px;
            line-height: 1.8;
        }

        /* NEXT STEPS */

        .next-steps {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 10px;
            margin-top: 23px;
            text-align: left;
        }

        .step {
            padding: 14px 12px;
            border: 1px solid #E8E8E5;
            border-radius: 11px;
            background: rgba(250,250,248,.85);
        }

        .step-icon {
            display: grid;
            place-items: center;
            width: 31px;
            height: 31px;
            margin-bottom: 10px;
            border-radius: 9px;
            color: var(--copper-dark);
            background: var(--copper-light);
            font-size: 12px;
        }

        .step h3 {
            margin-bottom: 5px;
            color: var(--charcoal);
            font-size: 11px;
            font-weight: 800;
        }

        .step p {
            color: #7C8287;
            font-size: 10px;
            line-height: 1.7;
        }

        /* BUTTONS */

        .actions {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 11px;
            margin-top: 27px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 47px;
            padding: 0 19px;
            border: 1px solid transparent;
            border-radius: 10px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            transition: transform .2s, background .2s, box-shadow .2s;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            color: white;
            background: linear-gradient(135deg, var(--copper), #B95822);
            box-shadow: 0 7px 18px rgba(177,85,34,.2);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #B75A25, #984619);
            box-shadow: 0 10px 23px rgba(177,85,34,.25);
        }

        .btn-secondary {
            color: var(--charcoal);
            border-color: #D8DCE0;
            background: white;
        }

        .btn-secondary:hover {
            background: #F1F2F2;
        }

        .footer-note {
            margin-top: 24px;
            color: #999DA1;
            font-size: 10px;
            line-height: 1.7;
        }

        /* FOOTER */

        .page-footer {
            padding: 17px 24px;
            color: rgba(255,255,255,.72);
            background: var(--charcoal);
            font-size: 10px;
        }

        .page-footer-inner {
            width: min(1180px, 100%);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }

        .page-footer strong {
            color: white;
        }

        /* ANIMATION */

        @keyframes reveal {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes popIn {
            from {
                opacity: 0;
                transform: scale(.75);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
            }
        }

        /* RESPONSIVE */

        @media (max-width: 600px) {
            .nav-inner {
                width: calc(100% - 28px);
                min-height: 78px;
                gap: 10px;
            }

            .brand {
                gap: 10px;
            }

            .brand-logo {
                width: 43px;
                height: 51px;
            }

            .brand-name {
                font-size: 16px;
            }

            .brand-subtitle {
                max-width: 210px;
                font-size: 9px;
            }

            .back-link {
                width: 39px;
                min-height: 39px;
                padding: 0;
                font-size: 0;
            }

            .back-link i {
                font-size: 14px;
            }

            .success-page {
                min-height: auto;
                padding: 27px 13px 32px;
            }

            .success-card {
                padding: 30px 18px 25px;
                border-radius: 16px;
            }

            .success-icon-wrap {
                width: 72px;
                height: 72px;
                margin-bottom: 19px;
            }

            .success-icon {
                width: 55px;
                height: 55px;
                font-size: 24px;
            }

            .success-eyebrow {
                font-size: 9px;
                letter-spacing: 1.5px;
            }

            .success-title {
                font-size: 27px;
            }

            .success-description {
                margin: 11px auto 23px;
                font-size: 12px;
            }

            .number-card {
                padding: 19px 12px;
            }

            .complaint-number {
                font-size: clamp(17px, 5vw, 24px);
                letter-spacing: 0;
            }

            .info-box {
                padding: 14px 12px;
                gap: 10px;
            }

            .next-steps {
                grid-template-columns: 1fr;
                gap: 9px;
            }

            .step {
                display: grid;
                grid-template-columns: 34px minmax(0, 1fr);
                column-gap: 10px;
                align-items: start;
                padding: 12px;
            }

            .step-icon {
                grid-row: span 2;
                margin-bottom: 0;
            }

            .step h3 {
                margin: 1px 0 4px;
            }

            .actions {
                display: grid;
                grid-template-columns: 1fr;
                margin-top: 22px;
            }

            .btn {
                width: 100%;
                min-height: 46px;
            }

            .page-footer-inner {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <header class="navbar">
        <div class="nav-inner">

            <a href="{{ url('/') }}" class="brand">
                <img
                    src="{{ asset('images/logo-sulawesi-tengah.png') }}"
                    alt="Logo Sulawesi Tengah"
                    class="brand-logo"
                >

                <div>
                    <div class="brand-name">DESDM-SICANTIK</div>
                    <div class="brand-subtitle">
                        Dinas Energi dan Sumber Daya Mineral<br>
                        Provinsi Sulawesi Tengah
                    </div>
                </div>
            </a>

            <a href="{{ url('/') }}" class="back-link">
                <i class="fa-solid fa-arrow-left"></i>
                Kembali ke Beranda
            </a>

        </div>
    </header>


    {{-- SUCCESS CONTENT --}}
    <main class="success-page">

        <section class="success-card">
            <div class="card-content">

                <div class="success-icon-wrap">
                    <div class="success-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                </div>

                <div class="success-eyebrow">
                    Laporan Anda Telah Tercatat
                </div>

                <h1 class="success-title">
                    Pengaduan Berhasil Dikirim!
                </h1>

                <p class="success-description">
                    Terima kasih telah berpartisipasi dalam meningkatkan
                    kualitas pelayanan Dinas ESDM Provinsi Sulawesi Tengah.
                    Pengaduan Anda telah berhasil diterima dan dapat ditinjau
                    oleh petugas terkait.
                </p>


                {{-- COMPLAINT NUMBER --}}
                <div class="number-card">

                    <div class="number-label">
                        <i class="fa-solid fa-ticket"></i>
                        Nomor Referensi Pengaduan
                    </div>

                    <div
                        class="complaint-number"
                        id="complaintNumber"
                    >{{ $pengaduan->nomor_pengaduan }}</div>

                    <div class="number-caption">
                        Simpan nomor ini untuk referensi pengaduan Anda.
                    </div>

                    <div class="number-actions">
                        <button
                            type="button"
                            class="copy-btn"
                            id="copyNumberBtn"
                        >
                            <i class="fa-regular fa-copy"></i>
                            <span>Salin Nomor Pengaduan</span>
                        </button>
                    </div>

                </div>


                {{-- INFORMATION --}}
                <div class="info-box">
                    <div class="info-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>

                    <div>
                        <h3>Informasi Penting</h3>
                        <p>
                            Simpan nomor pengaduan di atas sebagai bukti
                            pengiriman. Jika diperlukan tindak lanjut,
                            petugas dapat menghubungi Anda melalui nomor
                            kontak yang telah dicantumkan pada formulir.
                        </p>
                    </div>
                </div>


                {{-- NEXT STEPS --}}
                <div class="next-steps">

                    <div class="step">
                        <div class="step-icon">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>

                        <h3>01. Pengaduan Tercatat</h3>
                        <p>
                            Laporan telah diterima oleh sistem SICANTIK.
                        </p>
                    </div>

                    <div class="step">
                        <div class="step-icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <h3>02. Proses Peninjauan</h3>
                        <p>
                            Informasi pengaduan dapat ditinjau petugas terkait.
                        </p>
                    </div>

                    <div class="step">
                        <div class="step-icon">
                            <i class="fa-regular fa-comments"></i>
                        </div>

                        <h3>03. Tindak Lanjut</h3>
                        <p>
                            Pantau komunikasi melalui kontak yang Anda berikan.
                        </p>
                    </div>

                </div>


                {{-- ACTION BUTTONS --}}
                <div class="actions">

                    <a
                        href="{{ route('pengaduan.create') }}"
                        class="btn btn-primary"
                    >
                        <i class="fa-solid fa-plus"></i>
                        Buat Pengaduan Baru
                    </a>

                    <a
                        href="{{ url('/') }}"
                        class="btn btn-secondary"
                    >
                        <i class="fa-solid fa-house"></i>
                        Kembali ke Beranda
                    </a>

                </div>

                <p class="footer-note">
                    DESDM-SICANTIK · Layanan Pengaduan Masyarakat<br>
                    Dinas ESDM Provinsi Sulawesi Tengah
                </p>

            </div>
        </section>

    </main>


    {{-- FOOTER --}}
    <footer class="page-footer">
        <div class="page-footer-inner">
            <div>
                <strong>DESDM-SICANTIK</strong>
                &nbsp;·&nbsp; Layanan Pengaduan Masyarakat
            </div>

            <div>
                © {{ date('Y') }} Dinas ESDM Provinsi Sulawesi Tengah
            </div>
        </div>
    </footer>


    {{-- COPY NUMBER --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const copyButton = document.getElementById('copyNumberBtn');
            const numberElement = document.getElementById('complaintNumber');

            copyButton.addEventListener('click', async function () {
                const number = numberElement.textContent.trim();
                const originalHTML = copyButton.innerHTML;

                try {
                    if (navigator.clipboard && window.isSecureContext) {
                        await navigator.clipboard.writeText(number);
                    } else {
                        const temporaryInput = document.createElement('textarea');
                        temporaryInput.value = number;
                        temporaryInput.style.position = 'fixed';
                        temporaryInput.style.opacity = '0';

                        document.body.appendChild(temporaryInput);
                        temporaryInput.select();

                        const copied = document.execCommand('copy');
                        temporaryInput.remove();

                        if (!copied) {
                            throw new Error('Copy failed');
                        }
                    }

                    copyButton.classList.add('copied');
                    copyButton.innerHTML =
                        '<i class="fa-solid fa-check"></i>' +
                        '<span>Nomor Berhasil Disalin!</span>';

                    window.setTimeout(function () {
                        copyButton.classList.remove('copied');
                        copyButton.innerHTML = originalHTML;
                    }, 2200);

                } catch (error) {
                    window.prompt(
                        'Salin nomor pengaduan berikut:',
                        number
                    );
                }
            });
        });
    </script>

</body>
</html>