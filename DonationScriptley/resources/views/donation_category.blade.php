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
                  <a class="btn btn-success" href="{{route('add_donation_cat')}}">Add Donation Category</a>
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
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($data)>0)
                    @php $i=1; @endphp
                    @foreach($data as $row)
                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$row->title}}</td>
                      <td>{{$row->status}}</td>
                      <td>
                            <a  class="delete_don_cat" data-url="{{route('delete_donation_cat')}}" data-id="{{$row->id}}" data-toggle="tooltip" data-placement="top" title="Delete Donation"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a id="edit_don_cat" href="{{URL('edit_donation_cat/'.$row->id)}}" class="viewdonation" data_id="{{$row->id}}" data_value="edit" data_title="Edit Donation" data-toggle="tooltip" data-placement="top" title="Edit Donation"><i class="fa fa-edit" aria-hidden="true"></i></a>
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