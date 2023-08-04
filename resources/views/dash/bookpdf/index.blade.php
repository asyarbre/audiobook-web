@extends('layouts.dash')

@section('title', 'Book Pdf')

@section('content')
    <div class="card w-full bg-base-100 shadow-xl border border-base-300">
        <div class="card-body">
            <div class="flex items-center gap-4 mb-4">
                <a role="button" class="btn btn-secondary btn-sm w-28" href="{{ route('bookpdf.create') }}">
                    <x-fas-plus class="w-4 h-4" />Tambah
                </a>
                <form action="{{ route('bookpdf.index') }}" class="grow justify-self-end">
                    <x-text-input type="search" class="input-secondary max-w-xl" name="search"
                        placeholder="Cari berdasarkan judul" value="{{ Request::get('search') }}" />
                </form>
            </div>

            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Cover</th>
                            <th>Title</th>
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
                                <td>{{ $item->title }}</td>
                                <td>{{ ucwords(str_replace('-', ' ', $item->category)) }}</td>
                                <td>
                                    <div class="flex gap-1">
                                        <x-button-action class="btn-primary"
                                            href="{{ url('/dashboard/bookpdf/' . $item->id . '/edit') }}">
                                            <x-fas-pen class="w-3 h-3" />
                                        </x-button-action>
                                        <form action="{{ '/dashboard/bookpdf/' . $item->id }}" method="POST"
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
