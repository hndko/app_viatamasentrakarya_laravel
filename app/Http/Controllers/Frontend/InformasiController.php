<?php

namespace App\Http\Controllers\Frontend;

use App\Models\KBLIModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function notFound()
    {
        abort(404);
    }
}