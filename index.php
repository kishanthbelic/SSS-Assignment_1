<?php 
    //start session
    session_start();

    
    $sessionID = session_id(); // storing value of session id

    setcookie("user_login",$sessionID,time()+1800,"/","localhost",false,true);
    echo "value of cookie : ".$_COOKIE['user_login'];

?>


<!DOCTYPE html>
<html>

<head>		
<link rel="stylesheet" type="text/css" href="style.css">
</head>



<body>
		<h1 style="font-size: 42px;text-align:center;color: #fff; ">CSRF Assignment 1</h1>
	
<div class="login">
	
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name="username" placeholder="Username" required="required" />
		<input type="password" name="password" placeholder="Password" required="required" />
		
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>



</body>
</html>
