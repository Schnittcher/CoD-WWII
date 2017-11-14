<?php
require 'cConnecttor.php';
require 'cPlayer.php';

$Connector = new Connector("psn","Schnittcher");
$Player = new Player($Connector->getPlayer());

echo $Player->getUsername();

?>
