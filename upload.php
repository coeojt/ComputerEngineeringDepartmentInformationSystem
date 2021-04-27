<?php include 'fileslogic.php';
      include 'admin_navbar.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  form {
  width: 30%;
  margin: 100px auto;
  padding: 30px;
  border: 1px solid #555;
}
input {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 10px 10px;
}
button {
  border: none;
  padding: 10px;
  border-radius: 5px;
}
table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
}

</style>
  <head>
   
    <title>Files Upload and Download</title>
  </head>
  <body >

    <div class="container" >
      <div class="row">
        <form action="upload.php" method="post" enctype="multipart/form-data" style=" width: 50%;
  margin: 100px auto;
  padding: 40px;
  border: 1px solid #555;">
          <h3 >Upload File</h3>
          <input type="text" name="id" placeholder="type the ID of subjects" required=""> <br>
          <input type="file" name="myfile" style="width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 10px 10px;
  padding-bottom: 30px;"> <br>
          <button type="submit" name="saveupload" style="border: none;
  padding: 10px;
  border-radius: 5px;">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>