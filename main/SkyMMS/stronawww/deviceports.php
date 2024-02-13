<!DOCTYPE html>
<html lang="en">
  <?php
  include('dane.php');
   if(isset($_SESSION['zm_sesji'])){
  ?>
     <?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID_Device,Device_Name, Device_Description, Device_Type, Ports_Qty,Location,Serial_Number,IP_Address FROM Device";
$result = $conn->query($sql);
?>
<head>
    <title></title>
     <link rel="icon" href="mm.png">
</head>
  
<body>
    <center>
        <h1>Zapis w bazie danych w tabeli Ports Device</h1>
  
        <form action="deviceportsinsert.php" method="post">
            <p>
                <label for="Port_Number">Numer Portu: </label>
                <input type="text" name="Port_Number" id="Port_Number">
            </p>
            <p>
            <label for="Device_Name">Nazwa urzadzenia: </label>
            <select name="Device_Name">
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo "<option value='".$row["ID_Device"]."'>".$row["Device_Name"]. " </option>";
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
