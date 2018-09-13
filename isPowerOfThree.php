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
<h2>Числа от 1 до 1000, которые являются натуральной степенью тройки</h2>


<?php
function isPowerOfThree(Int $num)
{
    $current = 1;
    while ($current <= $num) {
        if ($current === $num) {
            echo "$num <br>";
            return true;
        }
        $current *= 3;
    }
    return false;
}


for ($i=0; $i <= 1000 ; $i++) { 
    isPowerOfThree($i);
}

?>

</body>
</html>