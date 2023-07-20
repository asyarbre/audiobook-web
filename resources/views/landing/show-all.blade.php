@extends('layouts.content')

@section('title', 'Audibook Polimedia')

@section('content')
    <div class="w-full md:mx-auto md:max-w-2xl lg:max-w-4xl">
      <div class="flex items-center mt-4 ml-4 space-x-4">
        <a href="{{ url('/')}}" class="btn btn-circle btn-accent">
                <x-fas-arrow-left class="w-6 h-6" />
            </a>
        <h5 class="font-bold text-gray-700 text-lg">Semua Kategori</h5>
      </div>
      <div class="flex flex-wrap mt-8 px-2 justify-start">
        @foreach ($data as $item)
            <div class="basis-1/3 sm:basis-1/4 lg:basis-1/6 mt-2 px-2 hover:scale-110">
                <a href="{{ url('book' . '/' . $item->slug) }}">
                    @if ($item->cover)
                        <img src="{{ url('storage/cover' . '/' . $item->cover) }}" alt="{{ $item->title }}"
                            class="rounded-box w-full h-auto object-fill shadow-lg" />
                    @endif
                    <h2 class="text-center font-semibold text-gray-600 mt-2">{{ $item->title }}</h2>
                </a>
            </div>
        @endforeach
      </div>
    </div>
@endsection