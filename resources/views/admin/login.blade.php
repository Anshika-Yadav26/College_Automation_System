@extends('layouts.index')
@section('content')

        <!-- <section class=" p-3 p-md-4 p-xl-5"> -->
            <!-- <div class="container"> -->
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5 ">
                        <div class="card border border-3 border-light-subtle rounded-4 shadow-lg">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        @if(Session::has('success'))
                                        <div class="alert alert-success">{{Session::get('success')}}</div>
                                        @endif
                                        @if(Session::has('error'))
                                        <div class="alert alert-danger">{{Session::get('error')}}</div>
                                        @endif
                                        <div class="mb-5">
                                            <h4 class="text-center">Login Here</h4>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{route('admin.login')}}" method="post">
                                    @csrf
                                    <div class="row gy-3 overflow-hidden">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control shadow border border-danger  @error('email') is-invalid  @enderror" name="email" id="email" placeholder="name@example.com" required>
                                                <label for="email" class="form-label">Email</label>
                                                @error('email')
                                                <p class="Invalid-feedback">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control shadow border border-danger @error('password') is-invalid  @enderror" name="password" id="password" value="" placeholder="Password" required>
                                                <label for="password" class="form-label">Password</label>
                                                @error('password')
                                                <p class="Invalid-feedback">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button class="btn bsb-btn-xl shadow alert alert-danger py-3" type="submit" style="background-color:rgb(141, 77, 77);color:white;">Log in now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        <!-- </section> -->

@endsection