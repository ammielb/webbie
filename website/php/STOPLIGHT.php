<html>
<a class = "Home" href = "http://localhost/indez/">HOME</a>
<form action="STOPLIGHT.php" method="post">
    <input type="radio" name="kleurcode" id="kleurcode" value="groen">GROEN <br>
    <input type="radio" name="kleurcode" id="kleurcode" value="oranje">ORANJE<br>
    <input type="radio" name="kleurcode" id="kleurcode" value="rood">ROOD<br>
    <input type="radio" name="kleurcode" id="kleurcode" value="paars">PAARS<br><br>  
    <input class="button" type="submit"></button>
</form>
<body>
<?php
//stop licht
//print go , rem , stop bij kleurcode groen, oranje en restore_error_handler
$kleurcode= $_POST["kleurcode"];

echo"<b>Kleurcode is:$kleurcode<br>";
if($kleurcode == "groen"){
    echo"<p>go</p>";
}
//elseif($kleurcode == "oranje"){
  //  echo"<div>rem</div>";
//}
elseif($kleurcode == "rood"){
    echo"<h1>stop</h1>";
}
elseif($kleurcode == "oranje"){
    echo"<div>rem</div>";
}
else{
    echo"<i>dit is geen geldige kleur</b></i>";
}


?>


<center>
<style type="text/css">
h1{
    color:red;
    margin:0px;
    
}
p{
    color:green;
    margin:0px;
    font-size:35;    
}
div{
    color:orange;
    font-size:35;
    margin:0px;
}
body{
    background-color:purple;
}
.submit{
    
}
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</center>
</body>
</html>
