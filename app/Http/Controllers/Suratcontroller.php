<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // SuratController.php
{
    $data = Surat::all(); // Ambil semua data surat
    return view('index', compact('data')); // Kirim data ke view
}

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required|string|max:50', // Validasi untuk nama barang
            'jenis_surat' => 'required|string', // Validasi untuk kategori
            'pengirim' => 'required|string', // Validasi untuk deskripsi
            'penerima' => 'required|numeric|min:0', // Validasi untuk harga
           'tanggal_surat' => 'required|date',
            'tanggal_terima' => 'nullable|date',
            'perihal' => 'required|string',
            'lampiran' => 'nullable|string',
            'status' => 'required|in:diproses,selesai,ditolak', // Status yang sesuai

        ]);

        $surat = Surat::create($request->all()); // Menggunakan model Barang
        if ($surat) {
            return redirect()->route('surat.index')->with('success', 'Data barang berhasil ditambahkan'); // Mengarahkan ke rute index barang
        }

        //
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
