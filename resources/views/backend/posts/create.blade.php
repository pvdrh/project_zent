@extends('backend.layouts.master')

@section('title')
    Thêm bài viết
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
                    <h3 class="card-title">Bài Viết</h3>
                </div> 
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('backend.posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu Đề Bài Viết</label>
                            <input type="text" name="title" class="form-control" id="" placeholder="Tiêu đề">
                            @error('title')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội Dung Bài Viết</label>
                            <textarea class="textarea" name="content" placeholder="Nội dung"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                      @error('content')
                                      <div style="width:350px;height:50px;margin-top:5px" class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                            <label for="exampleInputFile">Ảnh</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="img" multiple id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                            @error('img')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{ route('backend.posts.index') }}" class="btn btn-danger">Huỷ bỏ</a>
                        <button type="submit" class="btn btn-success">Tạo mới</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
@endsection