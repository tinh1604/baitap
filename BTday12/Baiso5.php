<?php
function ptb2($a, $b, $c){
    if($b<0){
        if ($c<0) {
            echo"Giải phương trình $a".'x<sup>2</sup>'.$b.'x '  .$c .'= 0 <br/>';
        }
        else{
            echo"Giải phương trình $a".'x<sup>2</sup>'.$b.'x + '  .$c .'= 0 <br/>';
        }

    }
    else{
        if ($c<0) {
            echo"Giải phương trình $a".'x<sup>2</sup> +'.$b.'x '.$c .' = 0 <br/>';
        }
        else{
            echo"Giải phương trình $a".'x<sup>2</sup> +'.$b.'x + ' .$c.' = 0 <br/>';
        }
    }
    if ($a == 0){
        if($b == 0 & $c !=0){
            echo 'Phương trình vô nghiệm <br/> <br/>';

        }
        else if ($b == 0 & $c ==0){
            echo 'Phương trình có nghiệm đúng với mọi x <br/> <br/>';

        }
        else {
            $x = -$c/$b;
            echo "Phương trình có nghiệm duy nhất x = $x <br/> <br/>";
            ;
        }
    } else {
        $delta = pow($b,2)-4*$a*$c;
        if($delta < 0){
            echo 'Phương trình vô nghiệm <br/> <br/>';

        } elseif ($delta == 0){
            $x = -$b/2*$a;
            echo "Phương trình có nghiệm kép x<sub>1</sub> = x<sub>2</sub> =  $x<br/> <br/>";

        }else{
            $x1 = (-$b+sqrt($delta))/(2*$a);
            $x2 = (-$b-sqrt($delta))/(2*$a);
            echo "Phương trình có 2 nghiệm x<sub>1</sub> =   $x1;"." x<sub>2</sub> =   $x2<br/><br/>";

        }

    }
return;
}
$n1 = ptb2(0, 0, 2); echo $n1;
$n2 = ptb2(2, 4, -6); echo $n2;
$n3 = ptb2(0, 5, 5); echo $n3;
$n4 = ptb2(5, 0, 5); echo $n4;

?>