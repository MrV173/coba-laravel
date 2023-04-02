
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
        <h1 class="mb-3">{{ $post->title }}</h1>
        <p>By. <a href="/posts?author= {{ $post->author->username }}" class="text-decoration-none">{{  $post->author->name }}</a> 
            <a href="/posts?category={{  $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
       
            @if ($post->image)
            <div style="max-height : 350px; overflow:hidden;">
                 <img src="{{ asset('storage/'. $post->image) }}" 
                 alt="{{ $post->category->name}} " class="img-fluid">
            </div>
          @else
         
          <img src="https://asset.kompas.com/crops/zmyPX1lqPWG55HKx6nYIfTJ6Ak8=/109x76:795x532/750x500/data/photo/2021/09/08/6138400587c9f.jpg" 
          alt="image" height="300" width="600" class="img-fluid">

          @endif
        
        <article class="my-3 fs-5">
        {!!  $post->body !!}
        </article>
<a href="/posts" class="d-block mt-5"> Back to posts</a>
        </div>
    </div>
</div>

@endsection