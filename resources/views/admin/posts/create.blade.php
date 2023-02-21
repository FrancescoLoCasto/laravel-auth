@extends('layouts.admin')

@section('content')
<div class="container">
 
  @include('admin.partials.editCreateForm', ['method'=>POST','routeName','admin.posts.store'])
</div>
@endsection
