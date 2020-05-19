@extends('app')
@section ('content')
  <div class="container">
    <h1><b>New Post</b></h1>
@if($errors->any())
  <ul class="alert">
    @foreach ($errors->all() as $error)
    <li> {{ $error }}</li>
    @endforeach
  </ul>
@endif

{!! Form::open(['route' => 'admin.posts.store', 'method'=>'post']) !!}
@include('admin.posts._form')

<div class="form-group">
{!! Form::label('content','Tags:') !!}
{!! Form::textarea('tags', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Create Post', ['class' => 'btn btn-primary ']) !!}
</div>

<!! Form::close !!}
  </div>
@endsection
