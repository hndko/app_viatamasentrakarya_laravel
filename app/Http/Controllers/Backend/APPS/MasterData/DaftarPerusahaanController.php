<?php

namespace App\Http\Controllers\Backend\APPS\MasterData;

use App\Http\Controllers\Controller;
use App\Models\PerusahaanModel;
use Illuminate\Http\Request;

class DaftarPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => 'Master Data',
            'pages' => 'Daftar Perusahaan',
            'result' => PerusahaanModel::all(),
        ];

        return view('backend.apps.master_data.daftar_perusahaan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => 'Master Data',
            'pages' => 'Daftar Perusahaan',
        ];

        return view('backend.apps.master_data.daftar_perusahaan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'npwp_perusahaan' => 'required|string|max:20',
            'nama_pic' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'no_pic' => 'required|string|max:20',
        ]);

        // Buat objek PerusahaanModel baru dengan data yang disimpan
        PerusahaanModel::create($validatedData);

        // Redirect kembali ke halaman daftar perusahaan dengan pesan sukses
        return redirect()->route('apps.daftar_perusahaan')->with('success', 'Data Daftar Perusahaan berhasil ditambahkan.');
    }
    /**
     * Display the specified resource.
     */
    public function show(PerusahaanModel $perusahaanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Temukan perusahaan berdasarkan ID
        $perusahaan = PerusahaanModel::findOrFail($id);

        // Kirim data ke view untuk ditampilkan dalam formulir edit
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => 'Master Data',
            'pages' => 'Daftar Perusahaan',
            'res' => $perusahaan,
        ];

        return view('backend.apps.master_data.daftar_perusahaan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'npwp_perusahaan' => 'required|string|max:20',
            'nama_pic' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'no_pic' => 'required|string|max:20',
        ]);

        // Temukan perusahaan berdasarkan ID
        $perusahaan = PerusahaanModel::findOrFail($id);

        // Update data perusahaan
        $perusahaan->update($validatedData);

        // Redirect kembali ke halaman daftar perusahaan dengan pesan sukses
        return redirect()->route('apps.daftar_perusahaan')->with('success', 'Data Daftar Perusahaan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $daftar_perusahaan = PerusahaanModel::findOrFail($id);
        $daftar_perusahaan->delete();

        return redirect()->route('apps.daftar_perusahaan')->with('success', 'Data Daftar Perusahaan berhasil dihapus.');
    }
}
