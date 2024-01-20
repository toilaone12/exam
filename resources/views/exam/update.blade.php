@extends('dashboard')
@section('content')
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
        width: 932px;
    }

    #editor {
        height: 700px;
    }

    .text-ellipsis {
        display: -webkit-box;
        -webkit-line-clamp: 6;
        /* Số dòng muốn hiển thị */
        -webkit-box-orient: vertical;
        overflow: hidden;
        width: 500px;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <h1 class="h3 mb-2 text-gray-800">Sửa đề thi</h1>
        </div>
        <div class="card-body">
            <form class="change-exam" data-id="{{$exam->id}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="level">Loại bằng</label>
                                <select name="id_level" id="level" class="form-control">
                                    @foreach($levels as $level)
                                    <option value="{{$level->id}}" {{$level->id == $exam->id_level ? "selected" : ''}}>{{$level->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="lesson">Loại kỹ năng</label>
                                <select name="id_lesson" id="lesson" class="form-control">
                                    @foreach($lessons as $lesson)
                                    <option value="{{$lesson->id}}" {{$lesson->id == $exam->id_lesson ? "selected" : ''}}>{{$lesson->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <label for="name">Tên bài thi</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$exam->name}}" required>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="duration">Thời gian bài thi <span class="text-duration">({{$exam->duration}} phút)</span></label>
                                <input type="range" name="duration" id="duration" class="form-range w-100 duration-change" min="5" max="120" step="5" value="{{$exam->duration}}" required>
                                <!-- <input type="number" name="duration" id="duration" class="form-control" required> -->
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <span class="text-white px-2 py-2 bg-primary">Danh sách đề bài</span>
                        <div class="card-body">
                            <select id="multi-assignment" class="form-control w-100" name="list[]" multiple="multiple" required>
                                @foreach($assignments as $assignment)
                                @php
                                    $array = explode('|', trim($exam->list_assignment, '|'));
                                    $isSelected = in_array($assignment->id, $array);
                                @endphp
                                <option value="{{ $assignment->id }}" {{ $isSelected ? 'selected' : '' }}>
                                {!!$assignment->name!!}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-modal" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection