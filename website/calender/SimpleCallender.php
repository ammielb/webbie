<html>

<link rel="stylesheet" type="text/css" href="callender.css">


<?php


    //------------------------------begin van de callender--------------------
//admin stuff
$year = date("Y");
$month= date("m");

//verzorgt de hoeveelheid dagen de forloop moet nemen
$monthDays = date("t",mktime(0,0,0,$month,1,$year));

//------------------------------------------------
$monthTH = date("F",mktime(0,0,0,$month,1,$year));


echo"<html><table>";


echo"<tr><th colspan='7'>$monthTH $year</th></tr>";
echo"<tr><th>Mon</th><th>Tue</th><th>Wens</th><th>Thur</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>";


//forloop voor de kallender
for($day = 1; $day <= $monthDays; $day++){

//kijkt bij welke week dag die hoort(ofterwijl maandag dinsdag woensdag donderdag..)
    $week = date("N",mktime(0,0,0,$month,$day,$year));

// de breaks voor het begin van de kallender
    if($day == 1){
        for($a = 1; $a < $week  ; $a++){
            switch($a){
                case 1:echo"<td class='werkvaag' >&nbsp</td>";
               
            break;
                case 2:echo"<td class='werkvaag'  >&nbsp</td>";
               
            break;
                case 3:echo"<td class='werkvaag'  >&nbsp</td>";
              
            break;
                case 4:echo"<td class='werkvaag'>&nbsp</td>";
            break;
                case 5:echo"<td class='werkvaag'  >&nbsp</td>";
            break;
                case 6:echo"<td class='weekvaag' >&nbsp</td>";
            break;
                case 7:echo"<td class='weekvaag' >&nbsp</td></tr>";
            break;
            }


        }
    }

//het bepallen van de positie op de kallender
switch($week){
    case 1:echo"<td class='werkdag' >$day</td>";
break;
    case 2:echo"<td class='werkdag'>$day</td>";
break;
    case 3:echo"<td class='werkdag'>$day</td>";
break;
    case 4:echo"<td class='werkdag'>$day</td>";
break;
    case 5:echo"<td class='werkdag'>$day</td>";
break;
    case 6:echo"<td class='weekend'>$day</td>";
break;
    case 7:echo"<td class='weekend'>$day</td></tr>";
}
// de breaks voor na de maand
    if($day == $monthDays){
        
        
        for($a = 1; $a <= 7 - $week; $a++){


            switch($a){
                case 1:echo"<td class='werkvaag' >&nbsp</td>";
                
            break;
                case 2:echo"<td class='werkvaag' >&nbsp</td>";
                
            break;
                case 3:echo"<td class='werkvaag' >&nbsp</td>";
                
            break;
                case 4:echo"<td class='werkvaag' >&nbsp</td>";
                
            break;
                case 5:echo"<td class='weekvaag' >&nbsp</td>";
                
            break;
                case 6:echo"<td class='weekvaag' >&nbsp</td>";
            
            break;
            }
        }
    }
   //----------------------------------------------------------
}

echo"</table>";
echo"</div>";



?>

</form>
</div>
</html>