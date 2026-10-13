<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InformationController extends Controller
{
    /**
     * Menampilkan daftar data kepegawaian.
     */
    public function index(Request $request)
    {
        $query = Pegawai::query()->orderBy('nama');

        if ($request->filled('cari')) {
            $cari = $request->cari;

            $query->where(function ($q) use ($cari) {
                $q->where('nama', 'like', "%{$cari}%")
                    ->orWhere('nip', 'like', "%{$cari}%")
                    ->orWhere('jabatan', 'like', "%{$cari}%")
                    ->orWhere('unit_kerja', 'like', "%{$cari}%");
            });
        }

        if ($request->filled('jenis_kelamin')) {
            $query->where('jenis_kelamin', $request->jenis_kelamin);
        }

        if ($request->filled('status_pegawai')) {
            $query->where('status_pegawai', $request->status_pegawai);
        }

        $pegawai = $query->paginate(10)->withQueryString();

$statistik = [
    'total' => Pegawai::count(),
    'aktif' => Pegawai::where('status_pegawai', 'aktif')->count(),
    'laki_laki' => Pegawai::where('jenis_kelamin', 'Laki-laki')->count(),
    'perempuan' => Pegawai::where('jenis_kelamin', 'Perempuan')->count(),
    'mendekati_pensiun' => Pegawai::whereNotNull('tanggal_pensiun')
        ->whereDate('tanggal_pensiun', '>=', now()->toDateString())
        ->whereDate('tanggal_pensiun', '<=', now()->addYears(5)->toDateString())
        ->count(),
];

        return view('admin.information.index', compact('pegawai', 'statistik'));
    }

    /**
     * Menampilkan formulir tambah pegawai.
     */
    public function create()
    {
        return view('admin.information.create');
    }

    /**
     * Menyimpan data pegawai baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => ['nullable', 'string', 'max:30', 'unique:pegawais,nip'],
            'nama' => ['required', 'string', 'max:150'],
            'jenis_kelamin' => ['nullable', Rule::in(['Laki-laki', 'Perempuan'])],
            'tempat_lahir' => ['nullable', 'string', 'max:100'],
            'tanggal_lahir' => ['nullable', 'date'],
            'pendidikan_terakhir' => ['nullable', 'string', 'max:100'],
            'status_kepegawaian' => ['required', 'string', 'max:100'],
            'status_pegawai' => ['required', Rule::in(['aktif', 'nonaktif', 'pensiun'])],
            'jabatan' => ['nullable', 'string', 'max:150'],
            'jenis_jabatan' => ['nullable', 'string', 'max:100'],
            'unit_kerja' => ['nullable', 'string', 'max:150'],
            'pangkat_golongan' => ['nullable', 'string', 'max:100'],
            'tanggal_mulai_kerja' => ['nullable', 'date'],
            'tanggal_mulai_jabatan' => ['nullable', 'date'],
            'batas_usia_pensiun' => ['nullable', 'integer', 'min:1', 'max:100'],
            'tanggal_pensiun' => ['nullable', 'date'],
            'keterangan' => ['nullable', 'string'],
        ]);

        Pegawai::create($validated);

        return redirect()
            ->route('admin.informasi.index')
            ->with('success', 'Data pegawai berhasil ditambahkan.');
    }

    /**
     * Menampilkan formulir edit pegawai.
     * Parameter $informasi dipertahankan agar sesuai dengan route yang ada.
     */
    public function edit(Pegawai $informasi)
    {
        return view('admin.information.edit', [
            'pegawai' => $informasi,
        ]);
    }

    /**
     * Memperbarui data pegawai.
     */
    public function update(Request $request, Pegawai $informasi)
    {
        $validated = $request->validate([
            'nip' => [
                'nullable',
                'string',
                'max:30',
                Rule::unique('pegawais', 'nip')->ignore($informasi->id),
            ],
            'nama' => ['required', 'string', 'max:150'],
            'jenis_kelamin' => ['nullable', Rule::in(['Laki-laki', 'Perempuan'])],
            'tempat_lahir' => ['nullable', 'string', 'max:100'],
            'tanggal_lahir' => ['nullable', 'date'],
            'pendidikan_terakhir' => ['nullable', 'string', 'max:100'],
            'status_kepegawaian' => ['required', 'string', 'max:100'],
            'status_pegawai' => ['required', Rule::in(['aktif', 'nonaktif', 'pensiun'])],
            'jabatan' => ['nullable', 'string', 'max:150'],
            'jenis_jabatan' => ['nullable', 'string', 'max:100'],
            'unit_kerja' => ['nullable', 'string', 'max:150'],
            'pangkat_golongan' => ['nullable', 'string', 'max:100'],
            'tanggal_mulai_kerja' => ['nullable', 'date'],
            'tanggal_mulai_jabatan' => ['nullable', 'date'],
            'batas_usia_pensiun' => ['nullable', 'integer', 'min:1', 'max:100'],
            'tanggal_pensiun' => ['nullable', 'date'],
            'keterangan' => ['nullable', 'string'],
        ]);

        $informasi->update($validated);

        return redirect()
            ->route('admin.informasi.index')
            ->with('success', 'Data pegawai berhasil diperbarui.');
    }

    /**
     * Menghapus data pegawai.
     */
    public function destroy(Pegawai $informasi)
    {
        $informasi->delete();

        return redirect()
            ->route('admin.informasi.index')
            ->with('success', 'Data pegawai berhasil dihapus.');
    }

    /**
     * Mengimpor data pegawai dari CSV.
     * Header CSV harus menggunakan nama kolom tabel pegawais.
     */
    public function import(Request $request)
    {
        $request->validate([
            'file' => ['required', 'file', 'mimes:csv,txt', 'max:5120'],
        ]);

        $handle = fopen($request->file('file')->getRealPath(), 'r');

        if ($handle === false) {
            return back()->withErrors([
                'file' => 'File CSV tidak dapat dibaca.',
            ]);
        }

        $header = fgetcsv($handle, 0, ',');

        if (!$header) {
            fclose($handle);

            return back()->withErrors([
                'file' => 'File CSV kosong atau tidak valid.',
            ]);
        }

        $header[0] = preg_replace('/^\xEF\xBB\xBF/', '', $header[0]);

        $header = array_map(
            fn ($column) => strtolower(trim($column)),
            $header
        );

        $kolomDiizinkan = [
            'nip',
            'nama',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'pendidikan_terakhir',
            'status_kepegawaian',
            'status_pegawai',
            'jabatan',
            'jenis_jabatan',
            'unit_kerja',
            'pangkat_golongan',
            'tanggal_mulai_kerja',
            'tanggal_mulai_jabatan',
            'batas_usia_pensiun',
            'tanggal_pensiun',
            'keterangan',
        ];

        if (
            count($header) !== count(array_unique($header)) ||
            array_diff(['nama', 'status_kepegawaian'], $header) ||
            array_diff($header, $kolomDiizinkan)
        ) {
            fclose($handle);

            return back()->withErrors([
                'file' => 'Header CSV tidak valid. Gunakan nama kolom tabel pegawais, termasuk nama dan status_kepegawaian.',
            ]);
        }

        $jumlah = 0;

        while (($data = fgetcsv($handle, 0, ',')) !== false) {
            if (count($data) !== count($header)) {
                continue;
            }

            $row = array_combine($header, $data);

            $row = array_map(
                fn ($value) => is_string($value) ? trim($value) : $value,
                $row
            );

            if (empty($row['nama']) || empty($row['status_kepegawaian'])) {
                continue;
            }

            if (empty($row['status_pegawai'])) {
                $row['status_pegawai'] = 'aktif';
            }

            if (!in_array($row['status_pegawai'], ['aktif', 'nonaktif', 'pensiun'], true)) {
                continue;
            }

            if (!empty($row['jenis_kelamin']) &&
                !in_array($row['jenis_kelamin'], ['Laki-laki', 'Perempuan'], true)) {
                continue;
            }

            try {
                if (!empty($row['nip'])) {
                    Pegawai::updateOrCreate(
                        ['nip' => $row['nip']],
                        $row
                    );
                } else {
                    Pegawai::create($row);
                }

                $jumlah++;
            } catch (\Throwable $e) {
                // Lewati baris yang gagal diproses.
                continue;
            }
        }

        fclose($handle);

        return redirect()
            ->route('admin.informasi.index')
            ->with('success', "{$jumlah} baris data pegawai berhasil diproses.");
    }
}