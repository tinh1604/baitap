<?php
function show($n){
    if($n < 0){
        echo'Không thể hiện thị các kí tự * với số âm';
    } else{
        for ($i=1; $i<=$n; $i++){
            for($j=1; $j<=$i; $j++){
                echo'* ';
            }
            echo'<br/>';
        }

    }
    return ;
}
echo 'n = 2 <br/>';
$n1 = show(2); echo "$n1 <br/> <br/>";
echo 'n = 5 <br/>';
$n2 = show(5); echo "$n2 <br/> <br/>";

?>