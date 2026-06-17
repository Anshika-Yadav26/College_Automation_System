<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index(){
        return view("student.attendance");
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|max:200",
            "email"=> "required|email",
            "subject"=> "required|string|max:200",
            "branch"=> "required|string",
            "sem"=> "required|string",
        ]);

        //Attendance::create($request->all());
        //return back()->with("success","Attendance recorded successfully! ");
        echo"<pre>";
        print_r($request->all());
        $attendance = new Attendance();
        $attendance->name = $request['name'];
        $attendance->email = $request['email'];
        $attendance->subject = $request['subject'];
        $attendance->branch = $request['branch'];
        $attendance->sem = $request['sem'];
        $attendance->save();
        return redirect('/attendance')->with('success','Attendence Submitted Successfully');
}

// public function views(){
//     $attends = Attendance::all();
//     $data = compact('attends');
//     return view('admin.studAttendance')->with($data);
// }

// Search  -----------------------------------------------------

public function view(Request $request){
    $search = $request->input('search', ''); // Improved syntax for fetching input with default

    if (!empty($search)) {
        $attends = Attendance::where('name', 'like', "$search%")->get();
    } else {
        $attends = Attendance::all();
    }

    return view('admin.studAttendance', compact('attends', 'search'));
}




}
