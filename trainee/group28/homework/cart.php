<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2021
 * Time: 13:26
 */

/*Делаем массив для корзины магазина вида:
sum=>700
items=>{
['id'=>34,'quantity'=>2,'price'=>200],
['id'=>2,'quantity'=>5,'price'=>100]
}
Для этого массива делаем несколкьо задач для пересчета суммы, с учетом скидочной системы:
1. Если общее  кол-во товаров больше 10 то даем скидку 10%
2. Если сумма больше 2000 даем скидку 7%
*/
$items =
    [
        ['id' => 34, 'quantity' => 1, 'price' => 200],
        ['id' => 41, 'quantity' => 1, 'price' => 0],
        ['id' => 31, 'quantity' => 1, 'price' => 0],
        ['id' => 12, 'quantity' => 0, 'price' => 0],
        ['id' => 23, 'quantity' => 0, 'price' => 0]
    ];
$quant = 0;
$summa = 0;
foreach ($items as $value) {
    $summa += $value["quantity"] * $value["price"];
    $quant += $value["quantity"];
}

echo 'Количество товара: ' . $quant . ' шт.<br>';
echo 'Сумма без скидок ' . $summa . '<br>';

if ($quant >= 10) {
    $interest = $summa / 100 * 10;
    $summ = $summa - $interest;
    echo "Сумма " . $summ . '<br>' . 'Ваша скидка составляет 10%' . '<br>';
} elseif ($summa >= 2000) {
    $interest = $summa / 100 * 7;
    $summ = $summa - $interest;
    echo 'Сумма ' . $summ . '<br>' . 'Ваша скидка составляет 7%' . '<br>';
} else {
    echo "Сумма " . $summa . '<br>' . 'Ваша скидка составляет 0' . '<br>';
};