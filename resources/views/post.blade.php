@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2 class="mb-2">{{ $post->title }}</h2>
      <p class="text-muted">
        By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>
        <span class="mx-2" style="color: gray;">|</span>
        {{ $post->created_at->diffForHumans() }}
      </p>
      <img src="https://via.placeholder.com/1200x400?{{ $post->slug }}/1200/400" alt="{{ $post->category->name }}" class="img-fluid mb-4">
      <article class="fs-5">
        {!! $post->content !!}
      </article>
     
      <a class="d-block mt-2" href="/">Back to Posts</a>
    </div>
  </div>
</div>
@endsection
