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
        $data = Surat::all(); // Ambil semua data surat
        return view('index', compact('data')); // Kirim data ke view
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
            'nomor_surat' => 'required|string|max:50',
            'jenis_surat' => 'required|string',
            'pengirim' => 'required|string',
            'penerima' => 'required|string', // Pastikan tipe sesuai
            'tanggal_surat' => 'required|date',
            'tanggal_terima' => 'nullable|date',
            'perihal' => 'required|string',
            'lampiran' => 'nullable|string',
            'status' => 'required|in:diproses,selesai,ditolak', // Validasi status
        ]);

        $surat = Surat::create($request->all()); // Simpan surat baru

        if ($surat) {
            return redirect()->route('surat.index')->with('success', 'Data surat berhasil ditambahkan');
        }

        return redirect()->back()->with('error', 'Gagal menambahkan surat');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surat $surat)
    {
        return view("edit", ["surat" => $surat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surat $surat)
    {
        //dd($surat);;
        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:50',
            'jenis_surat' => 'required|string',
            'pengirim' => 'required|string',
            'penerima' => 'required|string', // Pastikan tipe sesuai
            'tanggal_surat' => 'required|date',
            'tanggal_terima' => 'nullable|date',
            'perihal' => 'required|string',
            'lampiran' => 'nullable|string',
            'status' => 'required|in:diproses,selesai,ditolak',
        ]);

        $surat->update($validated); // Update model surat

        return redirect()->route('surat.index')->with('success', 'Surat Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surat $surat)
    {
        $surat->delete(); // Hapus surat
        return redirect()->route('surat.index')->with('success', 'Surat Berhasil Dihapus');
    }
}
