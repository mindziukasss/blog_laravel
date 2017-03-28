@extends('main')

@section('title', '| My profile')

@section('content')


<div class="row">
  <div class="col-md-10 col-md-offset-2">
    <img src="/uploads/avatars/{{ $user->avatar }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
    <h2> {{ ucfirst($user->name) }}</h2>
    <h3> {{ $user->email }}</h3>
  </div>
</div>


  
    
@endsection