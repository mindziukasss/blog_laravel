@extends('main')

@section('title', '| All Posts')

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>All Posts</h1>
    </div>

    <div class="col-md-2">
      <a href="{{ route('posts.create') }}" class="btn btn-primary btn-block btn-h1-spacing"> Create New Post</a>
    </div>
    <div class="col-md-12">
      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Picture</th>
          <th>Created At</th>
          <th></th>
        </thead>

        <tbody>
          @foreach ($posts as $post)
            <tr>
              <th>{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>
                @if($post->image)
                  <img src="{{ asset('images/' . $post->image) }}" height="25" width="30" >
                @else
                  <img src="{{ asset('images/nofoto.png') }}" height="25" width="30" >
                @endif
              </td>
              <td>{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</td>
              <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
              <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">View</a>
              <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="text-center">
        {!! $posts->links() !!}
      </div>
    </div>
    
@stop