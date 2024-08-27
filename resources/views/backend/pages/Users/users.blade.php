@extends('layout.backend')

@section('content')
    <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success d-none {{ Session::get('success') }}"></div>
        @endif
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Người dùng</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Quản trị</a></li>
                    <li class="breadcrumb-item active">Người dùng</li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
                <a href="{{route('users.create')}}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-plus mr-1"></i>Thêm mới</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title d-flex align-items-center">
                            <span class="d-inline-block">Danh sách người dùng</span>
                            <form method="get" action="{{route('users.search')}}" class="d-inline-flex align-items-center ml-auto">
                                <input class="form-control mr-2" name="key" value="{{isset($key)?$key:''}}" placeholder="Tìm kiếm người dùng"/>
                                <button class="btn btn-primary"><i class="mdi mdi-search-web mr-1"></i> Tìm kiếm</button>
                            </form>
                        </h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="col-1">#</th>
                                        <th class="col-3">Tên</th>
                                        <th class="col-3">Vai trò</th>
                                        <th class="col-3">Email</th>
                                        <th class="col-3">Sửa vai trò</th>
                                        <th class="col-1">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->role == 10 ? 'Admin' : 'Nguời dùng'}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <form action="{{ route('users.updateRole', $user->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="role" class="form-control" onchange="this.form.submit()">
                                                        <option value="0" {{ $user->role == 0 ? 'selected' : '' }}>Người dùng</option>
                                                        <option value="10" {{ $user->role == 10 ? 'selected' : '' }}>Admin</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('users.destroy', $user->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger deleted w-100"><i class="mdi mdi-delete-empty mr-1"></i>Xoá</button>
                                                </form>
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
@stop