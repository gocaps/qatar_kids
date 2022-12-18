<?php

ob_start();

$css = file_get_contents('styles.css');
echo '<style>'.$css.'</style>';

require_once('wc_pool.php');

if(UPDATING) {
  echo '<h1>Kids Only World Cup Pool</h1>';
  echo '<h3>HOLD YOUR HORSES!</h3>';
  echo '<p>I\'m doing some standings updates. ~Dave</p>';
}
else {
  echo '<h1>Kids Only World Cup Pool</h1>';
  echo '<a name="top" href="#groups">See Brackets</a><br />';
  echo '<a href="#rules">See Rules & Prizes</a>';
  echo '<h4>Last Update: '.LAST_UPDATE.'</h4>';
  echo '<h4>Note: 3rd place game counts in the standings</h4>';
  if(TWEET) echo TWEET;

  $wc_pool = new WC_Pool();
  $wc_pool->calculateStandings();
  $wc_pool->displayStandings();
  if(SHOW_TEAMS) $wc_pool->displayTeams();
  $wc_pool->displayGroups();

  echo '<a name="rules"/>';
  echo '<h4>Rules</h4>';
  echo '<p>In Team brackets, each win in the tournament is worth 3 points. A draw is worth 1 point. The team in each bracket (and ties) that finishes with the most points will receive 3 bonus points.</p>';
  echo '<p>In Player brackets, each goal scored is worth 2 points. The player in each bracket (and ties) that finishes with the most goals will receive 3 bonus points.</p>';
  echo '<h4>Prizes</h4>';

  echo '<h3>Squares for World Cup final</h3>';
  echo '<p>Winner gets a soccer card prize pack. Squares were assigned using random.org</p>';
  echo '<table class="imagetable"><tbody>';
  echo '<tr><td>Argentina wins in regulation 1-0</td><td>RONALDOAINTDAGOATMESSIBETTERIMTHICK29MBAPPESDAGOAT</td></tr>';
  echo '<tr><td>Argentina wins in regulation 2-0</td><td>Shea-naldo</td></tr>';
  echo '<tr><td>Argentina wins in regulation 2-1</td><td>PSG Kai</td></tr>';
  echo '<tr><td>Argentina wins in regulation 3-0</td><td>Ronaldo ain\'t the GOAT</td></tr>';
  echo '<tr><td>Argentina wins in regulation 3-1</td><td>Simon FC</td></tr>';
  echo '<tr><td>Argentina wins in regulation 3-2</td><td>SSUUUUIIIIIII</td></tr>';
  echo '<tr><td>France wins in regulation 1-0</td><td>Mmm bop bappe</td></tr>';
  echo '<tr><td>France wins in regulation 2-0</td><td>NobodyisbetterthanDAVIESDAGOATSUUUUUUUIIIII100</td></tr>';
  echo '<tr><td>France wins in regulation 2-1</td><td>The eye hawks</td></tr>';
  echo '<tr><td>France wins in regulation 3-0</td><td>Team O.P.</td></tr>';
  echo '<tr><td>France wins in regulation 3-1</td><td>The Bazoukies</td></tr>';
  echo '<tr><td>France wins in regulation 3-2</td><td>Salah is not the GOAT FC</td></tr>';
  echo '<tr><td>Argentina wins in extra time. Extra Time score is 1-0</td><td>Vancouver united</td></tr>';
  echo '<tr><td>Argentina wins in extra time. Extra Time score is 2-0</td><td>Messi is the GOAT FC</td></tr>';
  echo '<tr><td>France wins in extra time. Extra Time score is 1-0</td><td>Da Boyz</td></tr>';
  echo '<tr><td>France wins in extra time. Extra Time score is 2-0</td><td>Kieran\'s football team</td></tr>';
  echo '<tr><td class="out">Argentina wins in shootout</td><td class="out">Kieran\'s other team</td></tr>';
  echo '<tr><td>France wins in shootout</td><td>Messi ain\'t the GOAT Ronaldo better</td></tr>';
  echo '<tr><td>Any other regulation or extra time score resulting in a win</td><td>Team O.P. 2.0</td></tr>';
  echo '</tbody></table>';

  echo '<p><span>Other Prizes:</span>';
  echo '<ul><li>1st - $40</li><li>2nd - $20</li><li>3rd - $10</li>';
  echo '<li>4th - Jonathan David card</li>';
  echo '<li>6th - Alphonso Davies card</li>';
  echo '<li>8th - Alphonso Davies card</li>';
  echo '<li>18th - Milan Borjan card (because he\'s number 18!)</li>';
  echo '<li>Last Place - A pack of Match Attax cards</li>';
  echo '</ul></p>';

  echo '<h4>Tiebreakers</h4>';
  echo '<p>If there are ties in the top three spots at the end of the tournament, tiebreakers in order are:';
  echo '<ul><li>Picked the World Cup winner in their bracket</li>';
  echo '<li>Made the most picks that received the Bonus Pts for their group</li>';
  echo '<li>Scored the most goals</li></ul>';
  echo '<h2>Good Luck!</h2>';
}

file_put_contents('output.html', ob_get_contents());
ob_end_flush();

?>
