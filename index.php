<?php

	session_start();
	

?>

<!DOCTYPE html>

<html>
<head>
	<title>
		COMPUTER ENGINEERING DEPARTMENT INFORMATION SYSTEM
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body >
	<div style="height: 660px; width: 1519px; background-color: red;">
		<header style="height: 130px;
	width: auto;
	background-color: black;
	padding: 10px;">
		<div style="float :left;
	padding-left: 20px;">
			<img src="images/123.png" style="padding-left: 180px;
			padding-bottom: 10px;">
			<h1 style="color: white; ">COMPUTER ENGINEERING DEPARTMENT INFORMATION SYSTEM</h1>
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="subjects.php">SUBJECTS</a></li>
						
						<li><a href="curriculum.php">CURRICULUM</a></li>
						<li><a href="profile.php">PROFILE</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
								<li><a href="index.php">HOME</a></li>
								
								<li><a href="student_login.php">STUDENT_LOGIN</a></li>
								<li><a href="admin_login.php">ADMIN_LOGIN</a></li>
								
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section style="height: 550px;
width: auto;
	
	background-color: grey;">
		<div style="height: 550px;
	margin-top: 0px;
	margin-bottom: 0px;
	background-image: url(images/psu1.jpg)
	;

	 ">
			
				
				
			</div>
		</div>
		</section>
		

	</div>
	<?php  

		include "footer.php";
	?>
</body>
</html>