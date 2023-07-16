@extends('layouts.content')

@section('title')
    {{ $data->title }}
@endsection

@section('content')
    <div class="h-screen md:mx-auto md:h-auto md:max-w-2xl lg:max-w-4xl flex flex-col justify-between p-4 md:p-8">
        <button onclick="backPage()" class="mt-4">
            <x-fas-arrow-left class="w-6 h-6" />
        </button>
        <div class="text-center grow">
            <div>
                @if ($data->cover)
                    <img src="{{ url('storage/cover') . '/' . $data->cover }} " alt="{{ $data->title }}"
                        class="w-52 mx-auto h-auto object-fill rounded shadow-xl">
                @endif
                <h1 class="font-bold mt-2 text-gray-800 text-xl">{{ $data->title }}</h1>
                <h2 class="text-gray-500">{{ $data->author }}</h2>
            </div>
            <h3 class="badge mt-2 badge-secondary badge-outline">{{ ucwords(str_replace('-', ' ', $data->category)) }}
            </h3>
            <div class="text-left mt-4">
                <h3 class="font-bold text-gray-800 text-lg">Deskripsi</h3>
                <p class="mt-2 text-gray-500">{{ $data->description }}</p>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ url('read') . '/' . $data->slug }}" class="btn btn-accent btn-block">Mulai Membaca</a>
        </div>
    </div>
@endsection
