<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', "Welcome to Laravel!");
    }
    public function about(){
        return view('pages.about')->with('title', "About Us");
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
