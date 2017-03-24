@extends('main')
@section('title','| Homepage')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="jumbotron">
      <h1>Welcome to My blog!</h1>
      <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
      <p><a class="btn btn-primary btn-lg" href="/" role="button">Popular Post</a></p>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
  @foreach($posts as $post)
    <div class="post">
      <h3>{{ $post->title }}</h3>
      <div class="col-md-2">
        <img src="{{ asset('images/' . $post->image) }}" height="80" width="105" >
      </div>
      <div class="row">
        <div class="col-md-8">
          <p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? "..." : "" }}</p>
          <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    <hr>
    @endforeach
  </div>
@include('partials._sidbar')
</div>
@endsection