<?php require_once 'header.php';?>
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

<?php require_once 'footer.php';?>