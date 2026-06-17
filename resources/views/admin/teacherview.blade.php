
@extends('layouts.admin')
@section('content')

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 style="padding-left:360px;"><i class="bi bi-table"></i> Teacher Attendance Table</h1>
          <p>Displayed data is dynamic.</p>
        </div>
      
      </div>
<span class="row" >
@if(session('success'))
    <div style="text-align:center;" >
       <h4 class="alert alert-danger"> {{ session('success') }}</h4>
    </div>
@endif

@if(session('error'))
    <div class="pt-1">
       <h4> {{ session('error') }}</h4>
    </div>
@endif


@if(session('status'))
    <div style="text-align:center; ">
       <h4 class="alert alert-primary"> {{ session('status') }}</h4>
    </div>
@endif

</span>

<div class="row mb-3"></div>

<div class="row">

      <form action="" >
		<div class="col-sm-12" >
			<div class="col-sm-8" style="float:left;">
	<input class="form-control me-2 py-2" type="search" name="search" value="{{$search}}" placeholder="Search By Name" aria-label="Search">
</div>
<div class="col-sm-4  mb-4" style="float:left;">	
	<button class="btn btn-outline-success bg-success text-light ms-3" type="submit">Search</button>
	<a href="{{route('teacherview')}}">
	<button name="reset" type="button" class="btn btn-outline-success bg-secondary text-light ms-2">Reset</button>
</a>	
</div>	
</div>	
</form>

        <div class="col-md-12">
          
          <div class="tile">
            <div class="tile-body">            
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    <th> id</th>
						<th>Name</th>
						<th>Father's Name</th>
						<th>Date of Birth</th>
						<th>Gender</th>
						<th>Contact</th>
						<th>Email</th>
						<th>Password</th>
						<th>Photo</th>
						<th>Role</th>
<th></th>
<th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($teacher as $teacher)
                    <tr>
                    <td>{{$teacher->id}}</td>
				<td>{{$teacher->name}}</td>
				<td>{{$teacher->father_name}}</td>
				<td>{{$teacher->dob}}</td>
				<td>{{$teacher->gender}}</td>
				<td>{{$teacher->contact}}</td>
				<td>{{$teacher->email}}</td>
				<td>{{$teacher->password}}</td>
				<td>{{$teacher->photo}}</td>
				<td>{{$teacher->role }}</td>
		
        <td>
				<a href="{{route('teacherdelete',['id'=>$teacher->id])}}">	
				<button class="btn btn-danger">Delete</button>
				</a>
</td>
			
<td>
				<a href="{{route('teacheredit',['id'=>$teacher->id])}}">	
				<button class="btn btn-primary">Edit</button>
				</a>   
			</td>
       </tr>
           @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
   





