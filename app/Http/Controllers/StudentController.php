<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;
use App\ Models \Student ;
class StudentController extends Controller
{
    public function fetchstudent(){
        //$student = Student::all();
        $student = Student::find(2);
        return $student ;
    }
}
