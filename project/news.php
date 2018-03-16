<?php
    if(isset($_POST['add'])){
      $title=stripslashes($_POST['title']);
      $description=stripslashes($_POST['description']);
            $query="select * from news where title='$title'";
            $sql=mysqli_query($con,$query);
            if(mysqli_num_rows($sql)>0){
                echo '<script type="text/javascript">alert("user already entered")</script>';
            }
            else{
                $query="INSERT INTO news(title,description) VALUES('$title','$description')";
                $sql=mysqli_query($con,$query);
                if($sql){
                  echo '<script type="text/javascript">alert("successfully entered")</script>'; 
                }
              else{
                echo '<script type="text/javascript">alert("error")</script>';
              }
            }
            }
        if(isset($_POST['delete'])){
            $title=stripslashes($_POST['title']);
            $description=stripslashes($_POST['description']);
            $query="delete * from news where title='$title' AND description='$description'";
        
            }
  
  ?>
<!DOCTYPE html>
<html>
<head> </head>
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
      <span><a href="register.php">REGISTER</a></span>
      <span><a href="login.php">LOGIN</a></span>
      <span><a href="logout.php">LOGOUT</a></span>
     </div>
     <div class="b">
     <h2 style="color:purple">DATA</h2>
        <form action="add.php" method="POST">
          Title<input type="text" name="title"><br><br>
          <label>Description<input type="text" name="description" maxlength="100"></label><br><br>
          <a href="add.php"><input type="submit" value="Add" name="add"></a>
           <input type="submit" value="Delete" name="delete">
         </form>
  </div>  
  
  </body>
  </html>
