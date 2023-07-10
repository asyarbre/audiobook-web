@extends('layouts.dash')

@section('title', 'Edit Content Book')

@section('content')
    <div class="flex flex-col-reverse sm:flex-row gap-2">
        <div class="card w-full sm:w-2/3 bg-base-100 sm:mb-8 shadow-xl border border-base-300">
            <div class="card-body">
                <div class="text-sm breadcrumbs mb-4">
                    <ul>
                        <li><a href="{{ route('content.index') }}">Content Book</a></li>
                        <li>Edit Data</li>
                    </ul>
                </div>
                <form action="{{ '/dashboard/content/' . $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <x-input-label for="title" value="Book Title" />
                        <x-text-input type="text" class="input-secondary max-w-xl" name="title"
                            value="{{ $data->book->title }}" disabled/>
                    </div>
                    <div class="mb-4">
                        <x-input-label for="page" value="Halaman" />
                        <x-text-input type="text" class="input-secondary max-w-xl" name="page"
                            value="{{ $data->page }}" disabled/>
                    </div>
                    <div class="mb-4">
                        <x-input-label for="audio" value="Audio" />
                        <x-file-input class="file-input-secondary max-w-xl" name="audio" />
                    </div>
                    <div class="mb-4">
                        <x-input-label for="book_content" value="Book Content" />
                        <x-file-input class="file-input-secondary max-w-xl" name="book_content" />
                    </div>

                    <x-button class="btn-secondary w-24 my-4">update</x-button>
                </form>
            </div>
        </div>

    </div>
@endsection
