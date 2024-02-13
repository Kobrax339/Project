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
         $ID_Port = $_REQUEST['ID_Port'];
        $Port_Number =  $_REQUEST['Port_Number'];
        $Device_Name = $_REQUEST['Device_Name'];
         $sql = "INSERT INTO Device_Ports (`Port_Number`, `Device_Name`)  VALUES ('$Port_Number','$Device_Name')";
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
