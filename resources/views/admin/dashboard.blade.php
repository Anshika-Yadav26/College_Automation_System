@extends('layouts.admin')
@section('content')

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 style="padding-left:360px;color:brown;"><i class="bi bi-speedometer"></i>Admin Dashboard</h1>
          <p></p>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 ">
          <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
            <div class="info py-4 text-center">
              <h4><a href="{{('/stdview')}}" style="text-decoration:none;color:black;">Students</a></h4>
              <p><b>{{($studentCount)}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon bi bi-laptop fs-1"></i>
            <div class="info  py-4 text-center">
              <h4><a href="{{('/teacherview')}}" style="text-decoration:none;color:black;">Teachers</a></h4>
              <p><b>{{($teacherCount)}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon bi bi-people fs-1"></i>
            <div class="info  py-4 text-center">
              <h4><a href="{{('/parentview')}}" style="text-decoration:none;color:black;">Parents</a></h4>
              <p><b>{{($parentCount)}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon bi bi-laptop fs-1"></i>
            <div class="info  py-4 text-center">
              <h4><a href="{{('/viewenquiry')}}" style="text-decoration:none;color:black;">Enquiries</a></h4>
              <p><b>{{($enquiryCount)}}</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Graph</h3>
            <div class="ratio ratio-16x9">
              <div id="salesChart"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">~
          <div class="tile">
            <h3 class="tile-title">Support Requests</h3>
            <div class="ratio ratio-16x9">
              <div id="supportRequestChart"></div>
            </div>
          </div>
        </div>
      </div>
    </main>
    

    @endsection