<?php

namespace App\Http\Controllers;
use App\Models\Parents;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ParentController extends Controller
{
        //This method show registration page for teacher
        public function register()
        {
            $url=url('/parent/register');
            $title="Parent Registration";
            $parents = new Parents; 
            $data=compact('url','title','parents');
            return view('parent.register')->with($data);
            // return view('parent.register');
        }
    
        
        
    public function processRegister(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'child_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'contact' => 'required|numeric',
            'email' => 'required|email|unique:teachers',
            'password' => 'required|confirmed|min:6',
            'photo' => ''
        ]);
    
        if ($validator->passes()) {
    
    
        $parents = new Parents();
        $parents->name = $request->name;
        $parents->child_name = $request->child_name;
        $parents->gender = $request->gender;
        $parents->contact = $request->contact;
        $parents->email = $request->email;
        $parents->password = Hash::make($request->password);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/parents'), $fileName);
            $parents->photo = 'uploads/parents/' . $fileName;
            $parents->role = 'Parent';
        $parents->save();
        return redirect()->route('parent.login')->with('success', 'Your account is ready for login');
        }
        
    }
    else{
        return redirect()->route('parent.register')
        ->withInput()
        ->withErrors($validator);
    }    
    }

    //this method show login page 
    public function index(){
        return view('parent.login');
    }
    
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
   
       if (Auth::guard('parent')->attempt($request->only('email', 'password'))) {
           return redirect()->route('parent.dashboard');
       }
   
       return back()->withErrors(['email' => 'Invalid credentials']);
   
   
    }
    //for dashboard page
    public function dashboard(){
        return view('parent.dashboard');
    }
    
    //logout
    public function logout()
    {
        auth()->guard('parent')->logout();
        return redirect()->route('parent.login')->with('success', 'Logged out successfully!');
    }


// Search  -----------------------------------------------------

public function view(Request $request){
    $search=$request['search'] ?? "";
    if($search != "")
    {
        $parents=Parents::where('name','like',"$search%")->get();
    
    }else{
        $parents=Parents::all();
    }
    $data=compact('parents','search');
    
        return view('admin.parentview')->with($data);
    }
    
    //Delete  -------------------------------------------------------
    
    public function delete($id){
        $parents=Parents::find($id);
    if(!is_null($parents)){
        $parents->delete();
        session()->flash('success', 'Parent record deleted successfully.');
    }
    else{
        session()->flash('error', 'Parent record not found.');
    
    }
    
    return redirect('parentview');
    
    }
    
    //Update  -----------------------------------------------------------
     
    public function edit($id){
    $parents=Parents::find($id);
    if(is_null($parents))
    {
    
        return redirect('parentview');
    
    }
    else{
        $title="Update Parent Data";
        $url=url('/parentupdate')."/".$id;
        $data=compact('parents','url','title');
        return view('parent.register')->with($data);
    }
    
    }
    
    public function update($id, Request $request){
        $parents=Parents::find($id);
    
        $parents->name = $request->name;
        $parents->child_name = $request->child_name;
        $parents->gender = $request->gender;
        $parents->contact = $request->contact;
        $parents->email = $request->email;
        $parents->password = Hash::make($request->password);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/parents'), $fileName);
            $parents->photo = 'uploads/parents/' . $fileName;
            $parents->role = 'Parent';
        $parents->save();
    
        session()->flash('status', 'Parent record updated successfully.');
    
        }
    return redirect('parentview');
        }
    
    
    




}
