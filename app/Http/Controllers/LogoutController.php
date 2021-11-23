<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function perform(Request $request)
    {
        $request->session()->flush();
        
        Auth::logout();

        return redirect('/adminlogin');
    }
    public function teacherlogout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/teacherlogin');
    }
}
