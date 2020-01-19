<?php

//maximale uitrekenen
function MaxGetal($score){
$scorecount = count($score);
$max = $score[0];
for($n=0; $n < $scorecount; $n++){
if ($max < $score[$n]){
    $max = $score[$n];
    }
}
return "$max";
}



//minimale cijfer berekennen
function MinGetal($score){
//initialisatie
    $scorecount = count($score);
    $min = $score[0];
//uitvoering
for($n=0; $n < $scorecount; $n++){
    if ($min > $score[$n]){
        $min = $score[$n];
        }
    }
    return"$min";
    }


//een tabel voor een scoren en biermerken
function Printtabel($merken,$cijfers){

    if(count($cijfers) != count($merken)){
           echo"ze zijn ongelijk";
       }
           else{
           echo"<table style=width:30%  border = 2>";
           echo"<th>merk</th><th>cijfer</th>";
               for($nr=0;$nr < count($cijfers) && $nr < count($merken); $nr++){
       echo"<tr>";
           echo"<td style = text-align:center>". $merken[$nr] ."</td>";
           echo"<td style = text-align:center>". $cijfers[$nr] . "</td>";
           
       echo"</tr>";
                }
           echo"</table>";
       }
   }
  //de som uitreken
   function SomScore($score){
       $som = 0;
           for($nr=0; $nr < count($score); $nr++){
               $som = $som + $score[$nr];
           }
         return $som;
}

   //de gemiddelde uitreken 
   function GemScore($score){
       $gem = 0;
       $gem =SomScore($score) / count($score);
       return $gem;
   }

?>