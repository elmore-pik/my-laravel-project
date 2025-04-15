<x-layout>
    <x-slot:title>
        {{ $post->title }} | My Laravel App
    </x-slot:title>

    <h1>{{ $post->title }}</h1>
    <p>{!! nl2br($post->body) !!}</p>

    <p class="back-link"><a href="{{ route('posts.index') }}">Back</a></p>
</x-layout>
