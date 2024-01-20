@extends('dashboard')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <h1 class="h3 mb-2 text-gray-800">Sửa câu hỏi</h1>
        </div>
        <div class="card-body">
            <form class="change-question" data-id="{{$question->id}}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên câu hỏi</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$question->name}}" placeholder="Câu hỏi" required>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="answer_a">Lựa chọn A</label>
                                <input type="text" name="answer_a" id="answer_a" value="{{$question->answer_a}}" class="form-control" placeholder="Lựa chọn A" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="answer_b">Lựa chọn B</label>
                                <input type="text" name="answer_b" id="answer_b" value="{{$question->answer_b}}" class="form-control" placeholder="Lựa chọn B" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="answer_c">Lựa chọn C</label>
                                <input type="text" name="answer_c" id="answer_c" value="{{$question->answer_c}}" class="form-control" placeholder="Lựa chọn C">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="answer_d">Lựa chọn D</label>
                                <input type="text" name="answer_d" id="answer_d" value="{{$question->answer_d}}" class="form-control" placeholder="Lựa chọn D">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Đáp án</label>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer" value="A" id="flexRadioDefaultA" {{$question->answer == 'A' ? 'checked' : ''}}>
                                <label class="form-check-label" for="flexRadioDefaultA">
                                    A
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer" value="B" id="flexRadioDefaultB" {{$question->answer == 'B' ? 'checked' : ''}}>
                                <label class="form-check-label" for="flexRadioDefaultB">
                                    B
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer" value="C" id="flexRadioDefaultC" {{$question->answer == 'C' ? 'checked' : ''}}>
                                <label class="form-check-label" for="flexRadioDefaultC">
                                    C
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer" value="D" id="flexRadioDefaultD" {{$question->answer == 'D' ? 'checked' : ''}}>
                                <label class="form-check-label" for="flexRadioDefaultD">
                                    D
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button> -->
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection