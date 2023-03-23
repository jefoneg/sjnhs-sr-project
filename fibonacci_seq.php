<?php
//fibonacci sequence

$num1 = 0;
$num2 = 1;

for($i=0; $i<100; $i++){
    $result = $num1 + $num2;
    echo $result.', ';

    $num1 = $num2;
    $num2 = $result;
}


?>