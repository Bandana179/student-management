<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Dashboard</title>
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
        <h3>Teacher <span>Page</span></h3>
      </div>
      <div class="right_area">
        <a href="{{url('/teacherlogout') }}" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <a href="{{url('/teacherdashboard') }}"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="{{url('/profile')}}"><i class="fas fa-eye"></i><span>View Profile</span></a>
      <a href="{{url('/routinelist')}}"><i class="fas fa-eye"></i><span>View Routines</span></a>
      <a href="{{url('/updateprofile')}}"><i class="fas fa-edit"></i><span>Update Profile</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="wrapper">
            <div class="title">
              Registration Form
            </div>
            <form method="POST" action="/profileupdate" enctype="multipart/form-data">
               @csrf
                <div class="form">
                    <input type="hidden" name="id" value="{{$data['teacher_id']}}">
                    <div class="inputfield">
                        <label>First Name</label>
                        <input type="text" name="fname" class="input" value="{{$data['fname']}}">
                    </div>
                    <div class="inputfield">
                        <label>Middle Name</label>
                        <input type="text" name="mname" class="input" value="{{$data['mname']}}">
                    </div>   
                   <div class="inputfield">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="input"
                        value="{{$data['lname']}}">
                    </div>  
                    <div class="inputfield">
                        <label>Email</label>
                        <input type="email" name="email" class="input" value="{{$data['email']}}">
                    </div>  
                    <div class="inputfield">
                        <label>Password</label>
                        <input type="password" class="input" name="password"
                         value="{{$data['password']}}">
                    </div>
                    <div class="inputfield">
                        <label>Profile_Pic</label>
                        <input type="file" name="image" class="input"
                        value="{{$data['image']}}">
                    </div>  
                    <div class="inputfield">
                        <input type="submit" value="Update" class="btn">
                    </div>
                </div>
            </form>
        </div>	
    </div>

  </body>
</html>
      