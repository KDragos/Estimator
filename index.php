<?php 

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Estimator</title>
</head>
<body>
	<h1>Construction Estimator</h1>
	<p>Welcome to our estimator page. Please select from the following options.</p>
	<form action="page2.php" method="GET">
		<p><input type="radio" name="con-type" value="Remodel">Remodel a current property.</p>
		<p><input type="radio" name="con-type" value="New">Build a new place.</p>
	<input type="submit">
	</form>
</body>
</html>