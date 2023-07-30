@extends('layouts.front')

@section('title', 'Kategori')

@section('content')
    <div class="w-full mt-5 px-5 md:mx-auto md:max-w-2xl lg:max-w-4xl">
        <h1 class="font-bold text-gray-700 text-lg sm:text-xl md:text-2xl mb-5">Kategori</h1>
        <div class="flex flex-wrap justify-around">
            <a href="{{ url('category') . '/' . 'buku-anak' }}" class="basis-1/3 px-2 hover:scale-110">
                <img src="{{ url('images/buku-anak.png') }}" class="w-auto mx-auto h-20 sm:h-24 md:h-28 lg:h-32"
                    alt="icon-buku-anak">
                <h2 class="text-center text-sm font-semibold text-gray-600 mt-2">Buku Anak</h2>
            </a>
            <a href="{{ url('category') . '/' . 'fiksi' }}" class="basis-1/3 px-2 hover:scale-110">
                <img src="{{ url('images/buku-fiksi.png') }}" class="w-auto mx-auto h-20 sm:h-24 md:h-28 lg:h-32"
                    alt="icon-buku-fiksi">
                <h2 class="text-center text-sm font-semibold text-gray-600 mt-2">Buku Fiksi</h2>
            </a>
            <a href="{{ url('category') . '/' . 'non-fiksi' }}" class="basis-1/3 px-2 hover:scale-110">
                <img src="{{ url('images/buku-non-fiksi.png') }}" class="w-auto mx-auto h-20 sm:h-24 md:h-28 lg:h-32"
                    alt="icon-buku-non-fiksi">
                <h2 class="text-center text-sm font-semibold text-gray-600 mt-2">Buku Non Fiksi</h2>
            </a>
        </div>
    </div>
@endsection
