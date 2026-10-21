<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BeritaAcara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BeritaAcaraController extends Controller
{
    public function index()
    {
        $beritaAcaras = BeritaAcara::latest()->paginate(10);

        return view('admin.berita-acara.index', compact('beritaAcaras'));
    }

    public function create()
    {
        return view('admin.berita-acara.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'nomor_berita_acara' => ['nullable', 'string', 'max:255'],
            'tanggal_kegiatan' => ['nullable', 'date'],
            'deskripsi' => ['nullable', 'string'],
            'isi_berita_acara' => ['required', 'string'],
            'dokumen_pdf' => ['nullable', 'file', 'mimes:pdf', 'max:10240'],
            'status' => ['required', Rule::in(['draft', 'published'])],
        ]);

        $validated['slug'] = $this->generateSlug($validated['judul']);

        if ($request->hasFile('dokumen_pdf')) {
            $validated['dokumen_pdf'] = $request
                ->file('dokumen_pdf')
                ->store('berita-acara', 'public');
        }

        $validated['published_at'] =
            $validated['status'] === 'published' ? now() : null;

        BeritaAcara::create($validated);

        return redirect()
            ->route('admin.berita-acara.index')
            ->with('success', 'Berita acara berhasil disimpan.');
    }

    public function show(BeritaAcara $beritaAcara)
    {
        return view('admin.berita-acara.show', compact('beritaAcara'));
    }

    public function edit(BeritaAcara $beritaAcara)
    {
        return view('admin.berita-acara.edit', compact('beritaAcara'));
    }

    public function update(Request $request, BeritaAcara $beritaAcara)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'nomor_berita_acara' => ['nullable', 'string', 'max:255'],
            'tanggal_kegiatan' => ['nullable', 'date'],
            'deskripsi' => ['nullable', 'string'],
            'isi_berita_acara' => ['required', 'string'],
            'dokumen_pdf' => ['nullable', 'file', 'mimes:pdf', 'max:10240'],
            'status' => ['required', Rule::in(['draft', 'published'])],
        ]);

        if ($validated['judul'] !== $beritaAcara->judul) {
            $validated['slug'] = $this->generateSlug(
                $validated['judul'],
                $beritaAcara->id
            );
        }

        if ($request->hasFile('dokumen_pdf')) {
            $oldFile = $beritaAcara->dokumen_pdf;

            $validated['dokumen_pdf'] = $request
                ->file('dokumen_pdf')
                ->store('berita-acara', 'public');

            if ($oldFile && Storage::disk('public')->exists($oldFile)) {
                Storage::disk('public')->delete($oldFile);
            }
        }

        if ($validated['status'] === 'published') {
            $validated['published_at'] ??=
                $beritaAcara->published_at ?? now();
        } else {
            $validated['published_at'] = null;
        }

        $beritaAcara->update($validated);

        return redirect()
            ->route('admin.berita-acara.show', $beritaAcara)
            ->with('success', 'Berita acara berhasil diperbarui.');
    }

    public function destroy(BeritaAcara $beritaAcara)
    {
        $file = $beritaAcara->dokumen_pdf;

        $beritaAcara->delete();

        if ($file && Storage::disk('public')->exists($file)) {
            Storage::disk('public')->delete($file);
        }

        return redirect()
            ->route('admin.berita-acara.index')
            ->with('success', 'Berita acara berhasil dihapus.');
    }

    public function download(BeritaAcara $beritaAcara)
    {
        $path = $beritaAcara->dokumen_pdf;

        abort_unless(
            $path && Storage::disk('public')->exists($path),
            404,
            'Dokumen berita acara tidak ditemukan.'
        );

        return Storage::disk('public')->download(
            $path,
            Str::slug($beritaAcara->judul) . '.pdf'
        );
    }

    private function generateSlug(string $judul, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($judul);
        $slug = $baseSlug ?: 'berita-acara';
        $counter = 1;

        while (
            BeritaAcara::where('slug', $slug)
                ->when(
                    $ignoreId,
                    fn ($query) => $query->where('id', '!=', $ignoreId)
                )
                ->exists()
        ) {
            $slug = ($baseSlug ?: 'berita-acara') . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
