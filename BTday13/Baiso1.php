<?php

function myfunction ($arr){
    $sum = 0;
    $product = 1;
    $minus = 2*$arr[0];
    $share = pow($arr[0],2);

    foreach ($arr as $key => $value) {
        $sum += $value;
        $product *= $value;
        $minus -= $value;
        if($arr[$key] == 0){
            continue;
        }else{
            $share /= $value;
        }

    }
    return "Tổng các phần tử = $sum <br/> Tích các phần tử $product <br/> Hiệu các phần tử $minus <br/> Thương các phần tử $share";
}
$arr1 = [2, 5, 6, 9, 2, 5, 6, 12, 5];
echo '<pre>';
print_r($arr1);
echo myfunction ($arr1); echo'<br/>';


$arr2 = [2, 5, 0];
echo '<pre>';
print_r($arr2);
echo myfunction ($arr2); echo'<br/>';

$arr3 = [0, 5, -1];
echo '<pre>';
print_r($arr3);
echo myfunction ($arr3); echo'<br/>';

?>
