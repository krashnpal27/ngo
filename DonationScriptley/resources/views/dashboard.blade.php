@extends('layouts.master')
@section('main-content')
    <section class="content">
      <div class="container-fluid">
        <!--breadcrumb  -->
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <!--breadcrumb  -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h5>Donator</h5>

                <p>{{$count}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h5>Total Donation</h5>

                <p>{{$total_donation}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h5>Totla Expenses</h5>

                <p>{{$ex_total}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
                <!-- <i class="ion ion-person-add"></i> -->
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h5>Contact Us Request</h5>

                <p>0</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
                <!-- <i class="ion ion-pie-graph"></i> -->
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection