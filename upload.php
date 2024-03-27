<?php
	include('dbconnection.php');
	if(isset($_POST['submit'])) {
		$file_name = $_FILES['image']['name'];
		$tempname = $_FILES['image']['tmp_name'];
		$type = $_POST['type'];
		$folder = 'cake_album/' . $file_name;
		$query = mysqli_query($con,"Insert into images (file, type) values ('$file_name', '$type')");

		if(move_uploaded_file($tempname, $folder)) {
			echo "<h2>file uploaded successful</h2>";
		
		}else{
			echo "<h2>file uploaded not successful</h2>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>upload</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="image">
		<br /><br />
		<input type="radio" name="type" value="cake" />
		<label for="cake">Cake</label>
		<input type="radio" name="type" value="flower"/>
		<label for="flower">Flower</label>
		<br /><br />
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>