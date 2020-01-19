
<html>
<link href="../css/vuurw_css.css" rel="stylesheet">
<div class="container" align="center">
  <?php

function connect(){
  $servername = "localhost"; 
  $username = "root";
  $password = "";
  $db_name="vuurwerk";
  
  $conn = new PDO("mysql:host=$servername; dbname=$db_name;", $username, $password,);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $conn;

}
// haal alle data uit db
function getCat(){
  $conn = connect();
  $result = $conn -> query("SELECT DISTINCT`categorie` FROM vuurwerk  ");
$data = $result -> fetchAll(PDO::FETCH_ASSOC);

foreach($data as $row){
  echo '<a href="index.php?categorie=' . $row['categorie'] . '">' . $row['categorie'] . 'Vuurwerk</a>';
}

}
function GetData($cat){
  $conn = connect();
  if($cat != 'alle'){
    $sql = "SELECT * FROM vuurwerk WHERE `categorie` = '$cat'ORDER BY RAND()";
}else{
  $sql = "SELECT * FROM vuurwerk ORDER BY RAND()";
}
$result = $conn -> query($sql);
$row = $result -> fetchAll(PDO::FETCH_ASSOC);
return $row;
  }
  
/* product printen voor alle mogelijke cat vw*/
  function ToonProduct($cat){
   

$conn = connect();

$data = GetData($cat);?>
<html>
 <div class='container' align='center'>";
    </html>
    <?php
    foreach($data as $row){
             echo"<div class='product'><br><br>";
             echo"<img height=200 src='$row[img]'>";
             echo"<div class='info'>";
             echo $row['naam'] . "</img><br>";
             echo"artikel_ID:" . $row['art_id'] . "<br>";
             echo "€".$row['euro']."<br>";
             echo"</div>";
             echo"<button class='toevoegbutton'>Toevoegen</button>";
  
    
    echo"</div>";
    }
    echo"</div>";
}  

?>
</div>
</html>