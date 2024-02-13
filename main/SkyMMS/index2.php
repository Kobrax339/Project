
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
<form>
<label for="Lokal">Lokalizacja:</label><br>
<input type="test" id="LL" name"LL"><br>

<select name="PathPanel" id="PP">
<option value="I">ID_PP</option>
<option value="N">Nazwa_PP</option>
<option value="L">Lokalizacja_PP</option>
</select>
</form>
mysqli_close($conn);
?>

</body>
</html>
