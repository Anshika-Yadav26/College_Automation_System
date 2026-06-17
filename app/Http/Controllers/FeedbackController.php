<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function index(){
        return view("student.feedback");
    }
    public function store(Request $request){
        $request->validate([
            "FirstName"=> "required|string|max:200",
            "LastName"=> "required|string|max:200",
            "Email"=> "required|email",
            "Rating"=> "required|string|max:200",
            "PhoneNumber"=> "required|string",
            "Feedback"=> "required|string",
        ]);
        echo"<pre>";
        print_r($request->all());
        $feedback = new Feedback();
        $feedback->FirstName=$request['FirstName'];
        $feedback->LastName=$request['LastName'];
        $feedback->Email=$request['Email'];
        $feedback->PhoneNumber=$request['PhoneNumber'];
        $feedback->Rating=$request['Rating'];
        $feedback->Feedback=$request['Feedback'];   
        $feedback->save();
        return redirect('/feedback')->with('success','Feedback Submitted Successfully');
    }
    // public function view(){
    //     $feedback = Feedback::all();
    //     $data = compact('feedback');
    //     return view('admin.viewfeedback')->with($data);
    // }


    public function view(Request $request){
        $search=$request['search'] ?? "";
        if($search != "")
        {
            $student=Student::where('name','like',"$search%")->get();
        
        }else{
            $feedback = Feedback::all();        }
        $data=compact('feedback','search');
        
            return view('admin.viewfeedback')->with($data);
        }

    
}
