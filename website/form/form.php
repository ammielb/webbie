<html>
    <link rel=stylesheet    href="form.css">
<?php
// variabele met waarde uit het veld halen en bij geen waarde op null zetten.

$voornaam= $_POST["naam"];
    echo"<b>Voornaam:</b><br> $voornaam<br><br>";

$anaam= $_POST["Anaam"];
    echo"<b>achternaam:</b><br> $anaam<br><br>";

$Email= $_POST["email"];
    echo"<b>E-Mail:</b><br> $Email<br><br>";

$geslacht= $_POST["geslacht"];
    echo"<b>Geslacht:</b><br> $geslacht<br><br>";

$opmerkingen = $_POST['opmerkingen'];
    echo"<b>Uw opmerking:<br></b> $opmerkingen<br><br>";

$age = $_POST['age'];
    echo"<b>Uw leeftijd: <br></b> $age<br><br>";

$cijfer= $_POST["rating"];
    echo"<b>Uw cijfer:</b><br> $cijfer<br><br>";
 
$gids = $_POST['gids'];

    if(empty($gids)) 
    {
      echo("Geen gidsen geselecteerd!");
    } 
    else
    {
      // aantal geselecteerde checkboxes tellen.
      $aantal = count($gids);
  
      echo("Je hebt $aantal gids(en) geselecteerd, namelijk: ");
      
      // for-loop aanmaken voor alle gidsen
      for($i=0; $i < $aantal; $i++)
      {
        echo("<b>$gids[$i]</b>" . " ");
      }
    } 
   
    ?>

    </html>