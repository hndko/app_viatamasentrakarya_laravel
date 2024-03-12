<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\LayananModel;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{
    public function pendirian_perusahaan()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'pages' => 'Pendirian Perusahaan'
        ];

        return view('frontend.layanan.pendirian_perusahaan', $data);
    }

    public function sertifikasi_badan_usaha()
    {
        //
    }

    public function virtual_office()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'pages' => 'Virtual Office',
            'result' => LayananModel::with('deskripsi_layanan')->where('tipe', 'Virtual Office')->get(),
        ];

        return view('frontend.layanan.virtual_office', $data);
    }

    public function space_office()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'pages' => 'Space Office'
        ];

        return view('frontend.layanan.space_office', $data);
    }

    public function outsourcing_security()
    {
        //
    }

    public function layanan_tambahan()
    {
        //
    }

    public function notFound()
    {
        abort(404);
    }
}
