<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.09.2020
 * Time: 17:44
 */


class Car
{
    //Свойства или атребуты Данные
    public $color;
    public $year;
    public $manufacturer;

    //Методы
    public function __construct($color, $year, $izgotovitel)
    {
        $this->color = $color;
        $this->year = $year;
        $this->manufacturer = $izgotovitel;
    }

    public function startEngine()
    {

    }

    public function go()
    {

    }

    public function endEngine()
    {

    }
}

//Обект. Новый экземпляр машины.
$myCar = new Car('red', '2020', 'Tesla'); // Новая машина
$myCar->startEngine();//явный вызов
$myCar->go();

$myCar2 = new Car('blu', 2019,"Model S"); // Снова новая машина
$myCar2->startEngine();// Вызов новой машины
$myCar2->go();

