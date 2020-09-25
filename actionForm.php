<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.08.2020
 * Time: 14:27
 */
include 'config.php';
?>

<head>
    <title>Автозапчасти от Вовки - Результаты 3aKa3a</title>
</head>
<body>
<h1>Автозапчасти от Вовки</h1>
<h2>Результаты заказа</h2>
<h3>Спасибо. Ваш заказ обработан!</h3>
<h3>Вы заказали:</h3>
<?php

echo "Шин: $tireqty". " шт." . "<br>" . "Масло: $oilqty лт." . "<br>" . "Свечей зажиганий: $sparkqty шт." . '<br>';
echo "Заказ был произведён в: $dataTime";
?>

</body>