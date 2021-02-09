<?php
    $num = 9123456;
    $num_length = strlen((string)$num);

    $length = $num_length - 1;
    $number = $num;

    for ($i = 0; $i < $num_length; $i++)
    {
        $hasil = floor($number/ pow(10, $length)) * pow(10, $length);
        $number -= $hasil;
        $length -= 1;
        echo $hasil;
        echo "</br>";
    }
?>