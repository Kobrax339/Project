


<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #424ef5;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.przyciskanu {
  width: auto;
  padding: 10px 18px;
  background-color: #a142f5;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.mm {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.kss {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.kss{
     display: block;
     float: none;
  }
  .przyciskanu {
     width: 100%;
  }
}
</style>
<title></title>
<link rel="icon" href="mm.png">
</head>
<body>

<h2>Logowanie</h2>


<form action="/SkyMMS/stronawww/dane.php" method="post">
  <div class="imgcontainer">
    <img src="mm.png">
  </div>

  <div class="container">
        <label for="kss"><b>Login</b></label>
    <input type="text" placeholder="Wprowadz Login" name="ksa" required>

    <label for="kss"><b>Haslo</b></label>
    <input type="password" placeholder="Wprowadz Haslo" name="ksb" required>

        
    <button type="submit">Login</button>

    
   
    <label>
      <input type="checkbox" checked="checked" name="remember"> Zapamietaj mnie
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="przyciskanu">Anuluj</button>
    <span class="kss">Zapomniales <a href="#">hasla?</a></span>
  </div>
</form>

</body>
</html>

