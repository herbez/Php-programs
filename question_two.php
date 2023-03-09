<?php
$num1 = 5;
$num2 = 7;
echo"<b>Before being swapped </b><br>";
echo "Number 1 : ".$num1."<br>";
echo "Number 2 : ".$num2."<br>";
$temp_num = $num1;
$num1=$num2;
$num2=$temp_num;
echo"<b>After being swapped </b><br>";
echo "Number 1 : ".$num1."<br>";
echo "Number 2 : ".$num2."<br>";
?> 