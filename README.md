# CoD-WWII - Call of Duty WWII PHP Wrapper

Hierbei handelt es sich um einen schlanken und leichten PHP Wrapper für die Call of Duty WWII API.

# Funktionen

* Statistiken
  * Spiele
  * Letzte Spiele

# Benutzung

```
require "cConnector.php";
require "cPlayer.php";
require "cMatch.php";

//Spieler Beispiel:
$Connector = new Connector("psn","Schnittcher");
$Player = new Player($Connector->getPlayer());
echo $Player->getUsername();

//Match Beispiel:

$Connector = new Connector("psn","Schnittcher");
$Match = new Match($Connector->getMatches());
//Optional für vorletztes Spiel:
//$Match = new Match($Connector->getMatches(),1);
echo $Match->getStartTime();
```
