<html>

<link rel="stylesheet" type="text/css" href="callender.css">


    <div>
<?php

echo"<div class='jaar'>";
//print 12 callenders voor alle 12 de maanden
for($month = 1; $month <= 12; $month++){
    $tel=1;
    echo"<div>";
    //------------------------------begin van de callender uitvogelen --------------------
//admin stuff

$year = date("Y");
$date = mktime(0,0,0,$month,1,$year);
//verzorgt de hoeveelheid dagen de forloop moet nemen
$monthDays = date("t",mktime(0,0,0,$month,1,$year));
$monthTH = date("F",mktime(0,0,0,$month,1,$year));


echo"<html><table>";


echo"<tr><th colspan='7'>$monthTH $year</th></tr>";
echo"<tr><th>Mon</th><th>Tue</th><th>Wens</th><th>Thur</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>";

//forloop voor de kallender
for($day = 1; $day <= $monthDays; $day++){

// verzorg voor de week nummer die bij de $day hoort

    $week = date("N",mktime(0,0,0,$month,$day,$year));

// mijn vierjaardag er is kleur het rood
    $BDday = 2;
    $BDmonth = 10;
        if($month == $BDmonth && $day == $BDday){
            $b = 'bday';
        }else{
            $b = null;
        }

// de breaks voor het begin van de kallender
    if($day == 1){

        // ik doe - 2 om hem op de goede plaats te laten starten dat is het zelfde als bij -1(de for loop)
        //de overflow nummer uitreken en ik doe bij $overflow -- om dat hij dan 1 maand terug gaat
        $overflow  = $month;
        $overflow--;
        $mo = date("t",mktime(0,0,0,$overflow,$day,$year));
        $overflowNr= $mo - ($week-2);

        for($a = 1; $a < $week  ; $a++){
            
            switch($a){
                case 1:echo"<td class='werkvaag' $b>$overflowNr</td>";
                $overflowNr++;
            break;
                case 2:echo"<td class='werkvaag'  $b>$overflowNr</td>";
                $overflowNr++;
            break;
                case 3:echo"<td class='werkvaag'  $b>$overflowNr</td>";
                $overflowNr++;
            break;
                case 4:echo"<td class='werkvaag'  $b>$overflowNr</td>";
                $overflowNr++;
            break;
                case 5:echo"<td class='werkvaag'  $b>$overflowNr</td>";
                $overflowNr++;
            break;
                case 6:echo"<td class='weekvaag' $b>$overflowNr</td>";
                $overflowNr++;
            break;
                case 7:echo"<td class='weekvaag' $b>$overflowNr</td></tr>";
            break;
            }

        }
    }

//het bepallen van de positie van de dag nummer
switch($week){
    case 1:echo"<td class='werkdag' id='$b'>$day</td>";
break;
    case 2:echo"<td class='werkdag' id='$b'>$day</td>";
break;
    case 3:echo"<td class='werkdag' id='$b'>$day</td>";
break;
    case 4:echo"<td class='werkdag' id='$b'>$day</td>";
break;
    case 5:echo"<td class='werkdag' id='$b'>$day</td>";
break;
    case 6:echo"<td class='weekend' id='$b'>$day</td>";
break;
    case 7:echo"<td class='weekend' id='$b'>$day</td></tr>";
    if($day != 31){
    $tel++;
    }
break;
}

    //de break voor aan het einde van de callender
    if($day == $monthDays){
        
        $i = $week;
        for($a = 1; $a <= 7 - $week; $a++){


            switch($i){
                case 1:echo"<td class='werkvaag' $b>$a</td>";
                $i++;
            break;
                case 2:echo"<td class='werkvaag' $b>$a</td>";
                $i++;
            break;
                case 3:echo"<td class='werkvaag' $b>$a</td>";
                $i++;
            break;
                case 4:echo"<td class='werkvaag' $b>$a</td>";
                $i++;
            break;
                case 5:echo"<td class='weekvaag' $b>$a</td>";
                $i++;
            break;
                case 6:echo"<td class='weekvaag' $b>$a</td>";
                $i++;
            break;
            }
        }
    }
   //----------------------------------------------------------
}

echo"</table>";
echo"</div>";

}

?>

</form>
</div>
</html>