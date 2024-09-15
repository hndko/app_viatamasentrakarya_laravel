<?php

namespace App\Http\Controllers\Backend\APPS\MasterData;

use App\Http\Controllers\Controller;
use App\Models\PercenPajakModel;
use Illuminate\Http\Request;

class PercenPajakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => 'Master Data',
            'pages' => 'Persen Pajak',
            'result' => PercenPajakModel::all(),
        ];

        return view('backend.apps.master_data.percen_pajak.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => 'Master Data',
            'pages' => 'Persen Pajak',
        ];

        return view('backend.apps.master_data.percen_pajak.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'ppn' => 'required|integer',
            'pph' => 'required|integer',
        ]);

        // Buat objek PercenPajakModel baru dengan data yang disimpan
        PercenPajakModel::create($validatedData);

        // Redirect kembali ke halaman daftar persen pajak dengan pesan sukses
        return redirect()->route('apps.percen_pajak')->with('success', 'Data Persen Pajak berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Temukan persen pajak berdasarkan ID
        $percenPajak = PercenPajakModel::findOrFail($id);

        // Kirim data ke view untuk ditampilkan dalam formulir edit
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => 'Master Data',
            'pages' => 'Persen Pajak',
            'res' => $percenPajak,
        ];

        return view('backend.apps.master_data.percen_pajak.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'ppn' => 'required|integer',
            'pph' => 'required|integer',
        ]);

        // Temukan persen pajak berdasarkan ID
        $percenPajak = PercenPajakModel::findOrFail($id);

        // Update data persen pajak
        $percenPajak->update($validatedData);

        // Redirect kembali ke halaman daftar persen pajak dengan pesan sukses
        return redirect()->route('apps.percen_pajak')->with('success', 'Data Persen Pajak berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $percenPajak = PercenPajakModel::findOrFail($id);
        $percenPajak->delete();

        return redirect()->route('apps.percen_pajak')->with('success', 'Data Persen Pajak berhasil dihapus.');
    }
}
