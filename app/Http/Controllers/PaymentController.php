<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPilihNominal()
    {
        // Contoh data harga, Anda bisa menggantinya dengan data dari database atau sumber lainnya
        $prices = [
            'Harga 1' => 10000,
            'Harga 2' => 20000,
            'Harga 3' => 50000,
        ];

        return view('pilih_bayaran', compact('prices'));
    }
}
