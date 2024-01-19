@extends('dashboard')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <h1 class="h3 mb-2 text-gray-800">Sửa loại bằng</h1>
        </div>
        <div class="card-body">
            <form class="change-level" data-id="{{$level->id}}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên loại bằng</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$level->name}}" required>
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