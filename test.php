<?php
$d = date("D");
$month = date ("MONTH");
$Y  = date  ("Y");
echo "Today is: $d, $month, $Y";
if ($d == "Fri") {
    echo "Have a nice weekend!";
}
?>
