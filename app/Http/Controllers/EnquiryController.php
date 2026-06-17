<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EnquiryController;
use App\Models\Enquiry;

class EnquiryController extends Controller
{

    public function index()
    {
        return view('/enquiry');
    }


    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

$enquiry=new Enquiry;
$enquiry->FirstName=$request['FirstName'];
$enquiry->LastName=$request['LastName'];
$enquiry->Email=$request['Email'];
$enquiry->PhoneNumber=$request['PhoneNumber'];
$enquiry->EnquiryText=$request['EnquiryText'];  

$enquiry->save();


return redirect('/enquiry')->with('success', 'Your form is submitted successfully.We will contact you soon.');

    }

//search  ----------------------------------------------------------------------------

    public function view(Request $request){
        $search=$request['search'] ?? "";
        if($search != "")
        {
            $enquiry=Enquiry::where('FirstName','like',"$search%")->get();
        
        }else{
            $enquiry=Enquiry::all();
        }
        $data=compact('enquiry','search');
        
            return view('admin.viewenquiry')->with($data);
        }

        //delete   ----------------------------------------------

        public function delete($id){
            $enquiry=Enquiry::find($id);
        if(!is_null($enquiry)){
            $enquiry->delete();
            session()->flash('success', 'Enquiry deleted successfully.');
        }
        else{
            session()->flash('error', 'Enquiry not found.');
        
        }
        
        return redirect('/viewenquiry');
        
        }


}


