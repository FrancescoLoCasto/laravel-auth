@extends('layouts.admin')

@section('content')
<div class="container">



   <table class="table table-striped table-bordered table-hover m-5">
      <thead>
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col">Post</th>
          <th scope="col">
            <a href="" class="btn btn-sm btn-primary">
               Create New!
            </a>
          </th>

        </tr>
      </thead>
      <tbody>
         @foreach ($posts as $post)
         <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->author}}</td>
            <td>{{$post->post_date}}</td>
            <td>
               <a href="" class="btn btn-sm btn-primary">
                  Edit
               </a>
               <a href="" class="btn btn-sm btn-warning">
                  Show
               </a>
               <a href="" class="btn btn-sm btn-danger">
                  Delete
               </a>
            </td>
         </tr>
         @endforeach
      </tbody>
    </table>
</div>
@endsection
