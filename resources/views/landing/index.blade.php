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
        <div class="lg:max-w-6xl lg:mx-auto mt-8 px-4 font-Poppins">
            <div class="bg-white-50 border border-gray-200 rounded-lg p-8 md:p-12 mb-8">
                <h1 class="text-gray-900 text-3xl md:text-5xl font-extrabold mb-2">Search More Audio Book</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Kalian bisa mencari lebih audiobook yang kalian mau baca disini ..</p>
                <a href="{{ url('/search-book')}}" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Search
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section id="all-category" class="w-full lg:max-w-6xl lg:mx-auto mt-8 px-4">
        <div class="flex justify-between gap-20 items-center">
            <h1 class="font-bold sm:text-lg text-gray-700">Semua Kategori</h1>
            <a href="{{ route('category.all-category') }}" class="text-primary text-sm">Lihat Semua</a>
        </div>
        <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box ">
            @foreach ($data as $item)
                <div class="carousel-item hover:scale-110 ">
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
                <div class="carousel-item hover:scale-110">
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
                <div class="carousel-item hover:scale-110">
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
                <div class="carousel-item hover:scale-110">
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
