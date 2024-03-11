<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'pages' => 'Tentang Kami',
            'res' => AboutModel::first()
        ];

        return view('backend.cms.about.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'deskripsi' => 'required|string',
        ]);

        // Ambil data about dari basis data
        $about = AboutModel::first();

        // Perbarui deskripsi about dengan data baru dari formulir
        $about->deskripsi = $request->deskripsi;
        $about->save();

        // Alihkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('cms.about')->with('success', 'Deskripsi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
