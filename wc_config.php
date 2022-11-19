<?php

define('UPDATING', false);
define('LAST_UPDATE', 'FINAL STANDINGS');
define('SHOW_TEAMS', true);
define('SHOW_BONUS_TEXT', true);
define('TWEET', false);

/*************************************************/
/******************* TEAMS ***********************/
/*************************************************/

/*************************************************/
//A
define('BRAZIL_WINS', 12);		define('BRAZIL_TIES', 1);		define('BRAZIL_BONUS', 0);
define('ARGENTINA_WINS', 18);	define('ARGENTINA_TIES', 0);	define('ARGENTINA_BONUS', 3);
define('BRAZIL_OUT', 1);		define('ARGENTINA_OUT', 1);

define('BRAZIL', 	serialize(array(BRAZIL_WINS, BRAZIL_TIES, BRAZIL_BONUS, BRAZIL_OUT)));
define('ARGENTINA', serialize(array(ARGENTINA_WINS, ARGENTINA_TIES, ARGENTINA_BONUS, ARGENTINA_OUT)));


/*************************************************/
//B
define('SPAIN_WINS', 3);		define('SPAIN_TIES', 0);		define('SPAIN_BONUS', 0);
define('GERMANY_WINS', 18);		define('GERMANY_TIES', 1);		define('GERMANY_BONUS', 3);
define('SPAIN_OUT', 1);			define('GERMANY_OUT', 1);

define('SPAIN', 	serialize(array(SPAIN_WINS, SPAIN_TIES, SPAIN_BONUS, SPAIN_OUT)));
define('GERMANY', 	serialize(array(GERMANY_WINS, GERMANY_TIES, GERMANY_BONUS, GERMANY_OUT)));


/*************************************************/
//C
define('BELGIUM_WINS', 12);		define('BELGIUM_TIES', 0);		define('BELGIUM_BONUS', 3);
define('FRANCE_WINS', 9);		define('FRANCE_TIES', 1);		define('FRANCE_BONUS', 0);
define('BELGIUM_OUT', 1);		define('FRANCE_OUT', 1);

define('BELGIUM', 	serialize(array(BELGIUM_WINS, BELGIUM_TIES, BELGIUM_BONUS, BELGIUM_OUT)));
define('FRANCE', 	serialize(array(FRANCE_WINS, FRANCE_TIES, FRANCE_BONUS, FRANCE_OUT)));


/*************************************************/
//D
define('HOLLAND_WINS', 18);		define('HOLLAND_TIES', 0);		define('HOLLAND_BONUS', 3);
define('ITALY_WINS', 3);		define('ITALY_TIES', 0);		define('ITALY_BONUS', 0);
define('PORTUGAL_WINS', 3);		define('PORTUGAL_TIES', 1);		define('PORTUGAL_BONUS', 0);
define('HOLLAND_OUT', 1);		define('ITALY_OUT', 1);			define('PORTUGAL_OUT', 1);

define('HOLLAND', 	serialize(array(HOLLAND_WINS, HOLLAND_TIES, HOLLAND_BONUS, HOLLAND_OUT)));
define('ITALY', 	serialize(array(ITALY_WINS, ITALY_TIES, ITALY_BONUS, ITALY_OUT)));
define('PORTUGAL', 	serialize(array(PORTUGAL_WINS, PORTUGAL_TIES, PORTUGAL_BONUS, PORTUGAL_OUT)));


/*************************************************/
//E
define('COLOMBIA_WINS', 12);	define('COLOMBIA_TIES', 0);		define('COLOMBIA_BONUS', 3);
define('SWITZ_WINS', 6);		define('SWITZ_TIES', 0);		define('SWITZ_BONUS', 0);
define('RUSSIA_WINS', 0);		define('RUSSIA_TIES', 2);		define('RUSSIA_BONUS', 0);
define('COLOMBIA_OUT', 1);		define('SWITZ_OUT', 1);			define('RUSSIA_OUT', 1);

define('COLOMBIA', 	serialize(array(COLOMBIA_WINS, COLOMBIA_TIES, COLOMBIA_BONUS, COLOMBIA_OUT)));
define('SWITZ', 	serialize(array(SWITZ_WINS, SWITZ_TIES, SWITZ_BONUS, SWITZ_OUT)));
define('RUSSIA', 	serialize(array(RUSSIA_WINS, RUSSIA_TIES, RUSSIA_BONUS, RUSSIA_OUT)));


