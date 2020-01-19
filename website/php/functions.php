<?php

//function MaxGetal($getal1,$getal2){
//    if($getal1 > $getal2){
//        return $getal1;
//    }
//    elseif($getal1 < $getal2) {
//        return$getal2;
//    }
//    else{
//        echo"$getal1 en $getal2";
//    }
//}
//echo MaxGetal(2000,2000);
//echo"<br>";
//
//$nr = 0;
//    function printtafel($nr){
//        for($keer=1;$keer <= 10;$keer++){
//            $som = $keer* $nr;
//            echo"$keer x $nr = $som <br>";
//        }
//    echo"<br>";
//    }
//
//for($i=0; $i <= $nr; $i++){
//echo"de tafel is $i <br>";
//printtafel($i)."<br>";
//}
function animals($chickens, $cows, $pigs) {
	$som = $chickens * 2 + $cows * 4 + $pigs * 4;
	return $som;
}
echo animals(1,1,1)