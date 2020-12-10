@extends('backend.layouts.master')


@section('title')
    Quản Lý Danh Mục
@endsection

@section('content')
<!-- Content -->
<div class="container-fluid">
    <!-- Main row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh Mục Sản Phẩm</h3>
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
                            <th>Tên danh mục</th>
                            <th>Slug</th>
                            <th>ID danh mục cha</th>
                            <th>Độ sâu</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                 <td>{{ $category->id }}</td>
                                 <td>{{ $category->name }}</td>
                                 <td>{{ $category->slug }}</td>
                                 <td>{{ $category->parent_id }}</td>
                                 <td>{{ $category->depth }}</td>

                                <!-- //Nút chỉnh sửa-->
                                 <td>
                                    <a href="{{route('backend.categories.edit',$category->id)}}" type="submit" class="btn btn-info">
                                        <i class="fa fa-btn fa-edit"></i>Chỉnh Sửa
                                    </a>
                                </td>

                               <!-- //Nút xóa-->
                                <td>
                                    <form action="{{ route('backend.categories.delete',$category['id']) }}" method="POST">
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
                {!! $categories->links() !!}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
@endsection
