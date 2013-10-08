<html>
<body>




<form action="upload.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Upload File">
</form>




<?php
if ($_FILES) {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  $img_file = getcwd() . "/images/" . $_FILES["file"]["name"];
  move_uploaded_file($_FILES["file"]["tmp_name"], $img_file);
  echo "<img src='http://" . $_SERVER['HTTP_HOST'] . "/images/" . $_FILES["file"]["name"] . "'/>"; 
  }
?>


</body>
</html>
