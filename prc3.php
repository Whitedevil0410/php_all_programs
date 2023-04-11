<?php

	echo "<h1>Simple calculator <br></h1>";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h2 style='color:blue'><label>Enter first number:</label>
		<input type="number" name="num1"><br><br>
		<h2 style='color:blue'><label>Enter second number:</label>
		<input type="number" name="num2"><br><br>
		
        <label>Select operation:</label><br>
		
		 <h3 style='color:green'>
        <input type="radio" id="add" name="operator" value="add">
  		<label for="add"> Addition</label><br>
  		<input type="radio" id="sub" name="operator" value="sub">
  		<label for="sub">Substraction</label><br>
  		<input type="radio" id="mul" name="operator" value="mul">
  		<label for="mul">Multiplication</label><br>
  		<input type="radio" id="div" name="operator" value="div">
  		<label for="div">Division</label><br><br>
		<input type="submit" value="Calculate">
        <input type="submit" value="reset">
</h3>
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$operator = $_POST["operator"];

			switch ($operator) {
				case "add":
					$result = $num1 + $num2;
					echo "<h1>Result:  $result</h1>";
					break;
				case "sub":
					$result = $num1 - $num2;
					echo "<h1>Result:  $result</h1>";
					break;
				case "mul":
					$result = $num1 * $num2;
					echo "<h1>Result:  $result</h1>";
					break;
				case "div":
					if ($num2 == 0) {
						echo "Error: Division by zero";
					} else {
						$result = $num1 / $num2;
						echo "<h3>Result:  $result</h1>";
					}
					break;
				default:
					echo "Error: Invalid operator";
			}
		}
	?>
</body>
</html>
