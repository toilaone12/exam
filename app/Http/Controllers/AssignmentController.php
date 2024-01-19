<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Question;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    //
    function list(){
        $title = 'Danh sách đề bài';
        $assignments = Assignment::all();
        $questions = Question::all();
        // dd($questions);
        return view('assignment.list',compact('title','assignments','questions'));
    }

    function add(Request $request){
        $data = $request->all();
        $jsonList = '|';
        foreach($data['list'] as $key => $one){
            $jsonList .= $one.'|';
        }
        $array = [
            'name' => $data['name'],
            'list_question' => $jsonList
        ];
        $insert = Assignment::create($array);
        if($insert){
            return json_encode(['res' => 'success','title' => 'Thông báo thêm đề bài', 'icon' => 'success', 'text' => 'Thêm đề bài thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo thêm đề bài', 'icon' => 'error', 'text' => 'Thêm đề bài thất bại']);
        }
    }

    function update(Request $request){
        $title = 'Sửa đề bài';
        $id = $request->get('id');
        $questions = Question::all();
        $assignment = Assignment::find($id);
        return view('assignment.update',compact('title','assignment','questions'));
    }

    function change(Request $request){
        $data = $request->all();
        // dd($data);
        $jsonList = '|';
        foreach($data['list'] as $key => $one){
            $jsonList .= $one.'|';
        }
        $assignment = Assignment::find($data['id']);
        $assignment->name = $data['name'];
        $assignment->list_question = $jsonList;
        $update = $assignment->save();
        if($update){
            return json_encode(['res' => 'success','title' => 'Thông báo sửa đề bài', 'icon' => 'success', 'text' => 'Sửa đề bài thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo sửa đề bài', 'icon' => 'error', 'text' => 'Sửa đề bài thất bại']);
        }
    }

    function delete(Request $request){
        $data = $request->all();
        $delete = Assignment::find($data['id'])->delete();
        if($delete){
            return json_encode(['res' => 'success','title' => 'Thông báo xóa đề bài', 'icon' => 'success', 'text' => 'Xóa đề bài thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo xóa đề bài', 'icon' => 'error', 'text' => 'Xóa đề bài thất bại']);
        }
    }
}
