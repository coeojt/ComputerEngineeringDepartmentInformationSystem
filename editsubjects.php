<?php
  include ("connection.php");
  include ("admin_navbar.php");
  $id = $_GET["id"];

  $coursecode="";
  $subject="";
  $units="";
  $days="";
  $time="";
  $instructor="";

  
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
	<style type="text/css">
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
		}

	</style>
</head>
<body style="background-color: #004528;">

	<h2 style="text-align: center;color: #fff;">Edit Information of Subjects</h2>

	<?php 
$res = mysqli_query($db,"select * from subjects where id=$id");

  if (!$res){
  	printf("Error: %\n", mysqli_error($db));
  	exit();
  }

  while ($row=mysqli_fetch_array($res)) {
  $coursecode=$row["coursecode"];
  $subject=$row["subject"];
  $units=$row["units"];
  $days=$row["days"];
  $time=$row["time"];
  $instructor=$row["instructor"];
  }


	?>
	
	

	<div  style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">
		
		
		<label for="coursecode"><h4><b>Course Code: </b></h4></label>
		<input class="form-control" type="text" id="coursecode" placeholder="Enter coursecode" name="coursecode" value="<?php echo $coursecode; ?>">

		
		<label for="subject"><h4><b>Subject</b></h4></label>
		<input class="form-control" type="text" id="subject" placeholder="Enter subject" name="subject" value="<?php echo $subject; ?>"> 

		
		<label for="units"><h4><b>Units</b></h4></label>
		<input class="form-control" type="text" id="units" placeholder="Enter subject" name="units" value="<?php echo $units; ?>"> 

		
		<label for="days"><h4><b>Days:</b></h4></label>
		<input class="form-control" type="text" id="days" placeholder="Enter days" name="days" value="<?php echo $days; ?>">

		
		<label for="time"><h4><b>Time:</b></h4></label>
		<input class="form-control" type="text" id="time" placeholder="Enter time" name="time" value="<?php echo $time; ?>">

		<label for="instructor"><h4><b>Instructor:</b></h4></label>
		<input class="form-control" type="text" id="instructor" placeholder="Enter instructor" name="instructor" value="<?php echo $instructor; ?>"> 

		<div style="padding-left: 90px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	
</form>
</div>
</body>

<?php 

		if(isset($_POST['submit'])){
			if (isset($_SESSION['login_user'])) 
		
		
				
			
		{
			
			
			$coursecode=$_POST['coursecode'];
			$subject=$_POST['subject'];
			$units=$_POST['units'];
			$days=$_POST['days'];
			$time=$_POST['time'];
			$instructor=$_POST['instructor'];
		

			$sql1= "UPDATE subjects SET coursecode='$coursecode',subject='$subject', units='$units', days='$days', time='$time', instructor='$instructor' WHERE id=$id";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="admin_subjects.php";
					</script>
				<?php
			}
		}
		else{
			?>
			<script type="text/javascript">
				alert("You need to login first");
			</script>
			<?php
		}
	}
 	?>

</html>