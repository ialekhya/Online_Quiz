<?php
   session_start();
    $_SESSION['page']="instgk.php";
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
   <link rel="stylesheet" href="instructstyle.css">
</head>
<body>
     <?php include("navigationbar.php");?>

         <div class="class1" >
          <div class="class2" >
             <img style="margin-left:150px;margin-top:150px;" src="instruct2.jpg">
           </div>

           <div class="class3" >
              <h1 id="heading">General Knowledge</h1>
              <div class="class4">
                  <p>Instructions:</p>
              <p> 1.No.of questions:30<br>
                  2.Time alloted for each que:30sec<br>
                  3. Each question carries 1 mark;For each correct answer 1 mark will be awardedand for wrong answer 0.25 mark will be deducted<br>
                  4. DO NOT refresh the page<br>
                  5. You can stop test by clicking on "END TEST" button anytime after start of test<br>
              </p><br>
              <?php include("starttest.php");?>
              <form action="gk.php">
              <button type="btn-primary" style="margin-left: 50px;">Start Quiz</button>
            </form>
              </div>
           </div>
         </div>
            
           



</body>
</html>