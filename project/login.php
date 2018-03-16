 <?php
     session_start();
     require 'cofigure.php';
?>
 <?php
   if(isset($_POST['login'])){
	   
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from users where username='$username' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['username']=$username;
			header("location:home.html");
		}
		else{
			echo '<script type="text/javascript">alert("invalid credentials")</script>';
		}
   }
   ?>
<!DOCTYPE html>
<html>
 <head>
 </head>
 <style>
 .c{
  color:purple;
  text-align:center;
  padding-bottom:20px; 
 }
 span{
 padding:15px 15px 10px 15px;
 }
 .b{
   padding:10px 35px 10px 35px;
   border:1px solid grey;
   }
   </style>
 <body>
     <div class="c">
       <h1>NEWS</h1
       <span><a href="admin.php">ADMIN</a><span>
       <span><a href="register.php">REGISTER</a></span>
      </div>
      <div class="b">
       <h2 style="color:purple">Login</h2>

        <form method="POST" action="news.php" >
        username<input type="text" name="username"><br><br>
        password<input type="password" name="password"><br><br>
        <a href="home.html"><input type="submit" name="login"></a>
        </form>
        </div>
      
</body>
</html>
