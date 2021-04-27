<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  
  <style type="text/css">
    section
    {
      margin-top: -20px;
      height: 100%;
      width: 100%;
      padding: 0;
    }
  </style>   
</head>
<body >
<section>
  <div style="
  width: 100%;
    height: 702px;
    max-height: 100%;
   
     background-size:100% 100%;
    background-repeat: no-repeat;
  background-image: url(images/3.jpg) ; 
   ">
   <br>
    <div class="box1" style="height: 500px;
  width: 450px;
  background-color: black;
  margin: 70px auto;
  opacity: .7;
  color: white;
  padding: 20px;" >
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">COMPUTER ENGINEERING DEPARTMENT INFORMATION SYSTEM</h1>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
      <form  name="login" action="" method="post">
        
        <div style="margin: auto 50px;">
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px"> 
        </div>
      
      <p style="color: white; padding-left: 15px;">
        <br><br>
        <a style="color:yellow; text-decoration: none;" href="update_password.php"></a> &nbsp &nbsp &nbsp &nbsp &nbsp 
        <a style="color: yellow; text-decoration: none;" href="registration.php"></a>
      </p>
    </form>
    </div>
  </div>
</section>

  <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `students` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              <!--
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              -->
         
            <script type="text/javascript">alert("The username and password doesn't match")</script>
          
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="profile.php"
          </script>

        <?php

      }
    }

  ?>

</body>
</html>