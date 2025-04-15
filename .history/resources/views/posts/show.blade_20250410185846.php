<x-layout>
    <x-slot:title>
        {{ $post->title }} | My Laravel App
    </x-slot:title>

    <h1>
        {{ $post->title }}
        <a href="">Edit</a>
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>

    <p class="back-link"><a href="{{ route('posts.index') }}">Back</a></p>
</x-layout>
d