/*************************************************/
//F
define('CHILE_WINS', 6);		define('CHILE_TIES', 0);		define('CHILE_BONUS', 3);
define('IVORY_WINS', 3);		define('IVORY_TIES', 0);		define('IVORY_BONUS', 0);
define('ENGLAND_WINS', 0);		define('ENGLAND_TIES', 1);		define('ENGLAND_BONUS', 0);
define('URUGUAY_WINS', 6);		define('URUGUAY_TIES', 0);		define('URUGUAY_BONUS', 3);
define('CHILE_OUT', 1);			define('IVORY_OUT', 1);			define('ENGLAND_OUT', 1);	define('URUGUAY_OUT', 1);

define('CHILE', 	serialize(array(CHILE_WINS, CHILE_TIES, CHILE_BONUS, CHILE_OUT)));
define('IVORY', 	serialize(array(IVORY_WINS, IVORY_TIES, IVORY_BONUS, IVORY_OUT)));
define('ENGLAND', 	serialize(array(ENGLAND_WINS, ENGLAND_TIES, ENGLAND_BONUS, ENGLAND_OUT)));
define('URUGUAY', 	serialize(array(URUGUAY_WINS, URUGUAY_TIES, URUGUAY_BONUS, URUGUAY_OUT)));


/*************************************************/
//G
define('ECUADOR_WINS', 3);		define('ECUADOR_TIES', 1);		define('ECUADOR_BONUS', 0);
define('CROATIA_WINS', 3);		define('CROATIA_TIES', 0);		define('CROATIA_BONUS', 0);
define('JAPAN_WINS', 0);		define('JAPAN_TIES', 1);		define('JAPAN_BONUS', 0);
define('MEXICO_WINS', 6);		define('MEXICO_TIES', 1);		define('MEXICO_BONUS', 3);
define('ECUADOR_OUT', 1);		define('CROATIA_OUT', 1);		define('JAPAN_OUT', 1);		define('MEXICO_OUT', 1);

define('ECUADOR', 	serialize(array(ECUADOR_WINS, ECUADOR_TIES, ECUADOR_BONUS, ECUADOR_OUT)));
define('CROATIA', 	serialize(array(CROATIA_WINS, CROATIA_TIES, CROATIA_BONUS, CROATIA_OUT)));
define('JAPAN', 	serialize(array(JAPAN_WINS, JAPAN_TIES, JAPAN_BONUS, JAPAN_OUT)));
define('MEXICO', 	serialize(array(MEXICO_WINS, MEXICO_TIES, MEXICO_BONUS, MEXICO_OUT)));


/*************************************************/
//H
define('USA_WINS', 3);			define('USA_TIES', 1);			define('USA_BONUS', 3);
define('GHANA_WINS', 0);		define('GHANA_TIES', 1);		define('GHANA_BONUS', 0);
define('BOSNIA_WINS', 3);		define('BOSNIA_TIES', 0);		define('BOSNIA_BONUS', 0);
define('GREECE_WINS', 3);		define('GREECE_TIES', 1);		define('GREECE_BONUS', 3);
define('USA_OUT', 1);			define('GHANA_OUT', 1);			define('BOSNIA_OUT', 1);		define('GREECE_OUT', 1);

define('USA', 		serialize(array(USA_WINS, USA_TIES, USA_BONUS, USA_OUT)));
define('GHANA', 	serialize(array(GHANA_WINS, GHANA_TIES, GHANA_BONUS, GHANA_OUT)));
define('BOSNIA', 	serialize(array(BOSNIA_WINS, BOSNIA_TIES, BOSNIA_BONUS, BOSNIA_OUT)));
define('GREECE', 	serialize(array(GREECE_WINS, GREECE_TIES, GREECE_BONUS, GREECE_OUT)));


/*************************************************/
//I
define('NIGERIA_WINS', 3);		define('NIGERIA_TIES', 1);		define('NIGERIA_BONUS', 3);
define('KOREA_WINS', 0);		define('KOREA_TIES', 1);		define('KOREA_BONUS', 0);
define('CAMEROON_WINS', 0);		define('CAMEROON_TIES', 0);		define('CAMEROON_BONUS', 0);
define('ALGERIA_WINS', 3);		define('ALGERIA_TIES', 1);		define('ALGERIA_BONUS', 3);
define('NIGERIA_OUT', 1);		define('KOREA_OUT', 1);			define('CAMEROON_OUT', 1);		define('ALGERIA_OUT', 1);

define('NIGERIA', 	serialize(array(NIGERIA_WINS, NIGERIA_TIES, NIGERIA_BONUS, NIGERIA_OUT)));
define('KOREA', 	serialize(array(KOREA_WINS, KOREA_TIES, KOREA_BONUS, KOREA_OUT)));
define('CAMEROON', 	serialize(array(CAMEROON_WINS, CAMEROON_TIES, CAMEROON_BONUS, CAMEROON_OUT)));
define('ALGERIA', 	serialize(array(ALGERIA_WINS, ALGERIA_TIES, ALGERIA_BONUS, ALGERIA_OUT)));


