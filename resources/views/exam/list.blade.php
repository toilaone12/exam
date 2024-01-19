@extends('dashboard')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h1 class="h3 mb-2 text-gray-800">Danh sách bài thi</h1>
        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#addExam">Thêm bài thi</button>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách bài thi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên bài thi</th>
                            <th>Loại bằng</th>
                            <th>Loại kỹ năng</th>
                            <th>Danh sách câu hỏi</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($exams as $key => $exam)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$exam->name}}</td>
                            @foreach($levels as $key1 => $level)
                            @if($level->id == $exam->id_level)
                            <td>{{$level->name}}</td>
                            @endif
                            @endforeach
                            @foreach($lessons as $key1 => $lesson)
                            @if($lesson->id == $exam->id_lesson)
                            <td>{{$lesson->name}}</td>
                            @endif
                            @endforeach
                            <td>{{$exam->name}}</td>
                            <td>
                                <a href="{{route('exam.update',['id'=>$exam->id])}}" class="btn btn-outline-info fs-15"><i class="fa-solid fa-wrench"></i></a>
                                <a data-id="{{$exam->id}}" class="btn btn-outline-danger fs-15 delete-exam"><i class="fa-solid fa-trash-can"></i></a>
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
<div class="modal fade" id="addExam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm loại bằng</h5>
                <button type="button" class="border-0 btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <form class="add-exam">
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