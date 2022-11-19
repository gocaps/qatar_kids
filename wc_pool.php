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
	echo '<div class="groups"><a name="groups"/><h2>BRACKETS</h2>';
	if(SHOW_BONUS_TEXT) echo '<p> (* - includes 3 point bonus for winning the bracket)</p>';
	
	echo '<table class="imagetable">';
	echo '<tr><th>1</th><th>2</th><th>3</th></tr>';
	echo '<tr><td '.self::inORout(BRAZIL).'>BRAZIL'.self::getIndPointsFormatted(BRAZIL).'</td><td '.self::inORout(SPAIN).'>SPAIN'.self::getIndPointsFormatted(SPAIN).'</td><td '.self::inORout(GERMANY).'>GERMANY'.self::getIndPointsFormatted(GERMANY).'</td></tr>';
	echo '<tr><td '.self::inORout(ARGENTINA).'>ARGENTINA'.self::getIndPointsFormatted(ARGENTINA).'</td><td '.self::inORout(ENGLAND).'>ENGLAND'.self::getIndPointsFormatted(ENGLAND).'</td><td '.self::inORout(PORTUGAL).'>PORTUGAL'.self::getIndPointsFormatted(PORTUGAL).'</td></tr>';
	echo '<tr><td '.self::inORout(FRANCE).'>FRANCE'.self::getIndPointsFormatted(FRANCE).'</td><td '.self::inORout(HOLLAND).'>HOLLAND'.self::getIndPointsFormatted(HOLLAND).'</td><td '.self::inORout(BELGIUM).'>BELGIUM'.self::getIndPointsFormatted(BELGIUM).'</td></tr>';

	echo '<tr><th>4</th><th>5</th><th>6</th></tr>';
	echo '<tr><td '.self::inORout(DENMARK).'>DENMARK'.self::getIndPointsFormatted(DENMARK).'</td><td '.self::inORout(SWITZ).'>SWITZERLAND'.self::getIndPointsFormatted(SWITZ).'</td><td '.self::inORout(POLAND).'>POLAND'.self::getIndPointsFormatted(POLAND).'</td></tr>';
	echo '<tr><td '.self::inORout(CROATIA).'>CROATIA'.self::getIndPointsFormatted(CROATIA).'</td><td '.self::inORout(ECUADOR).'>ECUADOR'.self::getIndPointsFormatted(ECUADOR).'</td><td '.self::inORout(SENEGAL).'>SENEGAL'.self::getIndPointsFormatted(SENEGAL).'</td></tr>';
	echo '<tr><td '.self::inORout(URUGUAY).'>URUGUAY'.self::getIndPointsFormatted(URUGUAY).'</td><td '.self::inORout(MEXICO).'>MEXICO'.self::getIndPointsFormatted(MEXICO).'</td><td '.self::inORout(USA).'>USA'.self::getIndPointsFormatted(USA).'</td></tr>';
	echo '<tr><td>-</td><td>-</td><td '.self::inORout(SERBIA).'>SERBIA'.self::getIndPointsFormatted(SERBIA).'</td></tr>';


    echo '<tr><th>7</th><th>8</th><th>9</th><th>10</th></tr>';
	echo '<tr><td '.self::inORout(WALES).'>WALES'.self::getIndPointsFormatted(WALES).'</td><td '.self::inORout(CANADA).'>CANADA'.self::getIndPointsFormatted(CANADA).'</td>'.
		 '<td '.self::inORout(AUSTRALIA).'>AUSTRALIA'.self::getIndPointsFormatted(AUSTRALIA).'</td><td '.self::inORout(TUNISIA).'>TUNISIA'.self::getIndPointsFormatted(TUNISIA).'</td></tr>';
	echo '<tr><td '.self::inORout(MOROCCO).'>MOROCCO'.self::getIndPointsFormatted(MOROCCO).'</td><td '.self::inORout(GHANA).'>GHANA'.self::getIndPointsFormatted(GHANA).'</td>'.
		 '<td '.self::inORout(CAMEROON).'>CAMEROON'.self::getIndPointsFormatted(CAMEROON).'</td><td '.self::inORout(QATAR).'>QATAR'.self::getIndPointsFormatted(QATAR).'</td></tr>';
	echo '<tr><td '.self::inORout(KOREA).'>SOUTH KOREA'.self::getIndPointsFormatted(KOREA).'</td><td '.self::inORout(JAPAN).'>JAPAN'.self::getIndPointsFormatted(JAPAN).'</td>'.
		 '<td '.self::inORout(IRAN).'>IRAN'.self::getIndPointsFormatted(IRAN).'</td><td '.self::inORout(SAUDI).'>SAUDI ARABIA'.self::getIndPointsFormatted(SAUDI).'</td></tr>';
	echo '<tr><td>-</td><td>-</td><td>-</td><td '.self::inORout(COSTA).'>COSTA RICA'.self::getIndPointsFormatted(COSTA).'</td></tr>';

	echo '<tr><th>11</th><th>12</th></tr>';
	echo '<tr><td '.self::inORout(MBAPPE).'>MBAPPE'.self::getIndPointsFormatted(MBAPPE).'</td><td '.self::inORout(NEYMAR).'>NEYMAR JR'.self::getIndPointsFormatted(NEYMAR).'</td></tr>';
	echo '<tr><td '.self::inORout(MESSI).'>MESSI'.self::getIndPointsFormatted(MESSI).'</td><td '.self::inORout(BENZEMA).'>BENZEMA'.self::getIndPointsFormatted(BENZEMA).'</td></tr>';
	echo '<tr><td '.self::inORout(KANE).'>KANE'.self::getIndPointsFormatted(KANE).'</td><td '.self::inORout(RONALDO).'>RONALDO'.self::getIndPointsFormatted(RONALDO).'</td></tr>';

	echo '<tr><th>13</th><th>14</th><th>15</th></tr>';
	echo '<tr><td '.self::inORout(LUKAKU).'>LUKAKU'.self::getIndPointsFormatted(LUKAKU).'</td><td '.self::inORout(RICHARLISON).'>RICHARLISON'.self::getIndPointsFormatted(RICHARLISON).'</td><td '.self::inORout(TORRES).'>FERRAN TORRES'.self::getIndPointsFormatted(TORRES).'</td></tr>';
	echo '<tr><td '.self::inORout(LAUTARO).'>LAUTARO'.self::getIndPointsFormatted(LAUTARO).'</td><td '.self::inORout(MORATA).'>MORATA'.self::getIndPointsFormatted(MORATA).'</td><td '.self::inORout(STERLING).'>STERLING'.self::getIndPointsFormatted(STERLING).'</td></tr>';
	echo '<tr><td '.self::inORout(DEPAY).'>DEPAY'.self::getIndPointsFormatted(DEPAY).'</td><td '.self::inORout(HAVERTZ).'>HAVERTZ'.self::getIndPointsFormatted(HAVERTZ).'</td><td '.self::inORout(GNABRY).'>GNABRY'.self::getIndPointsFormatted(GNABRY).'</td></tr>';
	echo '<tr><td '.self::inORout(VINI).'>VINICIUS JR'.self::getIndPointsFormatted(VINI).'</td><td '.self::inORout(LEWANDOWSKI).'>LEWANDOWSKI'.self::getIndPointsFormatted(LEWANDOWSKI).'</td><td '.self::inORout(GRIEZMANN).'>GRIEZMANN'.self::getIndPointsFormatted(GRIEZMANN).'</td></tr>';

	echo '<tr><th>16</th><th>17</th><th>18</th></tr>';
	echo '<tr><td '.self::inORout(FATI).'>ANSU FATI'.self::getIndPointsFormatted(FATI).'</td><td '.self::inORout(VLAHOVIC).'>VLAHOVIC'.self::getIndPointsFormatted(VLAHOVIC).'</td><td '.self::inORout(BERNARDO).'>BERNARDO SILVA'.self::getIndPointsFormatted(BERNARDO).'</td></tr>';
	echo '<tr><td '.self::inORout(FODEN).'>FODEN'.self::getIndPointsFormatted(FODEN).'</td><td '.self::inORout(SANE).'>LEROY SANE'.self::getIndPointsFormatted(SANE).'</td><td '.self::inORout(MODRIC).'>MODRIC'.self::getIndPointsFormatted(MODRIC).'</td></tr>';
	echo '<tr><td '.self::inORout(DEBRUYNE).'>DE BRUYNE'.self::getIndPointsFormatted(DEBRUYNE).'</td><td '.self::inORout(BALE).'>BALE'.self::getIndPointsFormatted(BALE).'</td><td '.self::inORout(PULISIC).'>PULISIC'.self::getIndPointsFormatted(PULISIC).'</td></tr>';
	echo '<tr><td '.self::inORout(NUNEZ).'>NUNEZ'.self::getIndPointsFormatted(NUNEZ).'</td><td '.self::inORout(GAKPO).'>GAKPO'.self::getIndPointsFormatted(GAKPO).'</td><td '.self::inORout(SON).'>SON HEUNG-MIN'.self::getIndPointsFormatted(SON).'</td></tr>';

	echo '<tr><th>19</th><th>20</th></tr>';
	echo '<tr><td '.self::inORout(HOJBJERG).'>HOJBJERG'.self::getIndPointsFormatted(HOJBJERG).'</td><td '.self::inORout(DAVIES).'>DAVIES'.self::getIndPointsFormatted(DAVIES).'</td></tr>';
	echo '<tr><td '.self::inORout(JIMENEZ).'>JIMENEZ'.self::getIndPointsFormatted(JIMENEZ).'</td><td '.self::inORout(LARIN).'>LARIN'.self::getIndPointsFormatted(LARIN).'</td></tr>';
	echo '<tr><td '.self::inORout(AYEW).'>AYEW'.self::getIndPointsFormatted(AYEW).'</td><td '.self::inORout(BUCHANON).'>BUCHANON'.self::getIndPointsFormatted(BUCHANON).'</td></tr>';
	echo '<tr><td '.self::inORout(KAMADA).'>KAMADA'.self::getIndPointsFormatted(KAMADA).'</td><td '.self::inORout(CAVALLINI).'>CAVALLINI'.self::getIndPointsFormatted(CAVALLINI).'</td></tr>';
	echo '<tr><td>-</td><td '.self::inORout(DAVID).'>DAVID'.self::getIndPointsFormatted(DAVID).'</td></tr>';

	echo '</table></div>';  
  }

}
  
?> 
