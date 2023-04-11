<!DOCTYPE html>
<html>
<head>
	<title>Multiplication Table to generate a table</title>
</head>
<body>
	<form method="post">
       <!--  <h2 style='color:red'><label>Enrollment number:216090307029</label></h2> -->
		<h2 style='color:green'><label>Enter the any number</label><label> Enter a number:</label></h2>
		<input type="number" name="num" required><br><br>
		<button type="submit" name="submit" style='background-color:blue'>Generate Table</button>
	</form>

	<?php
	// function to generate multiplication table for a given number
	function multiplicationTable($num) {
		echo "<h2>Multiplication Table for $num:</h2>";
		echo "<table border='1'>";
		for ($i = 1; $i <= 10; $i++) {
			echo "<tr>";
			echo "<td>$num x $i</td>";
			echo "<td>" . ($num * $i) . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	// check if the form has been submitted
	if (isset($_POST['submit'])) {
		$num = $_POST['num'];
		multiplicationTable($num);
	}
	?>
</body>
</html>

