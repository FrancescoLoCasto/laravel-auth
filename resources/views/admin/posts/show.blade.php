@extends('layouts.admin')

@section('content')
<div class="container">




   <div class="card text-center">
      <div class="card-header">
         {{$post->author}}
      </div>
      <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <div class="card-body">
            <img src="{{asset ('storage/' . $post->image)}}" alt="" class="img-fluid">
        </div>
        <p class="card-text">{{$post->content}}</p>
        <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-sm btn-primary">
         Edit
         </a>
        <a href="#" class="btn btn-sm btn-danger">
         Delete
        </a>
      </div>
      <div class="card-footer text-muted">
         {{$post->post_date}}
      </div>
    </div>
       </div>
</div>
@endsection
