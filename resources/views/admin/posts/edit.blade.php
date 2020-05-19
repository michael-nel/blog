@extends('app')
@section ('content')
  <div class="container">
<h1><b>Post: </b><u>{{ $post->title }}</u></h1>

@if($errors->any())
  <ul class="alert">
    @foreach ($errors->all() as $error)
    <li> {{ $error }}</li>
    @endforeach
  </ul>
@endif

{!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method'=>'put']) !!}

@include('admin.posts._form')

<div class="form-group">
{!! Form::label('content','Tags:') !!}
{!! Form::textarea('tags', $post->tagList, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Save Post', ['class' => 'btn btn-primary ']) !!}
</div>

<!! Form::close !!}
  </div>
@endsection
