<?php
    $number = 3;
    $pointer = &$number;  // Sets $pointer to a reference to $number
    echo $number."<br/>"; // Outputs  '3' and a line break
    $number = 24;
    echo 'pointer=: '. $pointer;        // Sets $number to 24
    echo 'number=: '.$number;         // Outputs '24'
?>