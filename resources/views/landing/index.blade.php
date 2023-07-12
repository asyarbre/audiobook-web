@extends('layouts.landing')

@section('title', 'Home')

@section('navbar')
        <div class="container mx-auto">
            <div class="flex justify-between">
                <h4 class="font-Poppins text-primary">{{$judul['header']}}</h4>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                </svg>                  
            </div>
            {{-- Mobile Navbar --}}
            <div class="fixed bottom-0 right-0 left-0 w-full bg-white p-4">
                <ul class="flex justify-between mx-6">
                    <li><a href="" class="flex justify-center flex-col items-center gap-2">
                            <ion-icon name="book-outline" class="text-2xl"></ion-icon>
                            <span class="text-base font-bold">Category</span>
                        </a>
                    </li>
                    <li><a href="" class="flex justify-center flex-col items-center gap-2 ">
                        {{-- <div class="absolute bg-primary top-0 px-2 py-2 rounded-full w-16 h-16"></div> --}}
                            <ion-icon name="home-outline" class="text-2xl"></ion-icon>
                            <span class="text-base font-bold">Home</span>
                        </a>
                    </li>
                    <li><a href="" class="flex justify-center flex-col items-center gap-2">
                        <ion-icon name="search-outline" class="text-2xl"></ion-icon>
                        <span class="text-base font-bold">Search</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
@endsection

