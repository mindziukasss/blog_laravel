<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{

  public function __construct(){
    $this->middleware('auth');

  }

  public function getProfile(){
    return view('profile.profile',array('user' => Auth::user()) );;
  }
}
