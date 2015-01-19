<?php 
$contype = $_GET["con-type"]



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Page 2</title>
	</head>
	<body>
		
		<?php if ($contype == "Remodel") { ?>
		<h2>Remodeling?</h2>
		<p>Select the area(s) you'd like to remodel.</p>
		<form action="page3.php">
			<input type="checkbox" name="area1" value="kitchen">Kitchen
			<input type="checkbox" name="area2" value="garage">Add on a garage.
			<input type="checkbox" name="area3" value="bath">Bathroom
			<input type="submit">
		</form>


		<?php } else { 
			echo "oops"?>
		




		<?php } ?>

	</body>
</html>