<?php
// define an indexed array
$numbers = array(10, 5, 8, 2, 7);
// echo"<h1  style='color:red'>Enrollment number:216090307029</h1>";
echo " <h2 style='color:blue'> Unsorted Array: </h2>";
foreach ($numbers as $number) {
    echo "   $number  ";
}

// sort the array 
$n = count($numbers);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($numbers[$j] > $numbers[$j+1]) {
            // swap the elements
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j+1];
            $numbers[$j+1] = $temp;
        }
    }
}

// display the sorted array
echo "<br> <h2 style='color:blue' >Sorted Array: </h2>";
foreach ($numbers as $number) {
    echo " $number";
}
?>


