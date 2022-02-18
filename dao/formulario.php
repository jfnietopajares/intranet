<?php 

extract($_REQUEST, EXTR_PREFIX_SAME, "param_");

$mensaje="";
try {
switch($accion){
    case 'graba':
        file_put_contents("datos.txt", "id: $id, Centro: $centro, Servicio: $$servicio, Dato1: $datos1 , ....... \n", FILE_APPEND);
        echo json_encode("g..ggggg.......");
        break;
    case 'borra':
         echo json_encode("b b b b b .......");
        break;
    case 'consulta':
        switch ($centro) {
            case 'hnss':
                $servicios[0]["id"]="1";
                $servicios[0]["dato1"]="adfadad";
                $servicios[0]["dato2"]="2adfadad";
                $servicios[0]["dato3"]="3adfadad";
                $servicios[0]["dato4"]="42adfadad";
                $servicios[0]["centro"]="hnss";
                 $servicios[0]["servicios"]="CAR";
                
                $servicios[1]["id"]="2";
                $servicios[1]["dato1"]="adfadad1";
                $servicios[1]["dato2"]="2adfadad1";
                $servicios[1]["dato3"]="3adfadad1";
                $servicios[1]["dato4"]="42adfada1d";
                $servicios[1]["centro"]="hnss";
                 $servicios[1]["servicios"]="DIG";

                break;
            case 'prov':
                    $servicios[0]["id"]="11";
                    $servicios[0]["dato1"]="aaaadfadad";
                    $servicios[0]["dato2"]="a2adfadad";
                    $servicios[0]["dato3"]="a3adfadad";
                    $servicios[0]["dato4"]="a42adfadad";
                    $servicios[0]["centro"]="prov";
                     $servicios[0]["servicios"]="MIR";
                    
                    $servicios[1]["id"]="22";
                    $servicios[1]["dato1"]="badfadad1";
                    $servicios[1]["dato2"]="b2adfadad1";
                    $servicios[1]["dato3"]="b3adfadad1";
                    $servicios[1]["dato4"]="b42adfada1d";
                     $servicios[1]["centro"]="prov";
                      $servicios[1]["servicios"]="DER";
                    
                    $servicios[2]["id"]="33";
                    $servicios[2]["dato1"]="cadfadad1";
                    $servicios[2]["dato2"]="c2adfadad1";
                    $servicios[2]["dato3"]="c3adfadad1";
                    $servicios[2]["dato4"]="c42adfada1d";
                     $servicios[2]["centro"]="prov";
                      $servicios[2]["servicios"]="NRL";
                    
                    $servicios[3]["id"]="44";
                    $servicios[3]["dato1"]="dadfadad1";
                    $servicios[3]["dato2"]="d2adfadad1";
                    $servicios[3]["dato3"]="d3adfadad1";
                    $servicios[3]["dato4"]="d42adfada1d";
                     $servicios[3]["centro"]="prov";
                      $servicios[3]["servicios"]="PSQ";
                    break;
            default:
                    $servicios[""][] = "";
                    break;
        }
        print(json_encode($servicios));
        break;
}
} catch (Exception $e) {
    $mensaje.= 'Excepción capturada: '.  $e->getMessage(). "\n";
    echo json_encode($mensaje);
} finally {
    $mensaje.= "Primer finally.\n";
   // echo json_encode($mensaje);
}






?>