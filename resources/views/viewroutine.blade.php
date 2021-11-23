<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
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
            <table id="tbstyle">
                <tr>
                  <th>Subject</th>
                  <th>Day</th>
                  <th>Class Id</th>
                </tr>
                @foreach ($routines as $routine)
                  <tr>
                    <td>{{$routine->subject}}</td>
                    <td>{{$routine->day}}</td>
                    <td>{{$routine->class_id}}</td>
                @endforeach 
                 
            </table>
    </div>

  </body>
</html>
      