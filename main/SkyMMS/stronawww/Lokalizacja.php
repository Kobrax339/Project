<!DOCTYPE html>
<html lang="en">
 <?php
 include('dane.php');
  if(isset($_SESSION['zm_sesji'])){
 ?>
<head>
    <title></title>
     <link rel="icon" href="mm.png">
</head>
<body>
    <center>
        <h1>Zapis w bazie danych w tabeli Lokalizacja</h1>
  
        <form action="Lokalizacjainsert.php" method="post">
                   
<p>
                <label for="Nazwa_Lokalizacji">Nazwa lokalizacji:  </label>
                <input type="text" name="Nazwa_Lokalizacji" id="Nazwa_Lokalizacji">
            </p>
                       
<p>
                <label for="Opis_lokalizacji">Opis lokalizacji:  </label>
                <input type="text" name="Opis_lokalizacji" id="Opis_lokalizacji">
            </p>
            <input type="Submit" value="Zatwierdz">
        </form>
    </center>
</body>
<?php include('authors.php');
}
?>
</html>
