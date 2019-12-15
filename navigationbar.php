
<nav class="navbar navbar-default">
     <div class="container-fluid">

         <div class="navbar-header">
            <a class="navbar-brand" href="#">Online Quiz</a>
         </div>

         <ul class="nav navbar-nav">
         <li><a href="index2.php">Home</a></li>
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
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"><?php echo '<span style="font-size:20px;"><i>'. $_SESSION['username']. '</i></span>'?></span></a>
                <ul class="dropdown-menu">
                               <li><a href="profilep.php">View Profile</a></li>
                               <li><a href="logout.php"  onclick="return deleteask();">Logout</a></li>
                              </ul>
         </li>
         </ul>

     </div>
   </nav>
   