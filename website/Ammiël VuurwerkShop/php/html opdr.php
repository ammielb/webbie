<?php
$tijd = 20;;
//date('H');

echo"$tijd<br>";
if($tijd >6 && $tijd<=12){
    echo"het is ochtend";
    echo"<br>";
}elseif($tijd >12&& $tijd <=18 ){
    echo"het is middag";
    echo"<br>";
}elseif($tijd > 18 && $tijd <= 24){
    echo"het is avond";
    echo"<br>";
}else{
    echo"het is nacht";
    echo"<br>";
}
switch($tijd){
    case $tijd > 0 && $tijd <= 6 : echo "nacht"; break;
    case $tijd > 6 && $tijd <= 12 : echo "ochtend"; break;
    case $tijd > 12 && $tijd <= 18 : echo 'middag'; break;
    case $tijd > 18 && $tijd <= 23 : echo "avond"; break;
}

?>