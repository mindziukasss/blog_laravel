<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;
use Image;

class UserController extends Controller
{

  public function __construct(){
    $this->middleware('auth');

  }

  public function getProfile(){
    return view('profile.profile',array('user' => Auth::user()) );
  }

  public function postAvatar(Request $request){
    if ($request->hasFile('avatar')) {
      $avatar = $request->file('avatar');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();
      $location = public_path('/uploads/avatars/' . $filename);
      Image::make($avatar)->resize(300, 300)->save($location);
      
      $user = Auth::user();
      $user->avatar = $filename;
      $user->save();
    } 

    Session::flash('success' , 'The profile image was successfully save!');
    return view('profile.profile',array('user' => Auth::user()) );

  }

  
}
