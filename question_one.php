<?php
$a=array(1,2,3,6,7);
$b=range(min($a),max($a));
echo "<b>Missing numbers are: </b><br>";
print_r(array_diff($b,$a));

?>