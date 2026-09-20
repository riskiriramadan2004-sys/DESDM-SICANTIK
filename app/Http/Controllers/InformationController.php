<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(Request $request)
    {
        $query = Information::with('category')
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->orderByDesc('published_at');

        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('excerpt', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $information = $query
            ->paginate(9)
            ->withQueryString();

        $categories = Category::orderBy('name')->get();

        return view('information.index', compact(
            'information',
            'categories'
        ));
    }

    public function show(Information $information)
    {
        abort_unless(
            $information->status === 'published',
            404
        );

        return view('information.show', compact('information'));
    }
}