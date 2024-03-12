<?php

namespace App\Http\Controllers\Backend\CMS\Layanan;

use App\Models\SpaceOfficeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SpaceOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => 'Layanan',
            'pages' => 'Space Office',
            'res' => SpaceOfficeModel::first()
        ];

        return view('backend.cms.layanan.space_office.index', $data);
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
        $request->validate([
            'judul' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data kbli dari basis data
        $space_office = SpaceOfficeModel::first();

        $space_office->judul = $request->judul;
        $space_office->deskripsi = $request->deskripsi;

        // Gunakan gambar lama jika gambar baru kosong
        if ($request->hasFile('sampul')) {
            // Hapus gambar lama jika tersedia
            if (!empty($space_office->sampul)) {
                $imagePath = public_path('assets/img/' . $space_office->sampul);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->sampul->extension();
            $request->sampul->move(public_path('assets/img'), $imageName);
            $space_office->sampul = $imageName;
        }

        // Update data kbli
        $space_office->save();

        return redirect()->route('cms.space_office')->with('success', 'Data space office berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
