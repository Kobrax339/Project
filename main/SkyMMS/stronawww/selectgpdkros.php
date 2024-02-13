<!DOCTYPE html>
<html>
 <head>
  <title></title>
 <link rel="icon" href="mm.png">
  <style>
table, th, td {
    border: 1px solid black;
}
table {
width: 100%;
border-collapse: collapse;
}
</style>
 </head>
 <body>

 <?php
 include('select.php');
 ?>

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

$sql = "SELECT Telefony.ID_Telefonu, Telefony.Patchpanel_1, Telefony.Port_1, Telefony.Port_2, Telefony.Patchpanel_2, Telefony.Nr_telefonu, Telefony.Nr_Gniazda,  Porty.ID_PortPP as idport1, Porty.Numer_Portu as numerportu1, PathPanel.Nazwa_PP, PathPanel.ID_PP, por1.ID_PortPP as idport2, por1.Numer_Portu as numerport2, por2.Nazwa_PP as patchpanel2, por2.ID_PP 
FROM Telefony 
LEFT JOIN Porty ON Telefony.Port_1 = Porty.ID_PortPP
LEFT JOIN PathPanel ON Telefony.Patchpanel_1 = PathPanel.ID_PP
LEFT JOIN Porty as por1 ON Telefony.Port_2 = por1.ID_PortPP
LEFT JOIN PathPanel as por2 ON Telefony.Patchpanel_2 = por2.ID_PP
ORDER BY Telefony.Patchpanel_1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
echo "<table><tr><th>ID</th><th>PatchPanel 1</th><th>Port 1</th><th>PatchPanel 2</th><th>Port 2</th><th>Numer Telefonu</th></tr>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["ID_Telefonu"]. "</td><td>" . $row["Nazwa_PP"]. "</td><td>" . $row["numerportu1"]. "</td><td>" . $row["patchpanel2"] . "</td><td>" . $row["numerport2"] . "</td><td>" . $row["Nr_telefonu"] . "</td><td>" . "<br></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 
</body>
<?php include('authors.php');
?>
</html>
