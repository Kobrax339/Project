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
        $ID_PP = $_REQUEST['ID_PP'];
        $Nazwa_PP =  $_REQUEST['Nazwa_PP'];
        $Lokalizacji_PP = $_REQUEST['Lokalizacji_PP'];
     $sql = "INSERT INTO PathPanel ( `Nazwa_PP`, `Lokalizacji_PP`) VALUES ('$Nazwa_PP','$Lokalizacji_PP')";
	
        if(mysqli_query($conn, $sql)){
            echo "<h3>Zapis udany." 
                . "" 
                . " </h3>"; 
  
            echo nl2br("\n $ID_PP \n $Nazwa_PP \n $Lokalizacji_PP \n ");
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
