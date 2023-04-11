<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Series</title>
</head>
<body>
	<form method="post">
		<!-- <h2 style='color:red'><label>Enrollment number:216090307029</label></h2> -->
		<h2 style='color:green'><label>Enter the number of terms:</label></h2>
		<input type="number" name="num_terms" required><br><br>
		<button type="submit" name="submit" style='background-color:blue'>Generate Series</button>
	</form>

	<?php
	// function to generate Fibonacci series up to a given term
	function fibonacci($n) {
	    $num1 = 0;
	    $num2 = 1;
	    $count = 0;

	    // check if the given term is valid
	    if ($n <= 0) {
	        echo "Invalid term";
	    } elseif ($n == 1) {
	        echo $num1."<br>";
	    } else {
	        while ($count < $n) {
	            echo $num1 . "<br>";
	            $num3 = $num2 + $num1;
	            $num1 = $num2;
	            $num2 = $num3;
	            $count = $count + 1;
	        }
	    }
	}

	// check if the form has been submitted
	if (isset($_POST['submit'])) {
		$num_terms = $_POST['num_terms'];
		echo "<h2>Fibonacci Series up to $num_terms terms:</h2>";
		fibonacci($num_terms);
	}
	?>
</body>
</html>
