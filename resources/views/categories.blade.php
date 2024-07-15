@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Explore by<br><span>Category</span></h1>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-3 mb-3">
                <a href="/categories/{{ $category->slug }}" class="card-link">
                    <div class="card" style="width: 18em;">
                        <div class="card-body">
                            <img src="https://picsum.photos/seed/{{ $category->id }}/300/200" alt="{{ $category->name }}" class="mb-3" style="width: 100%; height: auto;">
                            <h5 class="card-title mb-2">{{ $category->name }}</h5>
                            <p class="text-muted description">{{ $category->description }}</p> <!-- Menampilkan deskripsi kategori -->
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
