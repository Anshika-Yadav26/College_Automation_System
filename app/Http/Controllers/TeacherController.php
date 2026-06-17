<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Teacher;

class TeacherController extends Controller
{
     //This method show registration page for teacher
     public function register()
     {
        $url=url('/teacher/register');
        $title="Teacher Registration";
        $teacher = new Teacher; 
        $data=compact('url','title','teacher');
        return view('teacher.register')->with($data);
     }
 
     
     
 public function processRegister(Request $request)
 {
     // Validation
     $validator = Validator::make($request->all(), [
         'name' => 'required|string|max:255',
         'father_name' => 'required|string|max:255',
         'dob' => 'required|date',
         'gender' => 'required|in:male,female,other',
         'contact' => 'required|numeric',
         'email' => 'required|email|unique:teachers',
         'password' => 'required|confirmed|min:6',
         'photo' => ''
     ]);
 
     if ($validator->passes()) {
 
 
     $teacher = new Teacher();
     $teacher->name = $request->name;
     $teacher->father_name = $request->father_name;
     $teacher->dob = $request->dob;
     $teacher->gender = $request->gender;
     $teacher->contact = $request->contact;
     $teacher->email = $request->email;
     $teacher->password = Hash::make($request->password);
     if ($request->hasFile('photo')) {
         $file = $request->file('photo');
         $fileName = time() . '_' . $file->getClientOriginalName();
         $file->move(public_path('uploads/teachers'), $fileName);
         $teacher->photo = 'uploads/teachers/' . $fileName;
         $teacher->role = 'Teacher';
     $teacher->save();
     return redirect()->route('teacher.login')->with('success', 'Your account is ready for login');
     }
     
 }
 else{
     return redirect()->route('teacher.register')
     ->withInput()
     ->withErrors($validator);
 }    
    
 }
 
 //this method show login page for teacher
 public function index(){
     return view('teacher.login');
 }
 
 
 public function login(Request $request)
 {
     $request->validate([
         'email' => 'required|email',
         'password' => 'required|string',
     ]);

    if (Auth::guard('teacher')->attempt($request->only('email', 'password'))) {
        return redirect()->route('teacher.dashboard');
    }

    return back()->withErrors(['email' => 'Invalid credentials']);


 }
 //for dashboard page
 public function teacherDashboard(){
     return view('teacher.dashboard');
 }
 


 //logout
 public function logout()
 {
     auth()->guard('teacher')->logout();
     return redirect()->route('teacher.login')->with('success', 'Logged out successfully!');
 }


// Search  -----------------------------------------------------

public function view(Request $request){
    $search=$request['search'] ?? "";
    if($search != "")
    {
        $teacher=Teacher::where('name','like',"$search%")->get();
    
    }else{
        $teacher=Teacher::all();
    }
    $data=compact('teacher','search');
    
        return view('admin.teacherview')->with($data);
    }
    
    //Delete  -------------------------------------------------------
    
    public function delete($id){
        $teacher=Teacher::find($id);
    if(!is_null($teacher)){
        $teacher->delete();
        session()->flash('success', 'Teacher record deleted successfully.');
    }
    else{
        session()->flash('error', 'Teacher record not found.');
    
    }
    
    return redirect('teacherview');
    
    }
    
    //Update  -----------------------------------------------------------
     
    public function edit($id){
    $teacher=Teacher::find($id);
    if(is_null($teacher))
    {
    
        return redirect('teacherview');
    
    }
    else{
        $title="Update Teacher Data";
        $url=url('/teacherupdate')."/".$id;
        $data=compact('teacher','url','title');
        return view('teacher.register')->with($data);
    }
    
    }
    
    public function update($id, Request $request){
        $teacher=Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->father_name = $request->father_name;
        $teacher->gender = $request->gender;
        $teacher->contact = $request->contact;
        $teacher->email = $request->email;
        $teacher->password = Hash::make($request->password);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/teachers'), $fileName);
            $teacher->photo = 'uploads/teachers/' . $fileName;
            $teacher->role = 'Teacher';
        $teacher->save();
    
        session()->flash('status', 'Teacher record updated successfully.');
    
        }
    return redirect('teacherview');
        }




//-------------------------------------------------------------------------






}

