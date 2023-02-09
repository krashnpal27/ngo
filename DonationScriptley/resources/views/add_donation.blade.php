@extends('layouts.master')
@section('main-content')
    <section class="content">
      <div class="container-fluid">
        <!--breadcrumb  -->
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                    
                    <li class="breadcrumb-item active" aria-current="page">Manage Donation List</li>
                </ol>
            </nav>
        </div>
        <!--breadcrumb  -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col">
          <div class="card">
            <div class="card-header">
                Add Donation
            </div>
            <div class="card-body">
                <form id="donation_form" action="{{route('save_donation')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="payment_by" id="payment_by">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="fname">First Name</label>
                                            <input name="fname" type="text" class="form-control" id="fname" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lname">Last Name</label>
                                            <input name="lname" type="text" class="form-control" id="lname" placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">City</label>
                                            <input name="city" type="text" class="form-control" id="city" placeholder="City">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone</label>
                                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="category">Donation Category</label>
                                            <select id="category" name="category" class="form-control">
                                                <option value="not">Select Donation Category</option>
                                                @if($category)
                                                    @foreach($category as $row)
                                                        <option value="{{$row->id}}">{{$row->title}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="cause">Donation Cause</label>
                                            <select id="cause" name="cause" class="form-control">
                                                <option selected>Select Donation Cause</option>
                                                <option>Food</option>
                                                <option>Education</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="amount">Amount</label>
                                            <input name="amount" type="number" class="form-control" id="amount" placeholder="Amount">
                                        </div>
                                        <div class="form-group col-md-6 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment" id="cash"/>
                                                <label class="form-check-label" for="cash"> Cash </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment" id="cheque"/>
                                                <label class="form-check-label" for="cheque"> Cheque </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="cheque_no">Cheque No.</label>
                                            <input name="cheque_no" type="number" class="form-control" id="cheque_no" placeholder="Cheque No">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            
                            <button type="close" id="close" class="btn" style="background-color:#c45301">Cancel</button>
                            <button type="submit" class="btn btn-success">Save</button>

                        </div>
                    </div>
                    
                  
                </form>
            </div>
          </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection