
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

$sql = "SELECT ID_PortPP,Numer_Portu,PathPanel FROM Porty";

$result = $conn->query($sql);
?>
<head>
    <title></title>
     <link rel="icon" href="mm.png">
</head>
  
<body>
    <center>
        <h1>Zapis w bazie danych w tabeli Porty</h1>
  
        <form action="polaczeniainsert.php" method="post">
            
            <p>
            <label for="ID_PortPP">Porty: </label>
            <select name="ID_Porty">
<?php
$sql = "SELECT ID_PortPP,Numer_Portu,PathPanel FROM Porty";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<option value='".$row["ID_PortPP"]."'>".$row["PathPanel"]." - ".$row["Numer_Portu"]."</option>";
    
  }
} else {
  echo "0 results";
}
?>
</select>
            </p>
            <p>
            <label for="ID_Room">Room: </label>
            <select name="ID_Room">
<?php
$sql = "SELECT ID_Room,Room_Name FROM Room";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<option value='".$row["ID_Room"]."'>".$row["Room_Name"]."</option>";
    
  }
} else {
  echo "0 results";
}
?>
</select>
 <p>
            <label for="ID_Port">DevicePorts: </label>
            <select name="ID_Device_Ports">
<?php
$sql = "SELECT ID_Port,Port_Number,Device_Name FROM Device_Ports";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<option value='".$row["ID_Port"]."'>".$row["Port_Number"]."'>".$row["Device_Name"]."</option>";
    
  }
} else {
  echo "0 results";
}
?>
</select>
            </p>
             <p>
            <label for="ID_Socket">Socket: </label>
            <select name="ID_Socket">
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
 <p>
            <label for="ID_PP">Patchpanel: </label>
            <select name="ID_Pathpanel">
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
            <input type="Submit" value="Zatwierdz">
        </form>
    </center>
<?php include('authors.php');
}
?>   
</body>
  
</html>
