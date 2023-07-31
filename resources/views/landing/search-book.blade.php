@extends('layouts.search')

@section('title', 'Audiobook Polimedia')

@section('content')

    <section id="search-content" class="w-full mb-10">
        <div class="md:mx-auto md:h-auto md:max-w-2xl lg:max-w-4xl flex flex-col justify-between p-4 md:p-8">
            <a href="{{ url('/')}}">
                <x-fas-arrow-left class="w-6 h-6 hover:text-red-400" />
            </a>
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

    <section id="all-category" class="md:mx-auto md:h-auto md:max-w-2xl lg:max-w-4xl flex flex-col justify-between p-4 md:p-8">
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


