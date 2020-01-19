
<html>

<?php
//connect functie
function connect(){
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname="adres";
    
    
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password,);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

    // functie om je tabel te printen
function GetData(){

$conn = connect();
$sql = "SELECT * FROM adressen";
$result = $conn -> query ($sql);
return $result -> fetchAll(PDO::FETCH_ASSOC);
}

function ToonTable($data){

//connect en sql 


//table zorgen
echo"<table border='4'>";
echo"<tr><th>". "Voornaam "  ."</th><th>". "Achternaam "  ."</th><th>". "Woonplaats "  ."</th><th>". "Straatnaam "  ."</th><th>". "Huisnummer "  ."</th></tr>";
//print de tabel
foreach ($data as $row) {
echo"<tr>";
echo "<td>".$row['Voornaam']."</td>" ;
echo"<td>".$row['achternaam']."</td>" ;
echo"<td>".$row['woonplaats']."</td>";
echo"<td>". $row['straatnaam']."</td>";
echo "<td>".$row['huisnummer']."</td>";
echo"</tr>";

    }
    echo"<table>";
}
//echo"</table>";




?>

</html>

