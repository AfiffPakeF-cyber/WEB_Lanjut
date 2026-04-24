<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = Chirp::with('user')
            ->latest()
            ->take(50) // Membatasi hanya 50 pesan terbaru
            ->get();

        return view('home', ['chirps' => $chirps]);
    }
}