/*************************************************/
//J
define('AUSTRALIA_WINS', 0);	define('AUSTRALIA_TIES', 0);	define('AUSTRALIA_BONUS', 0);
define('IRAN_WINS', 0);			define('IRAN_TIES', 1);			define('IRAN_BONUS', 0);
define('COSTA_WINS', 9);		define('COSTA_TIES', 1);		define('COSTA_BONUS', 3);
define('HONDURAS_WINS', 0);		define('HONDURAS_TIES', 0);		define('HONDURAS_BONUS', 0);
define('AUSTRALIA_OUT', 1);		define('IRAN_OUT', 1);			define('COSTA_OUT', 1);		define('HONDURAS_OUT', 1);

define('AUSTRALIA', serialize(array(AUSTRALIA_WINS, AUSTRALIA_TIES, AUSTRALIA_BONUS, AUSTRALIA_OUT)));
define('IRAN', 		serialize(array(IRAN_WINS, IRAN_TIES, IRAN_BONUS, IRAN_OUT)));
define('COSTA', 	serialize(array(COSTA_WINS, COSTA_TIES, COSTA_BONUS, COSTA_OUT)));
define('HONDURAS', 	serialize(array(HONDURAS_WINS, HONDURAS_TIES, HONDURAS_BONUS, HONDURAS_OUT)));



/*************************************************/
/****************** PLAYERS **********************/
/*************************************************/

/*************************************************/
//K
define('MESSI_GOALS', 8);		define('MESSI_BONUS', 3);
define('NEYMAR_GOALS', 8);		define('NEYMAR_BONUS', 3);
define('MESSI_OUT', 1);			define('NEYMAR_OUT', 1);

define('MESSI', serialize(array(MESSI_GOALS, MESSI_BONUS, MESSI_OUT)));
define('NEYMAR', serialize(array(NEYMAR_GOALS, NEYMAR_BONUS, NEYMAR_OUT)));


/*************************************************/
//L
define('AGUERO_GOALS', 0);		define('AGUERO_BONUS', 0);
define('RONALDO_GOALS', 2);		define('RONALDO_BONUS', 0);
define('SUAREZ_GOALS', 4);		define('SUAREZ_BONUS', 3);
define('LUKAKU_GOALS', 2);		define('LUKAKU_BONUS', 0);
define('AGUERO_OUT', 1);		define('RONALDO_OUT', 1);		define('SUAREZ_OUT', 1);		define('LUKAKU_OUT', 1);

define('AGUERO', serialize(array(AGUERO_GOALS, AGUERO_BONUS, AGUERO_OUT)));
define('RONALDO', serialize(array(RONALDO_GOALS, RONALDO_BONUS, RONALDO_OUT)));
define('SUAREZ', serialize(array(SUAREZ_GOALS, SUAREZ_BONUS, SUAREZ_OUT)));
define('LUKAKU', serialize(array(LUKAKU_GOALS, LUKAKU_BONUS, LUKAKU_OUT)));


/*************************************************/
//M
define('HIGUAIN_GOALS', 2);		define('HIGUAIN_BONUS', 0);
define('DCOSTA_GOALS', 0);		define('DCOSTA_BONUS', 0);
define('PERSIE_GOALS', 8);		define('PERSIE_BONUS', 3);
define('FALCAO_GOALS', 0);		define('FALCAO_BONUS', 0);
define('HIGUAIN_OUT', 1);		define('DCOSTA_OUT', 1);		define('PERSIE_OUT', 1);		define('FALCAO_OUT', 1);

define('HIGUAIN', serialize(array(HIGUAIN_GOALS, HIGUAIN_BONUS, HIGUAIN_OUT)));
define('DCOSTA', serialize(array(DCOSTA_GOALS, DCOSTA_BONUS, DCOSTA_OUT)));
define('PERSIE', serialize(array(PERSIE_GOALS, PERSIE_BONUS, PERSIE_OUT)));
define('FALCAO', serialize(array(FALCAO_GOALS, FALCAO_BONUS, FALCAO_OUT)));


/*************************************************/
//N
define('FRED_GOALS', 2);		define('FRED_BONUS', 0);
define('HULK_GOALS', 0);		define('HULK_BONUS', 0);
define('BENZEMA_GOALS', 6);		define('BENZEMA_BONUS', 3);
define('CAVANI_GOALS', 2);		define('CAVANI_BONUS', 0);
define('FRED_OUT', 1);			define('HULK_OUT', 1);		define('BENZEMA_OUT', 1);		define('CAVANI_OUT', 1);

