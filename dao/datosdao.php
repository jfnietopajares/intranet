<?php



switch ($_REQUEST["centro"]) {
    case 'hnss':
       $servicios[0]["id"]="a";
$servicios[0]["dato1"]="adfadad";
$servicios[0]["dato2"]="2adfadad";
$servicios[0]["dato3"]="3adfadad";
$servicios[0]["dato4"]="42adfadad";

$servicios[1]["id"]="b";
$servicios[1]["dato1"]="adfadad1";
$servicios[1]["dato2"]="2adfadad1";
$servicios[1]["dato3"]="3adfadad1";
$servicios[1]["dato4"]="42adfada1d";

        break;
    case 'prov':
        $servicios[0]["id"]="aa";
$servicios[0]["dato1"]="aaaadfadad";
$servicios[0]["dato2"]="a2adfadad";
$servicios[0]["dato3"]="a3adfadad";
$servicios[0]["dato4"]="a42adfadad";

$servicios[1]["id"]="bb";
$servicios[1]["dato1"]="badfadad1";
$servicios[1]["dato2"]="b2adfadad1";
$servicios[1]["dato3"]="b3adfadad1";
$servicios[1]["dato4"]="b42adfada1d";

$servicios[2]["id"]="c";
$servicios[2]["dato1"]="cadfadad1";
$servicios[2]["dato2"]="c2adfadad1";
$servicios[2]["dato3"]="c3adfadad1";
$servicios[2]["dato4"]="c42adfada1d";

$servicios[3]["id"]="d";
$servicios[3]["dato1"]="dadfadad1";
$servicios[3]["dato2"]="d2adfadad1";
$servicios[3]["dato3"]="d3adfadad1";
$servicios[3]["dato4"]="d42adfada1d";
break;
    default:
        $servicios[""][] = "";
        break;
}

print(json_encode($servicios));

?>