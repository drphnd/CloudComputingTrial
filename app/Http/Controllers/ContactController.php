<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Gunakan Model Contact

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validasi input (opsional tapi sangat direkomendasikan)
        $validatedData = $request->validate([
            'nama_pengirim' => 'required|string|max:255',
            'email_pengirim' => 'required|email|max:255',
            'subject_message' => 'required|string|max:255',
            'content_message' => 'required|string',
        ]);

        // Simpan data ke database MySQL menggunakan Model Contact
        Contact::create($validatedData);

        // Arahkan kembali ke halaman utama dengan pesan sukses
        return redirect('/')->with('success', 'Pesan berhasil dikirim!');
    }
}