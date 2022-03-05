@extends('layouts.admin.layout')
 @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Sellers</h3>

                    <div class="card-tools text-right">
                        <a
                            class="btn btn-sm btn-primary"
                            href="{{ route('seller.create') }}"
                            >Create a new Seller</a
                        >
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap table-bordered">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Profile Image</th>
                                <th>Shop Name</th>
                                <th>Description</th>
                                <th>Address</th>
                                <th>Documents</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sellers as $key=>$seller)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{$seller->name}}</td>
                                <td>{{$seller->email}}</td>
                                <td>
                                    <a href="#"
                                        ><img
                                            src="{{asset('uploads/profileimg/'.$seller->profile)}}"
                                            alt="profile"
                                            width="80"
                                            height="50"
                                    /></a>
                                </td>
                                <td>{{$seller->shop_name}}</td>
                                <td>{{$seller->description}}</td>
                                <td>{{$seller->address}}</td>
                                <td>
                                    <a href="#"
                                        ><img
                                            src="{{asset('uploads/shopDocuments/'.$seller->documents)}}"
                                            alt="shop Documents"
                                            width="80"
                                            height="50"
                                    /></a>
                                </td>
                                <td>{{$seller->created_at}}</td>
                                <td>
                                    <a
                                        href="{{ route('seller.edit',$seller->id)}}"
                                        ><i
                                            style="
                                                font-size: 17px;
                                                padding: 5px;
                                            "
                                            class="fa fa-edit"
                                        ></i
                                    ></a>
                                    <a
                                        href="{{ route('seller.delete',$seller->id)}}"
                                        ><i
                                            style="
                                                color: red;
                                                font-size: 17px;
                                                padding: 5px;
                                            "
                                            class="fa fa-trash"
                                        ></i
                                    ></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
