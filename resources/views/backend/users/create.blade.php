@extends('backend.layouts.master')

@section('title')
    Thêm Tài Khoản
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
                    <h3 class="card-title">Tạo tài khoản</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form"  action="{{route('backend.users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên</label>
                            <input name="name" type="text" class="form-control" id="" placeholder="Tên người dùng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" class="form-control" id="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu</label>
                            <input name="password" type="password" class="form-control" id="" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại</label>
                            <input name="phone" type="text" class="form-control" id="" placeholder="SĐT">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input name="address" type="text" class="form-control" id="" placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                            <label>Quyền</label>
                            <select name="role" class="form-control select2" style="width: 100%;">
                                <option>--Chọn quyền---</option>
                                <option value="1">Quản Trị</option>
                                <option value="2">Người Dùng</option>
                                <option value="3">Cộng Tác Viên</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('backend.users.index') }}" class="btn btn-danger">Huỷ bỏ</a>
                        <button type="submit" class="btn btn-success">Tạo mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
</div>
<!-- /.container-fluid -->
@endsection