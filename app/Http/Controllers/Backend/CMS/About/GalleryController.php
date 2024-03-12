<?php

namespace App\Http\Controllers\Backend\CMS\About;

use App\Models\GalleryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Gallery',
            'result' => GalleryModel::all(), // Mengambil semua data gallery dari database
        ];

        return view('backend.cms.gallery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Gallery'
        ];

        return view('backend.cms.gallery.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validator = Validator::make($request->all(), [
            'sampul' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Mengatur validasi untuk file gambar
        ]);

        // Jika validasi gagal, kembalikan dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data ke dalam database
        $gallery = new GalleryModel();

        // Mengelola file upload
        if ($request->hasFile('sampul')) {
            $image = $request->file('sampul');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder yang diinginkan
            $image->move(public_path('assets/img/gallery'), $imageName);
            $gallery->sampul = $imageName;
        }

        $gallery->save();

        // Redirect dengan pesan sukses
        return redirect()->route('cms.gallery')->with('success', 'Data gallery berhasil ditambahkan.');
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
        $gallery = GalleryModel::findOrFail($id);
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Gallery',
            'res' => $gallery,
        ];

        return view('backend.cms.gallery.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = GalleryModel::findOrFail($id);

        // Gunakan gambar lama jika gambar baru kosong
        if ($request->hasFile('sampul')) {
            // Hapus gambar lama jika tersedia
            if (!empty($gallery->sampul)) {
                $imagePath = public_path('assets/img/gallery/' . $gallery->sampul);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->sampul->extension();
            $request->sampul->move(public_path('assets/img/gallery'), $imageName);
            $gallery->sampul = $imageName;
        }

        // Update data gallery
        $gallery->save();

        return redirect()->route('cms.gallery')->with('success', 'Data gallery berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = GalleryModel::findOrFail($id);

        // Hapus gambar dari direktori jika tersedia
        if (!empty($gallery->sampul)) {
            $imagePath = public_path('assets/img/gallery/' . $gallery->sampul);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Hapus data gallery dari database
        $gallery->delete();

        return redirect()->route('cms.gallery')->with('success', 'Data gallery berhasil dihapus.');
    }
}
