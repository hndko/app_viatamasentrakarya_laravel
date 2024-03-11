<?php

namespace App\Http\Controllers\Backend\CMS\Informasi;

use App\Models\KBLIModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class KBLIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'master' => 'Informasi',
            'pages' => 'KBLI Terbaru',
            'res' => KBLIModel::first()
        ];

        return view('backend.cms.informasi.kbli.index', $data);
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
            'sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'file_uploaded' => 'nullable|mimes:pdf|max:2048',
        ]);

        // Ambil data kbli dari basis data
        $kbli = KBLIModel::first();

        // Gunakan gambar lama jika gambar baru kosong
        if ($request->hasFile('sampul')) {
            // Hapus gambar lama jika tersedia
            if (!empty($kbli->sampul)) {
                $imagePath = public_path('assets/img/' . $kbli->sampul);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->sampul->extension();
            $request->sampul->move(public_path('assets/img'), $imageName);
            $kbli->sampul = $imageName;
        }

        $kbli->judul = $request->judul;
        $kbli->deskripsi = $request->deskripsi;

        // Gunakan file lama jika file baru kosong
        if ($request->hasFile('file_uploaded')) {
            // Hapus file lama jika tersedia
            if (!empty($kbli->file_uploaded)) {
                $imagePath = public_path('assets/berkas/' . $kbli->file_uploaded);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Upload file baru
            $imageName = time() . '.' . $request->file_uploaded->extension();
            $request->file_uploaded->move(public_path('assets/berkas'), $imageName);
            $kbli->file_uploaded = $imageName;
        }

        // Update data kbli
        $kbli->save();

        return redirect()->route('cms.kbli')->with('success', 'Data kbli berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
