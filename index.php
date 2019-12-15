<?php
   session_start();
   $_SESSION['page']="index2.php";
  if ( isset($_SESSION['login']) && $_SESSION['login'] == "true") 
    {
     header("location:index2.php");
    }
?>
<script>
  var c="global";
</script>
<!DOCTYPE html>
<html>
   <head>

       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="homepstyle.css">
   </head>
   <body>
   <nav class="navbar navbar-default">
     <div class="container-fluid">

         <div class="navbar-header">
            <a class="navbar-brand" href="#">Online Quiz</a>
         </div>

         <ul class="nav navbar-nav">
         <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">TestType<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="instlogical.php">Logical Reasoning</a></li>
                               <li><a href="instgk.php">General Knowledge</a></li>
                               <li><a href="instmock.php">Mock Test</a></li>
                               <li><a href="insttechnical.php">Technical</a></li>
                              </ul>
                              </li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
         <li><a href="register.php"><span class="glyphicon glyphicon-user">Signup</a></li>
         <li><a href="login.php"><span class="glyphicon glyphicon-log-in">Login</a></li>
         </ul>

     </div>
   </nav>
     
        <div class="class1" >
          <div class="class2" >
             <img style="margin-left:150px;margin-top:50px;" src="homep.jpg" width=300px height=300px>
           </div>
           <div class="class3" >
              <h1 id="heading">Online quiz</h1>
              <div class="class4">
              <p> Online quiz helps you to judge your knowledge in aspects like Logical reasoning,General Knowledge,Technical.It helps you to check your performance and that your fellow users also.
                You can choose a section among Logical,Technical,General Knowledge for test or you can attempt a mock test with all the three sections .Every test has some time and marking scheme so read the instructions carefully before starting quiz.Register Online Quiz for getting started..
              </p><br>
              <form action="testtype.php">
              <button type="btn-primary" style="margin-left: 50px;">Start Now</button>
            </form>
              </div>
           </div>
         </div>

     

   </body>
</html>





