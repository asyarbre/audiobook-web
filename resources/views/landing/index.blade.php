@extends('layouts.landing')

@section('title', 'Audiobook Polimedia')

@section('content')

    <section id="header" class="w-full">
        <div class="flex flex-col lg:flex-row lg:max-w-6xl lg:mx-auto lg:items-center">
            <div class="mt-10 lg:mt-5 lg:mt-15 mb-5 px-4 py-4">
                <h4 class="text-xl font-bold">Audio Book Polimedia</h4>
                <p class=" text-justify mt-5">Platform Audiobook ini berisikan karya tugas akhir mahasiswa Program Studi
                    Penerbitan Politeknik Negeri Media Kreatif.
                    Audiobook ini bertujuan untuk memberikan reading experience bagi para pembaca untuk menikmati buku tanpa
                    harus membaca langsung.
                    Selamat Mendengarkan!</p>
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

    <section id="all-category" class="w-full lg:max-w-6xl lg:mx-auto mt-8 px-4">
        <div class="flex justify-between gap-20 items-center">
            <h1 class="font-bold sm:text-lg text-gray-700">Semua Kategori</h1>
            <a href="{{ route('category.all-category') }}" class="text-primary text-sm hover:text-secondary">Lihat Semua</a>
        </div>
        <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box ">
            @foreach ($data as $item)
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

    <section id="buku-anak" class="w-full lg:max-w-6xl lg:mx-auto mt-8 px-4">
        <div class="flex justify-between gap-20 items-center">
            <h1 class="font-bold sm:text-lg text-gray-700">Buku Anak</h1>
            <a href="{{ url('category') . '/' . 'buku-anak' }}" class="text-primary text-sm hover:text-secondary">Lihat
                Semua</a>
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
            <a href="{{ url('category') . '/' . 'fiksi' }}" class="text-primary text-sm hover:text-secondary">Lihat
                Semua</a>
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
            <a href="{{ url('category') . '/' . 'non-fiksi' }}" class="text-primary text-sm hover:text-secondary">Lihat
                Semua</a>
        </div>
        <div class="carousel carousel-center w-full p-4 space-x-4 lg:space-x-8 rounded-box">
            @foreach ($dataBukuNonFiksi as $item)
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
@endsection
