 <!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>

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

$sql = "SELECT ID_LOK,Nazwa_Lokalizacji, Opis_Lokalizacji FROM Lokalizacja";
$result = $conn->query($sql);
?>
<select>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  //  echo "id: " . $row["ID_LOK"]. " - Name: " . $row["Nazwa_Lokalizacji"]. " " . $row["Opis_Lokalizacji"]. "<br>";
    echo "<option value='".$row["ID_LOK"]."'>".$row["Nazwa_Lokalizacji"]. " </option>";
  }
} else {
  echo "0 results";
}
?>
</select>
<?php
$conn->close();
?> 

</body>
</html>
