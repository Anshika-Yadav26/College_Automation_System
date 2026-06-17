<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\Student;


class StudentController extends Controller
{
    public function register()
    {
        $url=url('/student/register');
        $title="Student Registration";
        $student = new Student; // Pass an empty Student object
        $data=compact('url','title','student');
        return view('student.register')->with($data);
    }

//register  -----------------------------------------------------------

    public function processRegister(Request $request)
    {
 // Validation
 $validator = Validator::make($request->all(), [
    'name' => 'required|string|max:255',
    'father_name' => 'required|string|max:255',
    'contact' => 'required|numeric',
    'email' => 'required|email|unique:teachers',
    'password' => 'required|confirmed|min:6',
    'dob' => 'required|date',
    'gender' => 'required|in:male,female,other',
    'college' => 'required|string|',
    'course' => 'required|string|',
    'branch' => 'required|string|',
    'semester' => 'required|string|',
    'photo' => ''
]);

if ($validator->passes()) {


$student = new Student();
$student->name = $request->name;
$student->father_name = $request->father_name;
$student->contact = $request->contact;
$student->email = $request->email;
$student->password = Hash::make($request->password);
$student->dob = $request->dob;
$student->gender = $request->gender;
$student->college = $request->college;
$student->course = $request->course;
$student->branch = $request->branch;
$student->semester = $request->semester;
if ($request->hasFile('photo')) {
    $file = $request->file('photo');
    $fileName = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('uploads/students'), $fileName);
    $student->photo = 'uploads/students/' . $fileName;
    $student->role = 'Student';
$student->save();
return redirect()->route('student.login')->with('success', 'Your account is ready for login');
}  
        }
    else{
        return redirect()->route('student.register')
        ->withInput()
        ->withErrors($validator);
    }
}
   
//  login   ------------------------------------------

public function index(){
    return view('student.login');
}


public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

   if (Auth::guard('student')->attempt($request->only('email', 'password'))) {
       return redirect()->route('student.dashboard');
   }

   return back()->withErrors(['email' => 'Invalid credentials']);


}
// dashboard page  ---------------------------

public function dashboard(){
  
    return view('student.dashboard');
}

// logout   ------------------------------------
public function logout()
{
    auth()->guard('student')->logout();
    return redirect()->route('student.login')->with('success', 'Logged out successfully!');
}


// Search  -----------------------------------------------------

public function view(Request $request){
$search=$request['search'] ?? "";
if($search != "")
{
    $student=Student::where('name','like',"$search%")->get();

}else{
    $student=Student::all();
}
$data=compact('student','search');

    return view('admin.stdview')->with($data);
}

//Delete  -------------------------------------------------------

public function delete($id){
    $student=Student::find($id);
if(!is_null($student)){
    $student->delete();
    session()->flash('success', 'Student record deleted successfully.');
}
else{
    session()->flash('error', 'Student record not found.');

}

return redirect('stdview');

}

//Update  -----------------------------------------------------------
 
public function edit($id){
$student=Student::find($id);
if(is_null($student))
{

    return redirect('stdview');

}
else{
    $title="Update Student Data";
    $url=url('/stdupdate')."/".$id;
    $data=compact('student','url','title');
    return view('student.register')->with($data);
}

}

public function update($id, Request $request){
    $student=Student::find($id);

    $student->name = $request->name;
$student->father_name = $request->father_name;
$student->contact = $request->contact;
$student->email = $request->email;
$student->password = Hash::make($request->password);
$student->dob = $request->dob;
$student->gender = $request->gender;
$student->college = $request->college;
$student->course = $request->course;
$student->branch = $request->branch;
$student->semester = $request->semester;
if ($request->hasFile('photo')) {
    $file = $request->file('photo');
    $fileName = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('uploads/students'), $fileName);
    $student->photo = 'uploads/students/' . $fileName;
    $student->role = 'Student';
$student->save();

    session()->flash('status', 'Student record updated successfully.');

    }
return redirect('stdview');
    }





}
