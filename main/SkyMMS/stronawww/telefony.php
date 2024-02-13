
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

$sql = "SELECT ID_PP,Nazwa_PP,Lokalizacji_PP FROM PathPanel";

$result = $conn->query($sql);
?>
<head>
    <title></title>
     <link rel="icon" href="mm.png">
</head>
  
<body>
    <center>
        <h1>Zapis w bazie danych w tabeli Telefony</h1>
  
        <form action="telefonyinsert.php" method="post">
            
            <p>
            <label for="ID_PP">PatchPanel 1: </label>
            <select name="Patchpanel_1">
<?php
$sql = "SELECT ID_PP,Nazwa_PP,Lokalizacji_PP FROM PathPanel";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<option value='".$row["ID_PP"]."'>".$row["Nazwa_PP"]." - ".$row["Lokalizacji_PP"]."</option>";
    
  }
} else {
  echo "0 results";
}
?>
</select>
            </p>
            <p>
            <label for="ID_PortPP">Port 1: </label>
            <select name="Port_1">
<?php
$sql = "SELECT ID_PortPP,Numer_Portu,PathPanel FROM Porty";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<option value='".$row["ID_PortPP"]."'>".$row["Numer_Portu"]. " ".$row["PathPanel"]." </option>";
  }
} else {
  echo "0 results";
}
?>
</select>
 <p>
            <label for="ID_PP">PatchPanel 2: </label>
            <select name="Patchpanel_2">
<?php
$sql = "SELECT ID_PP,Nazwa_PP,Lokalizacji_PP FROM PathPanel";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<option value='".$row["ID_PP"]."'>".$row["Nazwa_PP"]." - ".$row["Lokalizacji_PP"]."</option>";
    
  }
} else {
  echo "0 results";
}
?>
</select>
            </p>
             <p>
            <label for="ID_PortPP">Port 2: </label>
            <select name="Port_2">
<?php
$sql = "SELECT ID_PortPP,Numer_Portu,PathPanel FROM Porty";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        echo "<option value='".$row["ID_PortPP"]."'>".$row["Numer_Portu"]. " ".$row["PathPanel"]." </option>";
    
  }
} else {
  echo "0 results";
}
?>
</select>
</p>
<p>
                <label for="Nr_telefonu">Numer telefonu: </label>
                <input type="text" name="Nr_telefonu" id="Nr_telefonu">
            </p>
 <p>
            <label for="ID_Socket">Numer Gniazda: </label>
            <select name="Nr_Gniazda">
<?php
$sql = "SELECT ID_Socket,Nr_Socket,Loc_Socket FROM Socket";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<option value='".$row["ID_Socket"]."'>".$row["Nr_Socket"]." - ".$row["Loc_Socket"]."</option>";
    
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
