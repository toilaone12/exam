<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Lesson;
use App\Models\Level;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    function list(){
        $title = 'Danh sách bài thi';
        $exams = Exam::all();
        $levels = Level::all();
        $lessons = Lesson::all();
        return view('exam.list',compact('title','exams','levels','lessons'));
    }

    function add(Request $request){
        $data = $request->all();
        $array = [
            'name' => $data['name']
        ];
        $insert = Exam::create($array);
        if($insert){
            return json_encode(['res' => 'success','title' => 'Thông báo thêm bài thi', 'icon' => 'success', 'text' => 'Thêm bài thi thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo thêm bài thi', 'icon' => 'error', 'text' => 'Thêm bài thi thất bại']);
        }
    }

    function update(Request $request){
        $title = 'Sửa kỹ năng';
        $id = $request->get('id');
        $exam = Exam::find($id);
        return view('exam.update',compact('title','exam'));
    }

    function change(Request $request){
        $data = $request->all();
        $exam = Exam::find($data['id']);
        $exam->name = $data['name'];
        $update = $exam->save();
        if($update){
            return json_encode(['res' => 'success','title' => 'Thông báo sửa bài thi', 'icon' => 'success', 'text' => 'Sửa bài thi thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo sửa bài thi', 'icon' => 'error', 'text' => 'Sửa bài thi thất bại']);
        }
    }

    function delete(Request $request){
        $data = $request->all();
        $delete = Exam::find($data['id'])->delete();
        if($delete){
            return json_encode(['res' => 'success','title' => 'Thông báo xóa bài thi', 'icon' => 'success', 'text' => 'Xóa bài thi thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo xóa bài thi', 'icon' => 'error', 'text' => 'Xóa bài thi thất bại']);
        }
    }
}
