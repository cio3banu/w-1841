<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
     public function index(Request $req){
   
  //set array with keys to be passed to view() for template
    $data =[
      'uri'=>$req->path(),
      'url'=>$req->url(),
      'method'=>$req->method()
    ];
 
    return view('index', $data);
  }
}
