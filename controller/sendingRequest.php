<?php

if (isset($_GET["arg"])){
    $arg = $_GET("arg");
    $trame = "1G05B2301000";
    switch($arg){
        case "temp":
            $trame.="1";
            break;
        case "hum":
            $trame.="2";
            break;
        case "dB":
            $trame.="3";
            break;
        default:
            $trame.="0";
    }
    $trame.="00000000000000000000";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=G05B&TRAME=$trame");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    $response = curl_exec($ch);
    if ($response === false) {
        echo 'Erreur cURL : ' . curl_error($ch);
    } else {
        header("location: ../views/personalspace/client/capteurs.php?error=success");
    }
} else {
    header("location: ../views/personalspace/client/capteurs.php");
}
