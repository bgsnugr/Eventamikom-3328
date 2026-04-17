<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController; 
use App\Http\Controllers\Admin\EventsController; 



// --- Rute User Area ---
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/event', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/event', [EventController::class, 'show'])->name('events.detail');
Route::get('/ticket', [TicketController::class, 'ticket'])->name('ticket');

// Rute Tambahan Pertemuan 2
Route::get('/katalog', [EventController::class, 'index'])->name('katalog'); 
Route::get('/tentang', function () { return view('about'); })->name('about');


// --- Rute Admin Area ---
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    
    // Halaman Dashboard Utama Admin
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // Halaman Kelola Event
    Route::get('/events', [EventsController::class, 'index'])->name('events');
    
    // Halaman Laporan Transaksi
    Route::get('/transactions', function () {
        return view('admin.transactions');
    })->name('transactions');


    // TUGAS PERTEMUAN 3: Manajemen Kategori 
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
});