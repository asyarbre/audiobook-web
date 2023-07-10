@extends('layouts.dash')

@section('title', 'Create Content Book')

@section('content')
    <div class="card w-2/3 bg-base-100 shadow-xl border border-base-300">
        <div class="card-body">
            <div class="text-sm breadcrumbs mb-4">
                <ul>
                    <li><a href="{{ route('book.index') }}">Content</a></li>
                    <li>Add Data</li>
                </ul>
            </div>
            <form action="/dashboard/content" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <x-input-label for="book_id" value="Book" />
                    <select class="select select-secondary w-full max-w-xl" name="book_id">
                        <option disabled selected>Select Book</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <x-input-label for="audio" value="Audio" />
                    <x-file-input class="file-input-secondary max-w-xl" name="audio" />
                </div>
                <div class="mb-4">
                    <x-input-label for="book_content" value="Book Content" />
                    <x-file-input class="file-input-secondary max-w-xl" name="book_content" />
                </div>
                <x-button class="btn-secondary w-24 my-4">save</x-button>
            </form>
        </div>
    </div>
@endsection
