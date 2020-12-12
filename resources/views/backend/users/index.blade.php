@extends('backend.layouts.master')

@section('title')
    Quản Lý Tài Khoản
@endsection



@section('content')
<!-- Content -->
<div class="container-fluid">
    <!-- Main row -->
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách người dùng</h3>

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
                            <th>Email</th>
                            <th>Tên</th>
                            <th>Thời gian</th>
                            <th>SĐT</th>
                            <th>Chức Vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                 <td>{{ $user->id }}</td>
                                 <td>{{ $user->email }}</td>
                                 <td>{{ $user->name }}</td>
                                 <td>{{ $user->created_at }}</td>
                                 <td>{{ $user->phone }}</td>
                                 @if($user->role == 1)
                                 <td>Quản Trị Viên</td>
                                 @endif
                                 @if($user->role == 2)
                                 <td>Nhân Viên</td>
                                 @endif
                                 @if($user->role == 3)
                                 <td>Cộng Tác Viên</td>
                                 @endif
                
                
                <!-- //Nút chỉnh sửa-->
                <td>
                    <a href="{{route('backend.users.edit',$user->id)}}" type="submit" class="btn btn-info">
                        <i class="fa fa-btn fa-edit"></i>Chỉnh Sửa
                    </a>
                </td>
        
               <!-- //Nút xóa-->
                <td>
                    <form action="{{ route('backend.users.delete',$user['id']) }}" method="POST">
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
                {!! $users->links() !!}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row (main row) -->
</div>
<!-- /.container-fluid -->
@endsection
