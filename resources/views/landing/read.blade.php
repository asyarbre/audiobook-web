@extends('layouts.content')

@section('title')
    {{ $data[0]->book->title }}
@endsection

@section('content')
    <div class="w-full h-screen md:h-auto carousel">
        @foreach ($data as $item)
            <progress class="progress w-full absolute progress-primary" value="{{ $item->page }}"
                max="{{ $last_page }}"></progress>
            <div class="carousel-item w-full flex-col gap-2">
                <div class="flex mt-4 justify-between mx-3 lg:justify-around">
                    <a href="{{ url('book') . '/' . $item->book->slug }}" class="btn btn-circle btn-accent">
                        <x-fas-xmark class="w-6 h-6" />
                    </a>
                    <audio id="audio" src="{{ url('storage/audio') . '/' . $item->audio }}" autoplay></audio>
                    <button type="button" onclick="play()" class="btn btn-circle btn-accent">
                        <span id="icon">
                            <x-fas-pause class="w-6 h-6" />
                        </span>
                    </button>
                </div>
                <img src="{{ url('storage/book_content') . '/' . $item->book_content }}" alt="{{ $item->book->title }}"
                    class="w-[80%] h-full mx-auto sm:w-5/6 lg:w-2/5 md:h-auto object-fill" />
            </div>
        @endforeach
        {{ $data->links() }}
    </div>
@endsection

<script>
    function play() {
        var audio = document.getElementById("audio");
        var icon = document.getElementById("icon");
        if (audio.paused) {
            audio.play();
            icon.innerHTML = '<x-fas-pause class="w-6 h-6" />';
        } else {
            audio.pause();
            icon.innerHTML = '<x-fas-play class="w-6 h-6" />';
        }
    }
</script>
