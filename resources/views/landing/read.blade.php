@extends('layouts.content')

@section('title')
    {{ $data[0]->book->title }}
@endsection

@section('content')
    <div class="w-full h-screen md:h-auto carousel">
        @php
            $lastPage = $data->last()->page;
        @endphp
        @foreach ($data as $item)
            <div id="page{{ $item->page }}" class="carousel-item w-full lg:relative flex-col gap-2">
                <progress class="hidden lg:block lg:absolute progress progress-primary w-full" value="{{ $item->page }}"
                    max="{{ $lastPage }}"></progress>
                <div class="flex mt-4 mx-2 lg:justify-around lg:mx-auto lg:w-full justify-between">
                    <button onclick="backPage()" class="btn btn-circle btn-accent">
                        <x-fas-xmark class="w-6 h-6" />
                    </button>
                    <div>
                        <audio id="audio" controls>
                            <source src="{{ url('storage/audio') . '/' . $item->audio }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        {{-- <button type="button" onclick="play()" class="btn btn-circle btn-accent">
                            <span id="icon">
                                <x-fas-play class="w-6 h-6" />
                            </span>
                        </button> --}}
                    </div>
                </div>

                <img src="{{ url('storage/book_content') . '/' . $item->book_content }}" alt="{{ $item->book->title }}"
                    class="w-full h-full sm:mx-auto sm:w-5/6 lg:w-2/5 md:h-auto object-fill" />

                <div class="hidden lg:absolute lg:flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#page{{ $item->page - 1 }}" class="btn btn-circle">❮</a>
                    <a href="#page{{ $item->page + 1 }}" class="btn btn-circle">❯</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
