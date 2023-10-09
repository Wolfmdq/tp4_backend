<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

 $pares = ["2","4","6","8","10",];
 print "<p>$pares[0]</p>\n";
 print "<p>$pares[1]</p>\n";
 print "<p>$pares[2]</p>\n";
 print "<p>$pares[3]</p>\n";
 print "<p>$pares[4]</p>\n";
 
 $matriz = ["Pedro","Ana","34","1"];
 print "<pre>\n";
 print_r($matriz);
 print "</pre\n>";
 foreach($matriz as $valor) {
    print "<p>$valor</p>\n";
 }
$datos = ["Nombre => Pedro","Apellido => Torres","Direccion => Av Mayor 3703","Telefono => 1122334455"];

$Ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
print "<p>La ciudad con el índice 2 tiene el nombre de $Ciudades[2]</p>\n";

$Ciudades = ["MD"=>"Madrid", "BC"=>"Barcelona","LD"=>"Londres","NY"=>"New York","LD"=>"Los Angeles","CH"=>"Chicago"];
print "<p>La ciudad con el índice BC tiene el nombre de $Ciudades[BC]</p>\n";

?>

    
</body>
</html>