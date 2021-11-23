<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
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
        <table id="tbstyle">
            <tr>
              <th>FName</th>
              <th>MName</th>
              <th>LName</th>
              <th>Email</th>
              <th>Password</th>
              <th>Profile_Pic</th>
              <th colspan="2">Action</th>
            </tr>
            @foreach ($teachers as $teacher)
              <tr>
                <td>{{$teacher->fname}}</td>
                <td>{{$teacher->mname}}</td>
                <td>{{$teacher->lname}}</td>
                <td>{{$teacher->email}}</td>
                <td>{{$teacher->password}}</td>
                <td>
                  <img src="{{ asset('uploads/teachers/' . $teacher->image) }}"
                  width="100px" height="100px" position="cover"  alt="teacher"/>
                </td>
                <td>
                    <a href="{{ url('/teacher/delete/') }}/{{ $teacher->teacher_id }} ">
                      <button class="btn-delete">Delete</button>
                    </a>
                  </td>
                <td>
                  <a href="{{ url('/teacher/edit/') }}/{{ $teacher->teacher_id }} ">
                    <button class="btn-edit">Edit</button>
                  </a>
                </td>
            @endforeach 
             
        </table>
      </div>    
    </div>
 </body>
</html>
      