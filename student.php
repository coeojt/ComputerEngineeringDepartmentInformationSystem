<?php
  include "connection.php";
  include "admin_navbar.php";
?>
<!DOCTYPE html>
<html>
<head> 	
	<title>Students</title>
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
	
	
	
  

<div id="main">	
  
 

	<div class="srch" >
		<div class="a">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search books.." required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>
		
		<a href="student_add.php"><button  style="background-color: #6db6b9e6; height: 30px; " >add new data</button ></a><br/><br/>
			
		</div>

	</div>

	<h2>List Of Students</h2>
	<?php

		if(isset($_POST['submit']))
		{
			if(isset($_SESSION['login_user'])) 
		{
			$q=mysqli_query($db,"SELECT * from students where lname like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				
				echo "<th>"; echo "ID Number";	echo "</th>";
				echo "<th>"; echo "First Name";  echo "</th>";
				echo "<th>"; echo "Middle Name";  echo "</th>";
				echo "<th>"; echo "Last Name";  echo "</th>";
				echo "<th>"; echo "User Name";  echo "</th>";
				echo "<th>"; echo "Password";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact Number";  echo "</th>";
				echo "<th>"; echo "UPDATE";  echo "</th>";
				echo "<th>"; echo "DELETE";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['idnumner']; echo "</td>";
				echo "<td>"; echo $row['fname']; echo "</td>";
				echo "<td>"; echo $row['mename']; echo "</td>";
				echo "<td>"; echo $row['lname']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['password']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";
				echo "<td>";
     			?> <a href="student_edit.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">update</button></a> <?php
     		echo "</td>";
     		echo "<td>";
     			?> <a href="student_delete.php?id= <?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger">delete</button> </a> <?php
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
			$res=mysqli_query($db,"SELECT * FROM `students` ORDER BY `students`.`lname` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				
				echo "<th>"; echo "ID Number";	echo "</th>";
				echo "<th>"; echo "First Name";  echo "</th>";
				echo "<th>"; echo "Middle Name";  echo "</th>";
				echo "<th>"; echo "Last Name";  echo "</th>";
				echo "<th>"; echo "User Name";  echo "</th>";
				echo "<th>"; echo "Password";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact Number";  echo "</th>";
				echo "<th>"; echo "UPDATE";  echo "</th>";
				echo "<th>"; echo "DELETE";  echo "</th>";

			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['idnumber']; echo "</td>";
				echo "<td>"; echo $row['fname']; echo "</td>";
				echo "<td>"; echo $row['mname']; echo "</td>";
				echo "<td>"; echo $row['lname']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['password']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";
				echo "<td>";
     			?> <a href="student_edit.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">update</button></a> <?php
     		echo "</td>";
     		echo "<td>";
     			?> <a href="student_delete.php?id= <?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger">delete</button> </a> <?php
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