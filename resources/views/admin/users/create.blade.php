powershell -Command "$c=@'
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User - SiCantik ESDM</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #172033;
        }

        .header {
            background: #1769e0;
            color: white;
            padding: 22px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
            font-size: 26px;
        }

        .header p {
            margin: 5px 0 0;
            font-size: 15px;
        }

        .btn {
            display: inline-block;
            padding: 11px 18px;
            border-radius: 7px;
            text-decoration: none;
            border: 0;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-secondary {
            background: white;
            color: #1769e0;
        }

        .btn-primary {
            background: #1769e0;
            color: white;
        }

        .container {
            max-width: 900px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 18px rgba(0,0,0,.08);
        }

        .card h2 {
            margin-top: 0;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        input,
        select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ccd5e2;
            border-radius: 7px;
            font-size: 15px;
            outline: none;
        }

        input:focus,
        select:focus {
            border-color: #1769e0;
        }

        .error {
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
        }

        .alert {
            background: #fff1f1;
            color: #b42318;
            border: 1px solid #f5c2c7;
            padding: 14px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 25px;
        }

        .btn-cancel {
            background: #e9edf3;
            color: #344054;
        }
    </style>
</head>

<body>

<div class="header">
    <div>
        <h1>Tambah User</h1>
        <p>Menambahkan administrator baru SiCantik ESDM</p>
    </div>

    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
        ← Kembali
    </a>
</div>

<div class="container">

    <div class="card">

        <h2>Form Tambah Administrator</h2>

        @if ($errors->any())
            <div class="alert">
                <strong>Terdapat kesalahan:</strong>
                <ul style="margin-bottom:0;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nama Lengkap</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Masukkan nama administrator"
                    required
                >

                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="contoh@esdm.go.id"
                    required
                >

                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="role">Role Administrator</label>

                <select id="role" name="role" required>
                    <option value="">-- Pilih Role --</option>

                    <option value="super_admin" {{ old('role') == 'super_admin' ? 'selected' : '' }}>
                        Super Admin
                    </option>

                    <option value="admin_informasi" {{ old('role') == 'admin_informasi' ? 'selected' : '' }}>
                        Admin Informasi
                    </option>

                    <option value="admin_pengaduan" {{ old('role') == 'admin_pengaduan' ? 'selected' : '' }}>
                        Admin Pengaduan
                    </option>

                    <option value="admin_bantuan" {{ old('role') == 'admin_bantuan' ? 'selected' : '' }}>
                        Admin Bantuan
                    </option>

                    <option value="admin_layanan" {{ old('role') == 'admin_layanan' ? 'selected' : '' }}>
                        Admin Layanan
                    </option>
                </select>

                @error('role')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Minimal 8 karakter"
                    required
                >

                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Ulangi password"
                    required
                >
            </div>

            <div class="actions">
                <a href="{{ route('admin.users.index') }}" class="btn btn-cancel">
                    Batal
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan User
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>
'@; Set-Content 'resources\views\admin\users\create.blade.php' $c -Encoding UTF8"