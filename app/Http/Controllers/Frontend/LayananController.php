<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            'pages' => 'Virtual Office'
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
