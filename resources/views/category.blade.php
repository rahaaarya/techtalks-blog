@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Post Category : <span>{{ $category }}</span></h1>

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-3 mb-3">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <img src="{{ asset('img/web-design.png') }}" width="50" alt="web-design" class="mb-3">
                        <h5 class="card-title mb-2"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <small class="text-muted float-end">Author: {{ $post->author }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
