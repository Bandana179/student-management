<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    //registration page
    public function register(){
        return view('student');
    }
    //insert
    public function store(Request $request){
        $student=new Student;
        $student->fname=$request['fname'];
        $student->mname=$request['mname'];
        $student->lname=$request['lname'];
        $student->email=$request['email'];
        $student->address=$request['address'];
        $student->gender=$request['gender'];
        $student->class=$request['class'];
        $student->save();
        return redirect('/student');
    }
    //select
    public function view(){
        $students=Student::all();
        $data=compact('students');
        return view('student-view')->with($data);
    }
    //delete
    public function delete($id){
        Student::find($id)->delete();
        return redirect()->back();
    }
    // edit
    public function editdata($id){
        $data= Student::find($id);
        return view('studentedit',['data'=>$data]);
    }
    //update
    public function update(Request $request){
        $data=Student::find($request->id);
        $data->fname=$request->fname;
        $data->mname=$request->mname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->gender=$request->gender;
        $data->class=$request->class;
        $data->save();
        return redirect('/studentdetail');

    }
    
}
