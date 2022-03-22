<?php

//Cargo el fichero que contiene la especificación
spl_autoload_register(function ($clase) {
    echo "<p>Voy a cargar la clase $clase</p>";
    require ("$clase.php");
});

$r1= new Racional(9,4);
$r2=new Racional(2,7);

echo "<p>Racional 1: $r1</p>";
echo "<p>Racional 2: $r2</p>";

$r3= $r1 -> sumar($r2);
echo "<p>Resultado suma: $r3</p>";
$r3= $r1 -> restar($r2);
echo "<p>Resultado resta: $r3</p>";
$r3= $r1 -> multiplicar($r2);
echo "<p>Resultado multiplicar: $r3</p>";
$r3= $r1 -> dividir($r2);
echo "<p>Resultado dividir: $r3</p>";


if (isset($_POST['submit'])) {
    $op1= new Racional($_POST['op1']);
    $op2= new Racional($_POST['op2']);
    $operacion = $_POST['operador'];

    echo "<p>Han pedido operación: $operacion. Operando 1: $op1; Operando 2: $op2</p>";

    switch ($operacion) {
        case '+':
            $rtdo= $op1 -> sumar($op2);
            break;
        case '-':
            $rtdo= $op1 -> restar($op2);
            break;
        case '*':
            $rtdo= $op1 -> multiplicar($op2);
            break;
        case ':':
            $rtdo= $op1 -> dividir($op2);
            break;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
<fieldset>
    <legend>Calculadora racional</legend>
    <input type="text" name="op1" id="">
    <select name="operador" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value=":">:</option>
    </select>
    <input type="text" name="op2" id="">
    <br>
    <input type="submit" value="Calcula" name="submit">
</fieldset>
</form>
<h3>Resultado: <?=$rtdo?></h3>
</body>
</html>

