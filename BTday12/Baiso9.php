
<?php
function tinh_S($n){
    if($n<0){
        echo"n = $n. Không cho phép tính toán với số âm <br/>";
    }
    elseif ($n == 0){
        echo'n = 0. Chỉ cho phép tính toán với số dương <br/>';
    }
    else{
        $y = 0;
        echo "n = $n"; echo '<br/>';
        echo 'S('.$n.') = ';

        for ($i = 1; $i <$n; $i++){
            echo $n.'*'.(2*$i).' + ';
            $y += $n*2*$i;
        }
        echo $n.'*'.(2*$n);
       return ($y + $n*2*$n);
    }

}
$n1 = tinh_S(-3);echo'<br/>';
$n2 = tinh_S(0);echo'<br/>';
$n3 = tinh_S(4);echo " = $n3 <br/><br/>";
$n4 = tinh_S(10);echo " = $n4 <br/><br/>";
$n5 = tinh_S(20);echo " = $n5 <br/><br/>";
?>
