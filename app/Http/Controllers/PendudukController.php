<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduks = Penduduk::all();
        return view('index', compact('penduduks'));
    }

    // API endpoint untuk menerima data dari n8n
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $penduduk = Penduduk::create($request->only('nama','alamat'));
        return response()->json(['success' => true, 'data' => $penduduk], 201);
    }
}
