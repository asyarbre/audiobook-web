@extends('layouts.dash')

@section('title', 'Edit Book')

@section('content')
    <div class="flex flex-col-reverse sm:flex-row gap-2">
        <div class="card w-full sm:w-2/3 bg-base-100 sm:mb-8 shadow-xl border border-base-300">
            <div class="card-body">
                <div class="text-sm breadcrumbs mb-4">
                    <ul>
                        <li><a href="{{ route('book.index') }}">Book</a></li>
                        <li>Edit Data</li>
                    </ul>
                </div>
                <form action="{{ '/dashboard/book/' . $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <x-input-label for="cover" value="Cover" />
                        <x-file-input class="file-input-secondary max-w-xl" name="cover" />
                    </div>
                    <div class="mb-4">
                        <x-input-label for="title" value="Title" />
                        <x-text-input type="text" class="input-secondary max-w-xl" name="title"
                            value="{{ $data->title }}" />
                    </div>
                    <div class="mb-4">
                        <x-input-label for="author" value="Author" />
                        <x-text-input type="text" class="input-secondary max-w-xl" name="author"
                            value="{{ $data->author }}" />
                    </div>
                    <div class="mb-4">
                        <x-input-label for="description" value="Description" />
                        <textarea class="textarea textarea-secondary textarea-md w-full max-w-xl" name="description">{{ $data->description }}</textarea>
                    </div>
                    <div class="mb-4">
                        <x-input-label for="category" value="Category" />
                        <select class="select select-secondary w-full max-w-xl" name="category">
                            <option disabled selected>Select a Category</option>
                            <option value="buku-anak" {{ $data->category == 'buku-anak' ? 'selected' : '' }}>Buku Anak</option>
                            <option value="fiksi" {{ $data->category == 'fiksi' ? 'selected' : '' }}>Fiksi</option>
                            <option value="non-fiksi" {{ $data->category == 'non-fiksi' ? 'selected' : '' }}>Non Fiksi</option>
                        </select>
                    </div>
                    <x-button class="btn-secondary w-24 my-4">update</x-button>
                </form>
            </div>
        </div>
        <div class="card w-full sm:w-1/3 sm:mb-8 bg-base-100 shadow-xl border border-base-300">
            <div class="card-body">
                @if ($data->cover != null)
                    <div class="mb-4 mx-auto">
                      <h6 class="font-bold text-center text-lg mb-2">Cover</h6>
                        <img src="{{ url('storage/cover/' . $data->cover) }}" alt="cover" class="w-32 sm:w-full h-auto rounded">
                    </div>
                @endif
            </div>
        </div>

    </div>
@endsection
