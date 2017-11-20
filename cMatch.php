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
      return $this->matches[$this->match]["utcStartSeconds"];
    }

    public function getEndTime()
    {
      return $this->matches[$this->match]["utcEndSeconds"];
    }

    public function getDuration()
    {
      return $this->matches[$this->match]["duration"];
    }

    public function getMap()
    {
      return $this->matches[$this->match]["map"];
    }

    public function getMode()
    {
      return $this->matches[$this->match]["mode"];
    }

    public function getResult()
    {
      return $this->matches[$this->match]["result"];
    }

    public function getWinningTeam()
    {
      return $this->matches[$this->match]["WinningTeam"];
    }

    public function getPrivateMatch()
    {
      return $this->matches[$this->match]["privateMatch"];
    }

    public function getGameBattle()
    {
      return $this->matches[$this->match]["gameBattle"];
    }

    public function getPlaylistName()
    {
      return $this->matches[$this->match]["playlistName"];
    }

    //Todo: Player Awards Start

    //Todo: Player Awards End

    public function getPlayerStatsKills()
    {
      return $this->matches[$this->match]["playerStats"]["kills"];
    }

    public function getPlayerStatsShotsMissed()
    {
      return $this->matches[$this->match]["playerStats"]["shotsMissed"];
    }

    public function getPlayerStatsKdRatio()
    {
      return $this->matches[$this->match]["playerStats"]["kdRatio"];
    }

    public function getPlayerStatsDistanceTravelled()
    {
      return $this->matches[$this->match]["playerStats"]["distanceTravelled"];
    }

    public function getPlayerStatsDivisionXpMountain()
    {
      return $this->matches[$this->match]["playerStats"]["divisionXpMountain"];
    }

    public function getPlayerStatsAccuracy()
    {
      return $this->matches[$this->match]["playerStats"]["accuracy"];
    }

    public function getPlayerStatsDivisionXpExpeditionary()
    {
      return $this->matches[$this->match]["playerStats"]["divisionXpExpeditionary"];
    }

    public function getPlayerStatsDivisionXpInfantry()
    {
      return $this->matches[$this->match]["playerStats"]["divisionXpInfantry"];
    }

    public function getPlayerStatsDivisionXpArmored()
    {
      return $this->matches[$this->match]["playerStats"]["divisionXpArmored"];
    }

    public function getPlayerStatsShotsLanded()
    {
      return $this->matches[$this->match]["playerStats"]["shotsLanded"];
    }

    public function getPlayerStatsDivisionXpAirborne()
    {
      return $this->matches[$this->match]["playerStats"]["divisionXpAirborne"];
    }

    public function getPlayerStatsAvgSpeed()
    {
      return $this->matches[$this->match]["playerStats"]["avgSpeed"];
    }

    public function getPlayerStatsAvgKillDistance()
    {
      return $this->matches[$this->match]["playerStats"]["avgKillDistance"];
    }

    public function getPlayerStatsScore()
    {
      return $this->matches[$this->match]["playerStats"]["score"];
    }

    public function getPlayerStatsTotalXP()
    {
      return $this->matches[$this->match]["playerStats"]["totalXp"];
    }

    public function getPlayerTimePlayed()
    {
      return $this->matches[$this->match]["playerStats"]["timePlayed"];
    }

    public function getPlayerStatsHeadshots()
    {
      return $this->matches[$this->match]["playerStats"]["headshots"];
    }

    public function getPlayerStatsDivisionXpNone()
    {
      return $this->matches[$this->match]["playerStats"]["divisionXpNone"];
    }

    public function getPlayerStatsAssists()
    {
      return $this->matches[$this->match]["playerStats"]["assists"];
    }

    public function getPlayerStatsShotsFired()
    {
      return $this->matches[$this->match]["playerStats"]["shotsFired"];
    }

    public function getPlayerStatsDeaths()
    {
      return $this->matches[$this->match]["playerStats"]["deaths"];
    }

    //Todo: Summary Start

    //Todo: Summary End


  }
?>
