<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['useredad'] = $_POST['edad'];
$_SESSION['authuser'] = 0;

//Mira tu usuario y contrasena sean correctas
if (($_SESSION['username'] == 'Javier') and
    ($_SESSION['userpass'] == 12345)) {
    $_SESSION['authuser'] = 1;
} else {
    echo 'Lo siento, pero no tienes permisos para entrar en esta pagina web!';
    exit();     
}
?>
<?php
session_start();
setcookie("username","Javier",time()+60);
$_SESSION['authuser'] = 1;
?>
<html>
 <head>
  <title>Encuentra mi anime favorito!</title>
 </head>
 <body>
<?php
$mianimefav = urlencode("Kimetsu no Yaiba");
echo "<a href='PaginaPrincipal.php?animefav=$mianimefav'>";
echo "Click here to see information about my favorite movie!"; 
echo "</a>";
echo "<br/>";
date_default_timezone_set('Spain/Barcelona');
$month = date('n');
if($month == 1) { echo '31'; }
if($month == 2) { echo '28 (sino es un anio bisiesto)'; }
if($month == 3) { echo '31'; }
if($month == 4) { echo '30'; }
if($month == 5) { echo '31'; }
if($month == 6) { echo '30'; }
if($month == 7) { echo '31'; }
if($month == 8) { echo '31'; }
if($month == 9) { echo '30'; }
if($month == 10) { echo '31'; }
if($month == 11) { echo '30'; }
if($month == 12) { echo '31'; }
?>
 </body>
</html>
