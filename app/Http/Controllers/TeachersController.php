<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Routine;
use Session;

class TeachersController extends Controller
{
    //Viewing Teacher login Page
    public function teacherlogin(){
        return view('teacherlogin');
     }
     //Authenticating the login Credentials
    public function authenticate(Request $request){
        $teacher=Teacher::where('email',$request->email)->where('password',    $request->password)->get()->toArray();
        if($teacher){
            $request->session()->put('teacher_session', $teacher[0]['teacher_id']);
            return redirect('/teacherdashboard');
        }
        else{
            session::flash('coc' , 'Username and Password does not match');
            return redirect('/teacherlogin')->withInput();
        }

    }

    //teacher dashboard
    public function teacherpage(){
        return view('teacherdashboard');
    }

    // teacher Profile
    public function viewprofile(){
        // $teacherid=$request->session()->get('teacher_session');
        $teacherid=Session::get('teacher_session');
        $teacherdata=Teacher::where('teacher_id', $teacherid)->first();
        $data=compact('teacherdata');
        return view('teacherprofile')->with($data);
    }
    //view routine list
    public function viewroutine(){
        $routines=Routine::all();
        $data=compact('routines');
        return view('viewroutine')->with($data);
    }
    public  function editprofile(){
        $teacherid=Session::get('teacher_session');
        $data=Teacher::where('teacher_id', $teacherid)->first();
        return view('updateprofile',['data'=>$data]);
    }
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
        return redirect('/profile');

    }
}
