<?php

require_once('teams.php');
require_once('wc_config.php');
require_once('wc_team.php');


class WC_Pool {

  public $standings = array();
  
  public $wc_teams = array();


  public function __construct() {

    $allteams = unserialize(WC_TEAMS);

    foreach($allteams as $i => $team) {
      $this->wc_teams[] = $team['name'];
    }
  }

  public function calculateStandings() {
  
    foreach($this->wc_teams as $team_name) {

      $Team = new WC_Team($team_name);
      $this->standings[$team_name] = $Team->calculatePoints();
    }
  }

  public function displayStandings() {
  
	$standings = $this->standings;
	echo '<h2>STANDINGS</h2>';
	echo '<p><span class="out">Team or Player has no games left</span></p>';
	echo '<div class="standings"><table class="imagetable"><tr><th>Name</th><th>Points</th></tr>';

	while(count($standings)) {
	  
	  $top = -1;
	  $topName = '';
	  
	  foreach($standings as $name => $pts) {
	    if($pts['total'] > $top) {
	      $top = $pts['total'];
	  	  $topName = $name;    
	    }
	  }
	  
	  $anchor = str_replace(' ', '', $topName);
	  echo '<tr><td><a href="#'.$anchor.'">'.$topName.'</a></td><td>'.$top.'</td></tr>';
	  unset($standings[$topName]);
	}

	echo '</table></div>';
  }

  public function displayTeams() {

    foreach($this->wc_teams as $team_name) {

      $Team = new WC_Team($team_name);
	  $Team->displayTeam();
	}
  }

  public static function getIndPointsFormatted($individual) {
  
    $total = 0;
    $ind = unserialize($individual);
    array_pop($ind);

    foreach($ind as $i) {
      $total += $i;
    }
    
    if($total == 0) return '';
    
    $bn = (end($ind) > 0)? ' *':'';
    return ($total == 1)? ' ('.$total.'pt)'.$bn:' ('.$total.'pts)'.$bn;
  }

  public static function inORout($individual) {

    $ind = unserialize($individual);
  	$in_out = 'class="in"';
	$out = array_pop($ind);

	if($out) {
	  $in_out = 'class="out"';
	}
  
    return $in_out;
  }

