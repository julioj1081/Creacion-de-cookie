<?php
    $nombre = "datos";
    $valor ="julioj1081@hotmail.com | julio alberto | fernandez gonzalez| 2019-06-10";
///LO MULTIPLICAMOS POR LA FECHA DE EXPIRACION DE LA COOKIE
    $fecha_Exp = time() + (60*60*24);
    
// Para eliminar la cookie ponemos el -1
// $fecha_Exp = time()-1;
    
    setcookie($nombre, $valor, $fecha_Exp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creacion de una cookie</title>
</head>
<body>
    <!--PARA LEER LA COOKIE-->
    <?php
    //$_COOKIE["datos"] si existe la cookie;
    if(isset($_COOKIE["datos"])){
        $datos = $_COOKIE["datos"];
        $arreglo_datos = explode("|",$datos);
        $mail = $arreglo_datos[0];
        $nombres = $arreglo_datos[1];
        $apellidos = $arreglo_datos[2];
        $fecha = $arreglo_datos[3];
        
        //
        print "hola, $nombres $apellidos, te enviaremos un mail a $mail<br>";
        print "antes de la fecha $fecha";
    }else{
        print "Lo sentimos no existe esa cookie";
    }
    ?>
</body>
</html>