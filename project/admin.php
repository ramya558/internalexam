<?php 
session_start();
include "config.php";

     if(isset($_POST['login'])){
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from admin where username='ramya'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['username']='ramya';
			header("location: news.php");
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
      <h1 style="text-align:center">NEWS</h1
      <span><a href="home.html">Home</a></span>
      <span><a href="login.php">LOGIN</a></span>
     </div>
     <div class="b">
       <h2 style="color:purple">Admin</h2>

        <form method="POST" action="news.php" >
             
              username<input type="text" name="username"><br><br>
              password<input type="password" name="password"><br><br>
              <a href="news.php"><input type="submit" onChange=name="login"></a>
        </form>
        </div>
</body>
</html>
