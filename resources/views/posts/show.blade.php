<x-app-layout>
    <a href="/posts">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
    <p>Published at: {{$post->published_at}}</p>
    <a href="/posts">Back to All posts</a>
</x-app-layout>
