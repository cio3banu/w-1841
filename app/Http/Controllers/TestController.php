<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $grupe=['W-1841', 'W-1842','P-1841','P-1842','P-1843R','R-1841'];
        $specialitatea="Administrarea aplicatiilor web";
        
        return view('welcome', ['grupe' => $grupe, 'specialitatea'=>$specialitatea]);
    }
    
    public function about() {
        return view('about');
    }

    public function contacts() {
        return view('contacts');
    }

    public function ceva() {
        return 'Hello, World!';
    }

    public function userid($id) {
        return 'User '.$id;
    }

}
