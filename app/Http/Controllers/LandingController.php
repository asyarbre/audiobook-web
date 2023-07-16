<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function allCategory()
    {
        $data = Book::all();
        $dataBukuAnak = Book::where('category', 'buku-anak')->get();
        $dataBukuFiksi = Book::where('category', 'fiksi')->get();
        $dataBukuNonFiksi = Book::where('category', 'non-fiksi')->get();

        return view('landing.index', [
            'data' => $data,
            'dataBukuAnak' => $dataBukuAnak,
            'dataBukuFiksi' => $dataBukuFiksi,
            'dataBukuNonFiksi' => $dataBukuNonFiksi
        ]);
    }
}
