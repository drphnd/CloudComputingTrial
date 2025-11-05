<?php
// drphnd/cloudcomputingtrial/CloudComputingTrial-6fc5ff587881d633a323b32dfc80d352e59395ef/routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
// HAPUS BARIS INI: use App\Http\Controllers\MailController;


Route::get('/', function () {
    return view('welcome');
});

// GANTI 'create' MENJADI 'index' DI SINI
Route::get('/contact', [ContactController::class, 'index'])->name('contact.form');

// Rute POST sudah benar
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');