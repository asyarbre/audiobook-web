<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        if($search) {
            $data = Content::whereHas('book', function ($query) use ($search) {
                $query->where('title', 'LIKE', '%' . $search . '%');
            })->orderBy('id', 'ASC')->paginate(2);
            $data->appends(['search' => $search]);
        } else {
            $data = Content::orderBy('book_id', 'ASC')->paginate(2);
        }

        return view('dash.content.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::all();
        return view('dash.content.create')->with('books', $books);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('book_id', $request->book_id);
        Session::flash('page', $request->page);

        $request->validate([
            'book_id' => 'required|exists:book,id',
            'audio' => 'required|mimes:mp3,wav',
            'book_content' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'page' => 'unique:content,page'
        ], [
            'book_id.required' => 'Book wajib diisi',
            'book_id.exists' => 'Book tidak ditemukan',
            'audio.required' => 'Audio wajib diisi',
            'audio.mimes' => 'Audio harus berupa mp3 atau wav',
            'book_content.required' => 'Book content wajib diisi',
            'book_content.image' => 'Book content harus berupa gambar',
            'book_content.mimes' => 'Book content harus berupa gambar dengan format jpeg, png, jpg',
            'book_content.max' => 'Book content maksimal 10MB',
            'page.unique' => 'Halaman sudah ada'
        ]);

        //audio file
        $audio_file = $request->file('audio');
        $audio_ext = $audio_file->extension();
        $audio_name = date('YmdHis') . "." . $audio_ext;
        $audio_file->move(public_path('storage/audio'), $audio_name);

        //book content file
        $book_content_file = $request->file('book_content');
        $book_content_ext = $book_content_file->extension();
        $book_content_name = date('YmdHis') . "." . $book_content_ext;
        $book_content_file->move(public_path('storage/book_content'), $book_content_name);

        $page = Content::where('book_id', $request->book_id)->count() + 1;

        $data = [
            'book_id' => $request->book_id,
            'audio' => $audio_name,
            'book_content' => $book_content_name,
            'page' => $page
        ];

        Content::create($data);
        return redirect()->route('content.index')->with('success', 'Content berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $data = Content::whereHas('book', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->orderBy('page', 'ASC')->get();

        return view('landing.read')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Content::where('id', $id)->first();
        return view('dash.content.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book_id = Content::where('id', $id)->first()->book_id;
        $page = Content::where('id', $id)->first()->page;

        $data = [
            'book_id' => $book_id,
            'page' => $page
        ];

        if($request->hasFile('audio')) {
            $request->validate([
                'audio' => 'mimes:mp3,wav'
            ], [
                'audio.mimes' => 'Audio harus berupa mp3 atau wav'
            ]);

            //audio file
            $audio_file = $request->file('audio');
            $audio_ext = $audio_file->extension();
            $audio_name = date('YmdHis') . "." . $audio_ext;
            $audio_file->move(public_path('storage/audio'), $audio_name);

            //Detele old audio file
            $data['audio'] = $audio_name;
            $old_audio = Content::where('id', $id)->first();
            File::delete(public_path('storage/audio/' . $old_audio->audio));
        }

        if($request->hasFile('book_content')) {
            $request->validate([
                'book_content' => 'image|mimes:jpeg,png,jpg|max:10240'
            ], [
                'book_content.image' => 'Book content harus berupa gambar',
                'book_content.mimes' => 'Book content harus berupa gambar dengan format jpeg, png, jpg',
                'book_content.max' => 'Book content maksimal 10MB'
            ]);

            //book content file
            $book_content_file = $request->file('book_content');
            $book_content_ext = $book_content_file->extension();
            $book_content_name = date('YmdHis') . "." . $book_content_ext;
            $book_content_file->move(public_path('storage/book_content'), $book_content_name);

            //Detele old book content file
            $data['book_content'] = $book_content_name;
            $old_book_content = Content::where('id', $id)->first();
            File::delete(public_path('storage/book_content/' . $old_book_content->book_content));
        }

        Content::where('id', $id)->update($data);
        return redirect()->route('content.index')->with('success', 'Content berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Content::where('id', $id)->first();
        File::delete(public_path('storage/audio/' . $data->audio));
        File::delete(public_path('storage/book_content/' . $data->book_content));

        Content::where('id', $id)->delete();
        return redirect()->route('content.index')->with('success', 'Content berhasil dihapus');
    }
}
