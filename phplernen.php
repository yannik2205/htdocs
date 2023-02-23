<?php
echo "Hallo Welt";

$str1 = "Hallo";
$str2 = "Welt";

$str = $str1. " " . $str2;
echo $str;
echo $str1. " " . $str2;

$str3 = "Hallo";
$str3 .= "Welt";
echo $str3;

$i = 0;
do {
    $i++;
    if ($i < 5) {
        echo "KLeiner 5!";
    }else if ($i == 5) {
        echo "Gleich 5!";
    }
}
while ( $i < 6)
?>