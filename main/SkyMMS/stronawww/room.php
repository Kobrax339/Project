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
        <h1>Zapis w bazie danych w tabeli Room</h1>
  
        <form action="roominsert.php" method="post">

                        <p>
                <label for="Room_Name">Nazwa pomieszczenia:  </label>
                <input type="text" name="Room_Name" id="Room_Name">
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
