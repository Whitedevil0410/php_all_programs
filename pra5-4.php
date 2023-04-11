<?php
// define the Morse code array
//  echo '<h1 style="color:red">ENROLLMENT NUMBER:216090307029</h1>';
 echo '<h1 style="color:green">Here to encoding to given string <p>message into equivalent morse code</h1>';
$morseCode = array(
    
    'A' => '.-',    
    'B' => '-...',  
    'C' => '-.-.',  
    'D' => '-..',   
    'E' => '.',     
    'F' => '..-.',  
    'G' => '--.',   
    'H' => '....',  
    'I' => '..',    
    'J' => '.---',  
    'K' => '-.-',   
    'L' => '.-..',  
    'M' => '--',    
    'N' => '-.',    
    'O' => '---',   
    'P' => '.--.',  
    'Q' => '--.-',  
    'R' => '.-.',   
    'S' => '...',   
    'T' => '-',     
    'U' => '..-',   
    'V' => '...-',  
    'W' => '.--',   
    'X' => '-..-',  
    'Y' => '-.--',  
    'Z' => '--..',  
    '0' => '-----',
    '1' => '.----',
    '2' => '..---',
    '3' => '...--',
    '4' => '....-',
    '5' => '.....',
    '6' => '-....',
    '7' => '--...',
    '8' => '---..',
    '9' => '----.',
    '.' => '.-.-.-',
    ',' => '--..--',
    '?' => '..--..',
    '!' => '-.-.--'
);

echo"<h2>HELLO WORLD! ANS :- </h2>";
// define the input message
$message = 'HELLO WORLD!';


// convert the message to uppercase
$message = strtoupper($message);

// loop through the characters in the message and encode each character to Morse code
$morseMessage = '';
for ($i = 0; $i < strlen($message); $i++) {
    $char = $message[$i];
    if (isset($morseCode[$char])) {
        $morseMessage .= $morseCode[$char] . ' ';
    } else {
        $morseMessage .= '  ';
    }
}

// display the Morse code message
echo  "<h3>$morseMessage </h3>";
?>

