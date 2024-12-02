<?php


//1.Count Odd Numbers in an array

function countOddNumbersInArray(array $arr) : int {
    $count = 0;
    foreach ($arr as $number){
        if($number % 2 !== 0){
            $count++;
        }
    }
    return $count;
}
