@extends('page')
@section('content')
<div class="detail">
    <div class="container">
        <form method="POST" action="{{route('exam.finish')}}" id="finish-exam">
            @csrf
            <input type="hidden" name="idExam" value="{{$_GET['id']}}">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="exam-detail-block">
                        <h3 class="exam-detail-title">{{$exam->name}}</h3>
                        <p class="exam-detail-time">Thời lượng: <span class="fw-bolder duration-exam" data-duration="{{$exam->duration}}">{{$exam->duration < 10 ? '0'.$exam->duration : $exam->duration}} Phút</span></p>
                        <div class="exam-detail-label">
                            <p>{{$lesson->name}}</p>
                        </div>
                        <div class="exam-detail-countdown">
                            <ul class="d-flex justify-content-center">
                                <li>
                                    <span id="hours" class="exam-detail-number">00</span>
                                    <span class="exam-detail-text text-white fs-16">Giờ</span>
                                </li>
                                <li>
                                    <span id="minutes" class="exam-detail-number">{{$exam->duration < 10 ? '0'.$exam->duration : $exam->duration}}</span>
                                    <span class="exam-detail-text text-white fs-16">Phút</span>
                                </li>
                                <li>
                                    <span id="seconds" class="exam-detail-number">00</span>
                                    <span class="exam-detail-text text-white fs-16">Giây</span>
                                </li>
                            </ul>
                        </div>
                        <div class="exam-detail-finish">
                            <button type="submit" class="exam-detail-button finish-exam border-0 w-100">Hoàn thành</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <h3 class="exam-block-title">Đọc đoạn văn và lựa chọn câu trả lời chính xác!</h3>
                    @php
                        $count = 0;
                    @endphp
                    @foreach($arrayExam as $key => $exam)
                    <div class="exam-block-question">
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="exam-block-type">
                                <div class="exam-block-type-name">
                                    <a href="#">Câu số {{$key + 1}}</a>
                                </div>
                                <div class="d-flex justify-content-between flex-column">
                                    <div class="exam-block-type-content">
                                        <h3 class="exam-block-type-title">
                                            {!!$exam['title']!!}
                                        </h3>
                                    </div>
                                    @foreach($exam['list'] as $key1 => $one)
                                    <div class="exam-item-question">
                                        <div class="d-flex flex-wrap exam-title-question align-items-center">
                                            <div class="exam-number-question">1.{{$key1 + 1}}</div>
                                            <h3 class="exam-label-question" data-id="{{$one['id']}}">
                                                {{$one['question']}}
                                            </h3>
                                        </div>
                                        <div class="exam-option-question d-flex align-items-center overflow-hidden flex-wrap align-content-start">
                                            <div class="exam-item-question w-100 d-block form-check mb-2">
                                                <input class="form-check-input" type="radio" name="answer_{{$exam['id']}}_{{$one['id']}}" value="A" id="A_{{$exam['id']}}_{{$one['id']}}">
                                                <label class="form-check-label" for="A_{{$exam['id']}}_{{$one['id']}}">
                                                    A. {{$one['answer_a']}}
                                                </label>
                                            </div>
                                            <div class="exam-item-question w-100 d-block form-check mb-2">
                                                <input class="form-check-input" type="radio" name="answer_{{$exam['id']}}_{{$one['id']}}" value="B" id="B_{{$exam['id']}}_{{$one['id']}}">
                                                <label class="form-check-label" for="B_{{$exam['id']}}_{{$one['id']}}">
                                                    B. {{$one['answer_b']}}
                                                </label>
                                            </div>
                                            @if($one['answer_c'])
                                            <div class="exam-item-question w-100 d-block form-check mb-2">
                                                <input class="form-check-input" type="radio" name="answer_{{$exam['id']}}_{{$one['id']}}" value="C" id="C_{{$exam['id']}}_{{$one['id']}}">
                                                <label class="form-check-label" for="C_{{$exam['id']}}_{{$one['id']}}">
                                                    C. {{$one['answer_c']}}
                                                </label>
                                            </div>
                                            @endif
                                            @if($one['answer_d'])
                                            <div class="exam-item-question w-100 d-block form-check mb-2">
                                                <input class="form-check-input" type="radio" name="answer_{{$exam['id']}}_{{$one['id']}}" value="D" id="D_{{$exam['id']}}_{{$one['id']}}">
                                                <label class="form-check-label" for="D_{{$exam['id']}}_{{$one['id']}}">
                                                    D. {{$one['answer_d']}}
                                                </label>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
</div>
@endsection