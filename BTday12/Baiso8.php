
<?php
function tinh_S($n){
    echo "n = $n <br/>";
    if($n<0){
        echo'Không cho phép tính toán với số âm <br/>';
    }
    else if ($n==0){
        echo'Chỉ cho tính toán với số dương <br/>';
    }
    else{
        echo 'S(n) = 1 ';
        $j = 0;
        for ($i = 2; $i <= $n; $i++){
            echo " + 1/$i";
            $j += 1/$i;
        }
        return (1 + $j);
    }

}
$n1 = tinh_S(-3);echo'<br/>';
$n2 = tinh_S(0);echo'<br/>';
$n3 = tinh_S(4);echo" = $n3 <br/><br/> ";
$n4 = tinh_S(10);echo" = $n4 <br/><br/> ";
$n5 = tinh_S(20);echo" = $n5 <br/><br/> ";
?>
