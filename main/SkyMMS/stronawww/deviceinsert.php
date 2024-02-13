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
         $ID_Device = $_REQUEST['ID_Device'];
        $Device_Name =  $_REQUEST['Device_Name'];
        $Device_Description = $_REQUEST['Device_Description'];
        $Device_Type = $_REQUEST['Device_Type'];
        $Ports_Qty = $_REQUEST['Ports_Qty'];
        $Location = $_REQUEST['Location'];
        $Serial_Number = $_REQUEST['Serial_Number'];
        $IP_Address = $_REQUEST['IP_Address'];
         $sql = "INSERT INTO Device (`Device_Name`, `Device_Description`, `Device_Type`, `Ports_Qty`,`Location`,`Serial_Number`,`IP_Address`)  VALUES ('$Device_Name','$Device_Description', '$Device_Type', '$Ports_Qty','$Location','$Serial_Number','$IP_Address')";
        if(mysqli_query($conn, $sql)){
            echo "<h3>Zapis udany." 
                . "" 
                . " </h3>"; 
  
            //echo nl2br("\n $ID_LOK \n $Nazwa_lokalizacji \n $Opis_lokalizacji");
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
