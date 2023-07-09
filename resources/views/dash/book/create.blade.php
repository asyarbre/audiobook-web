@extends('layouts.dash')

@section('title', 'Create Book')

@section('content')
    <div class="card w-2/3 bg-base-100 shadow-xl border border-base-300">
        <div class="card-body">
            <div class="text-sm breadcrumbs mb-4">
                <ul>
                    <li><a href="{{ route('book.index') }}">Book</a></li>
                    <li>Add Data</li>
                </ul>
            </div>
            <form action="/dashboard/book" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <x-input-label for="cover" value="Cover" />
                    <x-file-input class="file-input-secondary max-w-xl" name="cover" />
                </div>
                <div class="mb-4">
                    <x-input-label for="title" value="Title" />
                    <x-text-input type="text" class="input-secondary max-w-xl" name="title"
                        value="{{ old('title') }}" />
                </div>
                <div class="mb-4">
                    <x-input-label for="author" value="Author" />
                    <x-text-input type="text" class="input-secondary max-w-xl" name="author"
                        value="{{ old('author') }}" />
                </div>
                <div class="mb-4">
                    <x-input-label for="description" value="Description" />
                    <textarea class="textarea textarea-secondary textarea-md w-full max-w-xl" name="description">{{ old('description') }}</textarea>
                </div>
                <div class="mb-4">
                    <x-input-label for="category" value="Category" />
                    <select class="select select-secondary w-full max-w-xl" name="category">
                        <option disabled selected>Select a Category</option>
                        <option value="buku-anak" {{ old('category') == 'buku-anak' ? 'selected' : '' }}>Buku Anak</option>
                        <option value="fiksi" {{ old('category') == 'fiksi' ? 'selected' : '' }}>Fiksi</option>
                        <option value="non-fiksi" {{ old('category') == 'non-fiksi' ? 'selected' : '' }}>Non Fiksi</option>
                    </select>
                </div>
                <x-button class="btn-secondary w-24 my-4">save</x-button>
            </form>
        </div>
    </div>
@endsection
