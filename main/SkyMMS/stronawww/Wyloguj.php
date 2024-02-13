
?>
<?php
session_start();
unset($_SESSION['zm_sesji']);
unset($_SESSION['zm_upr']);
session_destroy();
header("Location: http:///SkyMMS/stronawww/Logowanie.php");
