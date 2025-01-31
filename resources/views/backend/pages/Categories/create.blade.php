@extends('layout.backend')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Quản trị</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('categories')}}">Danh mục tin</a></li>
                    <li class="breadcrumb-item active">Tạo danh mục</li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
                <a href="{{route('categories.create')}}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-plus mr-1"></i>Tạo danh mục tin</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title">
                            <h3>Thêm danh mục</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('categories.store')}}">
                                @csrf
                                <div class="d-flex align-items-center">
                                    <div class="form-group mr-2 w-50">
                                        <label for="name">Tên</label>
                                        <input name="name" type="text" id="name" class="form-control" placeholder="Nhập tên danh mục" />
                                    </div>
                                    <div class="form-group ml-2 w-50">
                                        <label for="parent_id">Danh mục</label>
                                        <select name="parent_id" id="parent_id" class="form-select">
                                            <option value="0">Vui lòng chọn</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{($category->parent_id != 0) ? '-- '.$category->name : $category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center"><button type="submit" class="btn btn-primary"><i class="mdi mdi-plus mr-1"></i> Thêm mới</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
