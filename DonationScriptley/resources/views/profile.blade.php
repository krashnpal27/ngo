@extends('layouts.master')
@section('main-content')
    <section class="content">
      <div class="container-fluid">
        <!--breadcrumb  -->
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                    
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
        <!--breadcrumb  -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col">
          <div class="card">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body">
                <form id="profile_edit_form" action="{{route('update_profile')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="status" id="status" value="">
                            <input type="hidden" name="user_id" id="User_id" value="{{$data[0]->id}}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{$data[0]->name}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input name="email" type="email" class="form-control" id="email" value="{{$data[0]->email}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone</label>
                                            <input name="phone" type="number" class="form-control" id="phone" value="{{$data[0]->phone}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="image">Image</label>
                                            <input name="image" accept="image/*" type="file" class="form-control" id="image" value="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="phone">Preview</label><br>
                                            <img src="{{$data[0]->image}}" alt="" srcset="" id="pre_img" width="50" height="50">
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