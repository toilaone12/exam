<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    //
    function list(){
        $title = 'Danh sách kỹ năng học';
        $lessons = Lesson::all();
        return view('lesson.list',compact('title','lessons'));
    }

    function add(Request $request){
        $data = $request->all();
        $array = [
            'name' => $data['name']
        ];
        $insert = Lesson::create($array);
        if($insert){
            return json_encode(['res' => 'success','title' => 'Thông báo thêm kỹ năng học', 'icon' => 'success', 'text' => 'Thêm kỹ năng học thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo thêm kỹ năng học', 'icon' => 'error', 'text' => 'Thêm kỹ năng học thất bại']);
        }
    }

    function update(Request $request){
        $title = 'Sửa kỹ năng';
        $id = $request->get('id');
        $lesson = Lesson::find($id);
        return view('lesson.update',compact('title','lesson'));
    }

    function change(Request $request){
        $data = $request->all();
        $lesson = Lesson::find($data['id']);
        $lesson->name = $data['name'];
        $update = $lesson->save();
        if($update){
            return json_encode(['res' => 'success','title' => 'Thông báo sửa kỹ năng học', 'icon' => 'success', 'text' => 'Sửa kỹ năng học thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo sửa kỹ năng học', 'icon' => 'error', 'text' => 'Sửa kỹ năng học thất bại']);
        }
    }

    function delete(Request $request){
        $data = $request->all();
        $delete = Lesson::find($data['id'])->delete();
        if($delete){
            return json_encode(['res' => 'success','title' => 'Thông báo xóa kỹ năng học', 'icon' => 'success', 'text' => 'Xóa kỹ năng học thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo xóa kỹ năng học', 'icon' => 'error', 'text' => 'Xóa kỹ năng học thất bại']);
        }
    }
}
