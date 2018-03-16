<?php
        session_start();
        require 'con.php';
?>

<?php
   if(isset($_POST['login'])){
	   
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from news where user_name='$username' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['username']=$username;
			header("location:news.php");
		}
		else{
			echo '<script type="text/javascript">alert("invalid credentials")</script>';
		}
   }
   ?>
<!DOCTYPE html>
<html>
    <head>
            <title>Login</title>

    </head>   
    <body>
        <div class="header">
         	<h1>news website</h1>
               <a href="register.php" > REGISTER </a>
               <a href="" > LOGIN </a>
        </div>
        <div class="content">
            <div class="disp">
                <h2>Login</h2>
              
                <form class="form" method="post" action="">
                UserName<input type="text" name="username"><br />
                Password<input type="password" name="password"><br />
                <input type="submit" name="login" value="LOGIN">
                <style>
                   body{
		         text-align:center;
		         background-color:grey;
		         }
		     </style>
            </form>
            </div> 
       
        </div>
    </body>  
</html>
