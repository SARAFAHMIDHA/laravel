<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parenttbl;
use App\Models\Student;
use App\Models\optedcourse;
class ParentController extends Controller
{
    public function index()
    {
        $parents = Parenttbl::with('Student')->get();
        $students = Student::with('Parenttbl')->get();
        $optedcourse=optedcourse::with('Parenttbl')->get();
        return view ('index',compact('parents','students','optedcourses'));
    }
}
