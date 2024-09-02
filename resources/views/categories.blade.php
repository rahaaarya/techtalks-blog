@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Explore by<br><span>Category</span></h1>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3" style="margin: auto">
                <a href="/?category={{ $category->slug }}" class="card-link text-decoration-none">
                    <div class="card" style="width: 100%;">
                        <div class="card-body ">
                            <img src="https://via.placeholder.com/300x200?{{ $category->id }}/300/200" alt="{{ $category->name }}" class="mb-3" style="width: 100%; height: auto;">
                            <h5 class="card-title mb-2">{{ $category->name }}</h5>
                            <p class="text-muted description ">{{ $category->description }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
