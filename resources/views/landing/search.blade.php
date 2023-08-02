@extends('layouts.front')

@section('title', 'Cari Buku')

@section('content')
    <div class="w-full mt-5 px-5 md:mx-auto md:max-w-2xl lg:max-w-4xl">
        <form action="{{ route('landing.search')}}">
            <x-text-input type="search" class="input-primary w-full" name="search" placeholder="Cari berdasarkan Judul Buku" value="" />
        </form>
        <div class="flex flex-wrap mt-5 px-2 justify-start">
            @foreach ($data as $item)
                <div class="basis-1/3 sm:basis-1/4 lg:basis-1/6 mt-2 px-2 hover:scale-110">
                    <a href="{{ url('book' . '/' . $item->slug) }}">
                        @if ($item->cover)
                            <img src="{{ url('storage/cover' . '/' . $item->cover) }}" alt="{{ $item->title }}"
                                class="rounded-box w-full h-44 object-fill shadow-lg" />
                        @endif
                        <h2 class="text-center text-sm font-semibold text-gray-600 mt-2">{{ $item->title }}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
