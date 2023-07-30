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

    public function show()
    {
        $data = Book::all();
        return view('landing.show-all')->with('data', $data);
    }

    public function showByCategory(string $category)
    {
        $data = Book::where('category', $category)->get();
        return view('landing.show-by-category')->with('data', $data);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        if($search) {
            $data = Book::where('title', 'LIKE', '%' . $search . '%')->get();
            return view('landing.search')->with('data', $data);
        } else {
            $data = [];
            return view('landing.search')->with('data', $data);
        }
    }

}
