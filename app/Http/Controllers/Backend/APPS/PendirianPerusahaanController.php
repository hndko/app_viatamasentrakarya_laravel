<?php

namespace App\Http\Controllers\Backend\APPS;

use App\Models\LayananModel;
use Illuminate\Http\Request;
use App\Models\PerusahaanModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\PendirianPerusahaanModel;

class PendirianPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Pendirian Perusahaan',
            'result' => PendirianPerusahaanModel::all(),
        ];

        return view('backend.apps.pendirian_perusahaan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Pendirian Perusahaan',
            'perusahaan' => PerusahaanModel::all(),
        ];

        return view('backend.apps.pendirian_perusahaan.create', $data);
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
            'harga' => 'required|numeric',
            'estiminasi_pekerjaan' => 'required|numeric',
            'tanggal_pembayaran' => 'required|date',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:5120', // Gambar dengan maksimum 5 MB file size            
            'keterangan' => 'required|string'
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
        $pendirian_perusahaan = PendirianPerusahaanModel::create($validatedData);

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.pendirian_perusahaan')->with('success', 'Data Pendirian Perusahaan berhasil disimpan.');
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
            'pages' => 'Pendirian Perusahaan',
            'pendirian_perusahaan' => PendirianPerusahaanModel::findOrFail($id),
            'perusahaan' => PerusahaanModel::all(),
        ];

        return view('backend.apps.pendirian_perusahaan.edit', $data);
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
            'harga' => 'required|numeric',
            'estiminasi_pekerjaan' => 'required|numeric',
            'tanggal_pembayaran' => 'required|date',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg|max:5120', // Gambar dengan maksimum 5 MB file size            
            'keterangan' => 'required|string'
        ]);

        $pendirian_perusahaan = PendirianPerusahaanModel::findOrFail($id);

        // Update kolom-kolom berdasarkan input dari form
        $pendirian_perusahaan->perusahaan_id = $request->perusahaan_id;
        $pendirian_perusahaan->no_invoice = $request->no_invoice;
        $pendirian_perusahaan->harga = $request->harga;
        $pendirian_perusahaan->estiminasi_pekerjaan = $request->estiminasi_pekerjaan;
        $pendirian_perusahaan->tanggal_pembayaran = $request->tanggal_pembayaran;
        $pendirian_perusahaan->keterangan = $request->keterangan;

        // Gunakan gambar lama jika gambar baru kosong
        if ($request->hasFile('bukti_pembayaran')) {
            // Hapus gambar lama jika tersedia
            if (!empty($pendirian_perusahaan->bukti_pembayaran)) {
                $imagePath = public_path('assets/bukti_pembayaran/' . $pendirian_perusahaan->bukti_pembayaran);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->bukti_pembayaran->extension();
            $request->bukti_pembayaran->move(public_path('assets/bukti_pembayaran'), $imageName);
            $pendirian_perusahaan->bukti_pembayaran = $imageName;
        }

        // Update data pendirian_perusahaan
        $pendirian_perusahaan->save();

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.pendirian_perusahaan')->with('success', 'Data Pendirian Perusahaan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendirian_perusahaan = PendirianPerusahaanModel::findOrFail($id);

        // Hapus gambar dari direktori jika tersedia
        if (!empty($pendirian_perusahaan->bukti_pembayaran)) {
            $imagePath = public_path('assets/bukti_pembayaran/' . $pendirian_perusahaan->bukti_pembayaran);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Hapus data pendirian_perusahaan dari database
        $pendirian_perusahaan->delete();

        return redirect()->route('apps.pendirian_perusahaan')->with('success', 'Data Pendirian Perusahaan berhasil dihapus.');
    }
}
