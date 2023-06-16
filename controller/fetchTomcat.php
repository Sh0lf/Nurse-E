<!DOCTYPE html>

<html>
<body>
	<div>
		<div class="container1"></div>
		<div class="container2"></div>
		<div class="container3"></div>
		<div class="container4"></div>
	</div>
</body>
<?php
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-loginsystem.php';

// 1. Récupérer les données brutes
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G05B");
    $data = file_get_contents('http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G05B'); 
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $data = curl_exec($ch);
    curl_close($ch);

    echo "Raw Data:<br />";
    echo("$data");

// 2. Les mettres sous forme de tableau (1 ligne = 1 trame d'un capteur)
    $data_tab = str_split($data,33);
    echo "<br /><br />Tabular Data:<br />";
    for($size=count($data_tab),$i=$size-4 ;$i<$size-1;$i++){
        echo "\ntrame $i: " . changeFormat($conn,$data_tab[$i]."<br>");
    }
    echo fetchvaleur($conn,3);

// 3. Décoder 1 trame
    // Rappel du format (sans les espaces): T OOOO R C NN VVVV AAAA XX YYYY MM DD HH mm ss
    // T : type de trame, a priori toujours 1 ?
    // OOOO : num ro de l'objet, ie num ro de la carte qui a envoy  les donn es (1 carte peut avoir plusieurs capteurs) -> utiliser la fonction hexdec(OOOO)
    // R : type de requ te (ne sert à rien)
    // C : type de capteur - les types sont d finis dans le document d' lectronique eg 1 = distance mod le 1, 2 = distance mod l  2, 3 = humidit ...
    //     Attention, la valeur est donn e en ASCII, qu'il faut le convertir en Hexa... si j'ai  bien compris on peut faire avec bin2hex(D)-30
    // NN : num ro du capteur (sur une carte, pour un type de capteur donn , le num ro doit  tre unique)
    // VVVV : la valeur remont e -> utiliser la fonction hexdec(VVVV)
    // AAAA : num ro de la trame (ne sert pas a priori, car on a un timestamp)
    // XX : un checksum (ne sert pas)
    // YYYY MM DD HH mm ss : timestamp
    
    

    
    function changeFormat ($conn, $dataRow) {
        $trame = $dataRow;
        //echo("<br /><br />$trame<br/>");
        // décodage avec des substring
        $trame_type = substr($trame,0,1);
        $object_num =  hexdec(substr($trame,1,10));
        //affichage en décimal
        //echo("$object_num $object_num ...<br />");
        
        // décodage avec sscanf
        // tout en chaine de caracteres
        list($t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec) = sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
        //echo("test1");
        //echo("$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec</br/>");
    
        // en typant les données (à vérifier avec Gilles...)
        //list($t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec) = sscanf($trame,"%1d%4x%1s%1s%2x%4x%4s%2s%4d%2d%2d%2d%2d%2d");

        //echo("$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec");
        $infos = "type: $t, objet: $o, requête: $r, type de capteur: $c, numéro de capteur: $n, valeur: " . hexdec($v) .
        ", date: $day/$month/$year, $hour:$min:$sec <br>";
        addval($conn,hexdec($n),hexdec($v));
        return fetchvaleur($conn,hexdec($n));
        //return $infos . ' ' .$n . ' ' . hexdec($v) . ' ' ."<br>";

    }
    function addval($conn, $typcapteur,$valeur){
        $sql= "INSERT INTO valeur SET Valeur = ?, idCapteur = ?";
    
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            header("location: ../views/personalspace/admin/adminfaq-personalspace.php?error=stmtfailed");
            exit();
        }
        $stmt->execute(array($valeur,$typcapteur));
    }
    
    function fetchvaleur($conn,$idcapt){
        $sql = "SELECT Valeur FROM Valeur WHERE idcapteur = ? ORDER BY idvaleur DESC LIMIT 3";
        // use exec() because no results are returned
        
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            header("location: ../views/personalspace/admin/adminfaq-personalspace.php?error=stmtfailed");
            exit();
        }
        $stmt->execute(array($idcapt));
        $fetchedRow = $stmt->fetch();
        return $fetchedRow;
    }  
?>
</html>