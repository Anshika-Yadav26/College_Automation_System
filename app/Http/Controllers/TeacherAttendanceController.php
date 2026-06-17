<?php

namespace App\Http\Controllers;
use App\Models\TeacherAttendance;
use App\Models\Assignment;
use App\Models\Student;


use Illuminate\Http\Request;

class TeacherAttendanceController extends Controller
{
    public function index(){
         return view("teacher.teacherattendance");
     }
     public function store(Request $request)
     {
         $request->validate([
             "name" => "required|string|max:200",
             "email" => "required|email",
             "gender" => "required",
         ]);
     
        //  dd($request->all()); // Temporarily stop and display data.
         
         $teacherAttendance = new TeacherAttendance();
         $teacherAttendance->name = $request['name'];
         $teacherAttendance->email = $request['email'];
         $teacherAttendance->gender = $request['gender'];
         $teacherAttendance->save();
     
         return redirect('/teacher/attendance')->with('success', 'Attendance Submitted Successfully');
     }
     
 public function view(){
    $attendance = TeacherAttendance::all();
    $data = compact('attendance');
    return view('admin.teacherattendanceview')->with($data);
}



}
