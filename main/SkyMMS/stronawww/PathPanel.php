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

$sql = "SELECT ID_LOK,Nazwa_Lokalizacji,Opis_Lokalizacji FROM Lokalizacja";
$result = $conn->query($sql);
?>
<head>
    <title></title>
     <link rel="icon" href="mm.png">
</head>
  
<body>
    <center>
        <h1>Zapis w bazie danych w tabeli PatchPanel</h1>
  
        <form action="PathPanelinsert.php" method="post">
            <p>
                <label for="Nazwa_PP">Nazwa Patchpanel: </label>
                <input type="text" name="Nazwa_PP" id="Nazwa_PP">
            </p>
            <p>
            <label for="Lokalizacji-PP">Nazwa Lokalizacji: </label>
            <select name="Lokalizacji_PP">
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo "<option value='".$row["ID_LOK"]."'>".$row["Nazwa_Lokalizacji"]. " </option>";
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
