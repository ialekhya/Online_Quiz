<?php 
 if(  isset($_POST['option']) && isset($_POST['submitt']))
  {
      $_SESSION['attempted']++;
        if($_SESSION['correctoption']==$_POST['option'])
        {
          $_SESSION['score']++; 
        }
        else
          $_SESSION['score']-=0.25;
   }
 ?>