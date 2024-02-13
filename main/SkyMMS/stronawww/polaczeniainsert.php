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
        $ID_Polaczenie = $_REQUEST['ID_Polaczenie'];
         $ID_Porty = $_REQUEST['ID_Porty'];
        $ID_Room =  $_REQUEST['ID_Room'];
        $ID_Device_Ports = $_REQUEST['ID_Device_Ports'];
         $ID_Socket = $_REQUEST['ID_Socket'];  
        $ID_Pathpanel =  $_REQUEST['ID_Pathpanel'];
        $Data_Polaczenia = $_REQUEST['Data_Polaczenia'];
        $ID_Logu = $_REQUEST['ID_Log'];
        $Uzytkownik = $_REQUEST['zm_sesji'];
        $Tabela = "Polaczenia";
        $Data_modyfikacji = date("l jS \of F Y h:i:s A");
        $Data_Polaczenia = date("l jS \of F Y h:i:s A");
        $Opis = "Zapis w tabeli Polaczenia";
 
       
         $sql = "INSERT INTO Polaczenia (`ID_Porty`,`ID_Room`,`ID_Device_Ports`,`ID_Socket`,`ID_Pathpanel`,`Data_Polaczenia`)  VALUES ('$ID_Porty','$ID_Room','$ID_Device_Ports','$ID_Socket','$ID_Pathpanel','$Data_Polaczenia')";
          if(mysqli_query($conn, $sql)){
            echo "<h3>Zapis udany." 
                . "" 
                . " </h3>"; 
          
            echo nl2br("\n $ID_Socket \n $Nr_Socket \n $Loc_Socket");
        } else{
            echo "ERROR $sql. " 
                . mysqli_error($conn);
        }
         
          session_start ();
 $Uzytkownik = $_SESSION['zm_sesji'];

 $sql1 = "INSERT INTO Log (`Uzytkownik`,`Tabela`,`Data_modyfikacji`,`Opis`)  VALUES ('$Uzytkownik','$Tabela','$Data_modyfikacji','$Opis')";
          
        if(mysqli_query($conn, $sql1)){
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
