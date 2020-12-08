@extends('backend.layouts.master')

@section('content-header')

@section('title')
    Quản Lý Sản Phẩm
@endsection

<!-- Content Header -->
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                <li class="breadcrumb-item active">Danh sách</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('content')
<!-- Content -->
<div class="container-fluid">
    <!-- Main row -->
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sản phẩm mới nhập</h3>

                    @if(session()->has('status'))
                    <span style="color:red">{{session()->get('status')}}</span>
                        @endif
                        @if(session()->has('error'))
                    <span style="color:red">{{session()->get('error')}}</span>
                        @endif
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nhãn Hiệu</th>
                            <th>Tên sản phẩm</th>
                            <th>Thời gian</th>
                            <th>Số Lượng</th>
                            <th>Trạng Thái</th>
                            <th>Giá Gốc</th>
                            <th>Giá Khuyến Mãi</th>
                            <th>Mô tả</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                 <td>{{ $product->id }}</td>
                                 <td>{!!$product->model!!}</td>
                                 <td>{{ $product->name }}</td>
                                 <td>{{ $product->created_at }}</td>
                                 <td>{{ $product->status }}</td>
                                 <td>{!!$product->origin_price!!}</td>
                                 <td>{!!$product->discount_price!!}</td>
                                 <td>{{ $product->content }}</td>
                                 <td>{{ $product->category_id }}</td>
                                 <td><span class="tag tag-success">Approved</span></td>
                             </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $products->links() !!}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>  
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
@endsection
