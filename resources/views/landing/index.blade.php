@extends('layouts.landing')

@section('title', 'Audiobook Polimedia')

@section('content')

    <section id="header" class="w-full">
        <div class="flex flex-col lg:flex-row lg:max-w-6xl lg:mx-auto lg:items-center">
            <div class="mt-10 lg:mt-5 lg:mt-15 mb-5 px-4 py-4">
                <h4 class="text-xl font-bold">Audio Book Polimedia</h4>
                <p class=" text-justify mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto facere impedit
                    earum doloremque fugiat,
                    voluptate labore animi libero neque. Voluptatibus eos explicabo incidunt nulla, dolorum ducimus optio!
                    Sapiente nesciunt
                    mollitia eveniet vero unde ad in minus dicta provident!
                    Molestias delectus cumque unde recusandae repellendus velit fuga enim aspernatur necessitatibus
                    exercitationem.</p>
            </div>
            <div class="mt-5 md:mt-16 lg:mt-16 mb-10 px-5 md:w-full lg:w-[80%]">
                <swiper-container class="mySwiper w-32 lg:w-40 rounded-box hidden lg:block" effect="cards" grab-cursor="true">
                    @foreach ($data as $item)
                        <swiper-slide>
                            @if ($item->cover)
                                <img src="{{ url('storage/cover' . '/' . $item->cover) }}" alt="{{ $item->title }}"
                                    class="w-auto h-auto rounded-box">
                            @endif
                        </swiper-slide>
                    @endforeach
                </swiper-container>
            </div>
        </div>
    </section>

    <section id="search-content" class="w-full mb-10">
        <div class="lg:max-w-6xl lg:mx-auto mt-8 px-4">
            <div class="text-center font-Poppins">
                <h1 class="text-3xl">Search An Audiobook</h1>
                <p class="text-sm text-slate-400 mt-2">Kalian bisa mencari audiobook yang kalian mau baca disini ..</p>
            </div>
            <form action="/search" method="GET" class="w-[60%] mx-auto mt-5 mb-10">   
                <label for="default-search" class="mb-2 text-sm font-medium sr-only">Search</label>
                <div class="relative">
                    <div class="absolute top-6 md:inset-y-0 left-0 flex  items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" name="search" id="default-search" class="input input-bordered block w-full py-8 pl-10 text-sm" placeholder="Search Audiobook ..." required>
                    <button type="submit" class="w-full md:w-32 text-white md:absolute md:right-3 md:bottom-3 mt-5 mb-3 md:mt-0 md:mb-0  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-3">Search</button>
                </div>
            </form>
        </div>
    </section>

    <section id="all-category" class="w-full lg:max-w-6xl lg:mx-auto mt-8 px-4">
        <div class="flex justify-between gap-20 items-center">
            <h1 class="font-bold sm:text-lg text-gray-700">Semua Kategori</h1>
            <a href="{{ route('category.all-category') }}" class="text-primary text-sm">Lihat Semua</a>
        </div>
        <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box ">
            @foreach ($data as $item)
                <div class="carousel-item hover:scale-110 items-end">
                    <a href="{{ url('book' . '/' . $item->slug) }}">
                        @if ($item->cover)
                            <img src="{{ url('storage/cover' . '/' . $item->cover) }}" alt="{{ $item->title }}"
                                class="rounded-box w-32 h-44 object-fill shadow-lg" />
                        @endif
                       
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section id="buku-anak" class="w-full lg:max-w-6xl lg:mx-auto mt-8 px-4">
        <div class="flex justify-between gap-20 items-center">
            <h1 class="font-bold sm:text-lg text-gray-700">Buku Anak</h1>
            <a href="{{ url('category') . '/' . 'buku-anak'}}" class="text-primary text-sm">Lihat Semua</a>
        </div>
        <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box">
            @foreach ($dataBukuAnak as $item)
                <div class="carousel-item hover:scale-110 items-end">
                    <a href="{{ url('book' . '/' . $item->slug) }}">
                        @if ($item->cover)
                            <img src="{{ url('storage/cover' . '/' . $item->cover) }}" alt="{{ $item->title }}"
                                class="rounded-box w-32 h-44 object-fill shadow-lg" />
                        @endif
                        <h2 class="text-center font-semibold w-28 mx-auto text-gray-600 mt-2">{{ $item->title }}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section id="buku-fiksi" class="w-full lg:max-w-6xl lg:mx-auto mt-8 px-4">
        <div class="flex justify-between gap-20 items-center">
            <h1 class="font-bold sm:text-lg text-gray-700">Buku Fiksi</h1>
            <a href="{{ url('category') . '/' . 'fiksi'}}" class="text-primary text-sm">Lihat Semua</a>
        </div>
        <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box">
            @foreach ($dataBukuFiksi as $item)
                <div class="carousel-item hover:scale-110 items-end">
                    <a href="{{ url('book' . '/' . $item->slug) }}">
                        @if ($item->cover)
                            <img src="{{ url('storage/cover' . '/' . $item->cover) }}" alt="{{ $item->title }}"
                                class="rounded-box w-32 h-44 object-fill shadow-lg" />
                        @endif
                        <h2 class="text-center font-semibold w-28 mx-auto text-gray-600 mt-2">{{ $item->title }}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section id="buku-non-fiksi" class="w-full lg:max-w-6xl lg:mx-auto mt-8 px-4">
        <div class="flex justify-between gap-20 items-center">
            <h1 class="font-bold sm:text-lg text-gray-700">Buku Non Fiksi</h1>
            <a href="{{ url('category') . '/' . 'non-fiksi'}}" class="text-primary text-sm">Lihat Semua</a>
        </div>
        <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box">
            @foreach ($dataBukuNonFiksi as $item)
                <div class="carousel-item hover:scale-110 items-end">
                    <a href="{{ url('book' . '/' . $item->slug) }}">
                        @if ($item->cover)
                            <img src="{{ url('storage/cover' . '/' . $item->cover) }}" alt="{{ $item->title }}"
                                class="rounded-box w-32 h-auto object-fill shadow-lg" />
                        @endif
                        <h2 class="text-center font-semibold w-28 mx-auto text-gray-600 mt-2">{{ $item->title }}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
