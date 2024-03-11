<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Dashboard'
        ];

        return view('backend.cms.index', $data);
    }
}
