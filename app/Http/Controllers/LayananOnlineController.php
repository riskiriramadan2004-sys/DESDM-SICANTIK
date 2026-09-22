<?php

namespace App\Http\Controllers;

use App\Models\BidangLayanan;

class LayananOnlineController extends Controller
{
    public function index()
    {
        $bidangLayanans = BidangLayanan::where('status', true)
            ->orderBy('nama')
            ->get();

        return view('layanan-online.index', compact('bidangLayanans'));
    }

    public function show(BidangLayanan $bidangLayanan)
    {
        $layanans = $bidangLayanan->layanans()
            ->where('status', true)
            ->orderBy('nama')
            ->get();

        return view('layanan-online.show', compact(
            'bidangLayanan',
            'layanans'
        ));
    }
}