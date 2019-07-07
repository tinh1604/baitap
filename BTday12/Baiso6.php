<?php
function tim_max($a, $b, $c, $d){
    echo"Max của 4 giá trị: $a, $b, $c, $d = ";
    return max($a, $b, $c, $d);
}
function tim_min($a, $b, $c, $d){
    echo"Min của 4 giá trị: $a, $b, $c, $d = ";
    return min($a, $b, $c, $d);
}
$max1 = tim_max(0,0,2,6); echo"$max1 <br/><br/>";
$max2 = tim_max(2,4,-6,-10); echo"$max2 <br/><br/>";
$max3 = tim_max(0,5,5,2); echo"$max3 <br/><br/>";
$max4 = tim_max(5,0,5,4); echo"$max4 <br/><br/>";

$min1 = tim_min(0,0,2,6); echo"$min1 <br/><br/>";
$min2 = tim_min(2,4,-6,-10); echo"$min2 <br/><br/>";
$min3 = tim_min(0,5,5,2); echo"$min3 <br/><br/>";
$min4 = tim_min(5,0,5,4); echo"$min4 <br/><br/>";
?>