define('FRED', serialize(array(FRED_GOALS, FRED_BONUS, FRED_OUT)));
define('HULK', serialize(array(HULK_GOALS, HULK_BONUS, HULK_OUT)));
define('BENZEMA', serialize(array(BENZEMA_GOALS, BENZEMA_BONUS, BENZEMA_OUT)));
define('CAVANI', serialize(array(CAVANI_GOALS, CAVANI_BONUS, CAVANI_OUT)));


/*************************************************/
//O
define('NEGREDO_GOALS', 0);		define('NEGREDO_BONUS', 0);
define('OSCAR_GOALS', 4);		define('OSCAR_BONUS', 0);
define('BALOTELLI_GOALS', 2);	define('BALOTELLI_BONUS', 0);
define('ROBBEN_GOALS', 6);		define('ROBBEN_BONUS', 3);
define('NEGREDO_OUT', 1);		define('OSCAR_OUT', 1);		define('BALOTELLI_OUT', 1);		define('ROBBEN_OUT', 1);

define('NEGREDO', serialize(array(NEGREDO_GOALS, NEGREDO_BONUS, NEGREDO_OUT)));
define('OSCAR', serialize(array(OSCAR_GOALS, OSCAR_BONUS, OSCAR_OUT)));
define('BALOTELLI', serialize(array(BALOTELLI_GOALS, BALOTELLI_BONUS, BALOTELLI_OUT)));
define('ROBBEN', serialize(array(ROBBEN_GOALS, ROBBEN_BONUS, ROBBEN_OUT)));


/*************************************************/
//P
define('MULLER_GOALS', 10);		define('MULLER_BONUS', 3);
define('LAVEZZI_GOALS', 0);		define('LAVEZZI_BONUS', 0);
define('GIROUD_GOALS', 2);		define('GIROUD_BONUS', 0);
define('TORRES_GOALS', 2);		define('TORRES_BONUS', 0);
define('MULLER_OUT', 1);		define('LAVEZZI_OUT', 1);		define('GIROUD_OUT', 1);		define('TORRES_OUT', 1);

define('MULLER', serialize(array(MULLER_GOALS, MULLER_BONUS, MULLER_OUT)));
define('LAVEZZI', serialize(array(LAVEZZI_GOALS, LAVEZZI_BONUS, LAVEZZI_OUT)));
define('GIROUD', serialize(array(GIROUD_GOALS, GIROUD_BONUS, GIROUD_OUT)));
define('TORRES', serialize(array(TORRES_GOALS, TORRES_BONUS, TORRES_OUT)));


/*************************************************/
//Q
define('VILLA_GOALS', 2);		define('VILLA_BONUS', 0);
define('KLOSE_GOALS', 4);		define('KLOSE_BONUS', 3);
define('ROONEY_GOALS', 2);		define('ROONEY_BONUS', 0);
define('PEDRO_GOALS', 0);		define('PEDRO_BONUS', 0);
define('VILLA_OUT', 1);			define('KLOSE_OUT', 1);		define('ROONEY_OUT', 1);		define('PEDRO_OUT', 1);

define('VILLA', serialize(array(VILLA_GOALS, VILLA_BONUS, VILLA_OUT)));
define('KLOSE', serialize(array(KLOSE_GOALS, KLOSE_BONUS, KLOSE_OUT)));
define('ROONEY', serialize(array(ROONEY_GOALS, ROONEY_BONUS, ROONEY_OUT)));
define('PEDRO', serialize(array(PEDRO_GOALS, PEDRO_BONUS, PEDRO_OUT)));


/*************************************************/
//R
define('RIBERY_GOALS', 0);		define('RIBERY_BONUS', 0);
define('HUNTELAAR_GOALS', 2);	define('HUNTELAAR_BONUS', 3);
define('DROGBA_GOALS', 0);		define('DROGBA_BONUS', 0);
define('DZEKO_GOALS', 2);		define('DZEKO_BONUS', 3);
define('RIBERY_OUT', 1);		define('HUNTELAAR_OUT', 1);		define('DROGBA_OUT', 1);		define('DZEKO_OUT', 1);

define('RIBERY', serialize(array(RIBERY_GOALS, RIBERY_BONUS, RIBERY_OUT)));
define('HUNTELAAR', serialize(array(HUNTELAAR_GOALS, HUNTELAAR_BONUS, HUNTELAAR_OUT)));
define('DROGBA', serialize(array(DROGBA_GOALS, DROGBA_BONUS, DROGBA_OUT)));
define('DZEKO', serialize(array(DZEKO_GOALS, DZEKO_BONUS, DZEKO_OUT)));


