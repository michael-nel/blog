@extends('app')
@section ('content')
<div class="container">
 <h1 class="text-center">Manage Blog</h1>
  <a href="{{ route('admin.posts.create')}}" class="btn btn-success" style="margin-bottom:20px">Create new post</a>
<table class="table table-striped">
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Action</th>
  </tr>
  @foreach($posts as $post)
    <tr>
    <td>{{$post->id}}</td>
    <td>{{$post->title}}</td>
    <td>
    <a href="{{ route('admin.posts.edit',['id' => $post->id]) }}">Edit</a>&nbsp;|&nbsp;
    <a href="{{ route('admin.posts.destroy',['id' => $post->id]) }}">Delete</a>
    </td>
    </tr>
  @endforeach
</table>
  <div class="text-center">
{!! $posts->render()!!}
  </div>
</div>
@endsection
