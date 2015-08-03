<?php 
// include once
include_once('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Upload to the Db using Python
	</title>
	
</head>
<body>
<h1 align="center"> Upload image using PHP</h1>
<form action="upload.php" method="post" enctype="multipart/form-data" name="addroom">
Browser Image: <br />
 <input type="file" name="image"><br />
 <input type="submit" name="Submit" value="Upload"/>
 </form>
<br />

</body>
</html>

