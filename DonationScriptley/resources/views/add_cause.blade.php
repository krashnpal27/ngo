@extends('layouts.master')
@section('main-content')
    <section class="content">
      <div class="container-fluid">
        <!--breadcrumb  -->
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                    
                    <li class="breadcrumb-item active" aria-current="page">Manage Causes</li>
                </ol>
            </nav>
        </div>
        <!--breadcrumb  -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col">
          <div class="card">
            <div class="card-header">
                Add Cause
            </div>
            <div class="card-body">
                <form id="cause_form" action="{{route('save_cause')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="status" id="status">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="title">Title</label>
                                            <input name="title" type="text" class="form-control" id="title" placeholder="Title">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="target_amount">Target Amount</label>
                                            <input name="target_amount" type="number" class="form-control" id="target_amount">
                                        </div>
                                        <div class="form-group col-md-6 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="isstatus" id="active"/>
                                                <label class="form-check-label" for="cash"> Active </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="isstatus" id="inactive"/>
                                                <label class="form-check-label" for="cheque"> Inactive </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="image">Image</label>
                                            <input name="image" accept="image/*" type="file" class="form-control" id="image" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="phone">Preview</label><br>
                                            <img src="" alt="" srcset="" id="pre_img" width="50" height="50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="description">Description</label><br>
                                            <textarea class="ckeditor" name="description" id="description" ></textarea>
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