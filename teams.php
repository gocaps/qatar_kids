<?php

include_once('wc_config.php');

$dave = array();
$dave['name'] = 'TEST';
$dave['A']['ARGENTINA'] = ARGENTINA;
$dave['B']['HOLLAND'] = HOLLAND;
$dave['C']['GERMANY'] = GERMANY;
$dave['D']['CROATIA'] = CROATIA;
$dave['E']['ECUADOR'] = ECUADOR;
$dave['F']['USA'] = USA;
$dave['G']['KOREA'] = KOREA;
$dave['H']['CANADA'] = CANADA;
$dave['I']['CAMEROON'] = CAMEROON;
$dave['J']['SAUDI'] = SAUDI;
$dave['K']['MESSI'] = MESSI;
$dave['L']['NEYMAR'] = NEYMAR;
$dave['M']['LAUTARO'] = LAUTARO;
$dave['N']['MORATA'] = MORATA;
$dave['O']['STERLING'] = STERLING;
$dave['P']['FODEN'] = FODEN;
$dave['Q']['VLAHOVIC'] = VLAHOVIC;
$dave['R']['SON'] = SON;
$dave['S']['JIMENEZ'] = JIMENEZ;
$dave['T']['DAVID'] = DAVID;
define('DAVE', serialize($dave));

/********************************/

$wc_teams = array();
$wc_teams[] = $dave;
define('WC_TEAMS', serialize($wc_teams));
