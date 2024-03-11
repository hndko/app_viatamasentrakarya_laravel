<?php

namespace App\Http\Controllers\Frontend;

use App\Models\KBLIModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactUsModel;

class InformasiController extends Controller
{
    public function kbli()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'pages' => 'KBLI Terbaru',
            'res' => KBLIModel::first()
        ];

        return view('frontend.informasi.kbli', $data);
    }

    public function cek_zonasi()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'pages' => 'Virtual Office'
        ];

        return view('frontend.informasi.cek_zonasi', $data);
    }

    public function karir()
    {
        //
    }

    public function hubungi_kami()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'pages' => 'Hubungi Kami'
        ];

        return view('frontend.informasi.hubungi_kami', $data);
    }

    public function hubungi_kami_store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data ke dalam basis data
        ContactUsModel::create([
            'nama_lengkap' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Redirect pengguna kembali ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('hubungi-kami')->with('success', 'Pesan Anda telah berhasil dikirim.');
    }

    public function notFound()
    {
        abort(404);
    }
}
