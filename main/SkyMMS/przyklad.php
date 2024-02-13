$sql = "INSERT INTO Lokalizacja (Nazwa_lokalizacji, Opis_lokalizacji)
VALUES ('GPD', 'opis')";
$sql2 = "INSERT INTO Patchpanel (Nazwa_pp, Lokalizacja_pp)
VALUES ('PP NR 3', '4')";
$sql3 = "INSERT INTO Porty (Numer_portu, Patchpanel)
VALUES ('260', '2')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql2) === TRUE) {
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}
if ($conn->query($sql3) === TRUE) {
} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
}
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ID_LOK, Nazwa_lokalizacji, Opis_lokalizacji FROM Lokalizacja";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ID_LOK"]. " - Name: " . $row["Nazwa_lokalizacji"]. " " . $row["Opis_lokalizacji"]. "<br>";
    }
} else {
    echo "0 results";
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
</body>
</html>
