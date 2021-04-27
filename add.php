<?php
  include "connection.php";
  include "admin_navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Subjects</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.srch
		{
			padding-left: 1000px;

		}
		
		body {
  background-color: #024629;
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}


#main {
  transition: margin-left .5s;
  padding: 16px;
}


}

}
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}

.subj
{
    width: 400px;
    margin: 0px auto;
}
.form-control
{
  background-color: #080707;
  color: white;
  height: 40px;
}

	</style>


</head>
<body>

<div id="main">
  
  <div class="container" style="text-align: center;">
    <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Add New Subjects</b></h2>
    
    <form class="subj" action="" method="post">
        
        <input type="text" name="coursecode" class="form-control" placeholder="Course Code" required=""><br>
        <input type="text" name="subject" class="form-control" placeholder="Subject" required=""><br>
        <input type="text" name="units" class="form-control" placeholder="Units" required=""><br>
        <input type="text" name="days" class="form-control" placeholder="Day Schedule M/T/W/Th/F/Sat" required=""><br>
        <input type="text" name="time" class="form-control" placeholder="Day Time" required=""><br>
        <input type="text" name="instructor" class="form-control" placeholder="Instructor" required=""><br>

        <button style="text-align: center;" class="btn btn-default" type="submit" name="submit">ADD</button>
    </form>
  </div>
<?php
    if(isset($_POST['submit']))
    {
      if(isset($_SESSION['login_user']))
      {
        mysqli_query($db,"INSERT INTO subjects VALUES ('','$_POST[coursecode]', '$_POST[subject]', '$_POST[units]', '$_POST[days]', '$_POST[time]', '$_POST[instructor]') ;");
        ?>
          <script type="text/javascript">
            alert("Subject Added Successfully.");
          </script>

        <?php

      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("You need to login first.");
          </script>
        <?php
      }
    }
?>
</div>

</body>