@extends('layouts.main')
@section('container')

<h1 class="text-center text-bold">Tech Insights: <span>Exploring the Future of <br> Technology</span>
</h1>

<div class="row">
  @foreach ($posts as $post)
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="https://picsum.photos/seed/{{ $post['slug'] }}/500/300" class="card-img-top" alt="{{ $post['title'] }}">
        <div class="card-body">
          <h5 class="card-title">
            <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
          </h5>
          <p class="card-text">{{ Str::limit($post['content'], 100) }}</p>
          <small class="text-muted float-end">Author: {{ $post['author'] }}</small>
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection
