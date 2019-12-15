<!DOCTYPE html>
<html>
   <head>
   	<title>loginpage</title>
   	 <link rel="stylesheet" href="loginstyle.css">
   </head>

   <body>
   	    <div class="loginbox">
   	   	<form   method="POST">
   	   		<?php include('findpsw.php'); ?>
   	   		<h1>LOGIN</h1>
			<p>
				<label>Username</label><br>
			    <input type="text" id="user" name="userr">
			</p>
			<p>
				<label>Mailid</label><br>
			    <input type="email" id="emailid" name="emailid" >
			</p>
			<p >
				<input type="submit" id="login" value="submit">
			</p>
		</form>
	</div>
</body>