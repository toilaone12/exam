<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Exam;
use App\Models\Lesson;
use App\Models\Level;
use App\Models\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function home(Request $request){
        $title = 'Học tiếng Đức với Decamy, tự học tiếng Đức online';
        $levels = Level::orderBy('id')->limit(5)->get();
        // dd($levels);
        $lessons = Lesson::orderBy('id')->limit(3)->get();
        $exams = Exam::paginate(1);
        // dd($exams);
        return view('exam.home',compact('levels','lessons','exams','title'));
    }

    function exam(Request $request){
        $id = $request->get('id');
        $exam = Exam::find($id);
        $lesson = Lesson::find($exam->id_lesson);
        $listAssignment = explode('|',trim($exam->list_assignment,'|'));
        $arrayExam = [];
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
                        'id' => $oneAssignment->id,
                        'title' => $oneAssignment->name,
                    ];
                }
                $arrayExam[$key]['list'][] = [
                    'id' => $oneQuestion->id,
                    'question' => $oneQuestion->name,
                    'answer_a' => $oneQuestion->answer_a,
                    'answer_b' => $oneQuestion->answer_b,
                    'answer_c' => $oneQuestion->answer_c,
                    'answer_d' => $oneQuestion->answer_d,
                ];
            }
        }
        // dd($arrayExam);
        // $arrayExam = compact($arrayExam);
        $title = 'Học tiếng Đức với Decamy, tự học tiếng Đức online';
        return view('exam.detail',compact('title','exam','lesson','arrayExam'));
    }
}
