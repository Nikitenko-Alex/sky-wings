<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.08.2020
 * Time: 12:29
 */
include 'config.php';


function maxi($a, $b)
{
    if ($a > $b) {
        return $a;
    }

    return $b;

}

?>
<html>
<head></head>

<body>
<?php

//$sumQua = [];
//foreach ($cartProduct as &$key) {
////    var_dump($cartProduct);
//    $sumQua['price'] = $key['price'] * $key['quantity'];
//    foreach ($sumQua as $value){
//    echo array_sum($value). '<br>';
//
//    }
////    var_dump($sumQua);
//}
//var_dump($sumQua);
//$sum = array_sum(array_column($sumQua, 'price'));
//echo $sum;
//var_dump($sumQua);

//$a = rand(1,100);
//$b = rand(1,100);
//var_dump($a,$b);
//echo maxi($a,$b);
?>
<?php

?>
<div style="border-radius: 40px;background: orange;width: 10%;margin: 20px;padding: 20px;text-align: center;">
    <form method="POST" action="viewCart.php">
        <h2 style="text-align: center">Посчитать электроэнергию</h2>
        <p>Предыдущие показание: <input name="lost" type="text"></p>
        <p>Новые показания: <input name="new" type="text"></p>
        <p><input type='submit' value='Отправить'></p>
    </form>
    <?php
    echo sumkW($_POST['lost'], $_POST['new']);
    ?>
</div>
<hr>
<p></p>
<hr>
<h2>Форма заказа</h2>
<form action="actionForm.php" method="post">
    <table style="border: 0px;">
        <tr style="background: #cccccc;">
            <td style="width: 150px; text-align: center;">Товар</td>
            <td style="width: 15px; text-align: center;">Количество</td>
        </tr>
        <tr>
            <td>Шины</td>
            <td><input type="text" name="tireqty" size="3" maxlength="3"/></td>
        </tr>
        <tr>
            <td>Масло</td>
            <td><input type="text" name="oilqty" size="3" maxlength="3"/></td>
        </tr>
        <tr>
            <td>Свечи зажигания</td>
            <td><input type="text" name="sparkqty" size="3" maxlength="3"/></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><input type="submit" value="Отправить заказ"/></td>
        </tr>
    </table>
</form>

</body>
<footer></footer>
</html>