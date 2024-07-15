@extends('layouts.main')
@section('container')

<h1 class="text-center text-bold mb-5">Tech Insights: <span>Exploring the Future of <br> Technology</span>
</h1>

<div class="row">
  @foreach ($posts as $post)
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="position-relative">
          <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.8); bottom: 0;" >
            <a class="text-decoration-none  text-white" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
          </div>
          <img src="https://picsum.photos/seed/{{ $post['slug'] }}/500/300" class="card-img-top" alt="{{ $post['title'] }}">
        </div>
       
        <div class="card-body">
          <h5 class="card-title">
            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
          </h5>
          <p class="card-text">{{ Str::limit($post->excerpt, 100) }}</p>
         <small class="float-end ">Author : 
          <a class="text-decoration-none" href="#">{{ $post->user->name }}</a>
         
        </small>
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection
