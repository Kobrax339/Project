 <!DOCTYPE html>
 <html>
 <head>
  <title></title>
 <link rel="icon" href="mm.png">
 </head>
 <body>

 <?php
 include('dane.php');
  if(isset($_SESSION['zm_sesji'])){
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

$sql = "SELECT ID_LOK,Nazwa_Lokalizacji, Opis_Lokalizacji FROM Lokalizacja";
$result = $conn->query($sql);
?>
<center>
<select>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  //  echo "id: " . $row["ID_LOK"]. " - Name: " . $row["Nazwa_Lokalizacji"]. " " . $row["Opis_Lokalizacji"]. "<br>";
    echo "<option value='".$row["ID_LOK"]."'>".$row["Nazwa_Lokalizacji"]. " ".$row["Opis_Lokalizacji"]. " </option>";
  }
} else {
  echo "0 results";
}
?>
</select>
<form action="selectgpdkros.php" method="post">
<p>
<input type="Submit" value="Zatwierdz">
</p>
</center>
<?php
$conn->close();
}
?> 

</body>
</html>
