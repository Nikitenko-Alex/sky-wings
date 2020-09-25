<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.09.2020
 * Time: 10:19
 */

#Monitor


class Monitor
{
    private $color;
    private $manufacturer;
    private $diagonal;

    public function __construct($cvet, $brend, $ekran)
    {
        $this->manufacturer = $brend;
        $this->color = $cvet;
        $this->diagonal = $ekran;
    }

    public function on()
    {
        //todo
    }

    public function off()
    {
        //todo
    }
}

$myMonitor = new Monitor('black', 'Apple', '22');
var_dump($myMonitor);
$myMonitor->on();
$myMonitor->off();


class Window
{
    public $color;
    public $sizeWidth;
    public $sizeHeight;
    private $monufactures;

    public function __construct($color, $sizeWidth, $sizeHeight, $monufactures="steko")
    {
        $this->color = $color;
        $this->sizeHeight = $sizeHeight;
        $this->sizeWidth = $sizeWidth;
    }
    public function Open($test)
    {
        //todo
    }
    public function Close()
    {
        //todo
    }
}
$newWindow = new Window('white', '290', '320');


$newWindow->Open('test');