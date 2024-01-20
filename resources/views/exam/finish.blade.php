@extends('page')
@section('content')
<div class="detail">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="exam-detail-block" style="width: 350px;">
                    <h3 class="exam-detail-title">{{$exam->name}}</h3>
                    <p class="exam-detail-time">Thời lượng: <span class="fw-bolder duration-exam" data-duration="{{$exam->duration}}">{{$exam->duration < 10 ? '0'.$exam->duration : $exam->duration}} Phút</span></p>
                    <div class="exam-detail-label">
                        <p>{{$lesson->name}}</p>
                    </div>
                    <div class="exam-detail-finish">
                        <ul class="d-flex justify-content-between ps-0 mb-0">
                            <li>
                                <span class="exam-detail-correct">Câu đúng</span>
                                <span class="exam-detail-text text-white fs-16 d-flex align-items-center justify-content-center">{{$correctCount}}</span>
                            </li>
                            <li>
                                <span class="exam-detail-wrong">Câu sai</span>
                                <span class="exam-detail-text text-white fs-16 d-flex align-items-center justify-content-center">{{$wrongCount}}</span>
                            </li>
                            <li>
                                <span class="exam-detail-no-choose">Chưa trả lời</span>
                                <span class="exam-detail-text text-white fs-16 d-flex align-items-center justify-content-center">{{$noChooseCount}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="exam-detail-finish">
                        <a class="exam-detail-button finish-exam">Hoàn thành</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <h3 class="exam-block-title mt-0">Đọc đoạn văn và lựa chọn câu trả lời chính xác!</h3>
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
                                <form class="answer-choose">
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
                                            <input class="form-check-input {{$one['answer'] == 'A' ? 'bg-success' : ''}}" type="radio" name="answer_{{$one['id']}}" disabled {{$one['answer'] == 'A' ? 'checked' : ''}} value="A" id="A_{{$key1 + 1}}">
                                            <label class="form-check-label" for="A_{{$key1 + 1}}">
                                                A. {{$one['answer_a']}}
                                            </label>
                                        </div>
                                        <div class="exam-item-question w-100 d-block form-check mb-2">
                                            <input class="form-check-input {{$one['answer'] == 'B' ? 'bg-success' : ''}}" type="radio" name="answer_{{$one['id']}}" disabled {{$one['answer'] == 'B' ? 'checked' : ''}} value="B" id="B_{{$key1 + 1}}">
                                            <label class="form-check-label" for="B_{{$key1 + 1}}">
                                                B. {{$one['answer_b']}}
                                            </label>
                                        </div>
                                        @if($one['answer_c'])
                                        <div class="exam-item-question w-100 d-block form-check mb-2">
                                            <input class="form-check-input {{$one['answer'] == 'C' ? 'bg-success' : ''}}" type="radio" name="answer_{{$one['id']}}" disabled {{$one['answer'] == 'C' ? 'checked' : ''}} value="C" id="C_{{$key1 + 1}}">
                                            <label class="form-check-label" for="C_{{$key1 + 1}}">
                                                C. {{$one['answer_c']}}
                                            </label>
                                        </div>
                                        @endif
                                        @if($one['answer_d'])
                                        <div class="exam-item-question w-100 d-block form-check mb-2">
                                            <input class="form-check-input {{$one['answer'] == 'D' ? 'bg-success' : ''}}" type="radio" name="answer_{{$one['id']}}" disabled {{$one['answer'] == 'D' ? 'checked' : ''}} value="D" id="D_{{$key1 + 1}}">
                                            <label class="form-check-label" for="D_{{$key1 + 1}}">
                                                D. {{$one['answer_d']}}
                                            </label>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @endforeach                                 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection