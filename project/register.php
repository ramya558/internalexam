<?php
     require 'cofigure.php';
?>
<?php
	    if(isset($_POST['register_btn'])){
			$username=stripslashes($_POST['username']);
            $email=stripslashes($_POST['email']);
            $password=stripslashes($_POST['password']);
            $password1=stripslashes($_POST['password1']);
            
			if($password== $password1){
				$query="select * from users where username='$username'";
				$sql=mysqli_query($con,$query);
				if(mysqli_num_rows($sql)>0){
					echo '<script type="text/javascript">alert("user already exists try another username")</script>';
					
				}else
				{
					$query="INSERT INTO users(username,email,password,contact)VALUES('$username','$email','$password','$contact')";
					$sql=mysqli_query($con,$query);
					if($sql){
						echo '<script type="text/javascript">alert("user succesfully registered")</script>';
					}
					else{
						echo '<script type="text/javascript">alert("error")</script>';
					}
				}
         
		   }
		   else{
			   echo '<script type="text/javascript">alert("password and confirm password doesnot match")</script>';
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
       <span><a href="admin.php">ADMIN</a></span>
       <span><a href="login.php">LOGIN</a></span>
     </div>
     <div class="b">
       <h2 style="color:purple">Register</h2>

        <form method="POST" action="login.php" >
              username  <input type="text" name="username"/><br><br> 
              password  <input type="password" name="password"/><br><br>
              password1 <input type="password" name="password1"/><br><br>
             <input type="submit" value="register" name="register_btn"/>
        </form>
        </div>
        
</body>
</html>
