<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.08.2020
 * Time: 14:24
 */


$tireqty = $_POST['tireqty'];
$tireqty = htmlspecialchars($tireqty);

$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$dataTime = date("d-m-Y");

$totalqty = 0;
$totalamoint= $tireqty;
