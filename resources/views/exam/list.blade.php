@extends('dashboard')
@section('content')
<?php
use App\Models\Assignment;
?>
<style>
    .select2-container {
        width: 100% !important;
    }

    .select2-results__option {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Số dòng muốn hiển thị */
        -webkit-box-orient: vertical;
        overflow: hidden;
        width: 522px;
    }

    #editor {
        height: 700px;
    }

    .text-ellipsis {
        display: -webkit-box;
        -webkit-line-clamp: 5;
        /* Số dòng muốn hiển thị */
        -webkit-box-orient: vertical;
        overflow: hidden;
        width: 390px;
    }
</style>
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
                            <td>
                                @php
                                $array = explode('|',trim($exam->list_assignment,'|'));
                                @endphp
                                @foreach($array as $key => $one)
                                @php
                                $oneItem = Assignment::find($one);   
                                @endphp
                                <div class="d-block">Đề bài {{$key+1}}: <span class="text-danger text-ellipsis">{!!$oneItem['name']!!}</span></div>
                                @endforeach
                            </td>
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
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm bài thi</h5>
                <button type="button" class="border-0 btn btn-outline-secondary close-exam" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <form class="add-exam">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="level">Loại bằng</label>
                                <select name="id_level" id="level" class="form-control">
                                    @foreach($levels as $level)
                                    <option value="{{$level->id}}">{{$level->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="lesson">Loại kỹ năng</label>
                                <select name="id_lesson" id="lesson" class="form-control">
                                    @foreach($lessons as $lesson)
                                    <option value="{{$lesson->id}}">{{$lesson->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <label for="name">Tên bài thi</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="duration">Thời gian bài thi <span class="text-duration">(5 phút)</span></label>
                                <input type="range" name="duration" id="duration" class="form-range w-100 duration-change" min="5" max="120" step="5" value="5" required>
                                <!-- <input type="number" name="duration" id="duration" class="form-control" required> -->
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <span class="text-white px-2 py-2 bg-primary">Danh sách đề bài</span>
                        <div class="card-body">
                            <select id="multi-assignment" class="form-control w-100" name="list[]" multiple="multiple" required>
                                @foreach($assignments as $assignment)
                                <option value="{{$assignment->id}}" class="text-ellipsis">{!!$assignment->name!!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-exam" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection