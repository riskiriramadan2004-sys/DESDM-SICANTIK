<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin | Si Cantik</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background:
                linear-gradient(
                    135deg,
                    #edf4fa 0%,
                    #f8fafc 50%,
                    #eaf2f8 100%
                );
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 20px;
            color: #173f65;
        }

        /* ================================
           CONTAINER
        ================================= */

        .login-wrapper {
            width: 100%;
            max-width: 520px;
        }

        /* ================================
           LOGIN CARD
        ================================= */

        .login-card {
            background: #ffffff;
            border-radius: 22px;
            padding: 48px 50px 42px;
            box-shadow:
                0 20px 50px rgba(15, 55, 90, 0.13),
                0 3px 10px rgba(15, 55, 90, 0.04);
            border: 1px solid #e4ebf2;
        }

        /* ================================
           LOGO
        ================================= */

        .logo {
            width: 88px;
            height: 88px;
            margin: 0 auto 22px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ffc400;
            color: #123f68;

            border-radius: 20px;

            font-size: 42px;
            font-weight: 800;

            box-shadow:
                0 8px 20px rgba(255, 196, 0, 0.25);
        }

        /* ================================
           TITLE
        ================================= */

        .title {
            text-align: center;

            font-size: 32px;
            font-weight: 750;

            color: #123f68;

            margin-bottom: 9px;
        }

        .subtitle {
            text-align: center;

            color: #6b7c8f;

            font-size: 15px;
            line-height: 1.6;

            margin-bottom: 34px;
        }

        /* ================================
           ALERT
        ================================= */

        .alert {
            padding: 13px 15px;
            border-radius: 9px;

            margin-bottom: 22px;

            font-size: 14px;
            line-height: 1.5;
        }

        .alert-error {
            background: #fff1f1;
            border: 1px solid #f0c2c2;
            color: #b42318;
        }

        .alert-success {
            background: #eefbf3;
            border: 1px solid #b7e4c7;
            color: #16713b;
        }

        /* ================================
           FORM
        ================================= */

        .form-group {
            margin-bottom: 23px;
        }

        .form-label {
            display: block;

            margin-bottom: 9px;

            color: #244b6d;

            font-size: 15px;
            font-weight: 650;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;

            left: 16px;
            top: 50%;

            transform: translateY(-50%);

            color: #71869a;

            font-size: 18px;

            pointer-events: none;
        }

        .form-input {
            width: 100%;
            height: 54px;

            padding: 0 16px 0 48px;

            border: 1px solid #d3dce6;
            border-radius: 10px;

            background: #ffffff;

            color: #243b53;

            font-size: 15px;

            outline: none;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease;
        }

        .form-input::placeholder {
            color: #9aa8b6;
        }

        .form-input:focus {
            border-color: #195789;

            box-shadow:
                0 0 0 4px rgba(25, 87, 137, 0.10);
        }

        /* ================================
           PASSWORD
        ================================= */

        .password-input {
            padding-right: 55px;
        }

        .toggle-password {
            position: absolute;

            right: 14px;
            top: 50%;

            transform: translateY(-50%);

            border: none;
            background: transparent;

            color: #718396;

            font-size: 18px;

            cursor: pointer;

            padding: 6px;
        }

        .toggle-password:hover {
            color: #164b79;
        }

        /* ================================
           OPTIONS
        ================================= */

        .options {
            display: flex;
            align-items: center;

            margin: 5px 0 25px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;

            color: #617487;

            font-size: 14px;

            cursor: pointer;
        }

        .remember input {
            width: 16px;
            height: 16px;

            accent-color: #155184;

            cursor: pointer;
        }

        /* ================================
           BUTTON
        ================================= */

        .login-button {
            width: 100%;
            height: 55px;

            border: none;
            border-radius: 10px;

            background: #164b79;
            color: #ffffff;

            font-size: 16px;
            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 7px 18px rgba(22, 75, 121, 0.18);

            transition:
                background 0.2s ease,
                transform 0.2s ease,
                box-shadow 0.2s ease;
        }

        .login-button:hover {
            background: #123d63;

            transform: translateY(-2px);

            box-shadow:
                0 10px 22px rgba(22, 75, 121, 0.23);
        }

        .login-button:active {
            transform: translateY(0);
        }

        /* ================================
           BACK LINK
        ================================= */

        .back-link {
            display: block;

            margin-top: 25px;

            text-align: center;

            color: #1b5c8f;

            text-decoration: none;

            font-size: 14px;
            font-weight: 600;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        /* ================================
           FOOTER
        ================================= */

        .footer-text {
            margin-top: 23px;

            text-align: center;

            color: #8997a5;

            font-size: 13px;

            line-height: 1.6;
        }

        /* ================================
           RESPONSIVE
        ================================= */

        @media (max-width: 600px) {

            body {
                padding: 20px 15px;
            }

            .login-card {
                padding: 38px 25px 32px;

                border-radius: 18px;
            }

            .logo {
                width: 78px;
                height: 78px;

                font-size: 36px;

                border-radius: 18px;
            }

            .title {
                font-size: 27px;
            }

            .subtitle {
                font-size: 14px;
            }

            .form-input {
                height: 52px;
            }

            .login-button {
                height: 53px;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        {{-- ================================
             LOGO
        ================================= --}}
        <div class="logo">
            E
        </div>


        {{-- ================================
             JUDUL
        ================================= --}}
        <h1 class="title">
            Admin Si Cantik
        </h1>

        <p class="subtitle">
            Sistem Informasi Dinas Energi dan Sumber Daya Mineral
        </p>


        {{-- ================================
             ERROR MESSAGE
        ================================= --}}
        @if ($errors->any())
            <div class="alert alert-error">
                {{ $errors->first() }}
            </div>
        @endif


        {{-- ================================
             SUCCESS MESSAGE
        ================================= --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        {{-- ================================
             LOGIN FORM
        ================================= --}}
        <form
            method="POST"
            action="{{ route('admin.login') }}"
        >

            @csrf


            {{-- EMAIL --}}
            <div class="form-group">

                <label
                    for="email"
                    class="form-label"
                >
                    Email Admin
                </label>

                <div class="input-wrapper">

                    <span class="input-icon">
                        ✉
                    </span>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-input"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email admin"
                        autocomplete="email"
                        required
                        autofocus
                    >

                </div>

            </div>


            {{-- PASSWORD --}}
            <div class="form-group">

                <label
                    for="password"
                    class="form-label"
                >
                    Password
                </label>

                <div class="input-wrapper">

                    <span class="input-icon">
                        🔒
                    </span>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-input password-input"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required
                    >

                    <button
                        type="button"
                        class="toggle-password"
                        id="togglePassword"
                        onclick="togglePasswordVisibility()"
                        aria-label="Tampilkan password"
                    >
                        👁
                    </button>

                </div>

            </div>


            {{-- INGAT SAYA --}}
            <div class="options">

                <label class="remember">

                    <input
                        type="checkbox"
                        name="remember"
                        value="1"
                    >

                    <span>
                        Ingat saya
                    </span>

                </label>

            </div>


            {{-- TOMBOL LOGIN --}}
            <button
                type="submit"
                class="login-button"
            >
                Masuk ke Panel Admin
            </button>

        </form>


        {{-- KEMBALI KE WEBSITE --}}
        <a
            href="{{ url('/') }}"
            class="back-link"
        >
            ← Kembali ke Website Si Cantik
        </a>

    </div>


    {{-- FOOTER --}}
    <div class="footer-text">

        Si Cantik &copy; {{ date('Y') }}

        <br>

        Dinas Energi dan Sumber Daya Mineral

    </div>

</div>


<script>

    function togglePasswordVisibility() {

        const password =
            document.getElementById('password');

        const button =
            document.getElementById('togglePassword');


        if (password.type === 'password') {

            password.type = 'text';

            button.textContent = '🙈';

            button.setAttribute(
                'aria-label',
                'Sembunyikan password'
            );

        } else {

            password.type = 'password';

            button.textContent = '👁';

            button.setAttribute(
                'aria-label',
                'Tampilkan password'
            );
        }
    }

</script>

</body>
</html>