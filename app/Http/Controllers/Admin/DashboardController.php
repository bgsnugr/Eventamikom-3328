<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // dashboard.blade.php ada langsung di folder admin (sesuai screenshot Anda)
        return view('admin.dashboard');
    }
}