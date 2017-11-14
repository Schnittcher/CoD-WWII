<?php
  class Player
  {
    private $username;
    private $platform;
    private $kills;

    public function __construct($Request)
    {
      $this->username = $Request["username"];
      $this->platform = $Request["platform"];
      $this->kills = $Request["kills"];
    }

    public function getUsername()
    {
      return $this->username;
    }

    public function getPlatform()
    {
      return $this->username;
    }

    public function getKills()
    {
      return $this->kills;
    }
  }
?>
