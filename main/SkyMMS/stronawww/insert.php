<!DOCTYPE html>
<html>
<body>

<?php
$servername = "";
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
        $ID_PP = $_REQUEST['ID_PP'];
        $Nazwa_PP =  $_REQUEST['Nazwa_PP'];
        $Lokalizacji_PP = $_REQUEST['Lokalizacji_PP'];
        $ID_PortPP = $_REQUEST['ID_PortPP'];
        $Numer_Portu =  $_REQUEST['Numer_Portu'];
        $PathPanel = $_REQUEST['PathPanel'];
         $sql = "INSERT INTO Lokalizacja VALUES ('$ID_LOK','$Nazwa_Lokalizacji','$Opis_lokalizacji')";
     $sql = "INSERT INTO Patchpanel VALUES ('$ID_pp','$Nazwa_pp','$Lokalizacja_pp')";
     $sql = "INSERT INTO Porty VALUES ('$ID_PortPP','$Numer_Portu','$PathPanel')";
	
        if(mysqli_query($conn, $sql)){
            echo "<h3>Zapis udany." 
                . "" 
                . " </h3>"; 
  
            echo nl2br("\n $ID_LOK \n $Nazwa_lokalizacji \n \n $Opis_lokalizacji \n $ID_pp \n $Nazwa_pp \n $Lokalizacja_pp \n $ID_port_pp \n $Numer_Portu \n $PathPanel \n ");
        } else{
            echo "ERROR $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>
