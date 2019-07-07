<?php
function chuvi($d){
echo "Đường kính d = $d.  ";
    if ($d < 0) {
        echo "Không cho phép tính toán với số âm ";
    }

    else {
        return $d*3.14;
    }
}
function dientich($d){
    echo "Đường kính d = $d.  ";
    if ($d < 0) {
        echo "Không cho phép tính toán với số âm <br/>";
    }

    else {
        return pow(($d/2),2)*3.14;
    }
}
$p1 = chuvi(-3); echo"$p1"; echo'<br/><br/>';
$p2 = chuvi(0); echo"Chu vi = $p2"; echo'<br/><br/>';
$p3 = chuvi(5); echo"Chu vi = $p3"; echo'<br/><br/>';
$p4 = chuvi(7.5); echo"Chu vi = $p4"; echo'<br/><br/>';
$p5 = chuvi(100); echo"Chu vi = $p5"; echo'<br/><br/>';
$s1 = dientich(-3); echo"$s1"; echo'<br/>';
$s2 = dientich(0); echo"Diện tích = $s2"; echo'<br/><br/>';
$s3 = dientich(5); echo"Diện tích = $s3"; echo'<br/><br/>';
$s4 = dientich(7.5); echo"Diện tích = $s4"; echo'<br/><br/>';
$s5 = dientich(100); echo"Diện tích = $s5"; echo'<br/><br/>';
?>