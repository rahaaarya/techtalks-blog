@extends('layouts.main')
  @section('container')
  <article>
    <h2 class="mb-4">{{ $post->title }}</h2>
    <h5>Author by. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in  <a  class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    {!! $post->content !!}
  </article>

  <a class="d-block mt-2" href="/">Back to Posts</a>
      
  @endsection

  