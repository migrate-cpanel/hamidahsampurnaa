<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validasi data yang masuk dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // 2. Kirim email menggunakan Mailable yang sudah dibuat
        // Ganti 'email.penerima.tujuan@gmail.com' dengan email admin sekolah Anda
        Mail::to('annisarahmilu@gmail.com')->send(new ContactFormMail($validatedData));

        // 3. Redirect pengguna kembali ke halaman kontak dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
}