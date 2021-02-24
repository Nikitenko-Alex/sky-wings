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
echo "<hr>";

//Function example.
function makecoffee($type = "<b>'Напиток не выбран'</b>", $sugor = "<b>0</b>")
{
//    var_dump(func_get_args ( ));
    return "Готовим чашку <b>$type</b>" . " и $sugor ложек сахара" . "<br>";
}

echo makecoffee();
echo makecoffee(null);
echo makecoffee("Эспрессо");
