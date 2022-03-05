@extends('layouts.admin.layout') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Products</h3>

                    <div class="card-tools text-right">
                        <a
                            class="btn btn-sm btn-primary"
                            href="{{ route('product.create') }}"
                            >Create a new Product</a
                        >
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap table-bordered">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Product Description</th>
                                <th>Price</th>
                                <th>Total Items</th>
                                <th>Image</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $key=>$product)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{$product->name}}</td>
                                <td>
                                    @if($product->category_id)
                                    {{$product->category->name}}
                                    @else
                                    <p>No Parent Category</p>
                                    @endif
                                </td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->total_items}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <img
                                        src="{{asset('uploads/products/'.$product->image)}}"
                                        alt=""
                                        style="height: 80px; width: 80px"
                                    />
                                </td>
                                <td>{{$product->created_at}}</td>
                                <td>
                                    <a
                                        href="{{ route('product.edit',$product->id)}}"
                                        ><i
                                            style="
                                                font-size: 17px;
                                                padding: 5px;
                                            "
                                            class="fa fa-edit"
                                        ></i
                                    ></a>
                                    <a
                                        href="{{ route('product.delete',$product->id)}}"
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
