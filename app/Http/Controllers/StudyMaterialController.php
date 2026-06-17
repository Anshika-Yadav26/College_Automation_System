<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyMaterial;
use Illuminate\Support\Facades\Validator;


class StudyMaterialController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('teacher.addstudy');
    }

    // Handle form submission
    public function handleForm(Request $request)
    {
        // Validate the form input
        $validator = Validator::make($request->all(), [
            'course' => 'required|string|max:255',
            'branch' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'material_type' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,docx,txt,ppt,pptx|max:2048',
        ]);
    
        if ($validator->passes()) {
            return redirect()->route('study.material')
                ->withInput()
                ->withErrors($validator);
        }
    
        // Create a new StudyMaterial record
        $studyMaterial = new StudyMaterial();
        $studyMaterial->course = $request->course;
        $studyMaterial->branch = $request->branch;
        $studyMaterial->year = $request->year;
        $studyMaterial->material_type = $request->material_type;
        $studyMaterial->subject = $request->subject;
        $studyMaterial->topic = $request->topic;
    
        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/teachers'), $fileName);
            $studyMaterial->file_path = 'uploads/teachers/' . $fileName;
        }
        $studyMaterial->save();
    
        // Redirect with success message
        return redirect()->route('study.material')->with('success', 'Study material added successfully!');
    }
// for delete

    
public function delete($id){
    $studymaterial=StudyMaterial::find($id);
if(!is_null($studymaterial)){
    $studymaterial->delete();
    session()->flash('success', 'Study Material  deleted successfully.');
}
else{
    session()->flash('error', 'Study Material record not found.');

}

return redirect('/view/study/material');

}
        

    public function view(){

        $studymaterial = StudyMaterial::all();
        $data = compact('studymaterial');
        return view('admin.viewstudymaterial')->with($data);
    }
    }
