<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="{{asset('css/index.css') }}">
</head>
<body>
   
   <div class="wrapper" style="background: url('{{ asset('/images/school.jpeg') }}')
   no-repeat center center;">
<!--NAVIGATION-->
       <nav>
          <img src="{{asset('images/ca.png')}}" class="img" alt="logo"> 
          <ul>
              <li><a href="{{url('/')}}">HOME</a></li>
              <li><a href="#About">ABOUT</a></li>
              <li><a href="#Course">COURSES</a></li>
              <li><a href="{{url('/adminlogin')}}">ADMIN</a></li>
              <li><a href="{{url('/teacherlogin') }}">TEACHER</a></li>
          </ul>
       </nav>
<!--END OF NAVIGATION-->
      
      <div class="section" id="About">
          <h1>WE ENSURE A BETTER EDUCATION <br> FOR A BETTER WORLD</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium corporis, illum, rerum praesentium cupiditate inventore sed vero itaque impedit, recusandae eaque. Eligendi harum, molestias ducimus eum quas ut officia sit?</p>
          
          <a href="#"><button class="btn-1">GET STARTED</button></a>
<!--FEATURES-->
         <div class="features">
             <button>Learn Online Classes</button>
             <button>Bridge Courses</button>
             <button>Huge Library</button>
             <button>Practical Exposure</button>
         </div>
<!--END OF FEATURES-->
      </div>
<!--END OF SECTION-->
   </div>
<!--END OF WRAPPER-->
   
<!--SHOWCASE-->
   <showcase id="Course">
       <h1>POPULAR COURSES WE OFFER</h1>
       <div id="courses">
           <div class="cs">
               <h3>Computer Science</h3>
               <img src="{{asset('images/cse.jpeg') }}" width="50%" alt="cs">
               <a href="#" ><button class="apply">Apply Here</button></a>
           </div>
           <div class="business">
               <h3>Business Studies</h3>
               <img src="{{asset('images/business.jpeg')}}" alt="business">
               <a href="#" ><button class="apply">Apply Here</button></a>
           </div>
           <div class="journalism">
               <h3>Media and Journalism</h3>
               <img src="{{asset('images/journalism.jpeg') }}" alt="media">
               <a href="#" ><button class="apply">Apply Here</button></a>
           </div>
           <div class="arts">
               <h3>Arts & Humanities</h3>
               <img src="{{ asset('images/arts.jpeg') }}" alt="arts">
               <a href="#" ><button class="apply">Apply Here</button></a>
           </div>
           <div class="medical">
               <h3>Medical Science</h3>
               <img src="{{asset('images/arts.jpeg')}}" alt="ms">
               <a href="#" ><button class="apply">Apply Here</button></a>
           </div>
       </div>
   </showcase>
<!--END OF SHOWCASE-->
   
   <footer>
       <p>Copyright &copy; 2021 student management system</p>
   </footer>
    
</body>
</html>


















