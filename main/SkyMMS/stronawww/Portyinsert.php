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
        $ID_PortPP = $_REQUEST['ID_PortPP'];
        $Numer_Portu =  $_REQUEST['Numer_Portu'];
        $PathPanel = $_REQUEST['PathPanel'];
     $sql = "INSERT INTO Porty ( `Numer_Portu`, `PathPanel`) VALUES ('$Numer_Portu','$PathPanel')";
	
        if(mysqli_query($conn, $sql)){
            echo "<h3>Zapis udany." 
                . "" 
                . " </h3>"; 
  
            echo nl2br("\n $ID_PortPP \n $Numer_Portu \n $PathPanel");
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
