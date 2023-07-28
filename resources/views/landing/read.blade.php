@extends('layouts.content')

@section('title')
    {{ $data[0]->book->title }}
@endsection

@section('content')
    <div class="w-full h-screen">
        @foreach ($data as $item)
            <progress class="progress w-full progress-accent" value="{{ $item->page }}" max="{{ $last_page }}"></progress>
            <div class="flex flex-col justify-evenly gap-10 lg:gap-0">
                <div class="flex justify-between mt-3 px-3 lg:px-10">
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
                    class="w-full h-auto mx-auto lg:w-2/5 lg:mb-10" />
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
