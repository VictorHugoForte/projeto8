<?php
 include("conecta.php");
 $causadoporanimais=$_POST["causadoporanimais"];
 $commeiodetransporte=$_POST["commeiodetransporte"];
 $desmoronamentodeslizamento=$_POST["desmoronamentodeslizamento"];
 $emergenciamedica=$_POST["emergenciamedica"];
 $quedadealtura=$_POST["quedadealtura"];
 $tentativadesuicidio=$_POST["tentativadesuicidio"];
 $quedapropriaaltura=$_POST["quedapropriaaltura"];
 $afogamento=$_POST["afogamento"];
 $agressao=$_POST["agressao"];
 $atropelamento=$_POST["atropelamento"];
 $choqueeletrico=$_POST["choqueeletrico"];
 $desabamento=$_POST["desabamento"];
 $domestico=$_POST["domestico"];
 $esportivo=$_POST["esportivo"];
 $intoxicacao=$_POST["intoxicacao"];
 $quedadebicicleta=$_POST["quedadebicicleta"];
 $quedademoto=$_POST["quedademoto"];
 $quedanivel2m=$_POST["quedanivel2m"];
 $trabalho=$_POST["trabalho"];
 $transferencia=$_POST["transferencia"];
 $outros=$_POST["outros"];

 $comando = $pdo->prepare("INSERT INTO tela2 VALUES('$causadoporanimais','$commeiodetransporte','$desmoronamentodeslizamento','$emergenciamedica','$quedadealtura',' $tentativadesuicidio','$quedapropriaaltura','$afogamento''$agressao','$atropelamento','$choqueeletrico','$desabamento','$domestico',' $esportivo','$intoxicacao','$quedadebicicleta''$quedademoto','$quedanivel2m','$trabalho','$transferencia','$outros',')" );
 $resultado = $comando->execute();
 header("Location:problemas.html");
?>