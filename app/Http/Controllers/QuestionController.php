<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    function list(){
        $title = 'Danh sách câu hỏi';
        $questions = Question::all();
        return view('question.list',compact('title','questions'));
    }

    function add(Request $request){
        $data = $request->all();
        $array = [
            'name' => $data['name'],
            'answer_a' => $data['answer_a'],
            'answer_b' => $data['answer_b'],
            'answer_c' => $data['answer_c'],
            'answer_d' => $data['answer_d'],
            'answer' => $data['answer'],
        ];
        $insert = Question::create($array);
        if($insert){
            return json_encode(['res' => 'success','title' => 'Thông báo thêm câu hỏi', 'icon' => 'success', 'text' => 'Thêm câu hỏi thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo thêm câu hỏi', 'icon' => 'error', 'text' => 'Thêm câu hỏi thất bại']);
        }
    }

    function update(Request $request){
        $title = 'Sửa câu hỏi';
        $id = $request->get('id');
        $question = Question::find($id);
        return view('question.update',compact('title','question'));
    }

    function change(Request $request){
        $data = $request->all();
        $question = Question::find($data['id']);
        $question->name = $data['name'];
        $question->answer_a = $data['answer_a'];
        $question->answer_b = $data['answer_b'];
        $question->answer_c = $data['answer_c'];
        $question->answer_d = $data['answer_d'];
        $question->answer = $data['answer'];
        $update = $question->save();
        if($update){
            return json_encode(['res' => 'success','title' => 'Thông báo sửa câu hỏi', 'icon' => 'success', 'text' => 'Sửa câu hỏi thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo sửa câu hỏi', 'icon' => 'error', 'text' => 'Sửa câu hỏi thất bại']);
        }
    }

    function delete(Request $request){
        $data = $request->all();
        $delete = Question::find($data['id'])->delete();
        if($delete){
            return json_encode(['res' => 'success','title' => 'Thông báo xóa câu hỏi', 'icon' => 'success', 'text' => 'Xóa câu hỏi thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo xóa câu hỏi', 'icon' => 'error', 'text' => 'Xóa câu hỏi thất bại']);
        }
    }
}
