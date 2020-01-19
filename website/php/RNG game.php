<?php
$rand_1 =random_int(1,10);
if($rand_1 == 10){
    $rand_2 = random_int(11,20);
    if($rand_2== 20){
        $rand_3 = random_int(21,30);
        echo"$rand_3";
    }else{
        echo"$rand_2";
    }
}else{
    echo $rand_1;
}
echo date("l jS \of F Y h:i:s A");
?>