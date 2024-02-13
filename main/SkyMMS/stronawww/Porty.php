
<!DOCTYPE html>
<html lang="en">
  <?php
  include('dane.php');
   if(isset($_SESSION['zm_sesji'])){
  ?>
  
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

$sql = "SELECT ID_PP,Nazwa_PP, Lokalizacji_PP FROM PathPanel";

$result = $conn->query($sql);
?>

<head>
    <title></title>
     <link rel="icon" href="mm.png">
</head>
  
<body>
    <center>
        <h1>Zapis w bazie danych w tabeli Porty</h1>
  
        <form action="Portyinsert.php" method="post">
            <p>
                <label for="Numer_Portu">Numer portu: </label>
                <input type="text" name="Numer_Portu" id="Numer_Portu">
            </p>
            <p>
            <label for="ID_PP">Nazwa Patchpanel: </label>
            <select name="PathPanel">
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<option value='".$row["ID_PP"]."'>".$row["Nazwa_PP"]."</option>";
  }
} else {
  echo "0 results";
}
?>
</select>
            </p>
            <input type="Submit" value="Zatwierdz">
        </form>
    </center>
<?php include('authors.php');
}
?>   
</body>
  
</html>
