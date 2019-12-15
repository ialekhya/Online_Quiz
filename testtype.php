<?php
   session_start();
   $_SESSION['page']="testtype.php";
    if ( !(isset($_SESSION['login']) && $_SESSION['login'] == "true")) 
    {
     header("location:login.php");
    }

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
       <link rel="stylesheet" href="testtype.css">
   </head>

   
    <body>
      <?php include("navigationbar.php");?>

       <h1><center>Online Quiz</center></h1>
          <h2> <center>Select  test type to take quiz<center></h2>
            <br><br>
       <div class="images">
            <div class="colmn">
            <a href="#"><img src="test1.jpg"></a>
                
               <div class="textt">
               <form action="instlogical.php"> <button >Take test</button> </form></div>
             
            </div>
          
            <div class="colmn">
            <a href="#"><img src="test2.jpg" style="border:1px solid;"></a>
             <div class="textt">
               <form action="instgk.php"> <button >Take test</button> </form></div>
            </div>   
      
            <div class="colmn">
            <a href="#"><img src="test3.jpg" style="border:1px solid;"></a>
               <div class="textt">
               <form action="instmock.php"> <button >Take test</button> </form></div>
            </div>
          
           
            <div class="colmn">
            <a href="#"><img src="test4.jpg"></a>
             <div class="textt">
            <form action="insttechnical.php"> <button >Take test</button> </form></div>
            </div>
            
           
      </div>
   
   </body>
</html>
