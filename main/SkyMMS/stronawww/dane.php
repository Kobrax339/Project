
 <?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `Uzytkownik` WHERE `Login` = '". $_REQUEST['ksa']."' and `Haslo` = '". $_REQUEST['ksb']."' and `Uprawnienia` = '5'";

$result = $conn->query($sql);
?>
<?php
session_start();
if(isset($_SESSION['zm_sesji'])){

 }
 
if ($result->num_rows > 0) {
  
session_start();
 $_SESSION['zm_sesji'] = $_REQUEST['ksa'];
 $_SESSION['zm_upr'] = 5;
  }
  
  else
{
if(isset($_SESSION['zm_sesji'])){

 }
 else
 {
  echo "brak dostepu";
  return 0;
  }
}

?>
<!DOCTYPE html>
 <html>
 <head>
 <title></title>
 <link rel="icon" href="mm.png">
 <script>
    function zegarek()
    {
        var data = new Date();
        var godzina = data.getHours();
        var minuta = data.getMinutes();
        var sekunda = data.getSeconds();
        var dzien = data.getDate();
        var dzienN = data.getDay();
        var miesiac = data.getMonth();
        var rok = data.getFullYear();
       
        if (minuta < 10) minuta = "0" + minuta;
        if (sekunda < 10) sekunda = "0" + sekunda;
       
        var dni = new Array("niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota");
        var miesiace = new Array("stycznia", "lutego", "marca", "kwietnia", "maja", "czerwca", "lipca", "sierpnia", "września", "października", "listopada", "grudnia");
       
        var pokazDate = "Dzisiaj jest " + dni[dzienN] + ', ' + dzien + ' ' + miesiace[miesiac] + ' ' + rok + " roku Godzina " + godzina + ':' + minuta + ':' + sekunda;
        document.getElementById("zegar").innerHTML = pokazDate;
       
        setTimeout(zegarek, 1000);            
    }        
</script>
 </head>
 <body>
<style>
ul {
float: left;
width: 50%;
padding: 0;
margin: 0;
list-style-type: none;
list-style: none;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
  }
.mid {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 15%;
  text-decoration: underline;
}
an {
list-style-type: none;
list-style: none;
display: block;
float: center;
text-align: center;
font-size: 0.8em;
width: 70%;
text-decoration: none;
color: black;
background-color: lightgrey;
padding: 5px 5px;
margin: 0px 1px 1px 0px;
border-radius: 3px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
}

an a:hover {
color: black;
background: white;
list-style-type: none;
list-style: none;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 1% 2%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 100%;
  margin: 0.2% 0.2%;
  cursor: pointer;
  width: 15%;
  }
  .button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>

<section>
<nav>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<ul style="list-style-type: none;">
<td><a href="/SkyMMS/stronawww/dane.php"><img src="mm.png" width="40%" height="40%" class="center" alt="Tutaj jest obrazek" ></a>
<td><body onload="zegarek()">
  <div id="zegar"></div>
  </body>
 </td>

<td>Witaj: <?php
session_start ();
echo $_SESSION['zm_sesji'];
?></td>

</ul>
</tr>
</tbody>
</table>
</nav>
<table>
<a href="/SkyMMS/stronawww/select.php" class="button">Select</a> 
<a href="/SkyMMS/stronawww/Lokalizacja.php" class="button">Lokalizacja</a> 
<a href="/SkyMMS/stronawww/PathPanel.php" class="button">PatchPanel</a> 
<a href="/SkyMMS/stronawww/device.php" class="button">Urzadzenie</a> 
<a href="/SkyMMS/stronawww/devicetype.php" class="button">Typ urzadzenia</a> 
<a href="/SkyMMS/stronawww/room.php" class="button">Pomieszczenie</a> 
<a href="/SkyMMS/stronawww/socket.php" class="button">Gniazdko</a> 
<a href="/SkyMMS/stronawww/deviceports.php" class="button">Porty Urzadzenia</a> 
<a href="/SkyMMS/stronawww/Porty.php" class="button">Porty</a>
<a href="/SkyMMS/stronawww/Polaczenia.php" class="button">Polaczenia</a> 
<a href="/SkyMMS/stronawww/telefony.php" class="button">Telefony</a> 
<a href="/SkyMMS/stronawww/miej.html" class="button">Parametry</a> 
<a href="/SkyMMS/stronawww/procesy.txt" class="button">Procesy</a> 
<a href="/SkyMMS/stronawww/Wyloguj.php" class="button">Wyloguj</a> 

</table>


</section>                    
</body>
</html> 
<?php


$conn->close();
?> 

