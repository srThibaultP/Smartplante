<?php
$hauteur = $_GET['hauteur'];
$ventilateur = $_GET['ventilateur'];
$humidité = $_GET['humidité']; //flo
$QO = $_GET['QO']; //flo
echo nl2br("hauteur=$hauteur \n ventilateur=$ventilateur \n humidité=$humidité \n QO=$QO");
$file=fopen("debugVar.txt","w");
fwrite($file,"hauteur=");
fwrite($file, $hauteur);
fwrite($file, "\r\n");
fwrite($file,"ventilateur=");
fwrite($file, $ventilateur);
fwrite($file, "\r\n");
fwrite($file,"humidité=");
fwrite($file, $humidité);
fwrite($file, "\r\n");
fwrite($file,"QO=");
fwrite($file, $QO);
fclose($file);
?>