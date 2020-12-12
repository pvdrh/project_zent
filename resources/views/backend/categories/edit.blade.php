@extends('backend.layouts.master')

@section('title')
    Chỉnh Sửa Danh Mục
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
                    <h3 class="card-title">Danh Mục</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form"  action="{{route('backend.categories.update',$category->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input name="name" type="text" class="form-control" id="" placeholder="Tên danh mục"  value="{{$category->name}}">
                        </div>
                        @error('name')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input name="slug" type="text" class="form-control" id="" placeholder="Slug"  value="{{$category->slug}}">
                        </div>
                        @error('slug')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh Mục Cha</label>
                            <input name="parent_id" type="number" class="form-control" id="" placeholder="Danh mục cha"  value="{{$category->parent_id}}">
                        </div>
                        @error('parent_id')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                            @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">Độ Sâu</label>
                            <input name="depth" type="number" class="form-control" id="" placeholder="Độ sâu"  value="{{$category->depth}}">
                        </div>
                        @error('depth')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('backend.categories.index') }}" class="btn btn-danger">Huỷ bỏ</a>
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