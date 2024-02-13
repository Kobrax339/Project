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

$sql = "SELECT ID_Room,Room_Name FROM Room";
$result = $conn->query($sql);
?>
<head>
    <title></title>
     <link rel="icon" href="mm.png">
</head>
  
<body>
    <center>
        <h1>Zapis w bazie danych w tabeli Socket</h1>
  
        <form action="socketinsert.php" method="post">

                        <p>
                <label for="Nr_Socket">Numer gniazda:  </label>
                <input type="text" name="Nr_Socket" id="Nr_Socket">
            </p>
<p>
            <label for="Loc_Socket">Lokalizacja gniazda: </label>
            <select name="Loc_Socket">
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo "<option value='".$row["ID_Room"]."'>".$row["Room_Name"]. " </option>";
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
