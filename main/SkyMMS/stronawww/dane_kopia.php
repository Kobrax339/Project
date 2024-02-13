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

$sql = "SELECT ID_Login,Imie, Nazwisko,Login,Haslo FROM Uzytkownik";
$result = $conn->query($sql);
?>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo "id: " . $row["ID_Login"]. " - Name: " . $row["Imie"]. " " . $row["Nazwisko"]. " " . $row["Login"]. " " . $row["Haslo"]. "<br>";
  }
} else {
  echo "0 results";
}
?>
<?php
$conn->close();
?> 

</body>
</html>
