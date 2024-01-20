<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Exam;
use App\Models\Lesson;
use App\Models\Level;
use App\Models\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    function list()
    {
        $title = 'Danh sách bài thi';
        $exams = Exam::all();
        $levels = Level::all();
        $lessons = Lesson::all();
        $assignments = Assignment::all();
        return view('exam.list', compact('title', 'exams', 'levels', 'lessons', 'assignments'));
    }

    function add(Request $request)
    {
        $data = $request->all();
        $jsonList = '|';
        foreach ($data['list'] as $key => $one) {
            $jsonList .= $one . '|';
        }
        // dd($jsonList);
        $array = [
            'id_level' => $data['id_level'],
            'id_lesson' => $data['id_lesson'],
            'name' => $data['name'],
            'duration' => $data['duration'],
            'list_assignment' => $jsonList,
        ];
        $insert = Exam::create($array);
        if ($insert) {
            return json_encode(['res' => 'success', 'title' => 'Thông báo thêm bài thi', 'icon' => 'success', 'text' => 'Thêm bài thi thành công']);
        } else {
            return json_encode(['res' => 'error', 'title' => 'Thông báo thêm bài thi', 'icon' => 'error', 'text' => 'Thêm bài thi thất bại']);
        }
    }

    function update(Request $request)
    {
        $title = 'Sửa bài thi';
        $id = $request->get('id');
        $exam = Exam::find($id);
        $levels = Level::all();
        $lessons = Lesson::all();
        $assignments = Assignment::all();
        return view('exam.update', compact('title', 'exam', 'levels', 'lessons', 'assignments'));
    }

    function change(Request $request)
    {
        $data = $request->all();
        $jsonList = '|';
        foreach ($data['list'] as $key => $one) {
            $jsonList .= $one . '|';
        }
        $exam = Exam::find($data['id']);
        $exam->id_level = $data['id_level'];
        $exam->id_lesson = $data['id_lesson'];
        $exam->name = $data['name'];
        $exam->duration = $data['duration'];
        $exam->list_assignment = $jsonList;
        $update = $exam->save();
        if ($update) {
            return json_encode(['res' => 'success', 'title' => 'Thông báo sửa bài thi', 'icon' => 'success', 'text' => 'Sửa bài thi thành công']);
        } else {
            return json_encode(['res' => 'error', 'title' => 'Thông báo sửa bài thi', 'icon' => 'error', 'text' => 'Sửa bài thi thất bại']);
        }
    }

    function delete(Request $request)
    {
        $data = $request->all();
        $delete = Exam::find($data['id'])->delete();
        if ($delete) {
            return json_encode(['res' => 'success', 'title' => 'Thông báo xóa bài thi', 'icon' => 'success', 'text' => 'Xóa bài thi thành công']);
        } else {
            return json_encode(['res' => 'error', 'title' => 'Thông báo xóa bài thi', 'icon' => 'error', 'text' => 'Xóa bài thi thất bại']);
        }
    }

    function finish(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $id = $data['idExam'];
        $exam = Exam::find($id);
        $lesson = Lesson::find($exam->id_lesson);
        $listAssignment = explode('|', trim($exam->list_assignment, '|'));
        $arrayExam = [];
        $correctCount = 0;
        $wrongCount = 0;
        $noChooseCount = 0;
        foreach ($listAssignment as $assignment) {
            $oneAssignment = Assignment::find($assignment);
            $listQuestion = explode('|', trim($oneAssignment->list_question, '|'));

            foreach ($listQuestion as $question) {
                $oneQuestion = Question::find($question);

                // Tạo khóa duy nhất dựa trên $assignment và $question
                $key = $assignment;

                // Kiểm tra xem đã thêm chưa
                if (!array_key_exists($key, $arrayExam)) {
                    $arrayExam[$key] = [
                        'title' => $oneAssignment->name,
                        'list' => [],
                    ];
                }

                // Xác định đáp án đúng
                $correctAnswer = $oneQuestion->answer;

                // Lấy đáp án đã chọn từ dữ liệu đầu vào
                $chosenAnswer = isset($data['answer_' . $oneAssignment->id . '_' . $oneQuestion->id]) ? $data['answer_' . $oneAssignment->id . '_' . $oneQuestion->id] : '';

                // Kiểm tra đáp án đã chọn có đúng hay không
                $isCorrect = ($chosenAnswer == $correctAnswer);

                // Thêm vào mảng
                $arrayExam[$key]['list'][] = [
                    'id' => $oneQuestion->id,
                    'question' => $oneQuestion->name,
                    'answer_a' => $oneQuestion->answer_a,
                    'answer_b' => $oneQuestion->answer_b,
                    'answer_c' => $oneQuestion->answer_c,
                    'answer_d' => $oneQuestion->answer_d,
                    'answer' => $correctAnswer,
                    'choose' => $chosenAnswer,
                ];

                // Đếm số câu đúng và câu sai
                if($chosenAnswer == ''){
                    $noChooseCount++;
                }else{
                    if ($isCorrect) {
                        $correctCount++;
                    } else {
                        $wrongCount++;
                    }
                }
            }
        }
        // dd($noChooseCount);
        $title = 'Học tiếng Đức với Decamy, tự học tiếng Đức online';
        return view('exam.finish', compact('title', 'exam', 'lesson', 'arrayExam','wrongCount','correctCount','noChooseCount'));
    }
}
