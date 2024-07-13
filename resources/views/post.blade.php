@extends('layouts.main')
  @section('container')
  <article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["content"] }}</p>
  </article>

  <a href="/">Back to Posts</a>
      
  @endsection

  