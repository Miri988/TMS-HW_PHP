<?php
//Дан массив из чисел n. После каждого отрицательного элемента массива вставить элемент с нулевым значением.
$arr = array(5, 15, -5, 4, -3, 7, 9, 4);
$arr1 = [];
foreach ($arr as $elem) {
    $arr1[] = $elem;
    if ($elem < 0) {
        $arr1[] = 0;
    }
}
print_r($arr1);