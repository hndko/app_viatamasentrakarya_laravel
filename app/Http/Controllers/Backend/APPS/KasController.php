<?php

namespace App\Http\Controllers\Backend\APPS;

use App\Http\Controllers\Controller;
use App\Models\KasModel;
use Illuminate\Http\Request;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Kas Kecil & Besar',
            'result' => KasModel::all(),
        ];

        return view('backend.apps.kas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Kas Kecil & Besar',
        ];

        return view('backend.apps.kas.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim oleh form
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'keterangan' => 'required|string',
            'harga' => 'required|numeric',
            'qty' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        // Buat entri baru dalam database
        $kas = KasModel::create($validatedData);

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.kas')->with('success', 'Data Kas Kecil & Besar berhasil disimpan.');
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
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Kas Kecil & Besar',
            'kas' => KasModel::findOrFail($id),
        ];

        return view('backend.apps.kas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'tanggal' => 'required',
            'keterangan' => 'required|string',
            'harga' => 'required|numeric',
            'qty' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        $kas = KasModel::findOrFail($id);

        // Perbarui kolom-kolom berdasarkan input dari form
        $kas->tanggal = $request->tanggal;
        $kas->keterangan = $request->keterangan;
        $kas->harga = $request->harga;
        $kas->qty = $request->qty;
        $kas->total = $request->total;

        // Update data kas
        $kas->save();

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.kas')->with('success', 'Data Kas Kecil & Besar berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kas = KasModel::findOrFail($id);
        $kas->delete();

        return redirect()->route('apps.kas')->with('success', 'Data Kas Kecil & Besar berhasil dihapus.');
    }
}
