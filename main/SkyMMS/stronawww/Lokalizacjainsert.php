<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn === false){
            die("ERROR: Nie mozna sie polaczyc. " 
                . mysqli_connect_error());
        }
         $ID_LOK = $_REQUEST['ID_LOK'];
        $Nazwa_Lokalizacji =  $_REQUEST['Nazwa_Lokalizacji'];
        $Opis_lokalizacji = $_REQUEST['Opis_lokalizacji'];
         $sql = "INSERT INTO Lokalizacja (`Nazwa_Lokalizacji`, `Opis_lokalizacji`)  VALUES ('$Nazwa_Lokalizacji','$Opis_lokalizacji')";
        if(mysqli_query($conn, $sql)){
            echo "<h3>Zapis udany." 
                . "" 
                . " </h3>"; 
  
            echo nl2br("\n $ID_LOK \n $Nazwa_lokalizacji \n $Opis_lokalizacji");
        } else{
            echo "ERROR $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
    <?php include('Powrot.php');
?>
</body>
</html>
