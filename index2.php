<?php 
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
       <script type="text/javascript" src="logout.js"></script>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="homepstyle.css">
   </head>
  
   <body>
   <?php include("navigationbar.php");?>
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





