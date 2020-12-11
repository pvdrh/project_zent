@extends('backend.layouts.master')

@section('title')
    Chỉnh sửa bài viết
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
                <form role="form" method="post" action="{{ route('backend.posts.update',$post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu Đề</label>
                            <input type="text" name="title" class="form-control" id="" placeholder="Tiêu đề bài viết" value="{{$post->title}}">
                            @error('title')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                            @enderror

                        </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="slug" value="{{$post->slug}}">
                                    @error('slug')
                                    <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả</label>
                            <input type="text" class="form-control" id="" placeholder="Điền tên sản phẩm" value="{!!$post->content!!}" name="content">
                            @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                            <div class="form-group">
                            <label for="exampleInputFile">Ảnh</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="img" multiple id="exampleInputFile" value="{{$post->img}}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                            @error('img')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('backend.posts.index') }}" class="btn btn-danger">Huỷ bỏ</a>
                        <button type="submit" class="btn btn-success">Cập nhật</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
@endsection