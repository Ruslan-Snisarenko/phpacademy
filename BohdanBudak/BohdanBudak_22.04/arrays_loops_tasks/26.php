<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:20
 */
/**  Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс. */

$arr = [];
$mult = 1;
for ($i=0; $i <=10; $i++) {
    array_push($arr, rand(1, 100));
    if ($i > 0 && ($arr[$i] % 2 == 0)) {
        $mult = $mult * $arr[$i];
        echo "Производная Числа, которое > 0 и его индекс парный : $mult" . PHP_EOL;
    }
}

echo PHP_EOL;

for ($i=0; $i<=10; $i++) {
    if ($arr[$i] > 0 && ($arr[$i] % 2 != 0)) {
        echo "Число > 0 и его индекс непарный : $arr[$i]" . PHP_EOL;
    }
}
