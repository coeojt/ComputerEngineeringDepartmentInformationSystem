<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	  <link rel="stylesheet" type="text/css" href="style.css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

</head>
<body>

	    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">COMPUTER ENGINEERING DEPARTMENT INFORMATION SYSTEM</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li> 

<?php
if (isset($_SESSION['login_user'])){
?>
            <li><a href="subjects.php">SUBJECTS</a></li>
            
            <li><a href="curriculum.php">CURRICULUM</a></li>
          </ul>
<?php }
else{
  ?>
      <script type="text/javascript">
      

      </script>
<?php
}
?>




          <?php
            if(isset($_SESSION['login_user']))
            {

          ?>
                <ul class="nav navbar-nav">
                  <li><a href="profile.php">PROFILE</a></li>
                

                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="">
                    <div style="color: white">
                      <?php
                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['pic']."'>";
                        echo " ".$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"> ADMIN_LOGIN</span></a></li>
                
               
              </ul>
                <?php
            }
          ?>

      </div>
    </nav>
   
</body>
</html>