@extends('layouts.teacher')
@section('content')
<section class="container mt-5">
        <h1 class=" text-center fw-bold " style="color:green; margin-top:100px;">Add Study Material</h1>
        <div>
            @if (session('success'))
                <p class="alert alert-success " style="width:700px; margin-left:300px; ">{{ session('success') }}</p>
            @endif
        </div>
        <form class="form-group" method="post" action="{{ route('study.material') }}" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered" style="margin: auto; width: 60%;">
                <tr>
                    <td>Select Course</td>
                    <td>
                        <select class="form-select" name="course" required>
                        <option value="">--Select Course--</option>
                            <option value="Diploma">Diploma</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Select Branch</td>
                    <td>
                        <select class="form-select" name="branch" required>
                        <option value="">--Select branch--</option>

                            <option value="cs">CS</option>
                            <option value="it">IT</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Electronics">Electronics</option>
                            <option value="IC"> IC</option>
                            <option value="MOM">MOM</option>
                            <option value="SP">SP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Select Year</td>
                    <td>
                        <select class="form-control bg-light" name="year" required>
                            <option value="1st year">1st year</option>
                            <option value="2nd year">2nd year</option>
                            <option value="3rd year">3rd year</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Select Material Type</td>
                    <td>
                        <select class="form-control bg-light" name="material_type" required>
                            <option value="smat">Study Material</option>
                            <option value="assign">Assignment</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Enter Subject</td>
                    <td>
                        <input type="text" class="form-control bg-light" name="subject" required>
                    </td>
                </tr>
                <tr>
                    <td>Enter Topic</td>
                    <td>
                        <input type="text" class="form-control bg-light" name="topic" required>
                    </td>
                </tr>
                <tr>
                    <td>Select File</td>
                    <td>
                        <input type="file" class="form-control bg-light" name="file" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <button type="submit" class="btn btn-success">Add Materials</button>
                    </td>
                </tr>
            </table>
        </form>
    </section>
@endsection