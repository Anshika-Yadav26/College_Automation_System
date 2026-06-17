    
    @extends('layouts.teacher')
    @section('content')
<div class="container " style="margin-top:50px;">
        

    <div class="col-sm-6 mx-auto border shadow-lg pt-4 p-5"method="post" style="margin-top:100px;width:500px; height:450px;">
    <form action="{{route('teacher.attendance')}}"method='post' >
        @csrf
        <h3 class="text-center "> Teacher's Attendance</h3>
        <div>
        @if(Session()->has('success'))
         <div class="alert alert-success">
         <p>{{Session()->get('success')}}</p>
        </div>
        @endif

        <input type="text"name='name' placeholder="Name" id="name" 
        class="form-control border my-3"required>
        
        <input type="email" name='email'id='email' placeholder="Email"
         class="form-control border my-3"required >
         
       
         
        <select name="gender" id="gender" class="w-100 rounded-2 "style="height: 35px;">
            <option value="empty"> -- Select Gender --  </option>
            <option value="male"> Male  </option>
            <option value="female"> Female </option>
            <option value="other"> Other </option>
        </select>
        <div  style="font-size: 20px;margin-left: 100px;">
            <input type="checkbox"class="me-1"><span id="current-date"></span>
        </div>
        <button type="submit" class="mt-4 form-control btn btn-success" id="">Submit</button>
    </form>
    </div>
   
</div>


   
