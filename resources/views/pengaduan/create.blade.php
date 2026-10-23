<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaduan Masyarakat | DESDM SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --charcoal: #292F36;
            --charcoal-light: #364049;
            --copper: #C66B32;
            --copper-dark: #AD5523;
            --copper-light: #FBE9DC;
            --white: #FFFFFF;
            --off-white: #F5F5F3;
            --text: #303943;
            --muted: #7C838B;
            --border: #D9DDE1;
            --shadow: 0 20px 65px rgba(37, 42, 47, .12);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
            background: var(--off-white);
            min-height: 100vh;
        }

        button,
        input,
        select,
        textarea {
            font: inherit;
        }

        button,
        label {
            -webkit-tap-highlight-color: transparent;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            position: relative;
            z-index: 10;
            min-height: 102px;
            background:
                radial-gradient(circle at 100% 0%, rgba(198,107,50,.18), transparent 24%),
                linear-gradient(110deg, #293139, #343C44);
            border-bottom: 1px solid rgba(255,255,255,.12);
            overflow: hidden;
        }

        .navbar::after {
            content: "";
            position: absolute;
            top: -95px;
            right: -40px;
            width: 145px;
            height: 210px;
            border: 2px solid rgba(223,133,77,.65);
            border-radius: 55% 0 55% 0;
            transform: rotate(35deg);
            pointer-events: none;
        }

        .nav-inner {
            width: min(1320px, calc(100% - 64px));
            min-height: 102px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 20px;
            text-decoration: none;
            min-width: 0;
        }

        .brand-logo {
            width: 72px;
            height: 78px;
            object-fit: contain;
            flex-shrink: 0;
            filter: drop-shadow(0 4px 7px rgba(0,0,0,.12));
        }

        .brand-name {
            font-family: 'DM Sans', sans-serif;
            color: #fff;
            font-size: clamp(21px, 2vw, 29px);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -.6px;
        }

        .brand-subtitle {
            margin-top: 4px;
            color: rgba(255,255,255,.92);
            font-size: 14px;
            line-height: 1.5;
        }

        .back-home {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 13px 19px;
            border: 1.5px solid rgba(255,255,255,.88);
            border-radius: 13px;
            color: #fff;
            background: rgba(255,255,255,.025);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            white-space: nowrap;
            transition: background .25s, color .25s, transform .25s;
        }

        .back-home:hover {
            background: #fff;
            color: var(--charcoal);
            transform: translateY(-2px);
        }

        /* =========================
           MAIN BACKGROUND
        ========================= */

        .complaint-page {
            position: relative;
            isolation: isolate;
            min-height: calc(100vh - 102px);
            overflow: hidden;
            background: #F6F3EF;
        }

        .complaint-page::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -3;
            background-image:
                linear-gradient(
                    90deg,
                    rgba(250,247,243,.82) 0%,
                    rgba(250,247,243,.78) 37%,
                    rgba(250,247,243,.94) 58%,
                    rgba(250,247,243,.98) 100%
                ),
                url("{{ asset('images/hero-esdm-3.jpeg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .complaint-page::after {
            content: "";
            position: absolute;
            top: -130px;
            left: -150px;
            width: 340px;
            height: 560px;
            z-index: -2;
            border: 2px solid rgba(198,107,50,.13);
            border-radius: 50%;
            box-shadow:
                15px 0 0 rgba(255,255,255,.12),
                30px 0 0 rgba(198,107,50,.07),
                45px 0 0 rgba(255,255,255,.10);
            pointer-events: none;
        }

        .page-inner {
            width: min(1320px, calc(100% - 64px));
            margin: auto;
            padding: 20px 0 36px;
            display: grid;
            grid-template-columns: minmax(0, .78fr) minmax(0, 1.22fr);
            gap: clamp(30px, 4vw, 64px);
            align-items: start;
        }

        /* =========================
           LEFT INTRODUCTION
        ========================= */

        .intro {
            padding-top: 40px;
            padding-bottom: 25px;
            animation: fadeSlide .8s ease both;
        }

        .eyebrow {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 14px;
            color: var(--copper-dark);
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .eyebrow-line {
            width: 41px;
            height: 6px;
            border-radius: 20px;
            background: var(--copper);
            flex-shrink: 0;
        }

        .intro h1 {
            max-width: 530px;
            color: #293640;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(42px, 4.3vw, 66px);
            font-weight: 700;
            line-height: .99;
            letter-spacing: -1.8px;
        }

        .intro h1 span {
            display: block;
        }

        .intro-description {
            max-width: 500px;
            margin-top: 20px;
            color: #454D55;
            font-size: 16px;
            line-height: 1.65;
        }

        .benefits {
            display: flex;
            flex-direction: column;
            gap: 19px;
            margin-top: 25px;
        }

        .benefit {
            display: grid;
            grid-template-columns: 82px minmax(0, 1fr);
            gap: 22px;
            align-items: center;
        }

        .benefit-icon {
            display: grid;
            place-items: center;
            width: 82px;
            height: 82px;
            border-radius: 50%;
            color: var(--copper-dark);
            background: rgba(255,236,221,.91);
            font-size: 31px;
            transition: transform .25s, background .25s, box-shadow .25s;
        }

        .benefit:hover .benefit-icon {
            transform: translateY(-4px) rotate(-4deg);
            background: #FFE3CE;
            box-shadow: 0 10px 24px rgba(198,107,50,.14);
        }

        .benefit h3 {
            margin-bottom: 5px;
            color: #2E3A44;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 21px;
            line-height: 1.3;
        }

        .benefit p {
            max-width: 320px;
            color: #535B63;
            font-size: 13px;
            line-height: 1.65;
        }

        .intro-note {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            max-width: 420px;
            margin-top: 25px;
            color: #636A70;
            font-size: 11px;
            line-height: 1.7;
        }

        .intro-note i {
            margin-top: 2px;
            color: var(--copper);
        }

        /* =========================
           FORM CARD
        ========================= */

        .form-card {
            position: relative;
            min-width: 0;
            margin-top: 0;
            overflow: hidden;
            border: 1px solid rgba(210,211,211,.9);
            border-top: 4px solid var(--copper);
            border-radius: 20px;
            background: rgba(255,255,255,.95);
            box-shadow: var(--shadow);
            animation: fadeSlide .8s .12s ease both;
        }

        .form-card::before {
            content: "";
            position: absolute;
            top: -70px;
            right: -70px;
            width: 210px;
            height: 280px;
            border: 1px solid rgba(198,107,50,.12);
            border-radius: 50%;
            box-shadow:
                -13px 0 0 rgba(255,255,255,.25),
                -26px 0 0 rgba(198,107,50,.055),
                -39px 0 0 rgba(255,255,255,.25);
            pointer-events: none;
        }

        .form-content {
            position: relative;
            z-index: 1;
            padding: 28px 34px 26px;
        }

        .form-header {
            display: flex;
            align-items: center;
            gap: 22px;
            margin-bottom: 24px;
        }

        .form-header-icon {
            display: grid;
            place-items: center;
            width: 70px;
            height: 70px;
            flex-shrink: 0;
            border-radius: 15px;
            background: #FFF3EA;
            color: var(--copper-dark);
            font-size: 32px;
        }

        .form-header h2 {
            color: #2D3740;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(22px, 2vw, 29px);
            line-height: 1.25;
            letter-spacing: -.6px;
        }

        .form-header p {
            margin-top: 5px;
            color: #59616A;
            font-size: 13px;
            line-height: 1.6;
        }

        .required-note {
            margin: -10px 0 18px;
            color: var(--muted);
            font-size: 11px;
        }

        .required {
            color: #D92D20;
        }

        /* ERROR MESSAGE */

        .error-summary {
            margin-bottom: 22px;
            padding: 14px 16px;
            border: 1px solid #F1C5C1;
            border-radius: 10px;
            background: #FFF4F2;
            color: #A52D24;
            font-size: 12px;
            line-height: 1.8;
        }

        .error-summary ul {
            margin: 6px 0 0 18px;
        }

        .field-error {
            display: block;
            margin-top: 6px;
            color: #B42318;
            font-size: 11px;
            line-height: 1.5;
        }

        .is-invalid {
            border-color: #D92D20 !important;
            background: #FFF9F8 !important;
        }

        /* FORM FIELDS */

        .field {
            min-width: 0;
            margin-bottom: 16px;
        }

        .field label,
        .field-label {
            display: block;
            margin-bottom: 7px;
            color: #2F3842;
            font-size: 13px;
            font-weight: 800;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap > i {
            position: absolute;
            top: 50%;
            left: 15px;
            z-index: 1;
            color: #394653;
            font-size: 15px;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .input-wrap.textarea-wrap > i {
            top: 17px;
            transform: none;
        }

        .field input,
        .field select,
        .field textarea {
            display: block;
            width: 100%;
            min-width: 0;
            border: 1px solid #CDD3D9;
            border-radius: 9px;
            outline: none;
            color: #303943;
            background: rgba(255,255,255,.83);
            font-size: 13px;
            transition: border-color .2s, box-shadow .2s, background .2s;
        }

        .field input,
        .field select {
            min-height: 47px;
            padding: 11px 14px;
        }

        .input-wrap input,
        .input-wrap select {
            padding-left: 46px;
        }

        .field textarea {
            min-height: 112px;
            padding: 13px 14px 13px 46px;
            resize: vertical;
            line-height: 1.65;
        }

        .field input::placeholder,
        .field textarea::placeholder {
            color: #91979D;
        }

        .field input:focus,
        .field select:focus,
        .field textarea:focus {
            border-color: var(--copper);
            background: #fff;
            box-shadow: 0 0 0 3px rgba(198,107,50,.12);
        }

        .field-help {
            margin-top: 6px;
            color: #838990;
            font-size: 11px;
            line-height: 1.6;
        }

        .field-help-row {
            display: flex;
            justify-content: space-between;
            gap: 12px;
        }

        #charCount {
            white-space: nowrap;
            color: #838990;
        }

        /* CATEGORY SELECT */

        .select-wrap {
            position: relative;
        }

        .select-wrap > i {
            position: absolute;
            top: 50%;
            left: 15px;
            color: #394653;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .select-wrap select {
            appearance: none;
            padding-left: 46px;
            padding-right: 42px;
            cursor: pointer;
        }

        .select-wrap .select-arrow {
            position: absolute;
            top: 50%;
            right: 15px;
            left: auto;
            color: #394653;
            transform: translateY(-50%);
        }

        /* UPLOAD */

        .upload-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
            margin-top: 2px;
        }

        .upload-field {
            min-width: 0;
        }

        .upload-field > label:first-child {
            display: block;
            margin-bottom: 7px;
            color: #2F3842;
            font-size: 13px;
            font-weight: 800;
        }

        .dropzone {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            min-height: 83px;
            padding: 13px;
            border: 1.5px dashed #C9C4BE;
            border-radius: 10px;
            background: rgba(255,248,243,.8);
            cursor: pointer;
            transition: border-color .2s, background .2s, transform .2s;
        }

        .dropzone:hover,
        .dropzone.dragging {
            border-color: var(--copper);
            background: #FFF0E5;
            transform: translateY(-2px);
        }

        .dropzone-icon {
            display: grid;
            place-items: center;
            width: 49px;
            height: 49px;
            flex-shrink: 0;
            border-radius: 12px;
            background: #FFF0E5;
            color: var(--copper-dark);
            font-size: 23px;
        }

        .dropzone-copy {
            min-width: 0;
            text-align: left;
        }

        .dropzone-copy strong {
            display: block;
            color: #343B42;
            font-size: 12px;
            font-weight: 600;
            line-height: 1.6;
        }

        .dropzone-copy span {
            display: block;
            margin-top: 2px;
            color: #92979C;
            font-size: 11px;
            line-height: 1.5;
        }

        .file-name {
            display: block;
            max-width: 100%;
            margin-top: 5px;
            color: var(--success, #287A52);
            font-size: 10px;
            font-weight: 700;
            overflow-wrap: anywhere;
        }

        .file-input {
            position: absolute;
            width: 1px;
            height: 1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            clip-path: inset(50%);
        }

        .file-help {
            margin-top: 7px;
            color: #858B91;
            font-size: 10.5px;
            line-height: 1.6;
        }

        /* FORM FOOTER */

        .form-divider {
            height: 1px;
            margin: 27px 0 17px;
            border: 0;
            background: #E1E3E4;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 14px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 11px;
            min-height: 49px;
            padding: 0 21px;
            border: 1px solid transparent;
            border-radius: 11px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 800;
            text-decoration: none;
            transition: background .2s, border-color .2s, color .2s, transform .2s, box-shadow .2s;
        }

        .btn-reset {
            border-color: #C9CFD5;
            background: #FAFAFA;
            color: #34404B;
        }

        .btn-reset:hover {
            border-color: #929BA3;
            background: #F0F1F2;
            transform: translateY(-1px);
        }

        .btn-submit {
            min-width: 204px;
            color: #fff;
            background: linear-gradient(135deg, #C66B32, #B95822);
            box-shadow: 0 7px 17px rgba(177,85,34,.19);
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #B75A25, #984619);
            box-shadow: 0 10px 22px rgba(177,85,34,.27);
            transform: translateY(-2px);
        }

        .btn-submit:disabled {
            opacity: .7;
            cursor: wait;
            transform: none;
        }

        /* FOOTER */

        .page-footer {
            padding: 18px 24px;
            background: var(--charcoal);
            color: rgba(255,255,255,.75);
            font-size: 11px;
        }

        .page-footer-inner {
            width: min(1320px, 100%);
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .page-footer strong {
            color: #fff;
        }

        /* ANIMATIONS */

        @keyframes fadeSlide {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
           TABLET
        ========================= */

        @media (max-width: 1050px) {
            .page-inner {
                grid-template-columns: minmax(0, .72fr) minmax(0, 1.28fr);
                gap: 26px;
            }

            .intro {
                padding-top: 30px;
            }

            .intro h1 {
                font-size: clamp(39px, 5vw, 53px);
            }

            .intro-description {
                font-size: 14px;
            }

            .benefit {
                grid-template-columns: 62px minmax(0, 1fr);
                gap: 15px;
            }

            .benefit-icon {
                width: 62px;
                height: 62px;
                font-size: 25px;
            }

            .benefit h3 {
                font-size: 18px;
            }

            .benefit p {
                font-size: 12px;
            }

            .form-content {
                padding: 25px 24px;
            }

            .form-header {
                gap: 14px;
            }

            .form-header-icon {
                width: 58px;
                height: 58px;
                font-size: 27px;
            }

            .upload-grid {
                gap: 12px;
            }

            .dropzone {
                gap: 9px;
                padding: 10px;
            }

            .dropzone-icon {
                width: 39px;
                height: 39px;
                font-size: 19px;
            }
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 760px) {
            .navbar,
            .nav-inner {
                min-height: 82px;
            }

            .nav-inner {
                width: calc(100% - 30px);
                gap: 12px;
            }

            .brand {
                gap: 11px;
            }

            .brand-logo {
                width: 48px;
                height: 57px;
            }

            .brand-name {
                font-size: 17px;
            }

            .brand-subtitle {
                max-width: 220px;
                font-size: 10px;
            }

            .back-home {
                width: 42px;
                height: 42px;
                padding: 0;
                border-radius: 10px;
                font-size: 0;
            }

            .back-home i {
                font-size: 16px;
            }

            .complaint-page {
                min-height: auto;
            }

            .complaint-page::before {
                background-attachment: scroll;
                background-image:
                    linear-gradient(rgba(250,247,243,.88), rgba(250,247,243,.94)),
                    url("{{ asset('images/hero-esdm-3.jpeg') }}");
                background-position: center;
            }

            .page-inner {
                width: calc(100% - 28px);
                padding: 32px 0 26px;
                grid-template-columns: 1fr;
                gap: 27px;
            }

            .intro {
                padding: 0 3px;
            }

            .eyebrow {
                font-size: 10px;
                letter-spacing: 1.2px;
                gap: 10px;
            }

            .eyebrow-line {
                width: 30px;
                height: 4px;
            }

            .intro h1 {
                font-size: clamp(42px, 11vw, 58px);
                letter-spacing: -1.2px;
            }

            .intro-description {
                margin-top: 15px;
                font-size: 13px;
            }

            .benefits {
                display: grid;
                grid-template-columns: 1fr;
                gap: 14px;
                margin-top: 21px;
            }

            .benefit {
                grid-template-columns: 53px minmax(0, 1fr);
                gap: 13px;
            }

            .benefit-icon {
                width: 53px;
                height: 53px;
                font-size: 22px;
            }

            .benefit h3 {
                margin-bottom: 3px;
                font-size: 17px;
            }

            .benefit p {
                font-size: 11.5px;
            }

            .intro-note {
                margin-top: 18px;
                font-size: 10.5px;
            }

            .form-card {
                border-radius: 15px;
            }

            .form-content {
                padding: 23px 18px 20px;
            }

            .form-header {
                align-items: flex-start;
                gap: 13px;
                margin-bottom: 23px;
            }

            .form-header-icon {
                width: 49px;
                height: 49px;
                border-radius: 12px;
                font-size: 23px;
            }

            .form-header h2 {
                font-size: 21px;
            }

            .form-header p {
                font-size: 11.5px;
            }

            .field {
                margin-bottom: 17px;
            }

            .field label,
            .field-label,
            .upload-field > label:first-child {
                font-size: 12px;
            }

            .field input,
            .field select {
                min-height: 46px;
                font-size: 12px;
            }

            .field textarea {
                min-height: 112px;
                font-size: 12px;
            }

            .upload-grid {
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .dropzone {
                min-height: 82px;
                justify-content: flex-start;
                padding: 13px;
            }

            .dropzone-icon {
                width: 46px;
                height: 46px;
                font-size: 21px;
            }

            .form-divider {
                margin: 23px 0 16px;
            }

            .form-actions {
                display: grid;
                grid-template-columns: 1fr 1.5fr;
                gap: 9px;
            }

            .btn {
                min-height: 46px;
                padding: 0 10px;
                gap: 7px;
                font-size: 11px;
            }

            .btn-submit {
                min-width: 0;
            }

            .page-footer-inner {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 370px) {
            .brand-subtitle {
                max-width: 165px;
                font-size: 9px;
            }

            .brand-name {
                font-size: 15px;
            }

            .form-content {
                padding-left: 14px;
                padding-right: 14px;
            }

            .form-actions {
                grid-template-columns: 1fr;
            }

            .btn {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important;
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

            <a href="{{ url('/') }}" class="back-home">
                <i class="fa-solid fa-arrow-left"></i>
                Kembali ke Beranda
            </a>

        </div>
    </header>


    {{-- MAIN PAGE --}}
    <main class="complaint-page">
        <div class="page-inner">

            {{-- LEFT INTRODUCTION --}}
            <section class="intro">

                <div class="eyebrow">
                    <span class="eyebrow-line"></span>
                    Suara Anda, Energi Perubahan
                </div>

                <h1>
                    <span>Pengaduan</span>
                    <span>Masyarakat</span>
                </h1>

                <p class="intro-description">
                    Sampaikan pengaduan, keluhan, atau laporan terkait
                    pelayanan Dinas Energi dan Sumber Daya Mineral
                    Provinsi Sulawesi Tengah. Kami berkomitmen untuk
                    mendengarkan dan menindaklanjuti setiap laporan Anda.
                </p>

                <div class="benefits">

                    <div class="benefit">
                        <div class="benefit-icon">
                            <i class="fa-regular fa-comments"></i>
                        </div>

                        <div>
                            <h3>Mudah &amp; Cepat</h3>
                            <p>
                                Sampaikan pengaduan secara online
                                dengan mudah tanpa harus datang langsung.
                            </p>
                        </div>
                    </div>

                    <div class="benefit">
                        <div class="benefit-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <div>
                            <h3>Aman &amp; Terpercaya</h3>
                            <p>
                                Informasi Anda digunakan untuk
                                mendukung proses tindak lanjut pengaduan.
                            </p>
                        </div>
                    </div>

                    <div class="benefit">
                        <div class="benefit-icon">
                            <i class="fa-solid fa-gear"></i>
                        </div>

                        <div>
                            <h3>Tindak Lanjut</h3>
                            <p>
                                Setiap pengaduan dapat ditinjau
                                oleh petugas sesuai kewenangannya.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="intro-note">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>
                        Isi formulir dengan informasi yang jelas dan benar
                        agar pengaduan lebih mudah ditelaah.
                    </span>
                </div>

            </section>


            {{-- RIGHT FORM CARD --}}
            <section class="form-card">
                <div class="form-content">

                    <div class="form-header">
                        <div class="form-header-icon">
                            <i class="fa-regular fa-file-lines"></i>
                        </div>

                        <div>
                            <h2>Form Pengaduan Masyarakat</h2>
                            <p>
                                Silakan isi data dengan lengkap dan benar
                                agar pengaduan dapat ditindaklanjuti.
                            </p>
                        </div>
                    </div>

                    <div class="required-note">
                        Kolom bertanda <span class="required">*</span> wajib diisi.
                    </div>


                    {{-- VALIDATION ERRORS --}}
                    @if ($errors->any())
                        <div class="error-summary" role="alert">
                            <strong>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                Pengaduan belum dapat dikirim.
                            </strong>

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form
                        id="pengaduanForm"
                        action="{{ route('pengaduan.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        @csrf

                        {{-- NAMA --}}
                        <div class="field">
                            <label for="nama_lengkap">
                                Nama Lengkap <span class="required">*</span>
                            </label>

                            <div class="input-wrap">
                                <i class="fa-regular fa-user"></i>

                                <input
                                    type="text"
                                    id="nama_lengkap"
                                    name="nama_lengkap"
                                    value="{{ old('nama_lengkap') }}"
                                    placeholder="Masukkan nama lengkap Anda"
                                    maxlength="255"
                                    autocomplete="name"
                                    class="@error('nama_lengkap') is-invalid @enderror"
                                    required
                                >
                            </div>

                            @error('nama_lengkap')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>


                        {{-- NOMOR HP --}}
                        <div class="field">
                            <label for="nomor_hp">
                                Nomor HP / WhatsApp <span class="required">*</span>
                            </label>

                            <div class="input-wrap">
                                <i class="fa-solid fa-phone"></i>

                                <input
                                    type="tel"
                                    id="nomor_hp"
                                    name="nomor_hp"
                                    value="{{ old('nomor_hp') }}"
                                    placeholder="Contoh: 081234567890"
                                    maxlength="20"
                                    autocomplete="tel"
                                    class="@error('nomor_hp') is-invalid @enderror"
                                    required
                                >
                            </div>

                            <div class="field-help">
                                Nomor ini digunakan untuk memberikan hasil
                                atau tanggapan atas pengaduan Anda.
                            </div>

                            @error('nomor_hp')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>


                        {{-- KATEGORI --}}
                        <div class="field">
                            <label for="kategori">
                                Kategori Pengaduan <span class="required">*</span>
                            </label>

                            <div class="select-wrap">
                                <i class="fa-solid fa-list-ul"></i>

                                <select
                                    id="kategori"
                                    name="kategori"
                                    class="@error('kategori') is-invalid @enderror"
                                    required
                                >
                                    <option value="">-- Pilih Kategori --</option>

                                    <option value="Pertambangan" {{ old('kategori') == 'Pertambangan' ? 'selected' : '' }}>
                                        Pertambangan
                                    </option>

                                    <option value="Energi" {{ old('kategori') == 'Energi' ? 'selected' : '' }}>
                                        Energi
                                    </option>

                                    <option value="Ketenagalistrikan" {{ old('kategori') == 'Ketenagalistrikan' ? 'selected' : '' }}>
                                        Ketenagalistrikan
                                    </option>

                                    <option value="Pelayanan" {{ old('kategori') == 'Pelayanan' ? 'selected' : '' }}>
                                        Pelayanan
                                    </option>

                                    <option value="Lingkungan" {{ old('kategori') == 'Lingkungan' ? 'selected' : '' }}>
                                        Lingkungan
                                    </option>

                                    <option value="Lainnya" {{ old('kategori') == 'Lainnya' ? 'selected' : '' }}>
                                        Lainnya
                                    </option>
                                </select>

                                <i class="fa-solid fa-chevron-down select-arrow"></i>
                            </div>

                            @error('kategori')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>


                        {{-- JUDUL --}}
                        <div class="field">
                            <label for="judul">
                                Judul Pengaduan <span class="required">*</span>
                            </label>

                            <div class="input-wrap">
                                <i class="fa-regular fa-file-lines"></i>

                                <input
                                    type="text"
                                    id="judul"
                                    name="judul"
                                    value="{{ old('judul') }}"
                                    placeholder="Masukkan judul pengaduan"
                                    maxlength="255"
                                    class="@error('judul') is-invalid @enderror"
                                    required
                                >
                            </div>

                            @error('judul')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>


                        {{-- ISI PENGADUAN --}}
                        <div class="field">
                            <label for="isi_pengaduan">
                                Isi Pengaduan <span class="required">*</span>
                            </label>

                            <div class="input-wrap textarea-wrap">
                                <i class="fa-regular fa-message"></i>

                                <textarea
                                    id="isi_pengaduan"
                                    name="isi_pengaduan"
                                    maxlength="1000"
                                    placeholder="Tuliskan pengaduan atau keluhan Anda secara lengkap..."
                                    class="@error('isi_pengaduan') is-invalid @enderror"
                                    required
                                >{{ old('isi_pengaduan') }}</textarea>
                            </div>

                            <div class="field-help field-help-row">
                                <span>Jelaskan kronologi dan lokasi kejadian jika diketahui.</span>
                                <span id="charCount">0/1000 karakter</span>
                            </div>

                            @error('isi_pengaduan')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>


                        {{-- UPLOAD FILES --}}
                        <div class="upload-grid">

                            {{-- FOTO --}}
                            <div class="upload-field">
                                <label for="foto">
                                    Foto Pendukung
                                </label>

                                <label
                                    class="dropzone"
                                    id="fotoDropzone"
                                    for="foto"
                                >
                                    <span class="dropzone-icon">
                                        <i class="fa-regular fa-image"></i>
                                    </span>

                                    <span class="dropzone-copy">
                                        <strong id="fotoTitle">
                                            Klik untuk memilih file
                                        </strong>
                                        <span id="fotoSubtitle">
                                            atau seret dan lepas di sini
                                        </span>
                                        <span class="file-name" id="fotoName"></span>
                                    </span>

                                    <input
                                        class="file-input"
                                        type="file"
                                        id="foto"
                                        name="foto"
                                        accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                                    >
                                </label>

                                <div class="file-help">
                                    Format JPG, JPEG, atau PNG. Maksimal 2 MB.
                                </div>

                                @error('foto')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>


                            {{-- DOKUMEN --}}
                            <div class="upload-field">
                                <label for="dokumen">
                                    Dokumen Pendukung
                                </label>

                                <label
                                    class="dropzone"
                                    id="dokumenDropzone"
                                    for="dokumen"
                                >
                                    <span class="dropzone-icon">
                                        <i class="fa-regular fa-file-lines"></i>
                                    </span>

                                    <span class="dropzone-copy">
                                        <strong id="dokumenTitle">
                                            Klik untuk memilih file
                                        </strong>
                                        <span id="dokumenSubtitle">
                                            atau seret dan lepas di sini
                                        </span>
                                        <span class="file-name" id="dokumenName"></span>
                                    </span>

                                    <input
                                        class="file-input"
                                        type="file"
                                        id="dokumen"
                                        name="dokumen"
                                        accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                    >
                                </label>

                                <div class="file-help">
                                    Format PDF, DOC, atau DOCX. Maksimal 5 MB.
                                </div>

                                @error('dokumen')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        {{-- BUTTONS --}}
                        <hr class="form-divider">

                        <div class="form-actions">
                            <button
                                type="reset"
                                class="btn btn-reset"
                                id="resetBtn"
                            >
                                <i class="fa-solid fa-rotate-left"></i>
                                Reset
                            </button>

                            <button
                                type="submit"
                                class="btn btn-submit"
                                id="submitBtn"
                            >
                                <i class="fa-regular fa-paper-plane"></i>
                                <span id="submitText">Kirim Pengaduan</span>
                            </button>
                        </div>

                    </form>
                </div>
            </section>

        </div>
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


    {{-- INTERACTIVE FEATURES --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('pengaduanForm');
            const textarea = document.getElementById('isi_pengaduan');
            const charCount = document.getElementById('charCount');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const resetBtn = document.getElementById('resetBtn');

            // Character counter
            function updateCharCount() {
                charCount.textContent =
                    textarea.value.length + '/1000 karakter';
            }

            textarea.addEventListener('input', updateCharCount);
            updateCharCount();


            // File upload validation and preview
            function setupUpload(config) {
                const input = document.getElementById(config.input);
                const zone = document.getElementById(config.zone);
                const title = document.getElementById(config.title);
                const subtitle = document.getElementById(config.subtitle);
                const fileName = document.getElementById(config.name);

                function clearFile() {
                    input.value = '';
                    title.textContent = 'Klik untuk memilih file';
                    subtitle.textContent = 'atau seret dan lepas di sini';
                    fileName.textContent = '';
                }

                function processFile(file) {
                    if (!file) {
                        clearFile();
                        return;
                    }

                    const extension = file.name
                        .split('.')
                        .pop()
                        .toLowerCase();

                    if (!config.extensions.includes(extension)) {
                        alert(
                            'Format file tidak sesuai. Format yang diperbolehkan: ' +
                            config.extensions.join(', ').toUpperCase()
                        );
                        clearFile();
                        return;
                    }

                    if (file.size > config.maxSize) {
                        alert(
                            'Ukuran file terlalu besar. Maksimal ' +
                            config.maxLabel + '.'
                        );
                        clearFile();
                        return;
                    }

                    title.textContent = 'File berhasil dipilih';
                    subtitle.textContent = 'Klik kembali untuk mengganti file';
                    fileName.textContent = '✓ ' + file.name;
                }

                input.addEventListener('change', function () {
                    processFile(input.files[0]);
                });

                ['dragenter', 'dragover'].forEach(function (eventName) {
                    zone.addEventListener(eventName, function (event) {
                        event.preventDefault();
                        zone.classList.add('dragging');
                    });
                });

                ['dragleave', 'drop'].forEach(function (eventName) {
                    zone.addEventListener(eventName, function (event) {
                        event.preventDefault();
                        zone.classList.remove('dragging');
                    });
                });

                zone.addEventListener('drop', function (event) {
                    const files = event.dataTransfer.files;

                    if (!files || !files.length) {
                        return;
                    }

                    const file = files[0];

                    try {
                        const transfer = new DataTransfer();
                        transfer.items.add(file);
                        input.files = transfer.files;
                        processFile(file);
                    } catch (error) {
                        alert('Silakan pilih file melalui tombol unggah.');
                    }
                });
            }

            setupUpload({
                input: 'foto',
                zone: 'fotoDropzone',
                title: 'fotoTitle',
                subtitle: 'fotoSubtitle',
                name: 'fotoName',
                maxSize: 2 * 1024 * 1024,
                maxLabel: '2 MB',
                extensions: ['jpg', 'jpeg', 'png']
            });

            setupUpload({
                input: 'dokumen',
                zone: 'dokumenDropzone',
                title: 'dokumenTitle',
                subtitle: 'dokumenSubtitle',
                name: 'dokumenName',
                maxSize: 5 * 1024 * 1024,
                maxLabel: '5 MB',
                extensions: ['pdf', 'doc', 'docx']
            });


            // Reset form and file previews
            resetBtn.addEventListener('click', function () {
                window.setTimeout(function () {
                    updateCharCount();

                    [
                        {
                            title: 'fotoTitle',
                            subtitle: 'fotoSubtitle',
                            name: 'fotoName'
                        },
                        {
                            title: 'dokumenTitle',
                            subtitle: 'dokumenSubtitle',
                            name: 'dokumenName'
                        }
                    ].forEach(function (item) {
                        document.getElementById(item.title).textContent =
                            'Klik untuk memilih file';

                        document.getElementById(item.subtitle).textContent =
                            'atau seret dan lepas di sini';

                        document.getElementById(item.name).textContent = '';
                    });

                    document.querySelectorAll('.is-invalid').forEach(function (element) {
                        element.classList.remove('is-invalid');
                    });
                }, 0);
            });


            // Prevent accidental double submission
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    return;
                }

                submitBtn.disabled = true;
                submitText.textContent = 'Mengirim...';
            });
        });
    </script>

</body>
</html>