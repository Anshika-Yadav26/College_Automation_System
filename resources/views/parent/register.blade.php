@extends('layouts.index')
@section('content')


<div class="col-sm-8 px-5 shadow mt-5" style="margin-left:220px;">
    <h2 class="text-center text-primary pt-4 mb-4">{{($title)}}</h2>

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

    <form action="{{($url)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Personal Information Section -->
        <fieldset class="border p-4 mb-4 rounded">
            <legend class="text-primary">Personal Information</legend>
            <div class="row mb-3">
                <div class="col-md-6 px-4">
                    <label for="name" class="form-label"> Name</label>
                    <input type="text" id="name" name="name" class="form-control  @error('name') is-invalid  @enderror" value="{{ old('name', $parents->name) }}" required>
                    @error('name')
                         <p class="Invalid-feedback">{{$message}}</p>
                     @enderror
                </div>
                <div class="col-md-6 px-4">
                    <label for="father-name" class="form-label">Child's Name</label>
                    <input type="text" id="child-name" name="child_name" class="form-control  @error('child_name') is-invalid  @enderror" value="{{ old('child_name', $parents->child_name) }}" required>
                    @error('child_name')
                         <p class="Invalid-feedback">{{$message}}</p>
                     @enderror
                </div>
            </div>

            <div class="row mb-3">
                <!-- <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" id="dob" name="dob" class="form-control @error('dob') is-invalid  @enderror" value="{{ old('dob') }}" required>
                    @error('dob')
                         <p class="Invalid-feedback">{{$message}}</p>
                     @enderror
                </div> -->
                <div class="col-md-6 px-4">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" name="gender" class="form-select @error('gender') is-invalid  @enderror">
                        <option value="male" {{ old('gender', $parents->gender) == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female"  {{ old('gender', $parents->gender) == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other"  {{ old('gender', $parents->gender) == 'other' ? 'selected' : '' }}>Other</option>

                    </select>
                    @error('gender')
                         <p class="Invalid-feedback">{{$message}}</p>
                     @enderror
                </div>
            </div>

            <div class="mb-3 px-4">
                <label for="contact" class="form-label">Contact Number</label>
                <input type="tel" id="contact" name="contact" class="form-control @error('contact') is-invalid  @enderror" value="{{ old('contact', $parents->contact) }}" required>
                @error('contact')
                         <p class="Invalid-feedback">{{$message}}</p>
                     @enderror
            </div>

            <div class="mb-3 px-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid  @enderror" value="{{ old('email', $parents->email) }}" required>
                @error('email')
                         <p class="Invalid-feedback">{{$message}}</p>
                     @enderror
            </div>

            <div class="mb-3 px-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control  @error('password') is-invalid  @enderror" required>
                @error('password')
                         <p class="Invalid-feedback">{{$message}}</p>
                     @enderror
            </div>

            <div class="mb-3 px-4">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid  @enderror" required>
                @error('password_confirmation')
                         <p class="Invalid-feedback">{{$message}}</p>
                     @enderror
            </div>

            <div class="mb-3 px-4">
                <label for="photo" class="form-label">Upload Photo</label>
                <input type="file" id="photo" name="photo" class="form-control @error('photo') is-invalid  @enderror" accept=".jpg,.jpeg,.png">
                @error('photo')
                         <p class="Invalid-feedback">{{$message}}</p>
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
