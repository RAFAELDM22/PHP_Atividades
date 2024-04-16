<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teach;

class StudentController extends Controller
{
    public function index()
     {
        $teachs = Teach::all();

     return view('ensino', ['teachs' => $teachs]);        
    }
}
