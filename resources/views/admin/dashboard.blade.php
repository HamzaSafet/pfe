@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

<!-- Content Row -->
    
<div class="container">
    <div class="row">
      <div class="col-6">
        <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

      </div>
      <div class="col-6">
        {{-- <div id="piechart" style="width: 900px; height: 500px;"></div> --}}
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
      </div>
     
    </div>
  </div>
   
      
</div>
@endsection