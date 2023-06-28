@extends('admin.layout.app')

@section('heading', 'Customers')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($row->photo!='')
                                            <img src="{{ asset('uploads/'.$row->photo) }}" alt="" class="w_100">
                                        @else
                                            <img src="{{ asset('uploads/default.png') }}" alt="" class="w_100">
                                        @endif
                                        
                                    </td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td class="pt_10 pb_10">
                                        @if($row->status == 1)
                                            <a href="{{ route('admin_customer_change_status',$row->id) }}" class="btn btn-success">Active</a>
                                        @else
                                            <a href="{{ route('admin_customer_change_status',$row->id) }}" class="btn btn-danger">Pending</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection