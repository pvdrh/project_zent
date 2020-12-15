@extends('backend.layouts.master')

@section('title')
    Quản Lý Đơn Hàng
@endsection

@section('content')
<!-- Content -->
<div class="container-fluid">
    <!-- Main row -->
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Đơn Hàng</h3>
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
                            <th>Số Lượng</th>
                            <th>Thời gian</th>
                            <th>Trạng Thái</th>
                        </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($products as $product)
                            <tr>
                                 <td>{{ $product->id }}</td>
                                 <td>{!!$product->model!!}</td>
                                 <td>{{ $product->name }}</td>
                                 <td>{{ $product->quantity }}</td>
                                 <td>{{ $product->created_at }}</td>
                                 <td>{{number_format($product->origin_price)}} đ</td>
                                 <td>{{number_format($product->sale_price)}} đ</td>

                <!-- //Nút chỉnh sửa-->
                <td>
                    <a href="#" type="submit" class="btn btn-info">
                        <i class="fa fa-btn fa-edit"></i>Chỉnh Sửa
                    </a>
                </td>
        
               <!-- //Nút xóa-->
                <td>
                    <form action="#" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Xoá
                        </button>
                    </form>
                </td>
                             </tr>
                             {{-- @endforeach --}}
                        </tbody>

                    </table>
                </div>
                {{-- {!! $products->links() !!} --}}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>  
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
@endsection
