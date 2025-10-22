<?php
// drphnd/cloudcomputingtrial/CloudComputingTrial-6fc5ff587881d633a323b32dfc80d352e59395ef/routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
// HAPUS BARIS INI: use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']); // Ini route yang benar

// HAPUS ROUTE INI:
// Route::post('/sendMail', [MailController::class, 'sendMail'])
//     ->name('sendMail');