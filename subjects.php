<?php
  include "connection.php";
  include "navbar.php";
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
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}



#main {
  transition: margin-left .5s;
  padding: 16px;
}

div.a{
	text-align: right;
	
}

	</style>

</head>
<body>
	
	
	
  

<div id="main"

style="background-color: #004528;
background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(images/coedept1.jpg);
background-size: cover;
background-position: fixed;
width: 100%;
height: 122vh;
margin-top: -20px;

color: #2554C7;

  ">	
  
	

	<div class="srch" >
		<div class="a">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search .." required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>
		
		
			
		</div>

	</div>

	<h2>LIST OF SUBJECTS</h2>
	<?php

		if(isset($_POST['submit']))
		{
			if(isset($_SESSION['login_user'])) 
		{


			$q=mysqli_query($db,"SELECT * from subjects where subject like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No subjects found. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				
				echo "<th>"; echo "Course Code";	echo "</th>";
				echo "<th>"; echo "Subject";  echo "</th>";
				echo "<th>"; echo "Units";  echo "</th>";
				
				echo "<th>"; echo "Days";  echo "</th>";
				echo "<th>"; echo "Time";  echo "</th>";
				echo "<th>"; echo "Instructor";  echo "</th>";
				echo "<th>"; echo "Topics";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['coursecode']; echo "</td>";
				echo "<td>"; echo $row['subject']; echo "</td>";
				echo "<td>"; echo $row['units']; echo "</td>";
		
				echo "<td>"; echo $row['days']; echo "</td>";
				echo "<td>"; echo $row['time']; echo "</td>";
				echo "<td>"; echo $row['instructor']; echo "</td>";
				echo "<td>";
     			?> <a href="downloads.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">ENTER</button></a> <?php
     		echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
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
			
		elseif (isset($_SESSION['login_user'])) 
		{
			$res=mysqli_query($db,"SELECT * FROM `subjects` ORDER BY `subjects`.`subject` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				
				echo "<th>"; echo "Course Code";	echo "</th>";
				echo "<th>"; echo "Subject";  echo "</th>";
				echo "<th>"; echo "Units";  echo "</th>";
			
				echo "<th>"; echo "Days";  echo "</th>";
				echo "<th>"; echo "Time";  echo "</th>";
				echo "<th>"; echo "Instructor";  echo "</th>";
				echo "<th>"; echo "Topics";  echo "</th>";
				

			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['coursecode']; echo "</td>";
				echo "<td>"; echo $row['subject']; echo "</td>";
				echo "<td>"; echo $row['units']; echo "</td>";
		
				echo "<td>"; echo $row['days']; echo "</td>";
				echo "<td>"; echo $row['time']; echo "</td>";
				echo "<td>"; echo $row['instructor']; echo "</td>";
				echo "<td>";
     			?> <a href="downloads.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">ENTER</button></a> <?php
     		echo "</td>";
				

				

				echo "</tr>";
			}
		echo "</table>";
		}
		else{
			?>
			<script type="text/javascript">
				alert("You need to login first");
			</script>
			<?php
		}
		
			
			
			
			
		
		

	?>
</div>
</body>
</html>