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
              <th>Address</th>
              <th>Gender</th>
              <th>Class</th>
              <th colspan="2">Action</th>
            </tr>
            @foreach ($students as $student)
              <tr>
                <td>{{$student->fname}}</td>
                <td>{{$student->mname}}</td>
                <td>{{$student->lname}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
                <td>
                  @if ($student->gender=='M')
                    Male 
                  @elseif($student->gender=='F')
                    Female
                  @else
                    Others
                  @endif 
                </td>
                <td>{{$student->class}}</td>
                <td>
                    <a href="{{ url('/student/delete/') }}/{{ $student->student_id }} ">
                      <button class="btn-delete">Delete</button>
                    </a>
                  </td>
                <td>
                  <a href="{{ url('/student/edit/') }}/{{ $student->student_id }} ">
                    <button class="btn-edit">Edit</button>
                  </a>
                </td>
            @endforeach 
             
        </table>
      </div>    
    </div>
 </body>
</html>
      