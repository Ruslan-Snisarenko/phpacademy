<?php

mb_internal_encoding("UTF-8"); //принудительно указываем кодировку UTF-8 для  безпроблемного вывода русского текста в консоль

define("EU_VOLTAGE", 220);//константа напряжения в розетках в европе
define("US_VOLTAGE", 110);//константа напряжения в розетках в США

echo "------------------------------------------------------------" . PHP_EOL;
echo "Калькулятор потребляемой мощности электро прибора" . PHP_EOL;
echo "Для выхода из программы введите 'q'" . PHP_EOL;
echo "------------------------------------------------------------" . PHP_EOL;

do {
	$amperes = readline("Введите силу тока в амперах: "); // читаем cроку введенную пользователем
	$amperes = str_replace(',', '.', $amperes); // унификация разделительного знака, чтобы работало при вводе и точки и запятой в дробном числе
	if ($amperes == 'q' || $amperes == 'Q') { // реализуем выход по запросу пользователя
		die("Хорошего вам дня! До свидания!");
	}
	if (is_numeric($amperes) == FALSE || $amperes < 0) { // проверка на корректность введенных пользователем данных
		echo "Неправильное значение ампер! Введите целое число либо число с плавающей точкой!" . PHP_EOL;
	}
} while (is_numeric($amperes) == FALSE || $amperes < 0);

do {
	$region = readline("Выберите регион: введите 1 для EU или 2 для US: "); //читаем cроку введенную пользователем
	if ($region == 'q' || $region == 'Q') { // реализуем выход по запросу пользователя
		die("Хорошего вам дня! До свидания!");
	}
	if ($region != 1 && $region != 2) { // проверка на корректность введенных пользователем данных
		echo "Неправильно выбран регион, попробуйте еще раз!" . PHP_EOL;
	}
} while ($region != 1 && $region != 2);

if ($region == 1) {  // считаем по формуле Р = I х V
	$consumptionInWatts = $amperes * EU_VOLTAGE;
} elseif ($region == 2) {
	$consumptionInWatts = $amperes * US_VOLTAGE;
}

echo "Потребляемая мощность: $consumptionInWatts Ватт!" . PHP_EOL; // вывод результата
echo "------------------------------------------------------------" . PHP_EOL;


