<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routine;

class RoutineController extends Controller
{
    //registration page
    public function register(){
        return view('routine');
    }

     //insert
     public function store(Request $request){
        $routine=new Routine;
        $routine->subject=$request['subject'];
        $routine->day=$request['day'];
        $routine->class_id=$request['class_id'];
        $routine->save();
        return redirect('/routine');
    }
    //select
    public function view(){
        $routines=Routine::all();
        $data=compact('routines');
        return view('routine-view')->with($data);
    }
    //delete
    public function delete($id){
        Routine::find($id)->delete();
        return redirect()->back();
    }
    // edit
    public function editdata($id){
        $data= Routine::find($id);
        return view('routineedit',['data'=>$data]);
    }
    //update
    public function update(Request $request){
        $routine=Routine::find($request->id);
        $routine->subject=$request['subject'];
        $routine->day=$request['day'];
        $routine->class_id=$request['class_id'];
        $routine->save();
        return redirect('/routinedetail');

    }
    
}
