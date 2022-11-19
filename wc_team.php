<?php

include_once('teams.php');
include_once('wc_config.php');

class WC_Team {

  public $name;
    
  //array representation of points breakdown
  public $points = array();
  
  public $selections = array();
  
  public $groups = array();

  function __construct($team_name) {

	$this->groups = range('A', 'V');
    $this->name = $team_name;
    $this->getSelections($team_name);
  }

  public function calculatePoints() {
   
    foreach($this->groups as $group) {
      $this->calculateGroupPoints($group);
    }

    $this->points['total'] = $this->getTotalPoints();
    return $this->points;
  }

  private function calculateGroupPoints($letter) {
  	
  	$points = 0;
	$gs = $this->selections[$letter];
	$pt_index = key($gs);
	$pt_array = unserialize($gs[$pt_index]);

	array_pop($pt_array);
	foreach($pt_array as $pts) {
	  $points += $pts;
	}

	$this->points[$pt_index] = $points;
  }

  private function getTotalPoints() {

    $totalPoints = 0;
	foreach($this->points as $gr => $pts) {
      $totalPoints += $pts;
	}
	return $totalPoints;
  }

  private function getSelections($name) {

	$team_list = unserialize(WC_TEAMS);

	foreach($team_list as $i => $team) {
	  if($name == $team['name']) {
		unset($team['name']);
	    $this->selections = $team;
	  }
	}
  }  

  public function displayTeam() {
  	
  	$this->calculatePoints();
  	
    $anchor = str_replace(' ', '', $this->name);
    echo '<div class="team_display"><a name="'.$anchor.'"/><h3>'.$this->name.' ('.$this->points['total'].'pts)</h3>';
	echo '<table class="imagetable"><tr><th>TEAM</th><th>WINS</th><th>DRAWS</th><th>BONUS PTS</th><th>TEAM TOTAL PTS</th></tr>';

	$team_groups = range('A', 'J');
	foreach($team_groups as $letter) {
	  $this->displayTeamGroup($letter);
	}
	
	echo '<tr><th>PLAYER</th><th colspan="2">GOALS</th><th>BONUS PTS</th><th>PLAYER TOTAL PTS</th></tr>';
	
	$player_groups = range('K', 'V');
	foreach($player_groups as $letter) {
	  $this->displayPlayerGroup($letter);
	}

	echo '</table><a class="top" href="#top">Back to Top</a></div>';	
  }

  private function displayTeamGroup($letter) {
  
    $selection = $this->selections[$letter];
	$team_name = key($selection);
	$pts = unserialize($selection[$team_name]);
	$wins = ($pts[0] > 0)? $pts[0]/3 : 0;
	$total = $pts[0] + $pts[1] + $pts[2];
	
	$out = 'class="in"';
	if($pts[3]) {
	  $out = 'class="out"';
	}
	
	echo '<tr><td '.$out.'>'.$team_name.'</td><td>'.$wins.'</td><td>'.$pts[1].'</td><td>'.$pts[2].'</td><td>'.$total.'</td></tr>';
  }

  private function displayPlayerGroup($letter) {

    $selection = $this->selections[$letter];
	$player_name = key($selection);
	$pts = unserialize($selection[$player_name]);
	$goals = ($pts[0] > 0)? $pts[0]/2 : 0;
	$total = $pts[0] + $pts[1];

	$out = 'class="in"';
	if($pts[2]) {
	  $out = 'class="out"';
	}
	
	echo '<tr><td '.$out.'>'.$player_name.'</td><td colspan="2">'.$goals.'</td><td>'.$pts[1].'</td><td>'.$total.'</td></tr>';
  
  }

}

?>