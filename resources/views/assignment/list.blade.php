@extends('dashboard')
@section('content')
<?php
use App\Models\Question;
?>
<style>
    .select2-container{
        width: 100% !important;
    }
    #editor{
        height: 700px;
    }
    .text-ellipsis{
        display: -webkit-box;
        -webkit-line-clamp: 6; /* Số dòng muốn hiển thị */
        -webkit-box-orient: vertical;
        overflow: hidden;
        width: 500px;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h1 class="h3 mb-2 text-gray-800">Danh sách đề tài</h1>
        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#addAssignment">Thêm đề tài</button>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách đề tài</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên đề tài</th>
                            <th>Danh sách câu hỏi</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($assignments as $key => $assignment)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                <div class="d-flex">
                                    <span class="text-ellipsis">
                                        {{$assignment->name}}
                                    </span>
                                </div>
                            </td>
                            <td>
                                @php
                                $array = explode('|',trim($assignment->list_question,'|'));
                                @endphp
                                @foreach($array as $key => $one)
                                @php
                                $oneItem = Question::find($one);   
                                @endphp
                                <div class="d-block">Câu hỏi 1.{{$key+1}}: <span class="text-danger">{{$oneItem['name']}}</span></div>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{route('assignment.update',['id'=>$assignment->id])}}" class="btn btn-outline-info d-block w-50 fs-15"><i class="fa-solid fa-wrench"></i></a>
                                <a data-id="{{$assignment->id}}" class="btn btn-outline-danger mt-md-2 d-block w-50 fs-15 delete-assignment"><i class="fa-solid fa-trash-can"></i></a>
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
<div class="modal fade" id="addAssignment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 600px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm đề tài</h5>
                <button type="button" class="border-0 btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <form class="add-assignment">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên đề tài</label>
                        <textarea name="ckeditor" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="card">
                        <span class="text-white px-2 py-2 bg-primary">Danh sách câu hỏi</span>
                        <div class="card-body">
                            <select id="multi-question" class="form-control w-100" name="list[]" multiple="multiple" required>
                                @foreach($questions as $question)
                                <option value="{{$question->id}}">{{$question->name}}</option>
                                @endforeach
                            </select>
                        </div>
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