<?php
  class Match
  {
    private $matches = [];
    private $summary = [];
    private $match;

    public function __construct($Request,$match = 0)
    {
      $this->match = $match;
      $this->matches = $Request["matches"];
      $this->summary = $Request["summary"];
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

    //Summary Start
    public function getSummaryKills($type)
    {
      return $this->summary[$type]["kills"];
    }

    public function getSummaryDistanceTravelled($type)
    {
      return $this->summary[$type]["distanceTravelled"];
    }

    public function getSummaryDivisionXpMountain($type)
    {
      return $this->summary[$type]["divisionXpMountain"];
    }

    public function getSummaryAccuracy($type)
    {
      return $this->summary[$type]["accuracy"];
    }

    public function getSummaryDivisionXpExpeditionary($type)
    {
      return $this->summary[$type]["divisionXpExpeditionary"];
    }

    public function getSummaryLosses($type)
    {
      return $this->summary[$type]["losses"];
    }

    public function getSummaryShotsLanded($type)
    {
      return $this->summary[$type]["shotsLanded"];
    }

    public function getSummaryScore($type)
    {
      return $this->summary[$type]["score"];
    }

    public function getSummarytotalXP($type)
    {
      return $this->summary[$type]["totalXp"];
    }

    public function getSummaryHeadshots($type)
    {
      return $this->summary[$type]["headshots"];
    }

    public function getSummaryAssists($type)
    {
      return $this->summary[$type]["assists"];
    }

    public function getSummaryScorePerMinute($type)
    {
      return $this->summary[$type]["scorePerMinute"];
    }

    public function getSummaryDeaths($type)
    {
      return $this->summary[$type]["deaths"];
    }

    public function getSummaryWins($type)
    {
      return $this->summary[$type]["wins"];
    }

    public function getSummaryShotsMissed($type)
    {
      return $this->summary[$type]["shotsMissed"];
    }

    public function getSummaryKdRatio($type)
    {
      return $this->summary[$type]["kdRatio"];
    }

    public function getSummaryDivisionXpInfantry($type)
    {
      return $this->summary[$type]["divisionXpInfantry"];
    }

    public function getSummaryDivisionXpArmored($type)
    {
      return $this->summary[$type]["divisionXpArmored"];
    }

    public function getSummaryDivisionXpAirborne($type)
    {
      return $this->summary[$type]["divisionXpAirborne"];
    }

    public function getSummaryAvgSpeed($type)
    {
      return $this->summary[$type]["avgSpeed"];
    }

    public function getSummaryAvgKillDistance($type)
    {
      return $this->summary[$type]["avgKillDistance"];
    }

    public function getSummaryTimePlayed($type)
    {
      return $this->summary[$type]["timePlayed"];
    }

    public function getSummaryMatchesPlayed($type)
    {
      return $this->summary[$type]["matchesPlayed"];
    }

    public function getSummaryDivisionXpNone($type)
    {
      return $this->summary[$type]["divisionXpNone"];
    }

    public function getSummaryShotsFired($type)
    {
      return $this->summary[$type]["shotsFired"];
    }
  }
?>
