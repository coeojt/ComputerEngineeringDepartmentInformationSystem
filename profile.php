<?php 
	include "connection.php";
	include "navbar.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
 	<style type="text/css">
 		.wrapper
 		{
 			width: 400px;
 			margin: 0 auto;
 			color: white;
 		}
 	</style>
 </head>
 <body >
 	<div class="container"
 	style="background-color: #004528;
background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(images/curr.jpg);
background-size: cover;
background-position: fixed;
width: 100%;
height: 100vh;
margin-top: -20px;

  ">
 		<form action="" method="post">
 			<button class="btn btn-default" style="float: right; width: 70px;" name="submit1" type="submit">Edit</button>
 		</form>
 		<div class="wrapper">
 			<?php

 			if(isset($_POST['submit1']))
 			{
 				?>
 				<script type="text/javascript">
 					window.location="edit.php"
 				</script>
 				<?php
 			}


 				$q=mysqli_query($db,"SELECT * FROM students where username='$_SESSION[login_user]' ;");
 			?>
 			<h2 style="text-align: center;">My Profile</h2>

 			<?php
 				$row=mysqli_fetch_assoc($q);

 				echo "<div style='text-align: center'>
 					<img class='img-circle profile-img' height=110 width=120 src='images/".$_SESSION['pic']."'>
 				</div>";
 			?>
 			<div style="text-align: center;"> <b>Welcome, </b>
	 			<h4>
	 				<?php echo $_SESSION['login_user']; ?>
	 			</h4>
 			</div>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				echo "<tr>";
	 					
	 					echo "<td>";
	 						echo "<b> ID Number: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['idnumber'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					
	 					echo "<td>";
	 						echo "<b> First Name: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['fname'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Middle Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['mname'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Last Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['lname'];
	 					echo "</td>";
	 				echo "</tr>";

	 				

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Contact: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['contact'];
	 					echo "</td>";
	 				echo "</tr>";

	 				
 				echo "</table>";
 				echo "</b>";
 			?>
 		</div>
 	</div>
 </body>
 </html>