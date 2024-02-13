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
        $ID_Logu = $_REQUEST['ID_Log'];
        $Uzytkownik = $_REQUEST['Uzytkownik'];
        $Tabela = $_REQUEST['Tabela'];
        $Data_modyfikacji = $_REQUEST['Data_modyfikacji'];
        $Opis = $_REQUEST['Opis'];
                
     
       
         $sql = "INSERT INTO Log (`ID_Porty`,`ID_Room`,`ID_Device_Ports`,`ID_Socket`,`ID_Pathpanel`)  VALUES ('$ID_Porty','$ID_Room','$ID_Device_Ports','$ID_Socket','$ID_Pathpanel')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Zapis udany." 
                . "" 
                . " </h3>"; 
          
            echo nl2br("\n $ID_Socket \n $Nr_Socket \n $Loc_Socket");
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
