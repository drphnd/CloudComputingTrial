<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class ContactController extends Controller
{
    /**
     * Tampilkan formulir kontak (registrasi).
     * Pastikan nama fungsi ini 'index'.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Simpan data formulir.
     */
    public function store(Request $request)
    {
        // 1. Validasi data baru
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'student_email' => 'required|email|max:255',
            'password' => 'required|string|min:8|same:confirm_password',
            'confirm_password' => 'required',
            'birthdate' => 'required|date',
        ]);

        // 2. Buat data baru (password akan di-hash oleh Model)
        $contact = Contact::create([
            'full_name' => $validatedData['full_name'],
            'student_email' => $validatedData['student_email'],
            'password' => $validatedData['password'],
            'birthdate' => $validatedData['birthdate'],
        ]);

        // 3. Kirim email (Opsional, hapus komentar jika ingin digunakan)
        Mail::to($contact->student_email)->send(new TestMail($contact));

        // 4. Redirect ke URL eksternal setelah sukses
        return redirect()->away('https://drphnd.team2lesgo.site/');
    }
}