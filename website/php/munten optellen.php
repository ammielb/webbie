<html>
    oi
<?php
$bedrag="4.20";
$aantal_euros=floor($bedrag);
$aantal_20=floor(($bedrag-$aantal_euros)/0.2);
$aantal_5=floor(($bedrag-$aantal_euros-$aantal_20*0.2)/0.5);
echo"<b><i> Het bedrag $bedrag bestaat uit de volgende munten </b></i><br>";
echo"Aantal euros: $aantal_euros";
echo"<br>";
echo"Aantal 20 cent: $aantal_20";
echo"<br>";
echo"aantal 5 cent: $aantal_5"
?>
</html>