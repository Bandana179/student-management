<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adminlogin;
use Session;

class AdminController extends Controller
{
    //Viewing Admin login Page
     public function adminlogin(){
        return view('adminlogin');
     }
    //Authenticating the login Credentials
    public function authenticate(Request $request){
        $admin=Adminlogin::where('username',$request->username)->where('password',    $request->password)->get()->toArray();
        if($admin){
            $request->session()->put('admin_session', $admin[0]['admin_id']);
            return redirect('/dashboard');
        }
        else{
            session::flash('coc' , 'Username and Password does not match');
            return redirect('/adminlogin')->withInput();
        }

    }
    //admin dashboard
    public function adminpage(){
        return view('admindashboard');
    }

}
