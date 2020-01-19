<html>
    <body>
        <a class = "Home" href = "http://localhost/indez/">HOME</a>
<?php
echo"";
//print tien tafels 
for($tafel = 1; $tafel <= 10; $tafel = $tafel +1){
    echo"<br>De tafel van $tafel";
    for($start = 1;$start <= 10;$start= $start + 1){
        //herhaalcom
            $uitkomst =  $start * $tafel;
            //print bold tuseen 400 en 300
        if($uitkomst >300 && $uitkomst < 400){
            echo" <b>$start x $tafel = $uitkomst</b><br>";
        }
        else{
            echo" <h5>$start x $tafel = $uitkomst<br></h5>";
        }
    }
}


//1text

?>
</body>
<style>
body{
    background-color:#4b5f69;
    border:solid;
    border-width:5px;
    margin:0.5px;
}
b{
    font-size:15px;
    font-family:arial;
    color:#141313;
}
h5{
    font-size:15px;
    color:#c7c11c;
    margin:0px;
    font-family:arial;
}

    </style> 
</html>