/*************************************************/
//S
define('FORLAN_GOALS', 0);		define('FORLAN_BONUS', 0);
define('PIRLO_GOALS', 0);		define('PIRLO_BONUS', 0);
define('SANCHEZ_GOALS', 4);		define('SANCHEZ_BONUS', 3);
define('HAZARD_GOALS', 0);		define('HAZARD_BONUS', 0);
define('FORLAN_OUT', 1);		define('PIRLO_OUT', 1);		define('SANCHEZ_OUT', 1);		define('HAZARD_OUT', 1);

define('FORLAN', serialize(array(FORLAN_GOALS, FORLAN_BONUS, FORLAN_OUT)));
define('PIRLO', serialize(array(PIRLO_GOALS, PIRLO_BONUS, PIRLO_OUT)));
define('SANCHEZ', serialize(array(SANCHEZ_GOALS, SANCHEZ_BONUS, SANCHEZ_OUT)));
define('HAZARD', serialize(array(HAZARD_GOALS, HAZARD_BONUS, HAZARD_OUT)));


/*************************************************/
//T
define('DEMPSEY_GOALS', 4);		define('DEMPSEY_BONUS', 3);
define('POSTIGA_GOALS', 0);		define('POSTIGA_BONUS', 0);
define('IMMOBILE_GOALS', 0);	define('IMMOBILE_BONUS', 0);
define('STURRIDGE_GOALS', 2);	define('STURRIDGE_BONUS', 0);
define('DEMPSEY_OUT', 1);		define('POSTIGA_OUT', 1);		define('IMMOBILE_OUT', 1);		define('STURRIDGE_OUT', 1);

define('DEMPSEY', serialize(array(DEMPSEY_GOALS, DEMPSEY_BONUS, DEMPSEY_OUT)));
define('POSTIGA', serialize(array(POSTIGA_GOALS, POSTIGA_BONUS, POSTIGA_OUT)));
define('IMMOBILE', serialize(array(IMMOBILE_GOALS, IMMOBILE_BONUS, IMMOBILE_OUT)));
define('STURRIDGE', serialize(array(STURRIDGE_GOALS, STURRIDGE_BONUS, STURRIDGE_OUT)));


/*************************************************/
//U
define('MARTINEZ_GOALS', 4);	define('MARTINEZ_BONUS', 3);
define('KERZHAKOV_GOALS', 2);	define('KERZHAKOV_BONUS', 0);
define('DRMIC_GOALS', 0);		define('DRMIC_BONUS', 0);
define('HERNANDEZ_GOALS', 2);	define('HERNANDEZ_BONUS', 0);
define('MARTINEZ_OUT', 1);		define('KERZHAKOV_OUT', 1);		define('DRMIC_OUT', 1);		define('HERNANDEZ_OUT', 1);

define('MARTINEZ', serialize(array(MARTINEZ_GOALS, MARTINEZ_BONUS, MARTINEZ_OUT)));
define('KERZHAKOV', serialize(array(KERZHAKOV_GOALS, KERZHAKOV_BONUS, KERZHAKOV_OUT)));
define('DRMIC', serialize(array(DRMIC_GOALS, DRMIC_BONUS, DRMIC_OUT)));
define('HERNANDEZ', serialize(array(HERNANDEZ_GOALS, HERNANDEZ_BONUS, HERNANDEZ_OUT)));


/*************************************************/
//V
define('CAHILL_GOALS', 4);		define('CAHILL_BONUS', 3);
define('MITROGLOU_GOALS', 0);	define('MITROGLOU_BONUS', 0);
define('EMENIKE_GOALS', 0);		define('EMENIKE_BONUS', 0);
define('GYAN_GOALS', 4);		define('GYAN_BONUS', 3);
define('CAHILL_OUT', 1);		define('MITROGLOU_OUT', 1);		define('EMENIKE_OUT', 1);		define('GYAN_OUT', 1);

define('CAHILL', serialize(array(CAHILL_GOALS, CAHILL_BONUS, CAHILL_OUT)));
define('MITROGLOU', serialize(array(MITROGLOU_GOALS, MITROGLOU_BONUS, MITROGLOU_OUT)));
define('EMENIKE', serialize(array(EMENIKE_GOALS, EMENIKE_BONUS, EMENIKE_OUT)));
define('GYAN', serialize(array(GYAN_GOALS, GYAN_BONUS, GYAN_OUT)));

?>