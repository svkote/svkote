

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php-Learn</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h2>Вывод таблицы с помощью цикла while</h2>
<?php
$i = 1;
echo "<table>";
while ($i <= 10) {
    echo "<tr>";
    $n = 1;
    while ($n <= 4) {
        echo "<td> row $i | col $n </td>";
        $n++;
    }
    echo "</tr>";
    $i++;
}
echo "</table>";
?>

</body>
</html>