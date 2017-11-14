<?php
  require 'config.php';

  class Connector
  {
    private $platform;
    private $player;

    public function __construct($platform,$player)
    {
      $this->platform = $platform;
      $this->player = $player;
      return $this;
    }

    public function getPlayer()
    {
      return $this->request("player");
    }

    private function request($type)
    {
      switch ($type) {
        case 'player':
          $url = str_replace("%platform%", $this->platform, PLAYER);
          $url = str_replace("%player%", $this->player, $url);
          break;
        case 'match':
          $url = str_replace("%platform%", $this->platform, MATCH);
          $url = str_replace("%player%", $this->player, $url);
          break;
        default:
          # code...
          break;
      }
      $json = file_get_contents($url);
      $data = json_decode($json, TRUE);
      return $data["data"];
    }
  }
?>
