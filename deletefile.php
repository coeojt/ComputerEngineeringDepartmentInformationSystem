<?php
include 'connection.php';



if (isset($_GET['file_idt'])) {
 $idt = $_GET['file_idt'];
$result=mysqli_query($db, "SELECT name from files  where idt=$idt");
$row=mysqli_fetch_array($result);
$data=$row["name"];
unlink("uploads/".$data);
    // fetch file to download from database
    
   mysqli_query($db, "delete from files WHERE idt =$idt");
?>
<script type="text/javascript">
	alert("Files Deleted Succesfully")
	window.location="admin_subjects.php"
</script>
<?php
}



?>