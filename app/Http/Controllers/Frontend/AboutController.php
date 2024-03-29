<?php

namespace App\Http\Controllers\Frontend;

use App\Models\SNKModel;
use App\Models\AboutModel;
use App\Models\GalleryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function about_us()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'pages' => 'Tentang Kami',
            'res' => AboutModel::first()
        ];

        return view('frontend.about.about_us', $data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'pages' => 'Gallery',
            // 'images' => File::files(public_path('assets/img/gallery')),
            'images' => GalleryModel::all(),
        ];

        return view('frontend.about.gallery', $data);
    }

    public function syarat_dan_ketentuan()
    {
        $data = [
            'title' => 'PT Viatama Sentrakarya - Virtual Office & Layanan Bisnis',
            'pages' => 'Syarat & Ketentuan',
            'res' => SNKModel::first()
        ];

        return view('frontend.about.syarat_dan_ketentuan', $data);
    }
}
