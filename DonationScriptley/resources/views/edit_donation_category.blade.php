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
                Edit Donation Category
            </div>
            <div class="card-body">
                <form id="donation_cat_edit_form" action="{{route('update_donation_cat')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="status" id="status" value="{{$data->status}}">
                            <input type="hidden" name="user_id" id="User_id" value="{{$data->id}}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}">
                                        </div>
                                        <div class="form-group col-md-3 d-flex align-items-center pt-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="isstatus" id="active" @if ($data->status=='active')checked @endif/>
                                                <label class="form-check-label" for="cash"> Active </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="isstatus" id="inactive" @if ($data->status=='inactive')checked @endif/>
                                                <label class="form-check-label" for="cheque"> Inactive </label>
                                            </div>
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