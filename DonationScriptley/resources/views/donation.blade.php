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
                        
                        <li class="breadcrumb-item active" aria-current="page">Manage Donation List</li>
                    </ol>
                  </div>
                  <div class="ml-auto mt-2 ">
                    <a class="btn btn-warning" style="background-color:#c45301" href="{{route('add_donation_cat')}}">Add Donation Category</a>
                    <a class="btn btn-success" href="{{route('add_donation')}}">Add Donation</a>
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
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Category</th>
                    <th scope="col">Cause</th>
                    <th scope="col">Payment BY</th>
                    <th scope="col">Amount</th>
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
                      <td>{{$row->fname}}</td>
                      <td>{{$row->email}}</td>
                      <td>{{$row->city}}</td>
                      <td>{{$row->phone}}</td>
                      <td>{{$row->cname}}</td>
                      <td>{{$row->cstitle}}</td>
                      <td>{{$row->payment_by}}</td>
                      <td>{{$row->amount}}</td>
                      <td>{{$row->created_at}}</td>
                      <td>
                            <a  class="delete_donation" data-url="{{route('delete_donation')}}" data-id="{{$row->id}}" data-toggle="tooltip" data-placement="top" title="Delete Donation"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a id="edit_donation" href="{{URL('edit_donation/'.$row->id)}}" class="viewdonation" data_id="{{$row->id}}" data_value="edit" data_title="Edit Donation" data-toggle="tooltip" data-placement="top" title="Edit Donation"><i class="fa fa-edit " aria-hidden="true"></i></a>
                            <a id="receipt_print" href="{{URL('pdf_view/'.$row->receipt_no)}}" class="viewreceipt" data_id="{{$row->id}}" data_value="edit" data_title="Edit Donation" data-toggle="tooltip" data-placement="top" title="Donation Receipt"><i class="fa fa-print" aria-hidden="true"></i></a>
                            <a id="receipt_print" href="{{URL('pdf_download/'.$row->receipt_no)}}" class="viewreceipt" data_id="{{$row->id}}" data_value="edit" data_title="Edit Donation" data-toggle="tooltip" data-placement="top" title="Donation Receipt"><i class="fa fa-download" aria-hidden="true"></i></a>
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