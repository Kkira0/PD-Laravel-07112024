<x-app-layout>
    <h1>Edit post</h1>

    <form action="/posts/{{$post->id}}/update" method="POST">
        @csrf
        @method('PUT')
    
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{ $post->title }}">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        <br>
        <label for="published_at">Published at:</label>
        <input type="date" name="published_at" id="published_at" value="{{$post->published_at}}">
        <br>
        <input type="submit" value="Update">

        
    </form>
</x-app-layout>
