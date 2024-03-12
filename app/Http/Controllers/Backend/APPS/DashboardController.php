<?php

namespace App\Http\Controllers\Backend\APPS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Dashboard'
        ];

        return view('backend.apps.index', $data);
    }
}
