<?php

require_once 'header.php';
?>
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

<?php require_once 'footer.php';?>