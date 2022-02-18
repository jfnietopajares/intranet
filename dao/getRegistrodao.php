<?php

switch ($_REQUEST["id"]) {
    case '1':
$registro["id"]="1";
        $registro["dato1"]="adfadad";
        $registro["dato2"]="2adfadad";
        $registro["dato3"]="3adfadad";
        $registro["dato4"]="42adfadad";
        $registro["centro"]="hnss";
        $registro['servicios']="CAR";
        break;
    case '2':
        $registro["id"]="2";
        $registro["dato1"]="adfadad1";
        $registro["dato2"]="2adfadad1";
        $registro["dato3"]="3adfadad1";
        $registro["dato4"]="42adfada1d";
        $registro["centro"]="hnss";
        $registro['servicios']="DIG";
        break;
    case '11':
        $registro["id"]="11";
        $registro["dato1"]="aaaadfadad";
        $registro["dato2"]="a2adfadad";
        $registro["dato3"]="a3adfadad";
        $registro["dato4"]="a42adfadad";
        $registro["centro"]="prov";
        $registro['servicios']="MIR";
        break;
    case '22':
        $registro["id"] = "22";
        $registro["dato1"] = "badfadad1";
        $registro["dato2"] = "b2adfadad1";
        $registro["dato3"] = "b3adfadad1";
        $registro["dato4"] = "b42adfada1d";
        $registro["centro"]="prov";
        $registro['servicios']="DER";
        break;
    case '33':
        $registro["id"] = "33";
        $registro["dato1"] = "cadfadad1";
        $registro["dato2"] = "c2adfadad1";
        $registro["dato3"] = "c3adfadad1";
        $registro["dato4"] = "c42adfada1d";
        $registro["centro"]="prov";
        $registro['servicios']="NRL";
        break;
    case '44':
         $registro["id"]="44";
                    $registro["dato1"]="dadfadad1";
                    $registro["dato2"]="d2adfadad1";
                    $registro["dato3"]="d3adfadad1";
                    $registro["dato4"]="d42adfada1d";
                     $registro["centro"]="prov";
                      $registro['servicios']="PSQ";
        break;
    default:
        $registro["id"] = "";
        $registro["dato1"] = "";
        $registro["dato2"] = "";
        $registro["dato3"] = "";
        $registro["dato4"] = "";
        $registro["centro"]="";
                      $registro['servicios']="";
        break;
}

print(json_encode($registro));
?>

