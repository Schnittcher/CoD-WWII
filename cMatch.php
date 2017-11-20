<?php
  class Match
  {
    private $matches = [];
    private $summaray = [];
    private $match;

    public function __construct($Request,$match = 0)
    {
      $this->match = $match;
      $this->matches = $Request["matches"];
      $this->summaray = $Request["summary"];
    }

    public function getStartTime()
    {
      return $matches[$this->match]["utcStartSeconds"];
    }

    public function getEndTime()
    {
      return $matches[$this->match]["utcEndSeconds"];
    }

    public function getDuration()
    {
      return $matches[$this->match]["duration"];
    }

    public function getMap()
    {
      return $matches[$this->match]["map"];
    }

    public function getMode()
    {
      return $matches[$this->match]["mode"];
    }

    public function getResult()
    {
      return $matches[$this->match]["result"];
    }

    public function getWinningTeam()
    {
      return $matches[$this->match]["WinningTeam"];
    }

    public function getPrivateMatch()
    {
      return $matches[$this->match]["privateMatch"];
    }

    public function getGameBattle()
    {
      return $matches[$this->match]["gameBattle"];
    }

    public function getPlaylistName()
    {
      return $matches[$this->match]["playlistName"];
    }

    //Todo: Player Awards Start

    //Todo: Player Awards End

    public function getPlayerStatsKills()
    {
      return $matches[$this->match]["playerStats"]["kills"];
    }

    public function getPlayerStatsShotsMissed()
    {
      return $matches[$this->match]["playerStats"]["shotsMissed"];
    }

    public function getPlayerStatsKdRatio()
    {
      return $matches[$this->match]["playerStats"]["kdRatio"];
    }

    public function getPlayerStatsDistanceTravelled()
    {
      return $matches[$this->match]["playerStats"]["distanceTravelled"];
    }

    public function getPlayerStatsDivisionXpMountain()
    {
      return $matches[$this->match]["playerStats"]["divisionXpMountain"];
    }

    public function getPlayerStatsAccuracy()
    {
      return $matches[$this->match]["playerStats"]["accuracy"];
    }

    public function getPlayerStatsDivisionXpExpeditionary()
    {
      return $matches[$this->match]["playerStats"]["divisionXpExpeditionary"];
    }

    public function getPlayerStatsDivisionXpInfantry()
    {
      return $matches[$this->match]["playerStats"]["divisionXpInfantry"];
    }

    public function getPlayerStatsDivisionXpArmored()
    {
      return $matches[$this->match]["playerStats"]["divisionXpArmored"];
    }

    public function getPlayerStatsShotsLanded()
    {
      return $matches[$this->match]["playerStats"]["shotsLanded"];
    }

    public function getPlayerStatsDivisionXpAirborne()
    {
      return $matches[$this->match]["playerStats"]["divisionXpAirborne"];
    }

    public function getPlayerStatsAvgSpeed()
    {
      return $matches[$this->match]["playerStats"]["avgSpeed"];
    }

    public function getPlayerStatsAvgKillDistance()
    {
      return $matches[$this->match]["playerStats"]["avgKillDistance"];
    }

    public function getPlayerStatsScore()
    {
      return $matches[$this->match]["playerStats"]["score"];
    }

    public function getPlayerStatsTotalXP()
    {
      return $matches[$this->match]["playerStats"]["totalXp"];
    }

    public function getPlayerTimePlayed()
    {
      return $matches[$this->match]["playerStats"]["timePlayed"];
    }

    public function getPlayerStatsHeadshots()
    {
      return $matches[$this->match]["playerStats"]["headshots"];
    }

    public function getPlayerStatsDivisionXpNone()
    {
      return $matches[$this->match]["playerStats"]["divisionXpNone"];
    }

    public function getPlayerStatsAssists()
    {
      return $matches[$this->match]["playerStats"]["assists"];
    }

    public function getPlayerStatsShotsFired()
    {
      return $matches[$this->match]["playerStats"]["shotsFired"];
    }

    public function getPlayerStatsDeaths()
    {
      return $matches[$this->match]["playerStats"]["deaths"];
    }

    //Todo: Summary Start

    //Todo: Summary End


  }
?>
