<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
// TAMBAHKAN 2 BARIS INI
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // 1. Validasi input
        $validatedData = $request->validate([
            'nama_pengirim' => 'required|string|max:255',
            'email_pengirim' => 'required|email|max:255',
            'subject_message' => 'required|string|max:255',
            'content_message' => 'required|string',
        ]);

        // 2. Simpan data ke database
        Contact::create($validatedData);

        // 3. TAMBAHKAN BLOK PENGIRIMAN EMAIL INI
        try {
            // Gunakan $validatedData agar aman
            Mail::to($validatedData['email_pengirim'])->send(new TestMail($validatedData)); 
        } catch (\Exception $e) {
            // (Opsional) Tangani jika email gagal dikirim
            // return back()->with('error', 'Maaf, email gagal dikirim.');
        }

        // 4. Arahkan kembali ke halaman utama
        return redirect('/')->with('success', 'Pesan berhasil dikirim!');
    }
}