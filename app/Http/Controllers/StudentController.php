<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;
use App\ Models \Student ;
class StudentController extends Controller
{
    public function fetchstudent(){
        //$student = Student::all();
        //$student = Student::find(2);
        //$student = Student::where('id', 100)->get();
        $student = Student::whereBetween('id',[12,33])->orderBy('id', 'DESC')->get();

        return $student ;
    }
}
