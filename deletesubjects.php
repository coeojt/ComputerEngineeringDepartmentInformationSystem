<?php

include "connection.php";
include "admin_subjects.php";
$id=$_GET["id"];



    if (isset($_SESSION['login_user'])) {
        mysqli_query($db, "delete from subjects where id=$id");

        ?>
        <script type="text/javascript">
            alert("Subject Deleted Successfully")
            window.location="admin_subjects.php";
        </script>
        >
    
    window.location="subjects.php";
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("You need to login first");
        </script>
        <?php
    }



?>