@extends('dashboard')
 @section('content_dashboard')
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Edit Services </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Charts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chart-js</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
        <div class="card p-3">
            <div class="d-flex justify-content-between align-items-center"> 
            <img src="https://i.imgur.com/NI1sbw3.png" width="30">
            <button class="btn1 btn-sm ">Connect</button>
            </div>
            <span class="google mt-3">Google Adwords</span>
            <span class="text mt-2">Lorem ipsum dolor sit amet,  adipiscing elit,sed do eiusmod tempor.</span>
          </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bar chart</h4>
              <canvas id="barChart" style="height:230px"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Area chart</h4>
              <canvas id="areaChart" style="height:250px"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Doughnut chart</h4>
              <canvas id="doughnutChart" style="height:250px"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Pie chart</h4>
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Scatter chart</h4>
              <canvas id="scatterChart" style="height:250px"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer -->
    @include('dashboard_layout.partials._footer')
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
    
  @endsection