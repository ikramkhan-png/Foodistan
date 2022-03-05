@extends('layouts.admin.layout') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Items</h3>

                    <div class="card-tools text-right">
                        <a
                            class="btn btn-sm btn-primary"
                            href="{{ route('category.create') }}"
                            >Create a new Category</a
                        >
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap table-bordered">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>name</th>
                                <th>Parent Category Name</th>
                                <th>created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $key=>$category)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    @if($category->category_id)
                                    {{$category->parent->name}}
                                    @else
                                    <p>No Parent Category</p>
                                    @endif
                                </td>
                                <td>{{$category->created_at}}</td>
                                <td>
                                    <a
                                        href="{{ route('category.edit',$category->id)}}"
                                        ><i
                                            style="
                                                font-size: 17px;
                                                padding: 5px;
                                            "
                                            class="fa fa-edit"
                                        ></i
                                    ></a>
                                    <a
                                        href="{{ route('category.delete',$category->id)}}"
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
