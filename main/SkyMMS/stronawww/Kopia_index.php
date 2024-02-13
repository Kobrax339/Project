<!DOCTYPE html>
<html lang="en">
  
<head>
    <title></title>
     <link rel="icon" href="mm.png">
</head>
  
<body>
    <center>
        <h1>Zapis w bazie danych</h1>
  
        <form action="insert.php" method="post">
              
            <p>
                <label for="ID_lok">ID_lok </label>
                <input type="text" name="ID_lok" id="ID_lok">
            </p>
                   
<p>
                <label for="Nazwa_Lokalizacji">Nazwa_Lokalizacji: </label>
                <input type="text" name="Nazwa_Lokalizacji" id="Nazwa_Lokalizacji">
            </p>
                       
<p>
                <label for="Opis_lokalizacji">Opis_lokaliazcji: </label>
                <input type="text" name="Opis_lokalizacji" id="Opis_lokalizacji">
            </p>
  <p>
                <label for="ID_pp">ID_pp: </label>
                <input type="text" name="ID_pp" id="ID_pp">
            </p>
            <p>
                <label for="Nazwa_pp">Nazwa_pp: </label>
                <input type="text" name="Nazwa_pp" id="Nazwa_pp">
            </p>
            <p>
                <label for="Lokalizacja_pp">Lokalizacja: </label>
                <input type="text" name="Lokalizacja_pp" id="Lokalizacja_pp">
            </p>
                            <label for="ID_port_pp">ID_port_pp: </label>
                <input type="text" name="ID_port_pp" id="ID_port_pp">
            </p>
            <p>
                <label for="Numer_portu">Numer_portu: </label>
                <input type="text" name="Numer_portu" id="Numer_portu">
            </p>
            <p>
                <label for="Patchpanel">Patchpanel: </label>
                <input type="text" name="Patchpanel" id="Patchpanel">
            </p>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>
