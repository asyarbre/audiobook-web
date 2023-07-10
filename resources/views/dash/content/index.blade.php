@extends('layouts.dash')

@section('title', 'Content Book')

@section('content')
    <div class="card w-full bg-base-100 shadow-xl border border-base-300">
        <div class="card-body">
            <div class="flex items-center gap-4 mb-4">
                <a role="button" class="btn btn-secondary btn-sm w-28" href="{{ route('content.create') }}">
                    <x-fas-plus class="w-4 h-4" />Tambah
                </a>
                <form action="{{ route('content.index')}}" class="grow justify-self-end">
                    <x-text-input type="search" class="input-secondary max-w-xl" name="search" placeholder="Search"
                        value="{{ Request::get('search') }}" />
                </form>
            </div>
            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Buku</th>
                            <th>Halaman</th>
                            <th>Audio</th>
                            <th>Content</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if ($item->book->cover)
                                        <img src="{{ url('storage/cover') . '/' . $item->book->cover }}"
                                            alt="{{ $item->book->title }}" class="w-20 h-auto object-fill rounded">
                                        <p class="mt-1 font-semibold">{{ $item->book->title }}</p>
                                    @endif
                                </td>
                                <td>{{ $item->page }}</td>
                                <td>
                                    <audio controls>
                                        <source src="{{ url('storage/audio') . '/' . $item->audio }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </td>
                                <td>
                                    @if ($item->book_content)
                                        <img src="{{ url('storage/book_content') . '/' . $item->book_content }}"
                                            alt="{{ $item->book->title }}" class="w-20 h-auto object-fill rounded">
                                    @endif
                                </td>
                                <td>
                                    <div class="flex gap-1">
                                        <x-button-action class="btn-primary"
                                            href="{{ url('/dashboard/content/' . $item->id . '/edit') }}">
                                            <x-fas-pen class="w-3 h-3" />
                                        </x-button-action>
                                        <form action="{{ '/dashboard/content/' . $item->id }}" method="POST"
                                            onsubmit="return confirm('Apakah data ingin dihapus ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-accent btn-sm btn-square text-white">
                                                <x-fas-trash class="w-3 h-3" />
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- pagination -->
                <div class="mt-2">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
