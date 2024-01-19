<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    //
    function list(){
        $title = 'Danh sách loại bằng';
        $levels = Level::all();
        return view('level.list',compact('title','levels'));
    }

    function add(Request $request){
        $data = $request->all();
        $array = [
            'name' => $data['name']
        ];
        $insert = Level::create($array);
        if($insert){
            return json_encode(['res' => 'success','title' => 'Thông báo thêm loại bằng', 'icon' => 'success', 'text' => 'Thêm loại bằng thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo thêm loại bằng', 'icon' => 'error', 'text' => 'Thêm loại bằng thất bại']);
        }
    }

    function update(Request $request){
        $title = 'Sửa loại bằng';
        $id = $request->get('id');
        $level = Level::find($id);
        return view('level.update',compact('title','level'));
    }

    function change(Request $request){
        $data = $request->all();
        $level = Level::find($data['id']);
        $level->name = $data['name'];
        $update = $level->save();
        if($update){
            return json_encode(['res' => 'success','title' => 'Thông báo sửa loại bằng', 'icon' => 'success', 'text' => 'Sửa loại bằng thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo sửa loại bằng', 'icon' => 'error', 'text' => 'Sửa loại bằng thất bại']);
        }
    }

    function delete(Request $request){
        $data = $request->all();
        $delete = Level::find($data['id'])->delete();
        if($delete){
            return json_encode(['res' => 'success','title' => 'Thông báo xóa loại bằng', 'icon' => 'success', 'text' => 'Xóa loại bằng thành công']);
        }else{
            return json_encode(['res' => 'error','title' => 'Thông báo xóa loại bằng', 'icon' => 'error', 'text' => 'Xóa loại bằng thất bại']);
        }
    }
}
