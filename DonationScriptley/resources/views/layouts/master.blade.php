@include('layouts.header')
@php 
  $color1 = "#166435";
  $color2 = "#b2866d";
@endphp
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
    <!-- top nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('dashboard')}}">
          <img src="{{asset('/custom/img/logo.png')}}" alt="" srcset="" width="50" height="50">
        </a>
        <div class="justify-content-end navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- top nav -->
    <!-- bottom nav -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:{{$color1}} !important">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-2 mr-2" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('dashboard')}}">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('donation')}}">Donation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('donation_cat')}}">Donation Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('causes')}}">Causes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('expense')}}">Expense</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('expense_cat')}}">Expense Category</a>
                </li>
                <li class="nav-item">
                    <a class="btn" href="{{route('add_donation')}}" style="background-color:{{$color2}}">Add Donation</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- bottom nav -->

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div> -->
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('main-content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
@include('layouts.footer')