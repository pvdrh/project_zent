@extends('backend.layouts.master')

@section('title')
    Quản Lý Sản Phẩm
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
                            <th>Số Lượng</th>
                            <th>Thời gian</th>
                            <th>Giá Gốc</th>
                            <th>Giá Bán</th>
                            <th>Trạng Thái</th>
                            <th>Danh Mục</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                 <td>{{ $product->id }}</td>
                                 <td>{!!$product->model!!}</td>
                                 <td>{{ $product->name }}</td>
                                 <td>{{ $product->quantity }}</td>
                                 <td>{{ $product->created_at }}</td>
                                 <td>{{number_format($product->origin_price)}} đ</td>
                                 <td>{{number_format($product->sale_price)}} đ</td>
                                 @if($product->status == 0)
                                 <td>Đang nhập</td>
                                 @endif
                                 @if($product->status == 1)
                                 <td>Mở bán</td>
                                 @endif
                                 @if($product->status == -1)
                                 <td>Hết hàng</td>
                                 @endif
                                 <td>{{ $product->category_id}}</td>

                <!-- //Nút chỉnh sửa-->
                <td>
                    <a href="{{route('backend.products.edit',$product->id)}}" type="submit" class="btn btn-info">
                        <i class="fa fa-btn fa-edit"></i>Chỉnh Sửa
                    </a>
                </td>
        
               <!-- //Nút xóa-->
                <td>
                    <form action="{{ route('backend.products.delete',$product['id']) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Xoá
                        </button>
                    </form>
                </td>
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
