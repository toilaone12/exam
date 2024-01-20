@extends('dashboard')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <h1 class="h3 mb-2 text-gray-800">Sửa đề tài</h1>
        </div>
        <div class="card-body">
            <form class="change-assignment" data-id="{{$assignment->id}}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên đề tài</label>
                        <textarea name="ckeditor" id="" cols="30" rows="10" required>{{$assignment->name}}</textarea>
                    </div>
                    <div class="card">
                        <span class="text-white px-2 py-2 bg-primary">Danh sách câu hỏi</span>
                        <div class="card-body">
                            <select id="multi-question" class="form-control w-100" name="list[]" multiple="multiple" required>
                            @foreach($questions as $question)
                                @php
                                    $array = explode('|', trim($assignment->list_question, '|'));
                                    $isSelected = in_array($question->id, $array);
                                @endphp
                                <option value="{{ $question->id }}" {{ $isSelected ? 'selected' : '' }}>
                                    {{ $question->name }}
                                </option>
                            @endforeach
                            </select>
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