  public function displayGroups() {
	echo '<div class="groups"><a name="groups"/><h2>GROUPS</h2>';
	if(SHOW_BONUS_TEXT) echo '<p> (* - includes 3 point bonus for winning the bracket)</p>';
	
	echo '<table class="imagetable">';
	echo '<tr><th>A</th><th>B</th><th>C</th</tr>';
	echo '<tr><td '.self::inORout(BRAZIL).'>BRAZIL'.self::getIndPointsFormatted(BRAZIL).'</td><td '.self::inORout(SPAIN).'>SPAIN'.self::getIndPointsFormatted(SPAIN).'</td><td '.self::inORout(BELGIUM).'>BELGIUM'.self::getIndPointsFormatted(BELGIUM).'</td></tr>';
	echo '<tr><td '.self::inORout(ARGENTINA).'>ARGENTINA'.self::getIndPointsFormatted(ARGENTINA).'</td><td '.self::inORout(GERMANY).'>GERMANY'.self::getIndPointsFormatted(GERMANY).'</td><td '.self::inORout(FRANCE).'>FRANCE'.self::getIndPointsFormatted(FRANCE).'</td></tr>';

    echo '<tr><th>D</th><th>E</th></tr>';
	echo '<tr><td '.self::inORout(HOLLAND).'>HOLLAND'.self::getIndPointsFormatted(HOLLAND).'</td><td '.self::inORout(COLOMBIA).'>COLOMBIA'.self::getIndPointsFormatted(COLOMBIA).'</td></tr>';
	echo '<tr><td '.self::inORout(ITALY).'>ITALY'.self::getIndPointsFormatted(ITALY).'</td><td '.self::inORout(SWITZ).'>SWITZERLAND'.self::getIndPointsFormatted(SWITZ).'</td></tr>';
	echo '<tr><td '.self::inORout(PORTUGAL).'>PORTUGAL'.self::getIndPointsFormatted(PORTUGAL).'</td><td '.self::inORout(RUSSIA).'>RUSSIA'.self::getIndPointsFormatted(RUSSIA).'</td></tr>';

    echo '<tr><th>F</th><th>G</th><th>H</th><th>I</th><th>J</th></tr>';
	echo '<tr><td '.self::inORout(ENGLAND).'>ENGLAND'.self::getIndPointsFormatted(ENGLAND).'</td><td '.self::inORout(ECUADOR).'>ECUADOR'.self::getIndPointsFormatted(ECUADOR).'</td>'.
		 '<td '.self::inORout(USA).'>USA'.self::getIndPointsFormatted(USA).'</td><td '.self::inORout(NIGERIA).'>NIGERIA'.self::getIndPointsFormatted(NIGERIA).'</td><td '.self::inORout(AUSTRALIA).'>AUSTRALIA'.self::getIndPointsFormatted(AUSTRALIA).'</td></tr>';
	echo '<tr><td '.self::inORout(URUGUAY).'>URUGUAY'.self::getIndPointsFormatted(URUGUAY).'</td><td '.self::inORout(CROATIA).'>CROATIA'.self::getIndPointsFormatted(CROATIA).'</td>'.
		 '<td '.self::inORout(GHANA).'>GHANA'.self::getIndPointsFormatted(GHANA).'</td><td '.self::inORout(KOREA).'>SOUTH KOREA'.self::getIndPointsFormatted(KOREA).'</td><td '.self::inORout(IRAN).'>IRAN'.self::getIndPointsFormatted(IRAN).'</td></tr>';
	echo '<tr><td '.self::inORout(CHILE).'>CHILE'.self::getIndPointsFormatted(CHILE).'</td><td '.self::inORout(JAPAN).'>JAPAN'.self::getIndPointsFormatted(JAPAN).'</td>'.
		 '<td '.self::inORout(GREECE).'>GREECE'.self::getIndPointsFormatted(GREECE).'</td><td '.self::inORout(CAMEROON).'>CAMEROON'.self::getIndPointsFormatted(CAMEROON).'</td><td '.self::inORout(COSTA).'>COSTA RICA'.self::getIndPointsFormatted(COSTA).'</td></tr>';
	echo '<tr><td '.self::inORout(IVORY).'>IVORY COAST'.self::getIndPointsFormatted(IVORY).'</td><td '.self::inORout(MEXICO).'>MEXICO'.self::getIndPointsFormatted(MEXICO).'</td>'.
		 '<td '.self::inORout(BOSNIA).'>BOSNIA'.self::getIndPointsFormatted(BOSNIA).'</td><td '.self::inORout(ALGERIA).'>ALGERIA'.self::getIndPointsFormatted(ALGERIA).'</td><td '.self::inORout(HONDURAS).'>HONDURAS'.self::getIndPointsFormatted(HONDURAS).'</td></tr>';

	echo '<tr><th>K</th></tr>';
	echo '<tr><td '.self::inORout(MESSI).'>MESSI'.self::getIndPointsFormatted(MESSI).'</td></tr>';
	echo '<tr><td '.self::inORout(NEYMAR).'>NEYMAR'.self::getIndPointsFormatted(NEYMAR).'</td></tr>';

    echo '<tr><th>L</th><th>M</th><th>N</th><th>O</th></tr>';
	echo '<tr><td '.self::inORout(AGUERO).'>AGUERO'.self::getIndPointsFormatted(AGUERO).'</td><td '.self::inORout(HIGUAIN).'>HIGUAIN'.self::getIndPointsFormatted(HIGUAIN).'</td>'.
		 '<td '.self::inORout(FRED).'>FRED'.self::getIndPointsFormatted(FRED).'</td><td '.self::inORout(NEGREDO).'>NEGREDO'.self::getIndPointsFormatted(NEGREDO).'</td></tr>';
	echo '<tr><td '.self::inORout(RONALDO).'>RONALDO'.self::getIndPointsFormatted(RONALDO).'</td><td '.self::inORout(DCOSTA).'>DIEGO COSTA'.self::getIndPointsFormatted(DCOSTA).'</td>'.
		  '<td '.self::inORout(HULK).'>HULK'.self::getIndPointsFormatted(HULK).'</td><td '.self::inORout(OSCAR).'>OSCAR'.self::getIndPointsFormatted(OSCAR).'</td></tr>';
	echo '<tr><td '.self::inORout(SUAREZ).'>SUAREZ'.self::getIndPointsFormatted(SUAREZ).'</td><td '.self::inORout(PERSIE).'>VAN PERSIE'.self::getIndPointsFormatted(PERSIE).'</td>'.
		 '<td '.self::inORout(BENZEMA).'>BENZEMA'.self::getIndPointsFormatted(BENZEMA).'</td><td '.self::inORout(BALOTELLI).'>BALOTELLI'.self::getIndPointsFormatted(BALOTELLI).'</td></tr>';
	echo '<tr><td '.self::inORout(LUKAKU).'>LUKAKU'.self::getIndPointsFormatted(LUKAKU).'</td><td '.self::inORout(FALCAO).'>FALCAO'.self::getIndPointsFormatted(FALCAO).'</td>'.
		 '<td '.self::inORout(CAVANI).'>CAVANI'.self::getIndPointsFormatted(CAVANI).'</td><td '.self::inORout(ROBBEN).'>ROBBEN'.self::getIndPointsFormatted(ROBBEN).'</td></tr>';

    echo '<tr><th>P</th><th>Q</th><th>R</th><th>S</th></tr>';
	echo '<tr><td '.self::inORout(MULLER).'>MULLER'.self::getIndPointsFormatted(MULLER).'</td><td '.self::inORout(VILLA).'>DAVID VILLA'.self::getIndPointsFormatted(VILLA).'</td>'.
	 	 '<td '.self::inORout(RIBERY).'>RIBERY'.self::getIndPointsFormatted(RIBERY).'</td><td '.self::inORout(FORLAN).'>FORLAN'.self::getIndPointsFormatted(FORLAN).'</td></tr>';
	echo '<tr><td '.self::inORout(LAVEZZI).'>LAVEZZI'.self::getIndPointsFormatted(LAVEZZI).'</td><td '.self::inORout(KLOSE).'>KLOSE'.self::getIndPointsFormatted(KLOSE).'</td>'.
		 '<td '.self::inORout(HUNTELAAR).'>HUNTELAAR'.self::getIndPointsFormatted(HUNTELAAR).'</td><td '.self::inORout(PIRLO).'>PIRLO'.self::getIndPointsFormatted(PIRLO).'</td></tr>';
	echo '<tr><td '.self::inORout(GIROUD).'>GIROUD'.self::getIndPointsFormatted(GIROUD).'</td><td '.self::inORout(ROONEY).'>ROONEY'.self::getIndPointsFormatted(ROONEY).'</td>'.
		 '<td '.self::inORout(DROGBA).'>DROGBA'.self::getIndPointsFormatted(DROGBA).'</td><td '.self::inORout(SANCHEZ).'>ALEXIS SANCHEZ'.self::getIndPointsFormatted(SANCHEZ).'</td></tr>';
	echo '<tr><td '.self::inORout(TORRES).'>TORRES'.self::getIndPointsFormatted(TORRES).'</td><td '.self::inORout(PEDRO).'>PEDRO'.self::getIndPointsFormatted(PEDRO).'</td>'.
		 '<td '.self::inORout(DZEKO).'>DZEKO'.self::getIndPointsFormatted(DZEKO).'</td><td '.self::inORout(HAZARD).'>HAZARD'.self::getIndPointsFormatted(HAZARD).'</td></tr>';

    echo '<tr><th>T</th><th>U</th><th>V</th></tr>';
	echo '<tr><td '.self::inORout(DEMPSEY).'>DEMPSEY'.self::getIndPointsFormatted(DEMPSEY).'</td><td '.self::inORout(MARTINEZ).'>MARTINEZ'.self::getIndPointsFormatted(MARTINEZ).'</td>'.
		 '<td '.self::inORout(CAHILL).'>CAHILL'.self::getIndPointsFormatted(CAHILL).'</td></tr>';
	echo '<tr><td '.self::inORout(POSTIGA).'>POSTIGA'.self::getIndPointsFormatted(POSTIGA).'</td><td '.self::inORout(KERZHAKOV).'>KERZHAKOV'.self::getIndPointsFormatted(KERZHAKOV).'</td>'.
		 '<td '.self::inORout(MITROGLOU).'>MITROGLOU'.self::getIndPointsFormatted(MITROGLOU).'</td></tr>';
	echo '<tr><td '.self::inORout(IMMOBILE).'>IMMOBILE'.self::getIndPointsFormatted(IMMOBILE).'</td><td '.self::inORout(DRMIC).'>DRMIC'.self::getIndPointsFormatted(DRMIC).'</td>'.
		 '<td '.self::inORout(EMENIKE).'>EMENIKE'.self::getIndPointsFormatted(EMENIKE).'</td></tr>';
	echo '<tr><td '.self::inORout(STURRIDGE).'>STURRIDGE'.self::getIndPointsFormatted(STURRIDGE).'</td><td '.self::inORout(HERNANDEZ).'>HERNANDEZ'.self::getIndPointsFormatted(HERNANDEZ).'</td>'.
		 '<td '.self::inORout(GYAN).'>GYAN'.self::getIndPointsFormatted(GYAN).'</td></tr>';

	echo '</table></div>';  
  }

}
  
?> 