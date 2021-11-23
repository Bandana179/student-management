<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;

class ClassController extends Controller
{
    //registration page
    public function register(){
        return view('class');
    }

    //insert
    public function store(Request $request){
        $class=new Classes;
        $class->class_name=$request['class_name'];
        $class->section=$request['section'];
        $class->teacher_id=$request['teacher_id'];
        $class->save();
        return redirect('/class');
    }

    //select
    public function view(){
        $classes=Classes::all();
        $data=compact('classes');
        return view('class-view')->with($data);
    }

     //delete
    public function delete($id){
        Classes::find($id)->delete();
        return redirect()->back();
    }
    // edit
    public function editdata($id){
        $data= Classes::find($id);
        return view('classedit',['data'=>$data]);
    }
    //update
    public function update(Request $request){
        $class=Classes::find($request->id);
        $class->class_name=$request['class_name'];
        $class->section=$request['section'];
        $class->teacher_id=$request['teacher_id'];
        $class->save();
        return redirect('/classdetail');

    }
}