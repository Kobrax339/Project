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
         $ID_Telefonu = $_REQUEST['ID_Telefonu'];
        $Patchpanel_1 =  $_REQUEST['Patchpanel_1'];
        $Port_1 =  $_REQUEST['Port_1'];
        $Patchpanel_2 =  $_REQUEST['Patchpanel_2'];
        $Port_2 =  $_REQUEST['Port_2'];
        $Nr_telefonu =  $_REQUEST['Nr_telefonu'];
        $Nr_Gniazda =  $_REQUEST['Nr_Gniazda'];
        $ID_Logu = $_REQUEST['ID_Log'];
        $Uzytkownik = $_REQUEST['zm_sesji'];
        $Tabela = "Telefony";
        $Data_modyfikacji = date("l jS \of F Y h:i:s A");
        $Opis = "Zapis w tabeli Telefony : ".$Patchpanel_1." " .$Port_1.$Patchpanel_2." " .$Port_2.$Nr_telefonu." " .$Nr_Gniazda;
         $sql = "INSERT INTO Telefony (`Patchpanel_1`,`Port_1`,`Patchpanel_2`,`Port_2`,`Nr_telefonu`,`Nr_Gniazda`)  VALUES ('$Patchpanel_1','$Port_1','$Patchpanel_2','$Port_2','$Nr_telefonu','$Nr_Gniazda')";
        if(mysqli_query($conn, $sql)){
            echo "<h3>Zapis udany." 
                . "" 
                . " </h3>"; 
  
            echo nl2br("\n $ID_LOK \n $Nazwa_lokalizacji \n $Opis_lokalizacji");
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
