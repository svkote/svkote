

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
<h2>Вывод таблицы с помощью цикла while</h2>

<?php
$i = 1;
echo "<table>\n";
while ($i <= 20) {
    echo "\t<tr>\n";
    $n = 1;
    while ($n <= 4) {
        echo "\t\t<td> row $i | col $n </td>\n";
        $n++;
    }
    echo "\t</tr>\n";
    $i++;
}
echo "</table>";
?>

</body>
</html>