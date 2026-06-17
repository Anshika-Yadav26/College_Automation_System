<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 5 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 5, SASS and PUG.js. It's fully customizable and modular.">
    <title></title>
  <link rel="stylesheet" href="{{url('css/styles.min.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <div class="container my-auto">
        <div class="row">
            <div class="col-sm-12 text-center text-light" style="background-color:rgb(5,117,121);">
                <h1>Feroze Gandhi Polytechnic</h1>
            </div>
            </div>

    <div class="col-sm-6 mx-auto border shadow-lg pt-4 p-5 mt-5"method="post">
    <form action="{{url('/')}}/attendance"method='post'>
        @csrf
        <h3 class="text-center ">Student Attendance</h3>
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
         
        <input type="text"name='subject'id="subject"
         placeholder="Subject" class="form-control border my-3"required>
         
        <select name="branch" id="branch" class="w-100 rounded-2 "style="height: 35px;">
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
        <select name="sem" id="" class="w-100 rounded-2 my-3"style="height: 35px;">
            <option value="none">-- Select Semester --  </option>
            <option value="1"> 1st Semester </option>
            <option value="2"> 2nd Semester </option>
            <option value="3"> 3rd Semester </option>
            <option value="4"> 4th Semester </option>
            <option value="5"> 5th Semester </option>
            <option value="6"> 6th Semester </option>
        </select>
        <div  style="font-size: 20px;margin-left: 100px;">
            <input type="checkbox"class="me-1"><span id="current-date"></span>
        </div>
        <button type="submit" class="mt-4 form-control btn btn-danger" id="">Submit</button>
    </form>
    </div>
   
</div>


   <script>
    const today = new Date();
    document.getElementById("current-date").innerText = today.toLocaleDateString("en-US",{
        year: "numeric",
        month: "long",
        day:"numeric",
    });
   </script>
   </body>
   </html>