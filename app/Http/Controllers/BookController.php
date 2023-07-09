<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Book::orderBy('id', 'ASC')->paginate(4);
        return view('dash.book.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('title', $request->title);
        Session::flash('author', $request->author);
        Session::flash('description', $request->description);
        Session::flash('category', $request->category);

        $request->validate([
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'category' => 'required'
        ], [
            'cover.required' => 'Cover wajib diisi',
            'cover.image' => 'Cover harus berupa gambar',
            'cover.mimes' => 'Cover harus berupa gambar dengan format jpeg, png, jpg',
            'cover.max' => 'Cover maksimal 10MB',
            'title.required' => 'Title wajib diisi',
            'author.required' => 'Author wajib diisi',
            'description.required' => 'Description wajib diisi',
            'category.required' => 'Category wajib diisi'
        ]);

        $cover_file = $request->file('cover');
        $cover_ext = $cover_file->extension();
        $cover_name = date('YmdHis') . "." . $cover_ext;
        $cover_file->move(public_path('storage/cover'), $cover_name);

        $data = [
            'cover' => $cover_name,
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'category' => $request->category
        ];

        Book::create($data);
        return redirect()->route('book.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Book::where('id', $id)->first();
        return view('dash.book.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'category' => 'required'
        ], [
            'title.required' => 'Title wajib diisi',
            'author.required' => 'Author wajib diisi',
            'description.required' => 'Description wajib diisi',
            'category.required' => 'Category wajib diisi'
        ]);

        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'category' => $request->category
        ];

        if($request->hasFile('cover')) {
            $request->validate([
                'cover' => 'image|mimes:jpeg,png,jpg|max:10240'
            ], [
                'cover.image' => 'Cover harus berupa gambar',
                'cover.mimes' => 'Cover harus berupa gambar dengan format jpeg, png, jpg',
                'cover.max' => 'Cover maksimal 10MB'
            ]);
            $cover_file = $request->file('cover');
            $cover_ext = $cover_file->extension();
            $cover_name = date('YmdHis') . "." . $cover_ext;
            $cover_file->move(public_path('storage/cover'), $cover_name);

            // Delete old cover
            $data['cover'] = $cover_name;
            $old_cover = Book::where('id', $id)->first();
            File::delete(public_path('storage/cover/' . $old_cover->cover));
        }

        Book::where('id', $id)->update($data);
        return redirect()->route('book.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Book::where('id', $id)->first();
        File::delete(public_path('storage/cover/' . $data->cover));
        
        Book::where('id', $id)->delete();
        return redirect()->route('book.index')->with('success', 'Data berhasil dihapus');
    }
}
