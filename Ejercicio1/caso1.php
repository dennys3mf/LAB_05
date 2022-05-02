<?php
// Variables Vacios
$a = "";    //Numero de Hijos
$b = "";    //Importe  total vendido del mes
$C = "";    //Comision
$B = "";    //Bonificacion
$SB = "";   //Sueldo Bruto
$D = "";    //Descuento
$T = "";    //Sueldo neto

$w = 50; //bonificacion
$x = 600; //Sueldo Basico
$y = 0.075; //Comision
$z = 0.11; //descuento

//Proceso del ejercicio
if (isset(
    $_POST['nhijos'],
    $_POST['importe']
)) {
    //Datos a insertar
    $a = (float)$_POST["nhijos"];
    $b = (float)$_POST["importe"];

    //Calculos de datos

    //Datos a encotrar
    $C = sprintf($b  * $y);    //Comision  
    $B = sprintf($a * $w);    //Bonificacion
    $SB = sprintf($x + $C  + $B);   //Sueldo Bruto
    $D = sprintf($SB * $z);    //Descuento
    $T = sprintf($SB - $D);    //Sueldo neto

    /*$N_hijos = $_POST['nhijos'];
    //$T_importe = $_POST['importe'];
    $bonificacion = 50;
    $Sbasico = 600;
    $comision = 0.075;
    $descuento = 0.11;

    $C = $T_importe * $comision;
    $B = $N_hijos * $bonificacion;
    $SB = $Sbasico + $C;
    $D = $SB * $descuento;*/
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 1 -Empresa PHP CSS HTML 5</title>
    <link rel="stylesheet" href="caso1.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <form class="form" method="post" action="">
        <h1><strong>Bonificacion Familiar</strong></h1>
        <h2>Numero de Hijos:</h2>
        <input type="text" name="nhijos" value="<?php echo $a ?>">
        <h2>Importe total vendido del mes: </h2>
        <input type="text" name="importe" value="<?php echo $b ?>">
        <h2>Generar Resultado</h2>
        <input type="submit" name="Calcular1" value="Calcular">
        <ul class="lista">
            <li class="com">Comision <p class="one">S/.<?php echo $C ?></p>
            </li>
            <li class="bon">Bonificacion <p>S/.<?php echo $B ?></p>
            </li>
            <li class="suelb">Sueldo Bruto <p>S/.<?php echo $SB ?></p>
            </li>
            <li class="des">Descuento <p>S/.<?php echo $D ?></p>
            </li>
            <li class="sueln">Sueldo Neto <p>S/.<?php echo $T ?></p>
            </li>
        </ul>
    </form>
</body>

</html>