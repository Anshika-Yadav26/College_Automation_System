<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Parents;
use App\Models\Enquiry;



class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin' => $admin->id]);
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid credentials.');
    }

    public function dashboard()
    {
        if (!session()->has('admin')) {
            return redirect()->route('admin.login');
        }

        // Fetch cards data count

        $studentCount = Student::count();
        $teacherCount = Teacher::count();
        $parentCount = Parents::count();
        $enquiryCount = Enquiry::count();

        return view('admin.dashboard', compact('studentCount','teacherCount','parentCount','enquiryCount'));



       
        // return view('admin.dashboard');
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('admin.login');
    }


//------------------------------------------------------------







//------------------------------------------------------------------------------










}


