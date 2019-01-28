<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return view('pages.welcome');
    }

    public function hamza(){
        $data = array(
            'fullname' => 'Hamza BEN YAHIA',
            'age' => 25,
            'phonenumber' => '+212 601745733',
            'address' => 'Avenue Omar BEN JELLOUN NR08, Tetouan',
            'skills' => ['Angular', 'Spring Boot', 'Laravel']
        );
        return view('pages.hamza')->with($data);
    }

    public function hamzaflos(){
        return view('pages.hamzaflos'); 
    }

    public function venueowner(){
        return view('layouts.venueowner');
    }
}
