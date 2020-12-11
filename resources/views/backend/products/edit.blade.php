@extends('backend.layouts.master')

@section('title')
    Chỉnh sửa thông tin sản phẩm
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
                    <h3 class="card-title">Sản Phẩm</h3>
                </div> 
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('backend.products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" id="" placeholder="Điền tên sản phẩm">
                            @error('name')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Danh mục sản phẩm</label>
                            <select name="category_id" class="form-control select2" style="width: 100%;">
                                <option>--Chọn danh mục---</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Giá gốc</label>
                                    <input type="text" name="origin_price" class="form-control" placeholder="Điền giá gốc">
                                    @error('origin_price')
                                    <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Giá bán</label>
                                    <input type="text" name="sale_price" class="form-control" placeholder="Điền giá bán">
                                    @error('sale_price')
                                    <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Giảm giá</label>
                                    <input type="text" name="discount_price" class="form-control" placeholder="Điền giảm giá">
                                    @error('discount_price')
                                    <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Số Lượng</label>
                                    <input type="number" name="quantity" class="form-control" placeholder="Điền số lượng">
                                    @error('quantity')
                                    <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                                <div class="form-group">
                                    <label>Nhãn hiệu</label>
                                    <input type="text" name="model" class="form-control" placeholder="Điền nhãn hiệu">
                                    @error('model')
                                    <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                            <textarea class="textarea" name="content" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                      @error('content')
                                      <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                            <label for="exampleInputFile">Ảnh đại diện sản phẩm</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="avatar" multiple id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                            @error('image[]')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình ảnh sản phẩm</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="images[]" multiple id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                            @error('image[]')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Trạng thái sản phẩm</label>
                            <select name="status" class="form-control select2" style="width: 100%;">
                                <option>--Chọn trạng thái---</option>
                                <option value="0">Đang nhập</option>
                                <option value="1">Mở bán</option>
                                <option value="-1">Hết hàng</option>
                            </select>
                            @error('status')
                            <div style="width:350px;height:50px;margin-top:5px" class="alert alert-success">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('backend.products.index') }}" class="btn btn-danger">Huỷ bỏ</a>
                        <button type="submit" class="btn btn-success">Tạo mới</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
@endsection