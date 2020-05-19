@extends('app')

@section('content')
  {{$hash = null}}}
  <div class="container">
    <h1 class="text-center" style="margin-bottom:40px"><b><u>Welcome to my Blog</u></b></h1>
@foreach($posts as $post)
<h2 class="text-primary"> {{ $post->title }} <small><code>({{ $post->created_at}})</code></small></h2>
<h4>{{$post->content}} </h4>
      @foreach($post->tags as $tag)
        {{ $hash .= '#'.$tag->name }}
      @endforeach
      <b>Tags: {{$hash}}</b>
@if (count($post->comments) > 0)
<h4><b>Comments</b></h4>
    @foreach($post->comments as $comment)
    <b>Name: </b> {{ $comment->name }} <br />
    <b>Comment: </b> {{$comment->comment}}
    @endforeach
      git i@endif
<hr>
@endforeach
  </div>
@endsection
