<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Models\ClientModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Klien',
            'result' => ClientModel::all(), // Mengambil semua data klien dari database
        ];

        return view('backend.cms.klien.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Klien'
        ];

        return view('backend.cms.klien.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validator = Validator::make($request->all(), [
            'nama_klien' => 'required|string|max:255',
            'sampul' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Mengatur validasi untuk file gambar
        ]);

        // Jika validasi gagal, kembalikan dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data ke dalam database
        $klien = new ClientModel();
        $klien->nama_klien = $request->input('nama_klien');

        // Mengelola file upload
        if ($request->hasFile('sampul')) {
            $image = $request->file('sampul');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder yang diinginkan
            $image->move(public_path('assets/img/clients'), $imageName);
            $klien->sampul = $imageName;
        }

        $klien->save();

        // Redirect dengan pesan sukses
        return redirect()->route('cms.klien')->with('success', 'Data Klien berhasil ditambahkan.');
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
        $klien = ClientModel::findOrFail($id);
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Klien',
            'res' => $klien,
        ];

        return view('backend.cms.klien.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_klien' => 'required|string|max:255',
            'sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $klien = ClientModel::findOrFail($id);

        // Gunakan gambar lama jika gambar baru kosong
        if ($request->hasFile('sampul')) {
            // Hapus gambar lama jika tersedia
            if (!empty($klien->sampul)) {
                $imagePath = public_path('assets/img/clients/' . $klien->sampul);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->sampul->extension();
            $request->sampul->move(public_path('assets/img/clients'), $imageName);
            $klien->sampul = $imageName;
        }

        // Update data klien
        $klien->nama_klien = $request->nama_klien;
        $klien->save();

        return redirect()->route('cms.klien')->with('success', 'Data Klien berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $klien = ClientModel::findOrFail($id);

        // Hapus gambar dari direktori jika tersedia
        if (!empty($klien->sampul)) {
            $imagePath = public_path('assets/img/clients/' . $klien->sampul);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Hapus data klien dari database
        $klien->delete();

        return redirect()->route('cms.klien')->with('success', 'Data Klien berhasil dihapus.');
    }
}
