@extends('backend.layouts.master')

@section('title')
    Chỉnh Thông Tin Tài Khoản
@endsection

@section('content') 
<!-- Content -->
<div class="container-fluid">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tài Khoản</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form"  action="{{route('backend.users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên người dùng</label>
                            <input name="name" type="text" class="form-control" id="" placeholder="Tên người dùng" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" class="form-control" id="" placeholder="Email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu</label>
                            <input name="password" type="password" class="form-control" id="" placeholder="Mật khẩu" value="{{$user->password}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại</label>
                            <input name="phone" type="text" class="form-control" id="" placeholder="SĐT" value="{{$user->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input name="address" type="text" class="form-control" id="" placeholder="Địa chỉ" value="{{$user->address}}">
                        </div>
                        <div class="form-group">
                            <label>Quyền</label>
                            <select name="role" class="form-control select2" style="width: 100%;" value="{{$user->role}}">
                                @if($user->role == 1){
                                    <option value="1">Quản Trị Viên</option>
                                }
                                @endif
                                @if($user->role == 2){
                                    <option value="2">Người Dùng</option>
                                }
                                @endif
                                @if($user->role == 3){
                                    <option value="3">Cộng Tác Viên</option>
                                }
                                @endif
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('backend.users.index') }}" class="btn btn-danger">Huỷ bỏ</a>
                        <button type="submit" class="btn btn-success">Cập Nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
</div>
<!-- /.container-fluid -->
@endsection