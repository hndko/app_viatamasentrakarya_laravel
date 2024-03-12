<?php

namespace App\Http\Controllers\Backend\APPS;

use App\Models\FormVOModel;
use App\Models\LayananModel;
use Illuminate\Http\Request;
use App\Models\PerusahaanModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class VirtualOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Virtual Office',
            'result' => FormVOModel::all(),
        ];

        return view('backend.apps.virtual_office.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Virtual Office',
            'perusahaan' => PerusahaanModel::all(),
            'layanan' => LayananModel::where('tipe', 'Virtual Office')->get()
        ];

        return view('backend.apps.virtual_office.create', $data);
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
            'layanan_id' => 'required|exists:tb_layanan,layanan_id',
            'harga' => 'required|numeric',
            'ppn' => 'required|numeric',
            'pph_23' => 'required|numeric',
            'awal_sewa' => 'required|date',
            'akhir_sewa' => 'required|date',
            'tgl_pembayaran' => 'nullable|date',
            'metode_pembayaran' => 'nullable|string|max:50',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg|max:5120', // Gambar dengan maksimum 5 MB file size
            'bupot' => 'nullable|string|max:70',
            'note' => 'nullable|string'
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
        $formVO = FormVOModel::create($validatedData);

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.virtual_office')->with('success', 'Data Virtual Office berhasil disimpan.');
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
            'pages' => 'Virtual Office',
            'formVO' => FormVOModel::findOrFail($id),
            'perusahaan' => PerusahaanModel::all(),
            'layanan' => LayananModel::where('tipe', 'Virtual Office')->get()
        ];

        return view('backend.apps.virtual_office.edit', $data);
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
            'layanan_id' => 'required|exists:tb_layanan,layanan_id',
            'harga' => 'required|numeric',
            'ppn' => 'required|numeric',
            'pph_23' => 'required|numeric',
            'awal_sewa' => 'required|date',
            'akhir_sewa' => 'required|date',
            'tgl_pembayaran' => 'nullable|date',
            'metode_pembayaran' => 'nullable|string|max:50',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg|max:5120', // Gambar dengan maksimum 5 MB file size
            'bupot' => 'nullable|string|max:70',
            'note' => 'nullable|string'
        ]);

        $formVO = formVOModel::findOrFail($id);

        // Update kolom-kolom berdasarkan input dari form
        $formVO->perusahaan_id = $request->perusahaan_id;
        $formVO->no_invoice = $request->no_invoice;
        $formVO->layanan_id = $request->layanan_id;
        $formVO->harga = $request->harga;
        $formVO->ppn = $request->ppn;
        $formVO->pph_23 = $request->pph_23;
        $formVO->awal_sewa = $request->awal_sewa;
        $formVO->akhir_sewa = $request->akhir_sewa;
        $formVO->tgl_pembayaran = $request->tgl_pembayaran;
        $formVO->metode_pembayaran = $request->metode_pembayaran;
        $formVO->bupot = $request->bupot;
        $formVO->note = $request->note;

        // Gunakan gambar lama jika gambar baru kosong
        if ($request->hasFile('bukti_pembayaran')) {
            // Hapus gambar lama jika tersedia
            if (!empty($formVO->bukti_pembayaran)) {
                $imagePath = public_path('assets/bukti_pembayaran/' . $formVO->bukti_pembayaran);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->bukti_pembayaran->extension();
            $request->bukti_pembayaran->move(public_path('assets/bukti_pembayaran'), $imageName);
            $formVO->bukti_pembayaran = $imageName;
        }

        // Update data formVO
        $formVO->save();

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.virtual_office')->with('success', 'Data Virtual Office berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formVO = FormVOModel::findOrFail($id);

        // Hapus gambar dari direktori jika tersedia
        if (!empty($formVO->bukti_pembayaran)) {
            $imagePath = public_path('assets/bukti_pembayaran/' . $formVO->bukti_pembayaran);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Hapus data formVO dari database
        $formVO->delete();

        return redirect()->route('apps.virtual_office')->with('success', 'Data Virtual Office berhasil dihapus.');
    }
}
