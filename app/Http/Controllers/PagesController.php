<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function getIndex(){
    return view('welcome');
  }

  public function getAbout(){

    $users = array("joe","liam","rob");

    return view('pages.about')
    ->with("users", $users);
  }
}
