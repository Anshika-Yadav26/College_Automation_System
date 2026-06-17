<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    //
    public function index(){
        return view("student.complaintbox");
    }
    public function store(Request $request){
        $request->validate([
            "FirstName"=> "required|string|max:200",
            "LastName"=> "required|string|max:200",
            "Email"=> "required|email",
            "Subject"=> "required|string|max:200",
            "PhoneNumber"=> "required|string",
            "EnquiryText"=> "required|string",
        ]);
        echo"<pre>";
        print_r($request->all());
        $complaint = new Complaint();
        
        $complaint->FirstName=$request['FirstName'];
        $complaint->LastName=$request['LastName'];
        $complaint->Email=$request['Email'];
        $complaint->PhoneNumber=$request['PhoneNumber'];
        $complaint->Subject=$request['Subject'];
        $complaint->EnquiryText=$request['EnquiryText'];   
        $complaint->save();
        return redirect('/complaint')->with('success','Complaint Submitted Successfully');
    }
    // public function view(){
    //     $complain = Complaint::all();
    //     $data = compact('complain');
    //     return view('admin.viewcomplaint')->with($data);
    // }

    public function view(Request $request){
        $search=$request['search'] ?? "";
        if($search != "")
        {
            $complain=Complaint::where('name','like',"$search%")->get();
        
        }else{
            $complain = Complaint::all();        }
        $data=compact('complain','search');
        
            return view('admin.viewcomplaint')->with($data);
        }



        //delete-------------------------------------

        public function delete($id){
            $complain=Complaint::find($id);
        if(!is_null($complain)){
            $complain->delete();
            session()->flash('success', 'Complaint deleted successfully.');
        }
        else{
            session()->flash('error', 'Complaint not found.');
        
        }
        
        return redirect('/complaint/view');
        
        }


}
