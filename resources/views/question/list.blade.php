@extends('dashboard')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h1 class="h3 mb-2 text-gray-800">Danh sách câu hỏi</h1>
        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#addQuestion">Thêm câu hỏi</button>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách câu hỏi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên câu hỏi</th>
                            <th>Câu trả lời</th>
                            <th>Đáp án</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($questions as $key => $question)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$question->name}}</td>
                            <td>
                                <div class="d-block">
                                    <span class="text-danger">Lựa chọn A:</span> {{$question->answer_a}}
                                </div>
                                <div class="d-block">
                                    <span class="text-danger">Lựa chọn B:</span> {{$question->answer_b}}
                                </div>
                                <div class="d-block">
                                    <span class="text-danger">Lựa chọn C:</span> {{$question->answer_c ? $question->answer_c : 'Không có'}}
                                </div>
                                <div class="d-block">
                                    <span class="text-danger">Lựa chọn D:</span> {{$question->answer_d ? $question->answer_d : 'Không có'}}
                                </div>
                            </td>
                            <td>{{$question->answer}}</td>
                            <td>
                                <a href="{{route('question.update',['id'=>$question->id])}}" class="btn btn-outline-info fs-15"><i class="fa-solid fa-wrench"></i></a>
                                <a data-id="{{$question->id}}" class="btn btn-outline-danger mt-md-2 fs-15 delete-question"><i class="fa-solid fa-trash-can"></i></a>
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
<div class="modal fade" id="addQuestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm câu hỏi</h5>
                <button type="button" class="border-0 btn btn-outline-secondary close-question" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <form class="add-question">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên câu hỏi</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Câu hỏi" required>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="answer_a">Lựa chọn A</label>
                                <input type="text" name="answer_a" id="answer_a" class="form-control" placeholder="Lựa chọn A" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="answer_b">Lựa chọn B</label>
                                <input type="text" name="answer_b" id="answer_b" class="form-control" placeholder="Lựa chọn B" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="answer_c">Lựa chọn C</label>
                                <input type="text" name="answer_c" id="answer_c" class="form-control" placeholder="Lựa chọn C">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="answer_d">Lựa chọn D</label>
                                <input type="text" name="answer_d" id="answer_d" class="form-control" placeholder="Lựa chọn D">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Đáp án</label>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" checked name="answer" value="A" id="flexRadioDefaultA">
                                <label class="form-check-label" for="flexRadioDefaultA">
                                    A
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer" value="B" id="flexRadioDefaultB">
                                <label class="form-check-label" for="flexRadioDefaultB">
                                    B
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer" value="C" id="flexRadioDefaultC">
                                <label class="form-check-label" for="flexRadioDefaultC">
                                    C
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer" value="D" id="flexRadioDefaultD">
                                <label class="form-check-label" for="flexRadioDefaultD">
                                    D
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-question" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection