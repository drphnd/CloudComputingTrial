<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class ContactController extends Controller
{
    protected $database;
    
    public function __construct(Database $database)
    {
        $this
        ->database = $database;
    }

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->database->getReference('contacts')->push([
            'nama_pengirim' => $request->input('nama_pengirim'),
            'email_pengirim' => $request->input('email_pengirim'),
            'subject_message' => $request->input('subject_message'),
            'content_message' => $request->input('content_message'),
        ]);

        // Mengarahkan ke halaman utama ('/') dengan pesan sukses
        return redirect('/')->with('success', 'Pesan berhasil dikirim!');
    }

}
