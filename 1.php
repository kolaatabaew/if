<?php
$year = (int)readline("Введите год: ");

if (($year % 4 === 0 && $year % 100 != 0) || ($year % 400 === 0)) {
    echo "Високосный";
} else {
    echo "Не високосный";
}
