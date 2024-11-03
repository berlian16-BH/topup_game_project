<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function formgenshin(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'user_id' => 'required|string',  // Validasi agar User ID wajib diisi dan harus berupa string
            'server' => 'required|string',   // Validasi agar server wajib dipilih
        ], [
            'user_id.required' => 'User ID harus diisi.',  // Pesan error jika User ID kosong
            'server.required' => 'Server harus dipilih.',  // Pesan error jika server belum dipilih
        ]);

        // Jika validasi berhasil, arahkan ke halaman 'coba'
        return redirect()->route('coba')->with('success', 'Form berhasil disubmit!'); // Ganti 'beli' dengan nama rute yang sesuai
    }

    public function fungsiBeli()
    {
        return view('coba'); // Pastikan file coba.blade.php ada di folder resources/views
    }
}
