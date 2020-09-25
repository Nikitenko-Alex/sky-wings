<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.08.2020
 * Time: 13:06
 */

function sumCart()
{
//todo
};
function coffee($type, $sugar)
{
    return "Готовим чашку $type. c  $sugar ложками сахара";
};

function sumkW($lost, $new)
{
    if (!empty($lost && $new)) {
        $kW = $new - $lost;
        if ($kW <= 100) {
            $result = 90;
        } else {
            $result = ($kW - 100) * 1.68 + 90;
        }
        return $kW . ' кВт' . "<br />" . "Сумма = " . " " . $result . " грн";

    } else {
        return "Введите показания";
    }
};