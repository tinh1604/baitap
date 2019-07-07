<?php
function giaithua($n)
{

    if ($n < 0) {
        echo "Không cho phép tính giai thừa trên số âm $n <br/><br/>";
    }
    elseif ($n == 0) {
        echo $n . '! = 1 <br/><br/>';
    }
    else {
        $m = 1;
        echo"$n! = ";
        for ($i = 1; $i < $n; $i++) {
            $m *= $i;
            echo"$i".' x ';

        }
        echo "$n";
        $m = $m*$n;
       return $m ;
    }
}
$n1 = giaithua(-5);
$n2 = giaithua(0);
$n3 = giaithua(5); echo " = $n3 <br/><br/>";
$n4 = giaithua(8); echo " = $n4 <br/><br/>";
?>