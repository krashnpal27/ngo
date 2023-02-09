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
                Add Expense
            </div>
            <div class="card-body">
                <form id="expense_form" action="{{route('save_expense')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="category">Expenses Category</label>
                                            <select id="category" name="category" class="form-control">
                                                <option value="not" selected>Select Expense Category</option>
                                                @if($category)
                                                    @foreach($category as $row)
                                                        <option value="{{$row->id}}">{{$row->title}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="amount">Amount</label>
                                            <input name="amount" type="number" class="form-control" id="amount">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="detail">Detail</label><br>
                                            <textarea name="detail" id="detail" cols="30" ></textarea>
                                        </div> 
                                        <div class="form-group col-md-6">
                                            <label for="image">Expense Receipt</label>
                                            <input name="image" accept="image/*" type="file" class="form-control" id="image" >
                                        </div>
                                        <!-- <div class="form-group col-md-12">
                                            <label for="phone">Preview</label><br>
                                            <img src="" alt="" srcset="" id="pre_img" width="50" height="50">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="date">Date</label><br>
                                            <input type="date" name="date" id="date">
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