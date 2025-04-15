<x-layout>
    <x-slot:title>
        {{ $post->title }} | My Laravel App
    </x-slot:title>

    <h1>
        {{ $post->title }}
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
        <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete-form">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>

    <h2>Comments</h2>
    <ul>
        @forelse ($post->comments as $comment)
            <li>{{ $comment->body }}</li>
        @empty
            <li>No comment</li>
        @endforelse
    </ul>

    <h2>Add a comment</h2>
    <form>
        <div>
            <input type="text">
            <button>Add</button>
        </div>
    </form>

    <p class="back-link"><a href="{{ route('posts.index') }}">Back</a></p>

    <script>
        'use strict';

        {
            const form = document.querySelector('#delete-form');
            form.addEventListener('submit', (e) => {
                e.preventDefault();

                if (confirm('Sure?') === false) {
                    return;
                }

                form.submit();
            });
        }
    </script>
</x-layout>
