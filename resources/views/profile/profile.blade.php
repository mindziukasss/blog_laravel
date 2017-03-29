@extends('main')

@section('title', '| My profile')

@section('content')


<div class="row">
  <div class="col-md-10 col-md-offset-2">
    <img src="/uploads/avatars/{{ $user->avatar }}" id="avatar-profile">
    <h2> {{ ucfirst($user->name) }}</h2>
    <h3> {{ $user->email }}</h3>
      <form enctype="multipart/form-data" action="profile" method="POST">
        <label>Update Profile Image</label>
        <input type="file" name="avatar">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-sm btn-primary" id="save-button">Save photo</button>
      </form>
  </div>
</div>


  
    
@endsection