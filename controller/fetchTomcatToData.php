<?php
include_once 'dbh.inc.php';
include_once '../model/SQL-capteur.php';

// 1. Récupérer les données brutes
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G05B");
$data = file_get_contents('http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G05B');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$data = curl_exec($ch);
curl_close($ch);

//echo "Raw Data:<br />";
//echo "$data";

// 2. Les mettres sous forme de tableau (1 ligne = 1 trame d'un capteur)
$data_tab = str_split($data,33);
echo "<br /><br />Tabular Data:<br />";
for($i=count($data_tab) - 4, $size=count($data_tab);$i<$size-1;$i++){
    changeFormat($conn, $data_tab[$i]);
}

// 3. Décoder 1 trame
function changeFormat($conn, $dataRow)
{
    $trame = $dataRow;
    $trame_type = substr($trame,0,1);
	$object_num =  hexdec(substr($trame,1,4));
    echo("$object_num $object_num ...<br />");
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($trame, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    echo(hexdec($c) . " " . hexdec($v) . "<br />");
    echo gettype(hexdec($c)) . " " . gettype(hexdec($v)) . "<br />";

    addVal($conn, hexdec($c), hexdec($v));
}

$result1 = fetchValeur($conn, 3);
$Capt1 = $result1["Valeur"];
$result2 = fetchValeur($conn, 4);
$Capt2 = $result2["Valeur"];
$result3 = fetchValeur($conn, 10);
$Capt3 = $result3["Valeur"];

header('location: /views/personalspace/client/capteurs.php?capt1='.$Capt1.'&capt2='.$Capt2.'&capt3='.$Capt3);
exit();
?>