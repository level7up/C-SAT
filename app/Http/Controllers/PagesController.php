<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title='Welcome To CSAT Egypt';
        return view ('pages.index')->with('title',$title);
        
    }
    public function dash(){
        return view('employees.index');
    }

    public function about(){
        $title='About Us..';
        return view ('pages.about')->with('title',$title);
    }
    public function services(){
        $data =array(
          'title'=>'Services',
          'services'=>['Easy Manage','Flixable Error','BLA BLA BLA ']  
        );
        return view ('pages.services')->with($data);

    }
    
}
