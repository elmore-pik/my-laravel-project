<x-layout>
    <x-slot:title>
        {{ $post->title }} | My Laravel App
    </x-slot:title>

    <h1>
        {{ $post->title }}
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>

    <p class="back-link"><a href="{{ route('posts.index') }}">Back</a></p>
</x-layout>
