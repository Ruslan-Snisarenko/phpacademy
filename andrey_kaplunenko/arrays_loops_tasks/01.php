<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 12:21 PM
 */
/*
 * Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
 */
/*
 * Шпаргалка по printf('%\'*-10.3s'.PHP_EOL, $value):
 * [\'*] указываем каким символом заполнять пробелы, в данном случае звездочкой
 * [-] если стоит минус - то выравнивание по левому краю, по умолчанию по правому
 * [10.3] ширина поля.точность, точность имеет смысл только для чисел float, если использовать точность для строк, то это будет макс выводимых символов, остальные обрезаются;
 * точность можно не задавать, в этом случае она как-то автоматически выберется, или если строка длинная, то она отобразится вся;
 * s - описатель типа, в данном случае - строка.
 * Полный список типов:
 * b - аргумент трактуется как целое и выводится в виде двоичного числа.
 * c - аргумент трактуется как целое и выводится в виде символа с соответствующим кодом ASCII.
 * d - аргумент трактуется как целое и выводится в виде десятичного числа со знаком.
 * e - аргумент трактуется как float и выводится в научной нотации (например 1.2e+2).
 * u - аргумент трактуется как целое и выводится в виде десятичного числа без знака.
 * f - аргумент трактуется как float и выводится в виде десятичного числа с плавающей точкой.
 * o - аргумент трактуется как целое и выводится в виде восьмеричного числа.
 * s - аргумент трактуется как строка.
 * x - аргумент трактуется как целое и выводится в виде шестнадцатиричного числа (в нижнем регистре букв).
 * X - аргумент трактуется как целое и выводится в виде шестнадцатиричного числа (в верхнем регистре букв).
 * */

$filetypes = ['html', 'css', 'php', 'js', 'jq'];
foreach ($filetypes as $value) {
    printf('%\' 10s'.PHP_EOL, $value);
}