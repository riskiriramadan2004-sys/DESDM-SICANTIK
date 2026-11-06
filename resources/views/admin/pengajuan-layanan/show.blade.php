
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Pengajuan Layanan | SICANTIK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --charcoal: #292F36;
            --copper: #C66B32;
            --white: #FFFFFF;
            --offwhite: #F5F5F3;
            --muted: #7B828A;
            --border: #E8E7E3;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--offwhite);
            color: var(--charcoal);
            font-family: 'DM Sans', sans-serif;
        }

        /* HEADER */

        .top-header {
            background: var(--charcoal);
            color: white;
            padding: 30px 5%;
            border-bottom: 4px solid var(--copper);
        }

        .header-inner {
            max-width: 1100px;
            margin: auto;
        }

        .header-label {
            color: #E9A477;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            margin-bottom: 9px;
        }

        .top-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            margin: 0;
        }

        .top-header p {
            color: #D1D5D8;
            font-size: 13px;
            margin: 8px 0 0;
        }

        /* CONTAINER */

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 30px auto 60px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--charcoal);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 22px;
            transition: .2s;
        }

        .back-button:hover {
            color: var(--copper);
        }

        /* ALERT */

        .alert {
            padding: 14px 17px;
            border-radius: 9px;
            margin-bottom: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .success {
            background: #E5F3E8;
            color: #28623A;
            border: 1px solid #C7E5CE;
        }

        .error {
            background: #FBE8E6;
            color: #9D3732;
            border: 1px solid #F1CECA;
        }

        /* CARD */

        .card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 28px;
            margin-bottom: 23px;
            box-shadow: 0 5px 20px rgba(41, 47, 54, .035);
        }

        .card-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 22px;
            flex-wrap: wrap;
        }

        .card-heading h2 {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            margin: 0;
            color: var(--charcoal);
        }

        .card-heading p {
            font-size: 12px;
            color: var(--muted);
            margin: 6px 0 0;
        }

        .section-label {
            color: var(--copper);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        /* APPLICATION ID */

        .application-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            background: #FAF7F3;
            border: 1px solid #F0E6DC;
            border-radius: 11px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .application-number-label {
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .application-number {
            font-size: 19px;
            font-weight: 800;
            color: var(--copper);
            word-break: break-word;
        }

        /* STATUS */

        .status {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 7px 13px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 800;
            white-space: nowrap;
        }

        .status-menunggu-verifikasi {
            background: #FFF3D9;
            color: #93630A;
        }

        .status-diverifikasi {
            background: #E1F4F4;
            color: #247777;
        }

        .status-disetujui {
            background: #E3F2E7;
            color: #347348;
        }

        .status-ditolak {
            background: #FBE7E6;
            color: #A6423D;
        }

        .status-default {
            background: #EEEEEB;
            color: #555D65;
        }

        /* DETAIL GRID */

        .detail-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0 25px;
        }

        .detail-item {
            padding: 15px 0;
            border-bottom: 1px solid var(--border);
            min-width: 0;
        }

        .detail-item.full {
            grid-column: 1 / -1;
        }

        .detail-label {
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .detail-value {
            color: var(--charcoal);
            font-size: 13px;
            font-weight: 600;
            line-height: 1.6;
            overflow-wrap: anywhere;
        }

        .detail-value.muted {
            color: var(--muted);
            font-weight: 400;
        }

        .current-status {
            margin-top: 3px;
        }

        /* NOTE */

        .note-box {
            background: #FAF7F3;
            border-left: 3px solid var(--copper);
            border-radius: 7px;
            padding: 16px;
            font-size: 13px;
            line-height: 1.7;
            color: var(--charcoal);
            white-space: pre-line;
        }

        /* FORM */

        .form-group {
            margin-bottom: 21px;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 9px;
            color: var(--charcoal);
        }

        .form-control {
            width: 100%;
            min-height: 45px;
            padding: 12px 14px;
            border: 1px solid #DCDDD9;
            border-radius: 8px;
            background: white;
            color: var(--charcoal);
            font-family: inherit;
            font-size: 13px;
            outline: none;
            transition: .2s;
        }

        .form-control:focus {
            border-color: var(--copper);
            box-shadow: 0 0 0 3px rgba(198, 107, 50, .10);
        }

        textarea.form-control {
            min-height: 125px;
            resize: vertical;
            line-height: 1.6;
        }

        .form-hint {
            color: var(--muted);
            font-size: 11px;
            margin-top: 7px;
        }

        /* BUTTON */

        .form-actions {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 19px;
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            transition: .2s;
        }

        .btn-primary {
            background: var(--copper);
            color: white;
        }

        .btn-primary:hover {
            background: #A95425;
        }

        .btn-secondary {
            background: #F0F0ED;
            color: var(--charcoal);
        }

        .btn-secondary:hover {
            background: #E5E4DF;
        }

        .footer-note {
            margin-top: 20px;
            color: var(--muted);
            font-size: 11px;
            line-height: 1.6;
        }

        /* RESPONSIVE */

        @media (max-width: 650px) {
            .top-header {
                padding: 25px 6%;
            }

            .top-header h1 {
                font-size: 25px;
            }

            .container {
                width: 92%;
                margin-top: 22px;
            }

            .card {
                padding: 19px;
            }

            .card-heading h2 {
                font-size: 20px;
            }

            .application-header {
                align-items: flex-start;
                flex-direction: column;
                gap: 12px;
            }

            .detail-grid {
                grid-template-columns: 1fr;
            }

            .detail-item.full {
                grid-column: auto;
            }

            .form-actions .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <header class="top-header">
        <div class="header-inner">
            <div class="header-label">SICANTIK · ADMINISTRATOR</div>
            <h1>Detail Pengajuan Layanan</h1>
            <p>Informasi pemohon dan verifikasi pengajuan layanan online.</p>
        </div>
    </header>

    <main class="container">

        <a href="{{ route('admin.pengajuan-layanan.index') }}" class="back-button">
            ← Kembali ke Daftar Pengajuan
        </a>

        {{-- NOTIFIKASI --}}
        @if(session('success'))
            <div class="alert success">
                ✓ {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert error">
                {{ $errors->first() }}
            </div>
        @endif

        {{-- DETAIL PENGAJUAN --}}
        <section class="card">

            <div class="card-heading">
                <div>
                    <div class="section-label">Informasi Pengajuan</div>
                    <h2>Data Pengajuan Masyarakat</h2>
                    <p>Informasi lengkap permohonan layanan online.</p>
                </div>
            </div>

            <div class="application-header">
                <div>
                    <div class="application-number-label">NOMOR PENGAJUAN</div>
                    <div class="application-number">
                        {{ $pengajuanLayanan->nomor_pengajuan }}
                    </div>
                </div>

                @php
                    $statusClass = \Illuminate\Support\Str::slug(
                        $pengajuanLayanan->status ?? 'default'
                    );
                @endphp

                <span class="status status-{{ $statusClass }}">
                    {{ $pengajuanLayanan->status ?: 'Belum ada status' }}
                </span>
            </div>

            <div class="section-label">Informasi Layanan</div>

            <div class="detail-grid">

                <div class="detail-item">
                    <div class="detail-label">Nama Layanan</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->layanan->nama ?? '-' }}
                    </div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Bidang Layanan</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->layanan->bidangLayanan->nama ?? '-' }}
                    </div>
                </div>

                <div class="detail-item full">
                    <div class="detail-label">Keperluan Pengajuan</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->keperluan ?: '-' }}
                    </div>
                </div>

            </div>

            <div class="section-label" style="margin-top: 27px;">
                Informasi Pemohon
            </div>

            <div class="detail-grid">

                <div class="detail-item">
                    <div class="detail-label">Nama Lengkap</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->nama_lengkap ?: '-' }}
                    </div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">NIK</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->nik ?: '-' }}
                    </div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Nomor HP / WhatsApp</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->nomor_hp ?: '-' }}
                    </div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Provinsi</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->provinsi ?: '-' }}
                    </div>
                </div>

                <div class="detail-item full">
                    <div class="detail-label">Alamat</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->alamat ?: '-' }}
                    </div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Desa / Kelurahan</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->desa_kelurahan ?: '-' }}
                    </div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Kecamatan</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->kecamatan ?: '-' }}
                    </div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Kabupaten / Kota</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->kabupaten_kota ?: '-' }}
                    </div>
                </div>

            </div>

            <div class="section-label" style="margin-top: 27px;">
                Status dan Catatan
            </div>

            <div class="detail-grid">
                <div class="detail-item">
                    <div class="detail-label">Status Saat Ini</div>
                    <div class="current-status">
                        <span class="status status-{{ $statusClass }}">
                            {{ $pengajuanLayanan->status ?: 'Belum ada status' }}
                        </span>
                    </div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Catatan Petugas</div>
                    <div class="detail-value">
                        {{ $pengajuanLayanan->catatan_petugas ?: 'Belum ada catatan petugas.' }}
                    </div>
                </div>
            </div>

        </section>

        {{-- VERIFIKASI --}}
        <section class="card">

            <div class="card-heading">
                <div>
                    <div class="section-label">Tindak Lanjut Admin</div>
                    <h2>Verifikasi Pengajuan</h2>
                    <p>Perbarui status dan berikan catatan atas pengajuan masyarakat.</p>
                </div>
            </div>

            <form
                action="{{ route('admin.pengajuan-layanan.verifikasi', $pengajuanLayanan) }}"
                method="POST"
            >
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="status">Status Pengajuan</label>

                    <select
                        name="status"
                        id="status"
                        class="form-control"
                        required
                    >
                        <option
                            value="Menunggu Verifikasi"
                            @selected(
                                $pengajuanLayanan->status === 'Menunggu Verifikasi'
                                || $pengajuanLayanan->status === 'menunggu_verifikasi'
                            )
                        >
                            Menunggu Verifikasi
                        </option>

                        <option
                            value="Diverifikasi"
                            @selected($pengajuanLayanan->status === 'Diverifikasi')
                        >
                            Diverifikasi
                        </option>

                        <option
                            value="Disetujui"
                            @selected($pengajuanLayanan->status === 'Disetujui')
                        >
                            Disetujui
                        </option>

                        <option
                            value="Ditolak"
                            @selected($pengajuanLayanan->status === 'Ditolak')
                        >
                            Ditolak
                        </option>
                    </select>

                    <div class="form-hint">
                        Pilih status terbaru sesuai hasil pemeriksaan pengajuan.
                    </div>
                </div>

                <div class="form-group">
                    <label for="keterangan">Catatan / Keterangan Petugas</label>

                    <textarea
                        name="keterangan"
                        id="keterangan"
                        class="form-control"
                        placeholder="Masukkan catatan atau alasan perubahan status..."
                    >{{ old('keterangan', $pengajuanLayanan->catatan_petugas) }}</textarea>

                    <div class="form-hint">
                        Berikan keterangan yang jelas agar pemohon mengetahui hasil tindak lanjut.
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                        Simpan Perubahan
                    </button>

                    <a
                        href="{{ route('admin.pengajuan-layanan.index') }}"
                        class="btn btn-secondary"
                    >
                        Kembali
                    </a>
                </div>

            </form>

            <div class="footer-note">
                Pastikan status dan catatan sudah sesuai sebelum menyimpan perubahan.
            </div>

        </section>

    </main>

</body>
</html>
