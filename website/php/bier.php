<html>

<?php
include("functies2.php");
//main
fe
$bier_ass = array("Grols" => 10, "Hein" => 5, "Amstel" => 4, "Jup"=> 7);
$adres_ass = array("voornaam" => "pietje", "achternaam"=>"post");
foreach($bier_ass as $merk => $cijfer){
echo"De merk:" . $merk . "<br>" ."De cijfer:". $cijfer ."<br>";
echo"<br>";

}
foreach($adres_ass as $naamdeel => $naam ){
    echo $naamdeel .":". $naam;
    echo"<br>";
}
?>

</html>