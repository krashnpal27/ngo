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
                                            <label for="address_line1">Address Line1</label>
                                            <input name="address_line1" type="text" class="form-control" id="address_line1" placeholder="address_line1">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="address_line2">Address Line2</label>
                                            <input name="address_line2" type="text" class="form-control" id="address_line2" placeholder="address_line2">
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
                                                <!-- <option value="not">Select Donation Category</option> -->
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
                                                <!-- <option selected>Select Donation Cause</option> -->
                                                @if($cause)
                                                    @foreach($cause as $row)
                                                        <option value="{{$row->id}}">{{$row->title}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pan">PAN NO:</label>
                                            <input name="pan" type="text" class="form-control" id="pan" placeholder="pan">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="amount">Amount</label>
                                            <input name="amount" type="number" class="form-control amount_pay" id="amount" placeholder="Amount">
                                        </div>
                                        <!-- <div class="form-group col-md-6  align-items-center d-none" id="pay_options">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pay_type" id="online" data-url="{{ route('razorpay.payment.store') }}"/>
                                                <label class="form-check-label" for="cash"> Online </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pay_type" id="offline"/>
                                                <label class="form-check-label" for="cheque"> Offline </label>
                                            </div>
                                        </div> -->
                                        <div class="form-group col-md-6  align-items-center" id="ofline_div">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment" id="cash"/>
                                                <label class="form-check-label" for="cash"> Cash </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment" id="cheque"/>
                                                <label class="form-check-label" for="cheque"> Cheque </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 d-none" id="cheque_det">
                                            <label for="cheque_no">Cheque No.</label>
                                            <input name="cheque_no" type="text" class="form-control" id="cheque_no" placeholder="Cheque No">
                                        </div>
                                        <!-- <div class="form-group col-md-6 d-none" id="online_div">
                                            <button class="btn btn-success">pay</button>
                                        </div> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            
                            <button type="close" id="close" class="btn" style="background-color:#c45301">Cancel</button>
                            <button type="submit" class="btn btn-success">Save</button>
                            <a type="button" class="btn btn-success d-none" id="receipt" href="">Reciept</a>
                            <a type="button" class="btn btn-success d-none" id="d_receipt" href="">Download Reciept</a>

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