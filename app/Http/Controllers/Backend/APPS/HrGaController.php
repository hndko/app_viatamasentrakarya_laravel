<?php

namespace App\Http\Controllers\Backend\APPS;

use App\Models\HrGaModel;
use Illuminate\Http\Request;
use App\Models\PerusahaanModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class HrGaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'HR & GA',
            'result' => HrGaModel::all(),
        ];

        return view('backend.apps.hrga.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'HR & GA',
            'perusahaan' => PerusahaanModel::all(),
        ];

        return view('backend.apps.hrga.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim oleh form
        $validatedData = $request->validate([
            'perusahaan_id' => 'required|exists:tb_perusahaan,perusahaan_id',
            'nama_anggota' => 'required',
            'tanggal_masuk' => 'required',
            'no_telpon' => 'required|numeric',
            'jabatan' => 'required',
            'no_pegawai' => 'required',
            'nik' => 'required|numeric',
            'tanggal_lahir' => 'required',
            'lokasi' => 'required',
            'bpjs_kesehatan' => 'required',
            'bpjs_tk' => 'required',
            'pkwt_awal' => 'required',
            'pkwt_akhir' => 'required',
            'kasbon' => 'nullable|numeric',
            'slip_gaji' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        // Upload bukti pembayaran jika ada
        if ($request->hasFile('slip_gaji')) {
            $image = $request->file('slip_gaji');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder yang diinginkan
            $image->move(public_path('assets/slip_gaji'), $imageName);
            $validatedData['slip_gaji'] = $imageName;
        }

        // Buat entri baru dalam database
        $hrga = HrGaModel::create($validatedData);

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.hrga')->with('success', 'Data HR & GA berhasil disimpan.');
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
            'pages' => 'HR & GA',
            'hrga' => HrGaModel::findOrFail($id),
            'perusahaan' => PerusahaanModel::all(),
        ];

        return view('backend.apps.hrga.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'perusahaan_id' => 'required|exists:tb_perusahaan,perusahaan_id',
            'nama_anggota' => 'required',
            'tanggal_masuk' => 'required',
            'no_telpon' => 'required|numeric',
            'jabatan' => 'required',
            'no_pegawai' => 'required',
            'nik' => 'required|numeric',
            'tanggal_lahir' => 'required',
            'lokasi' => 'required',
            'bpjs_kesehatan' => 'required',
            'bpjs_tk' => 'required',
            'pkwt_awal' => 'required',
            'pkwt_akhir' => 'required',
            'kasbon' => 'nullable|numeric',
            'slip_gaji' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $hrga = HrGaModel::findOrFail($id);

        // Perbarui kolom-kolom berdasarkan input dari form
        $hrga->perusahaan_id = $request->perusahaan_id;
        $hrga->nama_anggota = $request->nama_anggota;
        $hrga->tanggal_masuk = $request->tanggal_masuk;
        $hrga->no_telpon = $request->no_telpon;
        $hrga->jabatan = $request->jabatan;
        $hrga->no_pegawai = $request->no_pegawai;
        $hrga->nik = $request->nik;
        $hrga->tanggal_lahir = $request->tanggal_lahir;
        $hrga->lokasi = $request->lokasi;
        $hrga->bpjs_kesehatan = $request->bpjs_kesehatan;
        $hrga->bpjs_tk = $request->bpjs_tk;
        $hrga->pkwt_awal = $request->pkwt_awal;
        $hrga->pkwt_akhir = $request->pkwt_akhir;
        $hrga->kasbon = $request->kasbon;

        // Gunakan gambar lama jika gambar baru kosong
        if ($request->hasFile('slip_gaji')) {
            // Hapus gambar lama jika tersedia
            if (!empty($hrga->slip_gaji)) {
                $imagePath = public_path('assets/slip_gaji/' . $hrga->slip_gaji);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->slip_gaji->extension();
            $request->slip_gaji->move(public_path('assets/slip_gaji'), $imageName);
            $hrga->slip_gaji = $imageName;
        }

        // Update data HR & GA
        $hrga->save();

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.hrga')->with('success', 'Data HR & GA berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hrga = HrGaModel::findOrFail($id);

        // Hapus gambar dari direktori jika tersedia
        if (!empty($hrga->slip_gaji)) {
            $imagePath = public_path('assets/slip_gaji/' . $hrga->slip_gaji);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Hapus data HR & GA dari database
        $hrga->delete();

        return redirect()->route('apps.hrga')->with('success', 'Data HR & GA berhasil dihapus.');
    }
}
