@extends('dashboard')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h1 class="h3 mb-2 text-gray-800">Danh sách loại bằng</h1>
        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#addLevel">Thêm loại bằng</button>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách loại bằng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên loại bằng</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($levels as $key => $level)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$level->name}}</td>
                            <td>
                                <a href="{{route('level.update',['id'=>$level->id])}}" class="btn btn-outline-info fs-15"><i class="fa-solid fa-wrench"></i></a>
                                <a data-id="{{$level->id}}" class="btn btn-outline-danger fs-15 delete-level"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<div class="modal fade" id="addLevel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm loại bằng</h5>
                <button type="button" class="border-0 btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <form class="add-level">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên loại bằng</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection