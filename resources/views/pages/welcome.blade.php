@extends('main')
@section('title','| Homepage')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="jumbotron">
      <h1>Welcome to My blog!</h1>
      <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="post">
      <h3>Post Title</h3>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
      <a href="#" class="btn btn-primary">Read More</a>

      <hr>

    </div>
    <div class="post">
      <h3>Post Title</h3>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>

    <hr>

    <div class="post">
      <h3>Post Title</h3>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>

    <hr>

    <div class="post">
      <h3>Post Title</h3>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>
  </div>
    <div class="col-md-3 col-md-offset-1">
      <h2>Sidebar</h2>
    </div>
  </div>
@endsection