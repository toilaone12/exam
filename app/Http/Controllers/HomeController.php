<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Level;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function home(){
        $title = 'Học tiếng Đức với Decamy, tự học tiếng Đức online';
        $levels = Level::orderBy('id')->limit(5)->get();
        // dd($levels);
        $lessons = Lesson::orderBy('id')->limit(3)->get();
        return view('exam.home',compact('levels','lessons','title'));
    }

    function exam(){
        $title = 'Học tiếng Đức với Decamy, tự học tiếng Đức online';
        return view('exam.detail',compact('title'));
    }
}
