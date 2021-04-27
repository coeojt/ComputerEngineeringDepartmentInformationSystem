<?php
  include ("connection.php");
  include ("admin_navbar.php");
  $id = $_GET["id"];

  $idnumber="";
  $fname="";
  $mname="";
  $lname="";
  $username="";
  $password="";
  $email="";
  $contact="";

  
 
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

	<h2 style="text-align: center;color: #fff;">Edit Information</h2>

	<?php 
$res = mysqli_query($db,"select * from students where id=$id");

  if (!$res){
  	printf("Error: %\n", mysqli_error($db));
  	exit();
  }

  while ($row=mysqli_fetch_array($res)) {
  $idnumber=$row["idnumber"];
  $fname=$row["fname"];
  $mname=$row["mname"];
  $lname=$row["lname"];
  $username=$row["username"];
  $password=$row["password"];
  $email=$row["email"];
  $contact=$row["contact"];
  }


	?>
	
	

	<div  style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">
		
		
		<label for="idnumber"><h4><b>ID Number: </b></h4></label>
		<input class="form-control" type="text" id="idnumber" placeholder="Enter idnumber" name="idnumber" value="<?php echo $idnumber; ?>">

		
		<label for="fname"><h4><b>First Name:</b></h4></label>
		<input class="form-control" type="text" id="fname" placeholder="Enter First Name" name="fname" value="<?php echo $fname; ?>"> 

		
		<label for="mname"><h4><b>Middle Name:</b></h4></label>
		<input class="form-control" type="text" id="mname" placeholder="Enter Middle name" name="mname" value="<?php echo $mname; ?>"> 

		
		<label for="lname"><h4><b>Last Name:</b></h4></label>
		<input class="form-control" type="text" id="lname" placeholder="Enter Last name" name="lname" value="<?php echo $lname; ?>">

		
		<label for="username"><h4><b>User Name:</b></h4></label>
		<input class="form-control" type="text" id="username" placeholder="Enter username" name="username" value="<?php echo $username; ?>">

		
		<label for="password"><h4><b>Password:</b></h4></label>
		<input class="form-control" type="text" id="password" placeholder="Enter password" name="password" value="<?php echo $password; ?>">

		<label for="email"><h4><b>Email:</b></h4></label>
		<input class="form-control" type="text" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>"> 

		<label for="contact"><h4><b>Contact:</b></h4></label>
		<input class="form-control" type="text" id="contact" placeholder="Enter Cellphone No." name="contact" value="<?php echo $contact; ?>"> 

		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	
</form>
</div>
</body>

<?php 

		if(isset($_POST['submit'])){
			if (isset($_SESSION['login_user'])) 
		
		
				
			
		{
			
			
			$idnumber=$_POST['idnumber'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
		

			$sql1= "UPDATE students SET idnumber='$idnumber',fname='$fname', mname='$mname', lname='$lname', username='$username', password='$password', email='$email',contact='$contact' WHERE id=$id";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="student.php";
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