
@extends('layouts.admin')
@section('content')

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 style="padding-left:360px;"><i class="bi bi-table"></i>Feedback Table</h1>
          <p>Displayed data is dynamic.</p>
        </div>
      
      </div>
<span class="row" style="background:skyblue;">
@if(session('success'))
    <div style="text-align:center;" class="pt-1">
       <h4 class="text-danger"> {{ session('success') }}</h4>
    </div>
@endif

@if(session('error'))
    <div class="pt-1">
       <h4> {{ session('error') }}</h4>
    </div>
@endif


@if(session('status'))
    <div style="color: blue;text-align:center; " class="pt-1">
       <h4 class="text-primary"> {{ session('status') }}</h4>
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
	<a href="{{route('viewfeedback')}}">
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
                    <th >First Name</th>
        <th >Last Name</th>
        <th >Email</th>
        <th >Rating</th>
        <th >Feedback</th>
<th></th>
                    </tr>
                  </thead>
                  <tbody>
        @foreach ( $feedback as $value)       
        <tr >
            <td >{{  $value->FirstName }}</td>
            <td >{{  $value->LastName }}</td>
            <td >{{ $value->Email }}</td>
            <td >{{ $value ->Rating}}</td>
            <td >{{ $value->Feedback}}</td>   

            <td>
				<a href="{{route('fdelete',['id'=>$enquiry->serialNo])}}">	
				<button class="btn btn-danger">Delete</button>
				</a>
</td>
    </tr>
                  
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
   
@endsection









