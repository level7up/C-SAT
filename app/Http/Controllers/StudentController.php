<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Student()
    {
        //$user = Auth::user();
        return view('students.profile');
    }
}
