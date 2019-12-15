<?php 
session_start();
 $_SESSION['test']="logicaltest";
  $_SESSION['testtype']="logical";
    include("evaluate.php");
 ?>
 <script>
  c="logical.php";
</script>
<!DOCTYPE html>
<html>
   <head>
    <title>Logical Reasoning</title>
    <link rel="stylesheet" href="teststyle.css">
    </head>

   <body>
     <div class="image">
          <div class="colmn">
          <img src="img1.jpg" width="150" height="150">
          </div>
              <div class="colmn">
          <span style="color:black;text-align:center;font-size:30px">Logical Reasoning</span> 
           </div>
     </div>

    <div class="examnav">
             <a href="index2.php">Home</a> » 
             <a href="testtype.php">Online Test</a> » 
             <a href="logical.php">General Knowledge </a> » Logical - Random     
               <span style="color:red;">Time Left= <span id="timer"></span> </span>  
            <a href="scorepage.php" ><span style="float:right;">End test</span></a></div>
        </div>

    <?php include("nextquestion.php");?>
    <p>No.of Questions: 30<br>
    Questions Attempted:<?php echo $_SESSION['attempted'] ?><br> </p>
   
    <div class="que">
    <br>Question No: <?php echo $_SESSION['questions'] ?>
    <p><?php echo $row['question'] ?></p>
    <form action="logical.php" method="POST">
    <input type="radio" name="option" value="<?php echo $row['optiona'] ?>"><?php echo $row['optiona'] ?><br>
    <input type="radio" name="option" value="<?php echo $row['optionb'] ?>"><?php echo $row['optionb'] ?><br>
    <input type="radio" name="option" value="<?php echo $row['optionc'] ?>"><?php echo $row['optionc'] ?><br>
    <input type="radio" name="option" value="<?php echo $row['optiond'] ?>"><?php echo $row['optiond'] ?><br> 
    <br><br><br>
    <div class="buttons">
        <input type="submit" name="submitt" value="submit">
        <input type="submit" name="next" value="next">
      </form>
    </div>

      <script src="timer.js"></script>  
    <script type="text/javascript">
    document.getElementById('timer').innerHTML = 00 + ":" + 30;
    startTimer();
    </script>
  </body>
</html>