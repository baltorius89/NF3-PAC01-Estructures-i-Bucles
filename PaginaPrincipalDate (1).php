<html>
 <head>
  <title>How many days in this month?</title>
 </head>
 <body>
 <form method ="post" action="PaginaSecundariaDate.php">
    <p>Pon tu nombre de usuario: 
        <input type="text" name="user"/>
     </p>
     <p>Pon tu contrasena: 
        <input type="password" name="pass"/>
     </p>
     <p>Pon tu edad:
        <input type="date" name="edad"/>
     <p>
        <input type="submit" name="submit" value="Submit"/>
     </p>
     <p>Introduce el tipo de letra, por favor:
        <input type="text" name="font">
     </p>
     <p>Introduce el color de la letra, por favor:
        <input type="text" name="color">
     </p>
     <p>Introduce el tamaño de la letra, por favor:
        <input type="text" name="size">
     </p>
     
     </br>
     
     <p>Quieres seguir guardando los parametros de letra que acabas de indicar?</p>  
     <p>Color del texto 
        <input type="checkbox" name="color_letra" value="1">
     </p>
     <p>Fuente del texto
        <input type="checkbox" name="font_letra" value="2">
     </p>
     <p>Tamaño del texto
        <input type="checkbox" name="size_letra" value="3">
     </p>
     <p>
        <input type="submit" name="submit" value="Submit">
     </p>
 </form>
 
<?php
    
    echo "Bienvenido a nuestra web, ";
    echo $_COOKIE["username"];
    echo "! <br/>";
    
    echo "Mi anime favorito es:  ";
    echo $_GET['animefav'];
    echo "! <br/>";
    $animerate = 8;
    echo "Mi nota para este anime es de un: ";
    echo $animerate;
    echo "! <br/>";
    
    date_default_timezone_set("Spain/Barcelona");
    $leapyear = date ("L");
    if ($leapyear == 1) {
        echo "Es un año bisiesto, Febrero tiene 29 dias";
        echo "! <br/>";
    }
    else {
        echo "Aww, Lo siento compañero, Este año no es bisiesto";
    }
?>

<?php
echo "<br/>";
echo $anime= $_GET['animefav'] ?? $_POST['animefav'] ?? 'ninguno';
echo "<br/>";
?>

<?php

    echo 'Yesterday it was: ';
    echo date("m, j, Y", time() - 60 * 60 * 24);
    
    echo '<br/>';
    
    echo 'The previous month was: ';
    echo date("F",strtotime("-1 month"));

    echo '<br/>';
    
    echo 'There are ';
    echo date('t') - date('j');
    echo ' days left in this month';
    
    echo '<br/>';
    
    echo 'There are ';
    $mes_actual = date('n');
    $a= 12 - $mes_actual;
    echo $a;
    echo ' months left in the current year';
    
    echo '<br/>';
    
    $today = new DateTime();

    $spring = new DateTime('March 20');
    $summer = new DateTime('June 20');
    $fall = new DateTime('September 22');
    $winter = new DateTime('December 21');

    switch(true) {
        case $today >= $spring && $today < $summer:
            echo 'Good Spring!';
            break;

        case $today >= $summer && $today < $fall:
            echo 'Good Summer!';
            break;

        case $today >= $fall && $today < $winter:
            echo 'Good Fall!';
            break;

        default:
            echo 'Good Winter!';
    }      

    echo '<br/>';
    include 'pie.php';
?>
 </body>
</html>


