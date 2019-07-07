<?php
function ptb1($a, $b){
    if($b<0){
        echo"Giải phương trình $a"."x $b = 0 <br/>";

    }
    else{
        echo"Giải phương trình $a"."x + $b = 0 <br/>";

    }
    if($a == 0 & $b !=0){
        echo 'Phương trình vô nghiệm <br/> <br/>';

    }
    else if ($a == 0 & $b ==0){
        echo 'Phương trình có nghiệm đúng với mọi x <br/> <br/>';

    }
    else {
        return -$b/$a;
    }
}
$n1 = ptb1(0, 5);
$n2 = ptb1(2, -2); echo "Phương trình có nghiệm  x = $n2 <br/> <br/>";
$n3 = ptb1(0, 0);
$n4 = ptb1(3, 9); echo "Phương trình có nghiệm  x = $n4 <br/> <br/>";

?>