<x-layout>
    <x-slot:title>
        Add new post | My Laravel App
    </x-slot:title>

    <h1>Add new post</h1>
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label>
                Title
                <input type="text" name="title">
            </label>
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>     
            <label>
               Body
               <textarea name="body"></textarea>
           </label>
           @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button>Add</button>
        </div>
    </form>

    <p class="back-link"><a href="{{ route('posts.index') }}">Back</a></p>
</x-layout>
