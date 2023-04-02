@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
        <h1 class="mb-3">{{ $post->title }}</h1>
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Edit </a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger " onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span> Delete </button>
          </form>


          @if ($post->image)
            <div style="max-height : 350px; overflow:hidden;">
                 <img src="{{ asset('storage/'. $post->image) }}" 
                 alt="{{ $post->category->name}} " class="img-fluid mt-3">
            </div>
          @else
         
          <img src="https://asset.kompas.com/crops/zmyPX1lqPWG55HKx6nYIfTJ6Ak8=/109x76:795x532/750x500/data/photo/2021/09/08/6138400587c9f.jpg" 
          alt="image" height="300" width="600" class="img-fluid mt-3">

          @endif
        
        <article class="my-3 fs-5">
        {!!  $post->body !!}
        </article>
        </div>
    </div>
</div>
@endsection