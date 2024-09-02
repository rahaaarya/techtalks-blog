@extends('layouts.main')

@section('container')
<div class="container">
  <h1 class="text-center text-bold mb-5">Tech Insights: <span>Exploring the Future of <br> Technology</span></h1>
  <div class="d-flex justify-content-between align-items-center">
    <h3 class="mb-0">{{ $title }}</h3>
    <div class="col-md-6">
      <form action="/">
          @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}"> 
          @endif
          @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}"> 
        @endif
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for posts..." name="search" value="{{ request('search') }}">
          <button class="btn btn-warning" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>
  

  <hr class="mb-5">

  {{-- Check if there are posts --}}
  @if ($posts->count())
  <div id="carouselExampleControls" class="carousel slide mb-3" data-bs-ride="carousel" data-bs-interval="3000" style="max-width:100%; margin:auto;">
    <div class="carousel-inner">
      @foreach ($posts->take(3) as $index => $post)
      <div class="carousel-item @if ($index === 0) active @endif">
        <img src="https://via.placeholder.com/800x400?{{ $post->slug }}/800/400" class="d-block w-100 carousel-img" alt="{{ $post->title }}">
        <div class="carousel-caption">
          <h4>{{ $post->title }}</h4>
          <small class="text-white">
            By. <a href="/?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}
          </small>
          <p>{{ Str::limit($post->excerpt, 100) }}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary mt-4">Read More</a>
        </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <i class="bi bi-arrow-left-square-fill fs-2 carousel-nav-icon" aria-hidden="true"></i>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <i class="bi bi-arrow-right-square-fill fs-2 carousel-nav-icon" aria-hidden="true"></i>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  {{-- Display all posts --}}
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($posts->skip(3) as $post)
    <div class="col">
      <div class="card h-100">
        <div class="position-relative">
          <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7); bottom: 0;">
            <a href="/?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
          </div>
          <img src="https://via.placeholder.com/500x400?{{ $post->slug }}/500/400" alt="{{ $post->category->name }}" class="card-img-top">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p>
            <small class="text-muted">
              By. <a href="/?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
            </small>
          </p>
          <p class="card-text">{{ Str::limit($post->excerpt, 80) }}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
  @else
  <p class="text-center fs-4">No posts found.</p>
  @endif

  <div class="d-flex justify-content-center mt-5">
    {{ $posts->links() }}
  </div>
    
@endsection
