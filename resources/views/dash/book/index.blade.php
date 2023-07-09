@extends('layouts.dash')

@section('title', 'Book')

@section('content')
    <div class="card w-full bg-base-100 shadow-xl border border-base-300">
        <div class="card-body">
            <a role="button" class="btn btn-secondary btn-sm w-28" href="{{ route('book.create') }}">
                <x-fas-plus class="w-4 h-4" />Tambah
            </a>
            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Cover</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if ($item->cover)
                                        <img src="{{ url('storage/cover') . '/' . $item->cover }}" alt="{{ $item->title }}"
                                            class="w-20 h-auto object-fill rounded">
                                    @endif
                                </td>
                                <td>{{ $item->author }}</td>
                                <td>{{ Str::of($item->description)->limit(50) }}</td>
                                <td>{{ ucwords(str_replace('-', ' ', $item->category)) }}</td>
                                <td>
                                    <div class="flex gap-1">
                                        <x-button-action class="btn-primary"
                                            href="{{ url('/dashboard/book/' . $item->id . '/edit') }}">
                                            <x-fas-pen class="w-3 h-3" />
                                        </x-button-action>
                                        <form action="{{ '/dashboard/book/' . $item->id }}" method="POST"
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
                {{ $data->links() }}
            </div>
        </div>
    </div>

@endsection
