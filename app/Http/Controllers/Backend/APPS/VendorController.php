<?php

namespace App\Http\Controllers\Backend\APPS;

use App\Models\VendorModel;
use Illuminate\Http\Request;
use App\Models\PerusahaanModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Vendor',
            'result' => VendorModel::all(),
        ];

        return view('backend.apps.vendor.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Vendor',
            'perusahaan' => PerusahaanModel::all(),
        ];

        return view('backend.apps.vendor.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim oleh form
        $validatedData = $request->validate([
            'perusahaan_id' => 'required|exists:tb_perusahaan,perusahaan_id',
            'no_invoice' => 'required',
            'harga' => 'nullable|numeric',
            'ppn' => 'nullable|numeric',
            'pph_21' => 'nullable|numeric',
            'bukti_potong' => 'nullable|image|mimes:jpeg,png,jpg|max:5120', // Gambar dengan maksimum 5 MB file size                        
        ]);

        // Upload bukti pembayaran jika ada
        if ($request->hasFile('bukti_potong')) {
            $image = $request->file('bukti_potong');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder yang diinginkan
            $image->move(public_path('assets/bukti_pembayaran'), $imageName);
            $validatedData['bukti_potong'] = $imageName;
        }

        // Buat entri baru dalam database
        $vendor = VendorModel::create($validatedData);

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.vendor')->with('success', 'Data Vendor berhasil disimpan.');
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
            'pages' => 'Vendor',
            'vendor' => VendorModel::findOrFail($id),
            'perusahaan' => PerusahaanModel::all(),
        ];

        return view('backend.apps.vendor.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'perusahaan_id' => 'required|exists:tb_perusahaan,perusahaan_id',
            'no_invoice' => 'required',
            'harga' => 'nullable|numeric',
            'ppn' => 'nullable|numeric',
            'pph_21' => 'nullable|numeric',
            'bukti_potong' => 'nullable|image|mimes:jpeg,png,jpg|max:5120', // Gambar dengan maksimum 5 MB file size                        
        ]);

        $vendor = VendorModel::findOrFail($id);

        // Perbarui kolom-kolom berdasarkan input dari form
        $vendor->perusahaan_id = $request->perusahaan_id;
        $vendor->no_invoice = $request->no_invoice;
        $vendor->harga = $request->harga;
        $vendor->ppn = $request->ppn;
        $vendor->pph_21 = $request->pph_21;

        // Gunakan gambar lama jika gambar baru kosong
        if ($request->hasFile('bukti_potong')) {
            // Hapus gambar lama jika tersedia
            if (!empty($vendor->bukti_potong)) {
                $imagePath = public_path('assets/bukti_pembayaran/' . $vendor->bukti_potong);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->bukti_potong->extension();
            $request->bukti_potong->move(public_path('assets/bukti_pembayaran'), $imageName);
            $vendor->bukti_potong = $imageName;
        }

        // Update data vendor
        $vendor->save();

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.vendor')->with('success', 'Data Vendor berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendor = VendorModel::findOrFail($id);

        // Hapus gambar dari direktori jika tersedia
        if (!empty($vendor->bukti_potong)) {
            $imagePath = public_path('assets/bukti_pembayaran/' . $vendor->bukti_potong);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Hapus data vendor dari database
        $vendor->delete();

        return redirect()->route('apps.vendor')->with('success', 'Data Vendor berhasil dihapus.');
    }
}
