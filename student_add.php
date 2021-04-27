<?php
  include "connection.php";
  include "admin_navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">


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
<body>

<section>
  <div style="
  width: 100%;
    height: 702px;
    max-height: 100%;
   
     background-size:100% 100%;
    background-repeat: no-repeat;
  background-image: url(images/4.png) ; 
   ">

    <div style=" height: 700px;
  width: 450px;
  background-color: black;
  margin: 0px auto;
  opacity: .7;
  color: white;
  padding: 20px;">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Computer Engineering Department Information Sysetm</h1>
        <h1 style="text-align: center; font-size: 25px;">Student Registration Form</h1>
        <?php
if(isset($_SESSION['login_user'])) 
    {
      ?>
      <form name="Registration" action="" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="idnumber" placeholder="ID Number" required=""> <br>
          <input class="form-control" type="text" name="fname" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="mname" placeholder="Middle Name" required=""> <br>
          <input class="form-control" type="text" name="lname" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
     
    </div>
  </div>
</section>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `students`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `students` VALUES('','p.jpg','$_POST[idnumber]', '$_POST[fname]','$_POST[mname]', '$_POST[lname]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }
    }
    else{
      ?>
      <script type="text/javascript">
        alert("You need to login first");
      </script>
      <?php
    }


    ?>

</body>
</html>