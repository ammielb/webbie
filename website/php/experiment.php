<?php
$fizzbuzz = 0;
$fizz = 0;
$buzz = 0;
for($num=1;$num <= 30; $num++){
    if($num % 3  == 0 && $num % 5 == 0){
        echo"fizz buzz <br>";
        $fizzbuzz++;
    }
    elseif($num % 3 == 0){
        echo"fizz<br>";
        $fizz++;
    }
    elseif($num % 5 == 0){
       echo"buzz<br>";
       $buzz= $buzz+1;
    }
    else{
        echo"$num<br>";
    }
}
echo"<br>";
echo"$fizzbuzz<br>";
echo"$fizz<br>";
echo"$buzz<br>";
?>