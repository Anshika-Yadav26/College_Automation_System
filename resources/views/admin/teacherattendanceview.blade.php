 @extends('layouts.admin')
@section('content')

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 style="padding-left:360px;"><i class="bi bi-table"></i> Teacher Attendance Table</h1>
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
</form>

        <div class="col-md-12">
          
          <div class="tile">
            <div class="tile-body">            
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    <th  >Name</th>
                    <th >Email</th>
                    <th >Gender</th>
                    <th >Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ( $attendance as $attendance)
                    <tr>
                    <td >{{ $attendance->name }}</td>
                        <td >{{ $attendance->email }}</td>
                        <td >{{ $attendance->gender }}</td>
              
                        <td >{{ $attendance->created_at}}</td> 
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

