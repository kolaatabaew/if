<?php


$a = (int)readline("Введите первое число: ");
$b = (int)readline("Введите второе число: ");
$c = (int)readline("Введите третье число: ");


$max = $a;


if ($b > $max) {
    $max = $b;
}

if ($c > $max) {
    $max = $c;
}

echo "Наибольшее число: " . $max;