<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teach;

class StudentController extends Controller
{
    public function index(): View {
        $teachs = Teach::all();

        
     return view('ensino', ['teach' => $teachs]);
        
    }
}
