<html>
<head>
  <title>Uncommon Named</title>
</head>
<body>
<?php
  if (isset($_FILES['userfile'])){
      print_r($_FILES);
  }
?>
<form action="" method="POST" enctype="multipart/form-data">
  <input type="file" name="userfile"><br />
  <input type="submit" value="Upload"><br />
</form>

</body>
</html>