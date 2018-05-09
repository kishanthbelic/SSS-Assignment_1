<?php 
     session_start();

     //setting a cookie
     $sessionID = session_id(); //storing session id
 
     setcookie("user_login",$sessionID,time()+3600,"/","localhost",false,true); //cookie terminates after 1 hour - HTTP only flag
     
?>


<!DOCTYPE html>
<html>

<head>		
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="conf.js"> </script>
</head>



<body>
		<h1 style="font-size: 42px;text-align:center;color: #fff; ">CSRF Assignment 1</h1>
	
<div class="login">
	
	<h1>Login</h1>
    <form method="POST" action="server.php">
    	<input type="text" name="user" placeholder="Username" required="required" />
		<input type="password" name="pass" placeholder="Password" required="required" />
		<input type="hidden" name="user_csrf" id="IdOfToken" /> 
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>


<?php 
    //ajax call
       if(isset($_COOKIE['user_login']))
            { 
                echo '<script> var token = loadDOC("POST","server.php","IdOfToken");  </script>'; 
                        
            }
    ?>

</body>
</html>
