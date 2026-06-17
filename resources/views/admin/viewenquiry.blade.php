@extends('layouts.admin')
@section('content')

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 style="padding-left:360px;"><i class="bi bi-table"></i> Enquiry Table</h1>
          <p>Displayed data is dynamic.</p>
        </div>
      
      </div>

@if(session('success'))
    <div style="text-align:center;">
       <h4 class="alert alert-success"> {{ session('success') }}</h4>
    </div>
@endif

@if(session('error'))
    <div>
       <h4 class="alert alert-danger"> {{ session('error') }}</h4>
    </div>
@endif



<div class="row">

      <form action="" >
		<div class="col-sm-12" >
			<div class="col-sm-8" style="float:left;">
	<input class="form-control me-2 py-2" type="search" name="search" value="{{$search}}" placeholder="Search By Name" aria-label="Search">
</div>
<div class="col-sm-4  mb-4" style="float:left;">	
	<button class="btn btn-outline-success bg-success text-light ms-3" type="submit">Search</button>
	<a href="{{route('viewenquiry')}}">
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
						<th>Serial No.</th>
						<th>First Name</th>
						<th>Last Name.</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Enquiry Text</th>
<th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($enquiry as $enquiry)
                    <tr>
                    <td>{{$enquiry->serialNo}}</td>
				<td>{{$enquiry->FirstName}}</td>
				<td>{{$enquiry->LastName}}</td>
				<td>{{$enquiry->Email}}</td>
				<td>{{$enquiry->PhoneNumber}}</td>
				<td>{{$enquiry->EnquiryText}}</td>
				<td>
				<a href="{{route('enquirydelete',['id'=>$enquiry->serialNo])}}">	
				<button class="btn btn-danger">Delete</button>
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
   