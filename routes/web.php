<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\StudyMaterialController;
use App\Http\Controllers\TeacherAttendanceController;



use App\Models\Enquiry;
use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Parents;
use App\Models\Student;
use App\Models\Attendance;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Index Page   ------------------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/faculty', function () {
    return view('faculty');
});


// Admin --------------------------------------------------------------------------

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin.auth');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


//   Teacher   ------------------------------------------------------------------------------------

Route::get('/teacher/register', [TeacherController::class, 'register'])->name('teacher.register');
Route::post('/teacher/register', [TeacherController::class, 'processRegister'])->name('teacher.register');
Route::get('/teacher/login', [TeacherController::class, 'index'])->name('teacher.login');
Route::post('teacher/login', [TeacherController::class, 'login'])->name('teacher.login');
Route::get('teacher/dashboard', [TeacherController::class, 'teacherDashboard'])->name('teacher.dashboard');
Route::get('/teacher/logout', [TeacherController::class, 'logout'])->name('teacher.logout');

Route::get('/teacherview',[TeacherController::class,'view'])->name('teacherview');
Route::get('/teacherdelete/{id}',[TeacherController::class,'delete'])->name('teacherdelete');
Route::get('/teacheredit/{id}',[TeacherController::class,'edit'])->name('teacheredit');
Route::post('/teacherupdate/{id}',[TeacherController::class,'update'])->name('teacherupdate');



// Student  ----------------------------------------------------------------------------

// Route::get('/student/register',[StudentController::class,'index'])->name('student.register');
// Route::post('/student/register',[StudentController::class,'store'])->name('student.register');

Route::get('/student/register', [StudentController::class, 'register'])->name('student.register');
Route::post('/student/register', [StudentController::class, 'processRegister'])->name('student.register');
Route::get('/student/login', [StudentController::class, 'index'])->name('student.login');
Route::post('student/login', [StudentController::class, 'login'])->name('student.login');
Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
Route::get('/student/logout', [StudentController::class, 'logout'])->name('student.logout');


Route::get('/stdview',[StudentController::class,'view'])->name('stdview');
Route::get('/stddelete/{id}',[StudentController::class,'delete'])->name('stddelete');
Route::get('/stdedit/{id}',[StudentController::class,'edit'])->name('stdedit');
Route::post('/stdupdate/{id}',[StudentController::class,'update'])->name('stdupdate');



//Parent  -------------------------------------------------------------------------------

Route::get('/parent/register', [ParentController::class, 'register'])->name('parent.register');
Route::post('/parent/register', [ParentController::class, 'processRegister'])->name('parent.register');
Route::get('/parent/login', [ParentController::class, 'index'])->name('parent.login');
Route::post('parent/login', [ParentController::class, 'login'])->name('parent.login');
Route::get('parent/dashboard', [ParentController::class, 'dashboard'])->name('parent.dashboard');
Route::get('/parent/logout', [ParentController::class, 'logout'])->name('parent.logout');

Route::get('/parentview',[ParentController::class,'view'])->name('parentview');
Route::get('/parentdelete/{id}',[ParentController::class,'delete'])->name('parentdelete');
Route::get('/parentedit/{id}',[ParentController::class,'edit'])->name('parentedit');
Route::post('/parentupdate/{id}',[ParentController::class,'update'])->name('parentupdate');




//Enquiry   -------------------------------------------------------------------------

Route::get('/enquiry',[EnquiryController::class,'index'])->name('enquiry');
Route::post('/enquiries',[EnquiryController::class,'store'])->name('enquiries');
Route::get('/viewenquiry',[EnquiryController::class,'view'])->name('viewenquiry');
Route::get('/enquirydelete/{id}',[EnquiryController::class,'delete'])->name('enquirydelete');


//  Attendance ---------------------------------------------

Route::get("/attendance", [AttendanceController::class,"index"]);

Route::post("/attendance", [AttendanceController::class,"store"]);
Route::get("/attendance/view", [AttendanceController::class,"view"])->name('viewAttendance');


//complaint box ----------------
Route::get('/complaint',[ComplaintController::class,'index']);
Route::post('/complaint',[ComplaintController::class,'store']);
Route::get('/complaint/view', [ComplaintController::class,'view'])->name('viewcomplaint');
Route::get('/complaintdelete/{id}',[ComplaintController::class,'delete'])->name('complaintdelete');

//feedback -------------------
Route::get('/feedback',[FeedbackController::class,'index']);
Route::post('/feedback',[FeedbackController::class,'store']);
Route::get('/feedback/view', [FeedbackController::class,'view'])->name('viewfeedback');

//for add study material and assignment
Route::get('/study/material', [StudyMaterialController::class, 'showForm'])->name('study.material');
Route::post('/study/material', [StudyMaterialController::class, 'handleForm'])->name('study.material');
Route::get("/view/study/material", [StudyMaterialController::class,"view"])->name('studyMaterial.view');
Route::get('/study/material/delete/{id}',[StudyMaterialController::class,'delete'])->name('studymaterial.delete');

//for teacher attendance
Route::get("/teacher/attendance", [TeacherAttendanceController::class,"index"])->name('teacher.attendance');
Route::post("/teacher/attendance", [TeacherAttendanceController::class,"store"])->name('teacher.attendance');
Route::get("teacher/attendance/view", [TeacherAttendanceController::class,"view"])->name('teacherAttendance.view');






//-------------------------------------------------------------------

