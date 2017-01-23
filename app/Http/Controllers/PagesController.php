<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// This Controller is used to go between the main pages of the website. The about and index pages.

class PagesController extends Controller
{
  public function getIndex() {

  return view ('welcome');
  }

    public function getAbout(){
      
    
 return view ('pages.about');
    
    

  }
}