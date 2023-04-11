<!DOCTYPE html>
<html>
<head>
	<title>String Length and Word Count</title>
</head>
<body>
	<form method="post">
       <!--  <h1 style='color:red'><label>Enrollment number:216090307029</label></h1> -->
		<h2 style='color:green'><label>Enter any string:</label>
		<input type="text" name="input_string" required><br><br></h3>
		<button type="submit" name="submit"> submit the string</button>
	</form>

	<?php
	// function to calculate string length and word count
	function calculate($str) {
		$length = 0;
		$word_count = 0;

		// iterate over each character in the string
		for ($i = 0; isset($str[$i]); $i++) {
			// count the number of characters
			$length++;

			// if the current character is a space or a newline, increment the word count
			if ($str[$i] == ' ' || $str[$i] == "\n") {
				$word_count++;
			}
		}

		// add one to the word count for the last word
		$word_count++;

		return array($length, $word_count);
	}

	// check if the form has been submitted
	if (isset($_POST['submit'])) {
		$input_string = $_POST['input_string'];
		list($length, $word_count) = calculate($input_string);
		echo "<h2>Result:</h2>";
		echo "<h3><p>The string is: $input_string</p></h3>";
		echo "<h3><p>Length of the string: $length</p></h3>";
		echo "<h3><p>Number of words in the string: $word_count</p></h3>";	}
	?>
</body>
</html>

