<?php



switch ($_REQUEST["centro"]) {
    case 'hnss':
         $servicios[] = "CAR";
        $servicios[] = "DIG";
        break;
    case 'prov':
        $servicios[] = "MIR";
        $servicios[] = "DER";
        $servicios[] = "NRL";
          $servicios[] = "PSQ";
        break;
    default:
        $servicios[] = "";
        break;
}

print(json_encode($servicios));

?>
