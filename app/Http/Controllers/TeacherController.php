<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    //Register
    public function register(){
        return view('teacher');
    }
    //insert
    public function store(Request $request){
        $teacher=new Teacher;
        $teacher->fname=$request['fname'];
        $teacher->mname=$request['mname'];
        $teacher->lname=$request['lname'];
        $teacher->email=$request['email'];
        $teacher->password=$request['password'];
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/teachers/', $filename);
            $teacher->image = $filename;
        } else {
            return $request;
            $pages->image = '';
        }
        $teacher->save();
        return redirect('/teacher');
    }
    //select
    public function view(){
        $teachers=Teacher::all();
        $data=compact('teachers');
        return view('teacher-view')->with($data);
    }
    // delete
    public function delete($id){
        Teacher::find($id)->delete();
        return redirect()->back();
    }
    // edit
    public function editdata($id){
        $data= Teacher::find($id);
        return view('teacheredit',['data'=>$data]);
    }
    //update
    public function update(Request $request){
        $teacher=Teacher::find($request->id);
        $teacher->fname=$request['fname'];
        $teacher->mname=$request['mname'];
        $teacher->lname=$request['lname'];
        $teacher->email=$request['email'];
        $teacher->password=$request['password'];
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/teachers/', $filename);
            $teacher->image = $filename;
        } 
        $teacher->save();
        return redirect('/teacherdetail');

    }
}
