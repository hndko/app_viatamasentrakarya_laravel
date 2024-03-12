<?php

namespace App\Http\Controllers\Backend\CMS\Layanan;

use App\Models\LayananModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeskripsiLayananModel;

class PendirianPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => 'Layanan',
            'pages' => 'Pendirian Perusahaan',
            'result' => LayananModel::where('tipe', 'Pendirian Perusahaan')->get(),
        ];

        return view('backend.cms.layanan.pendirian_perusahaan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => 'Layanan',
            'pages' => 'Pendirian Perusahaan',
        ];

        return view('backend.cms.layanan.pendirian_perusahaan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:100',
            'harga' => 'required|string|max:30',
            'is_harga' => 'nullable|boolean',
            'is_whatsapp' => 'nullable|boolean',
            'is_color' => 'required|string',
            'is_active' => 'nullable|boolean',
        ]);

        // Tambahkan field 'tipe' dengan nilai default "Pendirian Perusahaan"
        $data = $request->all();
        $data['tipe'] = 'Pendirian Perusahaan';

        LayananModel::create($data);


        return redirect()->route('cms.pendirian_perusahaan')
            ->with('success', 'Data Pendirian Perusahaan berhasil ditambahkan.');
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
        $layanan = LayananModel::findOrFail($id);
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => 'Layanan',
            'pages' => 'Pendirian Perusahaan',
            'res' => $layanan,
        ];

        return view('backend.cms.layanan.pendirian_perusahaan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required|string|max:100',
            'harga' => 'required|numeric',
            'is_harga' => 'nullable||in:1,0',
            'is_whatsapp' => 'nullable||in:1,0',
            'is_color' => 'required|string',
            'is_active' => 'nullable||in:1,0',
        ]);

        $layanan = LayananModel::findOrFail($id);
        $layanan->update([
            'judul' => $request->judul,
            'harga' => $request->harga,
            'is_harga' => $request->is_harga,
            'is_whatsapp' => $request->is_whatsapp,
            'is_color' => $request->is_color,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('cms.pendirian_perusahaan')->with('success', 'Data Pendirian Perusahaan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = LayananModel::findOrFail($id);
        $layanan->delete();

        return redirect()->route('cms.pendirian_perusahaan')->with('success', 'Data Pendirian Perusahaan berhasil dihapus.');
    }

    /**
     * Next route Deskripsi Layanan
     */

    public function list(string $id)
    {
        $layanan = LayananModel::findOrFail($id);
        $deskripsi = DeskripsiLayananModel::where('layanan_id', $id)->get();
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => 'Layanan',
            'pages' => 'Pendirian Perusahaan',
            'layanan' => $layanan,
            'result' => $deskripsi,
        ];

        return view('backend.cms.layanan.pendirian_perusahaan.deskripsi.list', $data);
    }

    public function list_store(Request $request, string $id)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:150',
        ]);

        DeskripsiLayananModel::create([
            'layanan_id' => $id,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('cms.pendirian_perusahaan.list', ['id' => $id])
            ->with('success', 'Data Deskripsi Layanan berhasil ditambahkan.');
    }

    public function list_update(Request $request, string $id)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:150',
        ]);

        $deskripsi = DeskripsiLayananModel::findOrFail($id);
        $deskripsi->update([
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('cms.pendirian_perusahaan.list', ['id' => $deskripsi->layanan_id])
            ->with('success', 'Data Deskripsi Layanan berhasil diperbarui.');
    }

    public function list_destroy(string $id)
    {
        $deskripsi = DeskripsiLayananModel::findOrFail($id);
        $layananId = $deskripsi->layanan_id; // Simpan layanan_id sebelum dihapus

        $deskripsi->delete();

        return redirect()->route('cms.pendirian_perusahaan.list', ['id' => $layananId])->with('success', 'Data Deskripsi Layanan berhasil dihapus.');
    }
}
