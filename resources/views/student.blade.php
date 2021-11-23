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
      <a href="{{url('/classdetail')}}"><i class="fas fa-file-alt"></i><span>Class Details</span></a>
      <a href="{{url('/routinedetail')}}"><i class="fas fa-file-alt"></i><span>Routine Details</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="wrapper">
            <div class="title">
              Registration Form
            </div>
            <form method="POST" action="{{url('/student')}}">
               @csrf
            <div class="form">
               <div class="inputfield">
                  <label>First Name</label>
                  <input type="text" name="fname" class="input">
               </div>
               <div class="inputfield">
                <label>Middle Name</label>
                <input type="text" name="mname" class="input">
             </div>   
                <div class="inputfield">
                  <label>Last Name</label>
                  <input type="text" name="lname" class="input">
               </div>  
               <div class="inputfield">
                  <label>Email</label>
                  <input type="email" name="email" class="input">
               </div>  
               <div class="inputfield">
                 <label>Address</label>
                 <textarea name="address" id="address" cols="30" rows="10"></textarea>
              </div> 
                <div class="inputfield">
                  <label>Gender</label>
                  <div class="custom_select">
                    <select name="gender">
                      <option value="M">Male</option>
                      <option value="F">Female</option>
                      <option value="O">Others</option>
                    </select>
                  </div>
               </div> 
                <div class="inputfield">
                  <label>Class</label>
                  <input type="number" class="input" name="class">
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
      