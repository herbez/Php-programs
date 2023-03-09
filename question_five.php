<?php
$arr = array(1,2,3,4,5,6,7,8,9,10);
$sum_even=0;
$sum_odd=0;
$prod_even=1;
$prod_odd=1;
echo"<b>Numbers in array: </b>";
for($i=0;$i<=9;$i++){
    echo $arr[$i];
    if($arr[$i]%2==0) {
        $sum_even = $sum_even+$arr[$i];
        $prod_even = $prod_even*$arr[$i];    
    }else{
        $sum_odd = $sum_odd+$arr[$i];
        $prod_odd = $prod_odd*$arr[$i];    
    }    
}
echo "<br><b> Sum of Even numbers = </b>".$sum_even."<br>";
echo "<b>Product of Even numbers = </b>".$prod_even."<br>";
echo "<b>Sum of Odd numbers = </b>".$sum_odd."<br>";
echo "<b>Product of Odd numbers = </b>".$prod_odd."<br>";

?>