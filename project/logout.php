<?php
 session_start();
?>
<html>
<head>
    
</head>

<body>
    <div class='c'>
      <h1>NEWS</h1>
      
      <a class="two" href="login.php">Login </a>
     
      <a class="two" href="home.html">Home </a>
	  <?php
	    session_destroy();
        header('location:home.html');
	  ?>
      </ul>
    </div>
</body>
</html>
