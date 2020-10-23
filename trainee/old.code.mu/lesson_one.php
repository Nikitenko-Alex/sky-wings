<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2020
 * Time: 14:59
 */


/* lesson one
Задача. Создайте переменную $var и присвойте ей значение 'hello'.
Обращаясь к отдельным символам этой строки выведите на экран символ 'h', символ 'e', символ 'o'.
*/

$var = 'hello';
echo $var[0] . '<br>';
echo $var[1] . '<br>';
echo $var[4] . '<br>';


/*
Задача. Напишите скрипт, который считает количество секунд в часе.
*/

$second = 60 * 60;
echo $second;

/* Задача. Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --.
Количество строк кода при этом не должно измениться. Код для переделки:
$var = 1;
	$var = $var + 12;
	$var = $var - 14;
	$var = $var * 5;
	$var = $var / 7;
	$var = $var + 1;
	$var = $var - 1;
	echo $var;
*/

echo "<br>";
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo $var;

/* Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран. */

$a = 3;
echo $a . "<br>";

/* Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления). */

$a = 10;
$b = 2;
echo $a + $b . "<br>";

/* Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.*/

$c = 15;
$d = 2;
$result = $c + $d;
echo $result . '<br>';

/* lesson seven
 Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.
*/

$a = 10;
$b = 2;
$c = 5;
echo $a + $b + $c . '<br>';

/* lesson eight
Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c.
Затем создайте переменную $d, присвойте ей значение 7.
Сложите переменные $c и $d, а результат запишите в переменную $result.
Выведите на экран значение переменной $result.
*/

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result . '<br>';

/* lesson nine
Создайте переменную $text и присвойте ей значение 'Привет, Мир!'.
Выведите значение этой переменной на экран.
*/

$text = 'Привет, Мир!';
echo $text . '<br>';


/* lesson ten
Создайте переменные $text1='Привет, ' и $text2='Мир!'.
С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.
*/
$text1 = 'Привет,';
$text2 = 'Мир!';
echo $text1 . ' ' . $text2 . '<br>';

/*
Создайте переменную $name и присвойте ей ваше имя.
Выведите на экран фразу 'Привет, %Имя%!'.
Вместо %Имя% должно стоять ваше имя.
*/

$name = "Alex";
echo "Привет, $name" . '<br>';

/*
Создайте переменную $age и присвойте ей ваш возраст.
Выведите на экран 'Мне %Возраст% лет!'.
*/

$age = 34;
echo "Мне $age." . '<br>';

/*
Создайте переменную $text и присвойте ей значение 'abcde'.
Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
*/

$text = "abcde";
echo $text[0] . '<br>';
echo $text[2] . '<br>';
echo $text[4] . '<br>';

/*
Дана произвольная строка, например, 'abcde'.
Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
*/

$text = "abcde";
$text[0] = "!";
//echo $text;

/*
 * Создайте переменную $num и присвойте ей значение '12345'.
 * Найдите сумму цифр этого числа.
*/


$num = "12345";
$sum = 0;
for ($i = 0; $i < strlen($num); $i++) {
    $sum += $num[$i];
}
echo $sum . '<br>';


/*
 * Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
*/

$second = 60 * 60;
echo "Секунд в час $second" . '<br>';
echo "Секунд в сутках" . ' ' . $second * 24 . '<br>';
echo "Секунд в месяце" . ' ' . $second * 24 * 30 . '<br>';


/*
 * Создайте три переменные - час, минута, секунда.
 * С их помощью выведите текущее время в формате 'час:минута:секунда'.
 */

$hour = 16;
$minute = 41;
$second = 22;

echo "$hour:$minute:$second" . '<br>';

/*
 * Создайте переменную, присвойте ей число.
 *  Возведите это число в квадрат (это значит нужно умножить его само на себя).
 * Выведите его на экран.
 */

$num = "2";
$num *= $num;
echo $num . '<br>';

/*
 * Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=.
 * Количество строк кода при этом не должно измениться.
    $var = 47;
    $var = $var + 7;
    $var = $var - 18;
    $var = $var * 10;
    $var = $var / 20;
    echo $var;
 */

$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var . '<br>';

/*
 * Переделайте этот код так, чтобы в нем использовалась операция .=.
 * Количество строк кода при этом не должно измениться.
         $text = 'Я';
         $text = $text.' хочу';
         $text = $text.' знать';
         $text = $text.' PHP!';
         echo $text;
*/


$text = 'Я';
$text = $text . ' хочу';
$text = $text . ' знать';
$text = $text . ' PHP!';
echo $text . '<br>';


/*----------------------------------------------------------------------*/


/*
 * Переделайте этот код так, чтобы в нем использовались операции ++ и --.
 * Количество строк кода при этом не должно измениться.
        $var = 10;
        $var = $var + 1;
        $var = $var + 1;
        $var = $var - 1;
        echo $var;
 */

$var = 10;
$var = ++$var;
$var = ++$var;
$var = --$var;
echo $var . '<br>';


/*
 * Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=.
 * Количество строк кода при этом не должно измениться.
        $var = 10;
        $var = $var + 7;
        $var = $var + 1;
        $var = $var - 1;
        $var = $var + 12;
        $var = $var * 7;
        $var = $var - 15;
        echo $var;
 */

$var = 10;
$var += 7;
$var = ++$var;
$var = --$var;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;