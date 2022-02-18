<?php

$usuario["id"]=1;
$usuario["dni"]="05661256M";
$usuario["apellidos"]="ni p ju";

$grupos[]="Grupo1";
$grupos[]="Grupo2";
$grupos[]="Grupo3";
$grupos[]="Grupo4";

$usuario["grupos"]=$grupos;

print(json_encode($usuario));
//print (null);
?>
