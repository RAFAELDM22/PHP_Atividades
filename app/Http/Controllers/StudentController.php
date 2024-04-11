<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teach;

class StudentController extends Controller
{
    public function index(): View {
        $teachs = Teach::all();

        foreach ($teachs as $teach){
            dd($teach->teachers());
            return view('ensino', 'teach');
        }
        
    }
}
