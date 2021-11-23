<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>
  <body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Admin <span>Page</span></h3>
      </div>
      <div class="right_area">
        <a href="{{url('/logout') }}" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <a href="{{url('/dashboard') }}"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="{{url('/student')}}"><i class="fas fa-users"></i><span>Student Register</span></a>
      <a href="{{url('/teacher')}}"><i class="fas fa-users"></i><span>Teacher Register</span></a>
      <a href="{{url('/class')}}"><i class="fas fa-school"></i><span>Add Class</span></a>
      <a href="{{url('/routine')}}"><i class="fas fa-file"></i><span>Create Routine</span></a>
      <a href="{{url('/studentdetail')}}"><i class="fas fa-file-alt"></i><span>Student Details</span></a>
      <a href="{{url('/teacherdetail')}}"><i class="fas fa-file-alt"></i><span>Teacher Details</span></a>
      <a href= "{{url('/classdetail')}}"><i class="fas fa-file-alt"></i><span>Class Details</span></a>
      <a href="{{url('/routinedetail')}}"><i class="fas fa-file-alt"></i><span>Routine Details</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="wrapper">
            <div class="title">
              Registration Form
            </div>
         <form method="POST" action="{{url('/class')}}">
               @csrf
            <div class="form">
                <div class="inputfield">
                  <label>Class Name</label>
                  <input type="number" class="input" name="class_name">
               </div>
               <div class="inputfield">
                <label>Class Section</label>
                <input type="text" class="input" name="section">
             </div>
             <div class="inputfield">
                <label>Class Teacher Id</label>
                <input type="number" class="input" name="teacher_id">
             </div> 
               <div class="inputfield">
                 <input type="submit" value="Register" class="btn">
              </div>
            </div>
         </form>
        </div>	
            
    </div>

  </body>
</html>
      