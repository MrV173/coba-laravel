
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>


    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{  $category->slug }}">
                <div class="card text-bg-dark">
                    <img src="https://cdn.idntimes.com/content-images/community/2022/09/a-cover-9b3ad9f379c33a673cb97fe2c1b99836-56a5137eac9fa53cca816874bf65c735_600x400.jpg" class="card-img" alt="{{ $category->name }} image height="300" width="100">
                    <div class="card-img-overlay">
                      <h5 class="card-title">{{ $category->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection  