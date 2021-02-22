<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2021
 * Time: 14:14
 */

//Вывести Людей которые проживают в городе "Днепр"
//Удалить у нескольких людей номера телефонов и выводим тех у кого есть в Днепре телефонов в формате: Имя Фамилия - номер телефона.
$srt = file_get_contents('http://sky-wings/trainee/group28/users.json');
$arr = json_decode($srt, true);
//var_dump($arr);

foreach ($arr as $value) {
//    var_dump($value);
    if ($value['address']['city'] == "Днепр") {
        echo $value['firstName'] . ' ' . $value['lastName'] . '<br>';
    }
}

//Делаем массив для корзины магазина вида:
//Для этого массива делаем несколкьо задач для пересчета суммы, с учетом скидочной системы:
//1. Если общее  кол-во товаров больше 10 то даем скидку 10%
//2. Если сумма больше 2000 даем скидку 7%


$sum = 700;
$items = [
    [
        'id' => 34,
        'quantity' => 2,
        'price' => 200
    ],
    [
        'id' => 2,
        'quantity' => 5,
        'price' => 100
    ]
];

