<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InformationController extends Controller
{
    public function index(Request $request)
    {
        $query = Information::with('category')
            ->orderByDesc('created_at');

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $information = $query
            ->paginate(10)
            ->withQueryString();

        return view('admin.information.index', compact('information'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.information.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
        ]);

        $validated['slug'] = $this->generateUniqueSlug($validated['title']);

        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request
                ->file('image')
                ->store('information', 'public');
        }

        Information::create($validated);

        return redirect()
            ->route('admin.information.index')
            ->with('success', 'Informasi berhasil ditambahkan.');
    }

    public function show(Information $information)
    {
        return view('admin.information.show', compact('information'));
    }

    public function edit(Information $information)
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.information.edit', compact(
            'information',
            'categories'
        ));
    }

    public function update(Request $request, Information $information)
    {
        $validated = $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
        ]);

        if ($information->title !== $validated['title']) {
            $validated['slug'] = $this->generateUniqueSlug(
                $validated['title'],
                $information->id
            );
        }

        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        if ($request->hasFile('image')) {
            if ($information->image) {
                Storage::disk('public')->delete($information->image);
            }

            $validated['image'] = $request
                ->file('image')
                ->store('information', 'public');
        }

        $information->update($validated);

        return redirect()
            ->route('admin.information.index')
            ->with('success', 'Informasi berhasil diperbarui.');
    }

    public function destroy(Information $information)
    {
        if ($information->image) {
            Storage::disk('public')->delete($information->image);
        }

        $information->delete();

        return redirect()
            ->route('admin.information.index')
            ->with('success', 'Informasi berhasil dihapus.');
    }

    private function generateUniqueSlug(
        string $title,
        ?int $ignoreId = null
    ): string {
        $baseSlug = Str::slug($title);
        $slug = $baseSlug;
        $counter = 1;

        while (
            Information::where('slug', $slug)
                ->when(
                    $ignoreId,
                    fn ($query) => $query->where('id', '!=', $ignoreId)
                )
                ->exists()
        ) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}