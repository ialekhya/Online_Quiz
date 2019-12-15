<?php 
session_start();
 $_SESSION['test']="technicaltest";
 $_SESSION['testtype']="technical";
    include("evaluate.php");
 ?>
 <script>
  c="technical.php";
</script>

<!DOCTYPE html>
<html>
   <head>
    <title>Technical Test</title>
    <link rel="stylesheet" href="teststyle.css">
    </head>

   <body>
     <div class="image">
          <div class="colmn">
          <img src="img4.jpg" width="150" height="150">
          </div>
              <div class="colmn">
          <span style="color:black;text-align:center;font-size:30px">Technical Test</span> 
           </div>
     </div>

    <div class="examnav">
             <a href="index2.php">Home</a> » 
             <a href="testtype.php">Testtype</a> » 
             <a href="technical.php">Technical Test</a> » Technical Test - Random     
               <span style="color:red;">Time Left= <span id="timer"></span> </span>  
            <a href="#"><span style="float:right;">End test</span></a></div>
        </div>
<?php include("nextquestion.php");?>
    <p>No.of Questions: 30<br>
    Questions Attempted:<?php echo $_SESSION['attempted'] ?><br> </p>
   
    <div class="que">
    <br>Question No: <?php echo $_SESSION['questions'] ?>
    <p><?php echo $row['question'] ?></p>
    <form action="technical.php" method="POST">
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
      
    
