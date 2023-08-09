<?php
function check_number(int $number)
{
    $is_even = !($number % 2);
    var_dump($is_even);
    $start = 1;
    for($start; $start <= 10; $start++){
        echo $number."x".$start."=".($number*$start)."<br />";
    }  

}

check_number(3);
check_number(4);
check_number(5);
