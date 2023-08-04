<?php

namespace App\Http\Controllers;

use App\Models\Bookpdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BookPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        if($search) {
            $data = Bookpdf::where('title', 'like', "%{$search}%")->orderBy('id', 'ASC')->paginate(3);
        } else {
            $data = Bookpdf::orderBy('id', 'ASC')->paginate(3);
        }

        return view('dash.bookpdf.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.bookpdf.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('title', $request->title);
        Session::flash('category', $request->category);

        $request->validate([
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'title' => 'required',
            'category' => 'required',
            'content' => 'required|mimes:pdf'
        ], [
            'cover.required' => 'Cover wajib diisi',
            'cover.image' => 'Cover harus berupa gambar',
            'cover.mimes' => 'Cover harus berupa gambar dengan format jpeg, png, jpg',
            'cover.max' => 'Cover maksimal 10MB',
            'title.required' => 'Title wajib diisi',
            'category.required' => 'Category wajib diisi',
            'content.required' => 'Content wajib diisi',
            'content.mimes' => 'Content harus berupa file pdf'
        ]);

        $cover_file = $request->file('cover');
        $cover_ext = $cover_file->extension();
        $cover_name = date('YmdHis') . "." . $cover_ext;
        $cover_file->move(public_path('storage/cover'), $cover_name);

        //upload file pdf
        $content_file = $request->file('content');
        $content_ext = $content_file->extension();
        $content_name = date('YmdHis') . "." . $content_ext;
        $content_file->move(public_path('storage/book_content'), $content_name);

        $slug = Str::of($request->title)->slug('-');

        $data = [
            'cover' => $cover_name,
            'title' => $request->title,
            'slug' => $slug,
            'category' => $request->category,
            'content' => $content_name
        ];

        Bookpdf::create($data);
        return redirect()->route('bookpdf.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $data = Bookpdf::where('slug', $slug)->first();
        return view('landing.bookpdf')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Bookpdf::where('id', $id)->first();
        return view('dash.bookpdf.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'cover' => 'image|mimes:jpeg,png,jpg|max:10240',
            'title' => 'required',
            'category' => 'required',
            'content' => 'mimes:pdf'
        ], [
            'cover.image' => 'Cover harus berupa gambar',
            'cover.mimes' => 'Cover harus berupa gambar dengan format jpeg, png, jpg',
            'cover.max' => 'Cover maksimal 10MB',
            'title.required' => 'Title wajib diisi',
            'category.required' => 'Category wajib diisi',
            'content.mimes' => 'Content harus berupa file pdf'
        ]);

        $data = [
            'title' => $request->title,
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
            $old_cover = Bookpdf::where('id', $id)->first();
            File::delete(public_path('storage/cover/' . $old_cover->cover));
        }

        if($request->hasFile('content')) {
            $request->validate([
                'content' => 'mimes:pdf'
            ], [
                'content.mimes' => 'Content harus berupa file pdf'
            ]);
            $content_file = $request->file('content');
            $content_ext = $content_file->extension();
            $content_name = date('YmdHis') . "." . $content_ext;
            $content_file->move(public_path('storage/book_content'), $content_name);

            // Delete old content
            $data['content'] = $content_name;
            $old_content = Bookpdf::where('id', $id)->first();
            File::delete(public_path('storage/book_content/' . $old_content->content));
        }

        Bookpdf::where('id', $id)->update($data);
        return redirect()->route('bookpdf.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Bookpdf::where('id', $id)->first();
        File::delete(public_path('storage/cover/' . $data->cover));
        File::delete(public_path('storage/book_content/' . $data->content));

        Bookpdf::where('id', $id)->delete();
        return redirect()->route('bookpdf.index')->with('success', 'Data berhasil dihapus');
    }
}
