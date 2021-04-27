<?php 
      include 'fileslogicdownload.php';
      include "navbar.php";
      ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
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
  padding: 5px 10px;
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
  border: 1px solid blue;
}
</style>
<body style="background-color: #004528;
background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(images/1.jpg) ;
background-size: cover;
background-position: fixed;
width: 100%;
height: 100vh;
color: #2554C7;">

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="proceed.php?file_idt=<?php echo $file['idt'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>