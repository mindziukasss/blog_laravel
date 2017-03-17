@extends('main')

@section('title', '| All Categories')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1>Catgegories</h1>
      <table class="table">
        <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
            </tr>
        </thead>

        <tbody>
          @foreach ($categories as $category)
          <tr>
            <th>{{ $category->id }}</th>
            <th>{{ $category->name }}</th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-3">
      <div class="well">
        {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
        <h2>New Category</h2>
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        {{ Form::submit('Add new Category',['class' => 'btn btn-primary btn-h1-spacing']) }}

        {!! Form::close() !!}
      </div>
    </div>
  </div>

@endsection