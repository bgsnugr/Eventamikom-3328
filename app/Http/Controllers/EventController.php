<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // Method untuk halaman utama (sudah dibuat sebelumnya)
    public function index()
    {
        return view('welcome');
    }

    // Method untuk melihat detail event
    public function show()
    {
        return view('detail-event');
    }
    public function checkout()
    {
        return view('checkout');
    }
}
