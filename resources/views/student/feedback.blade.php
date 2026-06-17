@extends('layouts.student')
@section('content')
<main class="app-content">

<div class="container-fluid">
<div class="row my-3">
    <div class="col-sm-8 mx-auto bg-light  py-4 shadow-lg">
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 
      wk-ipadp-10 line" id="i69b-2">
        <form method="post" action="{{url ('feedback')}}" class="form-box">
          @csrf
          <div class="row  ">
            <div class="col-sm-12"style="color:rgb(5,117,121);">
            <div class="container-block form-wrapper ">
            <div class="head-text-box">   
               <u> <h1 class="text-blk contactus-head text-center">
                FEEDBACK
                </h1></u>
              </div>    
            </div>
            </div>
          </div>
      
          <div class="row">
            <div class="col-sm-8 mx-auto ">
            <div class="responsive-container-block">
            @if(Session::has('success'))
    <div style="text-align:center;" class="mt-5">
       <h4 class="alert alert-success"> {{ Session::get('success') }}</h4>
    </div>
    @endif
              <div class="responsive-cell-block mt-5 wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt-6">
                <p class="text-blk input-title my-2 fw-semibold ">
                  FIRST NAME 
                </p>
                <input class="input w-100" required id="ijowk-6" name="FirstName"style="height:32px;">
                <p class="text-blk input-title my-2 fw-semibold  ">
                  LAST NAME 
                </p>
                <input class="input w-100" required id="ijowk-6" name="LastName"style="height:32px;">
            </p>
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title my-2  fw-semibold ">
                 EMAIL 
                </p>
                <input class="input w-100" required  id="ipmgh-6" name="Email"style="height:32px;">
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title my-2  fw-semibold ">
                  PHONE NUMBER
                </p>
                <input class="input w-100" required id="imgis-5" name="PhoneNumber"style="height:32px;">
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title my-2  fw-semibold ">
                 RATING
                </p>
                <select name="Rating" id="Rating" class="w-100 rounded-2 "style="height: 35px;">
            <option value=""> -- Select Your Experience --  </option>
            <option value="Worst"> WORST  </option>
            <option value="Bad"> BAD </option>
            <option value="Good"> GOOD  </option>
            <option value="Better">  BETTER </option>
            <option value="Excellent">  EXCELLENT </option>
              </div>
              <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-6">
                <p class="text-blk input-title my-2 fw-semibold">
                    FEEDBACK DESCRIPTION 
                </p>
                <textarea class="textinput fw-bold w-100 "style="height: 130px;" required  name="Feedback" id="i5vyy-6" placeholder="Please enter your feedback ..."></textarea>
              </div>
            </div>
            <div class="btn-wrapper pb-4 pt-3 ">
              <button class="submit-btn w-100 my-3 " style="border-color:rgb(5,117,121);background-color:rgb(5,117,121);height:40px ;color:white; border-radius:10px;">
                Submit
              </button>
            </div>
            </div>
          </div>
          </div>
        </form>
      </div>
    </div>
</div>

</main>
@endsection
