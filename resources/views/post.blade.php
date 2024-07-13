@extends('layouts.main')
  @section('container')
  <article>
    <h2 class="mb-4">{{ $post->title }}</h2>
    <h5>{{ $post->author }}</h5>
    {!! $post->content !!}
  </article>

  <a class="d-block mt-2" href="/">Back to Posts</a>
      
  @endsection

  