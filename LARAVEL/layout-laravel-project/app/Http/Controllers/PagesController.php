<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $titleName = "HomePage";
        return view('pages.index',compact('titleName'));
      }
    
      public function about(){
        $title = "About Us";
        return view('pages.about')->with('title', $title);
      }
    
      public function contact(){
        $data = array();
        $data['title'] = "Contact";
        return view('pages.contact')->with($data);
      }
}
