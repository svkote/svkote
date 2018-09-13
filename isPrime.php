<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-Learn</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<a href="/svkote/">Назад</a>
<h2>Список простых чисел от 1 до 200</h2>
<p>Просто́е число́ (др.-греч. πρώτος ἀριθμός) —
    натуральное (целое положительное) число, 
    имеющее ровно два различных натуральных делителя — 
    единицу и самого себя. 
    Другими словами, число x является простым, 
    если оно больше 1 и при этом делится без остатка 
    только на 1 и на x.</p> <br>

<?php

function isPrime($n)
{
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            return false;
            break;
        }
    }
    echo "$n <br>";
    return true;
} 



for ($i=0; $i <= 200 ; $i++) { 
    isPrime($i);
}

?>

</body>
</html>