<?php

namespace App\Http\Controllers\Backend\APPS;

use App\Models\FormSOModel;
use App\Models\LayananModel;
use Illuminate\Http\Request;
use App\Models\PerusahaanModel;
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
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Space Office',
            'result' => FormSOModel::all(),
        ];

        return view('backend.apps.space_office.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Space Office',
            'perusahaan' => PerusahaanModel::all(),
            'layanan' => LayananModel::all()
        ];

        return view('backend.apps.space_office.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim oleh form
        $validatedData = $request->validate([
            'perusahaan_id' => 'required|exists:tb_perusahaan,perusahaan_id',
            'no_invoice' => 'nullable',
            'harga' => 'nullable|numeric',
            'ppn' => 'nullable|numeric',
            'pph_final' => 'nullable|numeric',
            'awal_sewa' => 'nullable|date',
            'akhir_sewa' => 'nullable|date',
            'tanggal_pembayaran' => 'nullable|date',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg|max:5120', // Gambar dengan maksimum 5 MB file size            
            'keterangan' => 'nullable|string'
        ]);

        // Upload bukti pembayaran jika ada
        if ($request->hasFile('bukti_pembayaran')) {
            $image = $request->file('bukti_pembayaran');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder yang diinginkan
            $image->move(public_path('assets/bukti_pembayaran'), $imageName);
            $validatedData['bukti_pembayaran'] = $imageName;
        }

        // Buat entri baru dalam database
        $formSO = FormSOModel::create($validatedData);

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.space_office')->with('success', 'Data Space Office berhasil disimpan.');
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
            'pages' => 'Space Office',
            'formSO' => FormSOModel::findOrFail($id),
            'perusahaan' => PerusahaanModel::all(),
        ];

        return view('backend.apps.space_office.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'perusahaan_id' => 'required|exists:tb_perusahaan,perusahaan_id',
            'no_invoice' => 'nullable',
            'harga' => 'nullable|numeric',
            'ppn' => 'nullable|numeric',
            'pph_final' => 'nullable|numeric',
            'awal_sewa' => 'nullable|date',
            'akhir_sewa' => 'nullable|date',
            'tanggal_pembayaran' => 'nullable|date',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg|max:5120', // Gambar dengan maksimum 5 MB file size            
            'keterangan' => 'nullable|string'
        ]);

        $formSO = FormSOModel::findOrFail($id);

        // Perbarui kolom-kolom berdasarkan input dari form
        $formSO->perusahaan_id = $request->perusahaan_id;
        $formSO->no_invoice = $request->no_invoice;
        $formSO->harga = $request->harga;
        $formSO->ppn = $request->ppn;
        $formSO->pph_final = $request->pph_final;
        $formSO->awal_sewa = $request->awal_sewa;
        $formSO->akhir_sewa = $request->akhir_sewa;
        $formSO->tanggal_pembayaran = $request->tanggal_pembayaran;
        $formSO->keterangan = $request->keterangan;

        // Gunakan gambar lama jika gambar baru kosong
        if ($request->hasFile('bukti_pembayaran')) {
            // Hapus gambar lama jika tersedia
            if (!empty($formSO->bukti_pembayaran)) {
                $imagePath = public_path('assets/bukti_pembayaran/' . $formSO->bukti_pembayaran);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->bukti_pembayaran->extension();
            $request->bukti_pembayaran->move(public_path('assets/bukti_pembayaran'), $imageName);
            $formSO->bukti_pembayaran = $imageName;
        }

        // Update data formSO
        $formSO->save();

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.space_office')->with('success', 'Data Space Office berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formSO = FormSOModel::findOrFail($id);

        // Hapus gambar dari direktori jika tersedia
        if (!empty($formSO->bukti_pembayaran)) {
            $imagePath = public_path('assets/bukti_pembayaran/' . $formSO->bukti_pembayaran);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Hapus data formSO dari database
        $formSO->delete();

        return redirect()->route('apps.space_office')->with('success', 'Data Space Office berhasil dihapus.');
    }
}
