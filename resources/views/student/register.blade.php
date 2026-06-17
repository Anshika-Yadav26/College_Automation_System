@extends('layouts.index')
@section('content')


<div class="col-sm-8  px-5 shadow mt-5"  style="margin-left:220px;">
    <h2 class="text-center text-primary pt-4 mb-4">{{ $title }}</h2>

    <!-- Display success or error messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Personal Information Section -->
        <fieldset class="border p-4 mb-4 rounded">
            <legend class="text-primary">Personal Information</legend>
            <div class="row mb-3  px-4">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $student->name) }}" required>
                    @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6 ">
                    <label for="father-name" class="form-label">Father's Name</label>
                    <input type="text" id="father-name" name="father_name" class="form-control @error('father_name') is-invalid @enderror" value="{{ old('father_name', $student->father_name) }}" required>
                    @error('father_name')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="mb-3 px-4">
                <label for="contact" class="form-label">Contact Number</label>
                <input type="tel" id="contact" name="contact" class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact', $student->contact) }}" required>
                @error('contact')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3 px-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $student->email) }}" required>
                @error('email')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3 px-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3 px-4">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required>
                @error('password_confirmation')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="row mb-3 px-4">
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" id="dob" name="dob" class="form-control @error('dob') is-invalid  @enderror" value="{{ old('dob',$student->dob) }}" required>
                    @error('dob')
                         <p class="Invalid-feedback">{{$message}}</p>
                     @enderror
                </div>

                <div class="col-md-6 ">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" name="gender" class="form-select @error('gender') is-invalid @enderror">
                        <option value="male" {{ old('gender', $student->gender) == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender', $student->gender) == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender', $student->gender) == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('gender')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 px-4">

            <div class="col-md-6 ">
                    <label for="name" class="form-label">College</label>
                    <input type="text" id="college" name="college" class="form-control @error('college') is-invalid @enderror" value="{{ old('college', $student->college) }}" required>
                    @error('college')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6 ">
                    <label for="course" class="form-label">Course</label>
                    <input type="text" id="course" name="course" class="form-control @error('course') is-invalid @enderror" value="{{ old('course', $student->course) }}" required>
                    @error('course')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

</div>
            <div class="row mb-3 px-4">
                <div class="col-md-6 ">
                    <label for="branch" class="form-label">Branch</label>
                    <select name="branch" id="branch" style="height: 35px;" class="form-control @error('branch') is-invalid @enderror" value="{{ old('branch', $student->branch) }}" required>
            <option value="empty"> -- Select Branch --  </option>
            <option value="It"> IT  </option>
            <option value="CS"> CS </option>
            <option value="PGDCA"> PGDCA  </option>
            <option value="Mechanical">  Mechanical </option>
            <option value="Electronic">  Electronics </option>
            <option value="IC">  IC </option>
            <option value="MOM">  MOM </option>
            <option value="SP">  SP </option>
        </select>
                    @error('branch')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6 ">
                    <label for="semester" class="form-label">Semester</label>

                    <select name="semester" id="" style="height: 35px;"  class="form-control @error('semester') is-invalid @enderror" value="{{ old('semester', $student->semester) }}" required>
            <option value="none">-- Select Semester --  </option>
            <option value="1"> 1st Semester </option>
            <option value="2"> 2nd Semester </option>
            <option value="3"> 3rd Semester </option>
            <option value="4"> 4th Semester </option>
            <option value="5"> 5th Semester </option>
            <option value="6"> 6th Semester </option>
        </select>
                    @error('semester')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
</div>

            <div class="mb-3 px-4">
                <label for="photo" class="form-label">Upload Photo</label>
                <input type="file" id="photo" name="photo" class="form-control @error('photo') is-invalid @enderror" accept=".jpg,.jpeg,.png">
                @error('photo')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
        </fieldset>
        <div class="px-5">
        <button type="submit" class="btn btn-primary w-100">Register</button>
</div>
<div class="row mb-4 pb-4">
                                    <div class="col-12">
                                        <hr class="mt-5 mb-4 border-secondary-subtle">
                                        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-center">
                                            <a href="{{route('teacher.login')}}" class="link-secondary text-decoration-none"> you have already an account Login Now</a>
                                        </div>
                                    </div>
          </div>
    </form>
</div>

@endsection