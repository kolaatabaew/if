<?php

$income = (int)readline("Введите сумму дохода: ");

if ($income <= 20000) {

    $income = $income-($income * 0.10);
} 
elseif ($income <= 50000) {
    $income = $income-($income * 0.15+2000);
} 
else {

    $income = $income-($income * 0.2+6500);
}

echo "Ваш доход: " .$income;
