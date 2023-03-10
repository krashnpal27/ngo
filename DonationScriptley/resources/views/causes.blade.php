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
                <div class="mb-2">
                  <a class="btn btn-primary" href="{{route('add_causes')}}">Add Cause</a>
                </div>
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
                    <th scope="col">Title</th>
                    <th scope="col">Target Amount</th>
                    <th scope="col">Donation</th>
                    <th scope="col">Status</th>
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
                      <td>{{$row->title}}</td>
                      <td>{{$row->target_amount}}</td>
                      <td>{{$row->donation}}</td>
                      <td>{{$row->status}}</td>
                      <td>{{$row->created_at}}</td>
                      <td>
                            <a class="delete_cause" data-url="{{route('delete_cause')}}"  data-id="{{$row->id}}" data-img="{{$row->image}}" data-toggle="tooltip" data-placement="top" title="Delete Donation"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a class="viewcause" href="{{URL('edit_cause/'.$row->id)}}" data_id="{{$row->id}}" data_value="edit" data_title="Edit Donation" data-toggle="tooltip" data-placement="top" title="Edit Donation"><i class="fa fa-edit" aria-hidden="true"></i></a>
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