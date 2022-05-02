<?php
$C = ''; //Cantidad
$NP = ''; //Nuevo Precio
$IC = ''; //Importe de la compra
$ID = ''; //Importe del Descuento
$IP = ''; //Importe a Pagar
$O = ''; //Obsequio

//Datos
$w = 12; //Precio normal
$x = 0.05; //Descuento 1
$y = 0.07; //Descuento 2
$z = 2; //Caramelos
if (isset($_POST['cantidad'])) {
    $C = (float)$_POST["cantidad"];

    //Operaciones
    $NP = $w - ($w * $x); //Cantidad
    $IC = $C * $NP; //Importe de la compra
    $ID = $IC * $y; //Importe del Descuento
    $IP = $IC - $ID; //Importe a Pagar
    $O = $C * $z; //Obsequio
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJercicio 2 Gaseosa en oferta PHP CSS HTML:5</title>
    <link rel="stylesheet" href="caso2.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <form method="post" action="">
        <h1><marquee behavior="alternate">PEPSI</marquee></h1>
        <div class="flex">
            <div class="oferta">
                <p>
                <h2>Gran Oferta</h2>
                <h3>
                    Descuento especial <br>
                    de 7% cada unidad <br>
                    + 2 caramelos
                </h3>
                </p>
                <img src="https://plazavea.vteximg.com.br/arquivos/ids/318925-1000-1000/20104289.jpg?v=637238860795930000" alt="">
            </div>
            <ul class="lista">
                <li class="NP">
                    <h3>Nuevo Precio: </h3>
                    <p>S/.<?php echo $NP ?></p>
                </li>
                <li class="IC">
                    <h3>Importe de la compra:</h3>
                    <p>S/.<?php echo $IC ?></p>
                </li>
                <li class="ID">
                    <h3>Importe del Descuento:</h3>
                    <p>S/.<?php echo $ID ?></p>
                </li>
                <li class="IP">
                    <h3>Importe a Pagar:</h3>
                    <p>S/.<?php echo $IP ?></p>
                </li>
                <li class="O">
                    <h3>Obsequio </h3>
                    <p>
                        <?php echo $O ?> Caramelos</p>
                </li>
            </ul>
        </div>
        <h2 class="C1">Ingrese la cantidad:</h2>
        <input type="text" name="cantidad" value="<?php echo $C ?>"><br>
        <input type="submit" name="comprar" value="Comprar">


    </form>
</body>

</html>