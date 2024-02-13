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

$sql = "SELECT ID_Type,Type FROM Device_Type";
$result = $conn->query($sql);
?>
<head>
    <title></title>
     <link rel="icon" href="mm.png">
</head>
  
<body>
    <center>
        <h1>Zapis w bazie danych w tabeli Device</h1>
  
        <form action="deviceinsert.php" method="post">
            <p>
                <label for="Device_Name">Nazwa urzadzenia: </label>
                <input type="text" name="Device_Name" id="Device_Name">
            </p>
                        <p>
                <label for="Device_Description">Opis urzadzenia: </label>
                <input type="text" name="Device_Description" id="Device_Description">
            </p>
            
            <p>
            <label for="Device_Type">Typ urzadzenia: </label>
            <select name="Device_Type">
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo "<option value='".$row["ID_Type"]."'>".$row["Type"]. " </option>";
  }
} else {
  echo "0 results";
}
?>
</select>
            <p>
                <label for="Ports_Qty">Ilosc portow: </label>
                <input type="text" name="Ports_Qty" id="Ports_Qty">
            </p>
            <p>
                      <label for="Location">Location: </label>
            <select name="Location">
<?php
$sql = "SELECT ID_LOK,Nazwa_Lokalizacji,Opis_Lokalizacji FROM Lokalizacja";
$result = $conn->query($sql);
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
                        <p>
                <label for="Serial_Number">Serial_Number: </label>
                <input type="text" name="Serial_Number" id="Serial_Number">
            </p>
                        <p>
                <label for="IP_Address">IP_Address: </label>
                <input type="text" name="IP_Address" id="IP_Address">
            </p>
            </p>
            <input type="Submit" value="Zatwierdz">
        </form>
    </center>
<?php include('authors.php');
}
?>
</body>
  
</html>
