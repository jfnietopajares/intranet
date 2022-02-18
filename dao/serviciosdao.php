<?php

switch ($_REQUEST["centro"]) {
    case 'hnss':
        $html = '
	<option value="1">h4</option>
	<option value="2">h5</option>
	<option value="3">h7</option>
	<option value="4">h21</option>
	<option value="5">hScennic</option>
	<option value="6">hTraffic</option>
	';
        break;
 case 'prov':
        $html = '
	<option value="1">p4</option>
	<option value="2">ph5</option>
	<option value="3">ph7</option>
	<option value="4">hp21</option>
	<option value="5">phScennic</option>
	<option value="6">phTraffic</option>
	';
        break;
    default:
        break;
}


echo $html;

?>