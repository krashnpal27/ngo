@extends('layouts.master')
@section('main-content')
    <section class="content">
      <div class="container-fluid">
        <!--breadcrumb  -->
        <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <div class="row" style="background-color:#e9ecef">
                  <div class="col-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                        
                        <li class="breadcrumb-item active" aria-current="page">Manage Expenses</li>
                    </ol>
                  </div>
                  <div class="ml-auto mt-2 ">
                    <a class="btn btn-warning" style="background-color:#c45301" href="{{route('add_expense_cat')}}">Add Expense Category</a>
                    <a class="btn btn-success" href="{{route('add_expense')}}">Add Expenses</a>
                  </div>
                </div>
              </nav>
        </div>
        <!--breadcrumb  -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col">
          <div class="card">
            <div class="card-body table-responsive">
              <table class="table" id="mytable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Expense Category</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($data)>0)
                    @php $i=1; @endphp
                    @foreach($data as $row)
                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$row->cname}}</td>
                      <td>{{$row->amount}}</td>
                      <td>{{$row->detail}}</td>
                      <td>{{$row->date}}</td>
                      <td>
                        <a class="delete_expense" data-url="{{route('delete_expense')}}" data-id="{{$row->id}}" data-img="{{$row->image}}" data-id="{{$row->id}}" data-toggle="tooltip" data-placement="top" title="Delete Expense"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <span class="viewdonation" data_id="{{$row->id}}" data_value="view" data_title="View Donation" data-toggle="tooltip" data-placement="top" title="View Donation"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <a class="viewexpense" href="{{URL('edit_expense/'.$row->id)}}" data_id="{{$row->id}}" data_value="edit" data_title="Edit Donation" data-toggle="tooltip" data-placement="top" title="Edit Donation"><i class="fa fa-edit" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection