<!DOCTYPE html>
<!--Login For Teacher-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Teacher Login Form </title>
    <link rel="stylesheet" href="{{asset('css/teacherlogin.css') }}">
  </head>
  <body>
    <div class="center">
      <h1>Teacher Login</h1>
      <form method="post" action="{{url('/teacherlogin')}}">
        @csrf
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Useremail</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">
          <a href="{{ url('/') }}">Return Home</a>
        </div>
        <input type="submit" value="Login">
      </form>
    </div>

  </body>
</html>
