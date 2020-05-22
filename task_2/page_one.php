<?php 
require_once "students.php";


$studentId = $_GET['studentId'];
$student = $students[$studentId] ;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>l9 tasks</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Student name is <?= $student['name'] ?></h2>
		<br>
		<br>

		<p><?= $student['info'] ?></p>
	</div>
</body>
</html>