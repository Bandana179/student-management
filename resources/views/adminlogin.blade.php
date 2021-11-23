<!DOCTYPE html>
<!-- Admin Log in form -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>ADMIN LOGIN</title>
      <link rel="stylesheet" href="{{ asset('css/login.css') }}">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Admin LOGIN
         </div>
         <form action="{{ url('/adminlogin') }}" method="POST">
            @csrf;
            <div class="field">
               <input type="text" name="username" required>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
               <div class="pass-link">
                  <a href="{{url('/') }}">Return Home</a>
               </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
         </form>
      </div>
   </body>
</html>