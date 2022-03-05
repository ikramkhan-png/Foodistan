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
                            href="{{ route('category.list') }}"
                            >view Categories list</a
                        >
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>
                                Creat Category
                                <small>different form elements</small>
                            </h2>

                            <div class="clearfix"></div>
                        </div>
                        <br />

                        <form
                            id="demo-form2"
                            data-parsley-validate=""
                            class="form-horizontal form-label-left"
                            action="{{route('category.update' , $category->id)}}"
                            method="post"
                        >
                            @csrf

                            <div class="form-group">
                                <label
                                    class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="first-name"
                                    >Category Name
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input
                                        type="text"
                                        name="name"
                                        value="{{$category->name}}"
                                        required="required"
                                        class="form-control col-md-7 col-xs-12"
                                    />
                                </div>
                            </div>

                            <div class="form-group">
                                <label
                                    class="control-label col-md-3 col-sm-3 col-xs-12"
                                    >Sub Category Of
                                    <span class="required">*</span></label
                                >
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select
                                        name="category_id"
                                        class="form-control"
                                    >
                                        <option value="">
                                            No Parent Category
                                        </option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                            {{$category->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div
                                    class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"
                                >
                                    <input
                                        type="submit"
                                        class="btn btn-success"
                                        id=""
                                    />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@endsection
