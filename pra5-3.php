<?php 
    $matrix1 = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );
    $matrix2 = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9));

    );
    echo "Matrix 1:<br>";
    print_r($matrix1);
    echo "<br>Matrix 2:<br>";
    print_r($matrix2    $result = array(
                    array(0,0,0),
                    array(0,0,0),
                    array(0,0,0)
                    );
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            $result[$i][$j] = $matrix1[$i][$j] * $matrix2[$j][$i];
        }
    }
    echo "<pre>";
    print_r($result);
    echo "</pre>";
?>
