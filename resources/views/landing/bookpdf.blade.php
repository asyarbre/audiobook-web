@extends('layouts.content')

@section('title', 'Book')

@section('content')
    <div class="flex items-center p-4 gap-4">
        <a href="{{ url('/') }}" class="">
            <div class="btn btn-circle btn-accent">
                <x-fas-arrow-left class="w-6 h-6" />
            </div>
        </a>
        <h1 class="font-bold mt-2 text-gray-800 text-xl">{{ $data->title }}</h1>
    </div>
    </div>
    <iframe id="pdf-js-viewer"
        src="{{ url('pdfjs/web/viewer.html') }}?file={{ url('storage/book_content') . '/' . $data->content }}"
        title="webviewer" frameborder="0" class="w-full h-[90vh]"></iframe>

@endsection
