<?php

define('UPDATING', false);
define('LAST_UPDATE', 'After Ecuador vs Holland');
define('SHOW_TEAMS', true);
define('SHOW_BONUS_TEXT', true);
define('TWEET', false);

/*************************************************/
/******************* TEAMS ***********************/
/*************************************************/

/*************************************************/
//A
define('BRAZIL_WINS', 3);		define('BRAZIL_TIES', 0);		define('BRAZIL_BONUS', 0);
define('ARGENTINA_WINS', 0);	define('ARGENTINA_TIES', 0);	define('ARGENTINA_BONUS', 0);
define('FRANCE_WINS', 3);  define('FRANCE_TIES', 0);  define('FRANCE_BONUS', 0);
define('BRAZIL_OUT', 0);		define('ARGENTINA_OUT', 0); define('FRANCE_OUT', 0);

define('BRAZIL', 	serialize(array(BRAZIL_WINS, BRAZIL_TIES, BRAZIL_BONUS, BRAZIL_OUT)));
define('ARGENTINA', serialize(array(ARGENTINA_WINS, ARGENTINA_TIES, ARGENTINA_BONUS, ARGENTINA_OUT)));
define('FRANCE',  serialize(array(FRANCE_WINS, FRANCE_TIES, FRANCE_BONUS, FRANCE_OUT)));



/*************************************************/
//B
define('SPAIN_WINS', 3);		define('SPAIN_TIES', 0);		define('SPAIN_BONUS', 0);
define('ENGLAND_WINS', 3);		define('ENGLAND_TIES', 1);		define('ENGLAND_BONUS', 0);
define('HOLLAND_WINS', 3);    define('HOLLAND_TIES', 1);    define('HOLLAND_BONUS', 0);
define('SPAIN_OUT', 0);			define('ENGLAND_OUT', 0);   define('HOLLAND_OUT', 0);

define('SPAIN', 	serialize(array(SPAIN_WINS, SPAIN_TIES, SPAIN_BONUS, SPAIN_OUT)));
define('ENGLAND', 	serialize(array(ENGLAND_WINS, ENGLAND_TIES, ENGLAND_BONUS, ENGLAND_OUT)));
define('HOLLAND',   serialize(array(HOLLAND_WINS, HOLLAND_TIES, HOLLAND_BONUS, HOLLAND_OUT)));


/*************************************************/
//C
define('GERMANY_WINS', 0);   define('GERMANY_TIES', 0);   define('GERMANY_BONUS', 0);
define('PORTUGAL_WINS', 3);   define('PORTUGAL_TIES', 0);   define('PORTUGAL_BONUS', 0);
define('BELGIUM_WINS', 3);		define('BELGIUM_TIES', 0);		define('BELGIUM_BONUS', 0);
define('GERMANY_OUT', 0);  define('PORTUGAL_OUT', 0);define('BELGIUM_OUT', 0);

define('GERMANY',  serialize(array(GERMANY_WINS, GERMANY_TIES, GERMANY_BONUS, GERMANY_OUT)));
define('PORTUGAL',  serialize(array(PORTUGAL_WINS, PORTUGAL_TIES, PORTUGAL_BONUS, PORTUGAL_OUT)));
define('BELGIUM', 	serialize(array(BELGIUM_WINS, BELGIUM_TIES, BELGIUM_BONUS, BELGIUM_OUT)));


/*************************************************/
//D
define('DENMARK_WINS', 0);		define('DENMARK_TIES', 1);		define('DENMARK_BONUS', 0);
define('CROATIA_WINS', 0);		define('CROATIA_TIES', 1);		define('CROATIA_BONUS', 0);
define('URUGUAY_WINS', 0);		define('URUGUAY_TIES', 1);		define('URUGUAY_BONUS', 0);
define('DENMARK_OUT', 0);		define('CROATIA_OUT', 0);			define('URUGUAY_OUT', 0);

define('DENMARK', 	serialize(array(DENMARK_WINS, DENMARK_TIES, DENMARK_BONUS, DENMARK_OUT)));
define('CROATIA',   serialize(array(CROATIA_WINS, CROATIA_TIES, CROATIA_BONUS, CROATIA_OUT)));
define('URUGUAY',   serialize(array(URUGUAY_WINS, URUGUAY_TIES, URUGUAY_BONUS, URUGUAY_OUT)));


/*************************************************/
//E
define('SWITZ_WINS', 3);    define('SWITZ_TIES', 0);    define('SWITZ_BONUS', 0);
define('ECUADOR_WINS', 3);	define('ECUADOR_TIES', 1);		define('ECUADOR_BONUS', 0);
define('MEXICO_WINS', 0);		define('MEXICO_TIES', 1);		define('MEXICO_BONUS', 0);
define('SWITZ_OUT', 0);		define('ECUADOR_OUT', 0);			define('MEXICO_OUT', 0);

define('SWITZ',   serialize(array(SWITZ_WINS, SWITZ_TIES, SWITZ_BONUS, SWITZ_OUT)));
define('ECUADOR', 	serialize(array(ECUADOR_WINS, ECUADOR_TIES, ECUADOR_BONUS, ECUADOR_OUT)));
define('MEXICO', 	serialize(array(MEXICO_WINS, MEXICO_TIES, MEXICO_BONUS, MEXICO_OUT)));


/*************************************************/
//F
define('POLAND_WINS', 0);		define('POLAND_TIES', 1);		define('POLAND_BONUS', 0);
define('SENEGAL_WINS', 3);		define('SENEGAL_TIES', 0);		define('SENEGAL_BONUS', 0);
define('USA_WINS', 0);		define('USA_TIES', 2);		define('USA_BONUS', 0);
define('SERBIA_WINS', 0);		define('SERBIA_TIES', 0);		define('SERBIA_BONUS', 0);
define('POLAND_OUT', 0);			define('SENEGAL_OUT', 0);			define('USA_OUT', 0);	define('SERBIA_OUT', 0);

define('POLAND', 	serialize(array(POLAND_WINS, POLAND_TIES, POLAND_BONUS, POLAND_OUT)));
define('SENEGAL', 	serialize(array(SENEGAL_WINS, SENEGAL_TIES, SENEGAL_BONUS, SENEGAL_OUT)));
define('USA', 	serialize(array(USA_WINS, USA_TIES, USA_BONUS, USA_OUT)));
define('SERBIA', 	serialize(array(SERBIA_WINS, SERBIA_TIES, SERBIA_BONUS, SERBIA_OUT)));


/*************************************************/
//G
define('WALES_WINS', 0);		define('WALES_TIES', 1);		define('WALES_BONUS', 0);
define('MOROCCO_WINS', 0);		define('MOROCCO_TIES', 1);		define('MOROCCO_BONUS', 0);
define('KOREA_WINS', 0);		define('KOREA_TIES', 1);		define('KOREA_BONUS', 0);
define('WALES_OUT', 0);		define('MOROCCO_OUT', 0);		define('KOREA_OUT', 0);

define('WALES', 	serialize(array(WALES_WINS, WALES_TIES, WALES_BONUS, WALES_OUT)));
define('MOROCCO', 	serialize(array(MOROCCO_WINS, MOROCCO_TIES, MOROCCO_BONUS, MOROCCO_OUT)));
define('KOREA', 	serialize(array(KOREA_WINS, KOREA_TIES, KOREA_BONUS, KOREA_OUT)));


/*************************************************/
//H
define('CANADA_WINS', 0);			define('CANADA_TIES', 0);			define('CANADA_BONUS', 0);
define('GHANA_WINS', 0);		define('GHANA_TIES', 0);		define('GHANA_BONUS', 0);
define('JAPAN_WINS', 3);		define('JAPAN_TIES', 0);		define('JAPAN_BONUS', 0);
define('CANADA_OUT', 0);			define('GHANA_OUT', 0);			define('JAPAN_OUT', 0);

define('CANADA', 		serialize(array(CANADA_WINS, CANADA_TIES, CANADA_BONUS, CANADA_OUT)));
define('GHANA', 	serialize(array(GHANA_WINS, GHANA_TIES, GHANA_BONUS, GHANA_OUT)));
define('JAPAN', 	serialize(array(JAPAN_WINS, JAPAN_TIES, JAPAN_BONUS, JAPAN_OUT)));


/*************************************************/
//I
define('AUSTRALIA_WINS', 0);		define('AUSTRALIA_TIES', 0);		define('AUSTRALIA_BONUS', 0);
define('CAMEROON_WINS', 0);   define('CAMEROON_TIES', 0);   define('CAMEROON_BONUS', 0);
define('IRAN_WINS', 3);		define('IRAN_TIES', 0);		define('IRAN_BONUS', 0);
define('AUSTRALIA_OUT', 0);		define('CAMEROON_OUT', 0);			define('IRAN_OUT', 0);

define('AUSTRALIA', 	serialize(array(AUSTRALIA_WINS, AUSTRALIA_TIES, AUSTRALIA_BONUS, AUSTRALIA_OUT)));
define('CAMEROON',  serialize(array(CAMEROON_WINS, CAMEROON_TIES, CAMEROON_BONUS, CAMEROON_OUT)));
define('IRAN', 	serialize(array(IRAN_WINS, IRAN_TIES, IRAN_BONUS, IRAN_OUT)));


/*************************************************/
//J
define('TUNISIA_WINS', 0);	define('TUNISIA_TIES', 1);	define('TUNISIA_BONUS', 0);
define('QATAR_WINS', 0);			define('QATAR_TIES', 0);			define('QATAR_BONUS', 0);
define('SAUDI_WINS', 3);   define('SAUDI_TIES', 0);   define('SAUDI_BONUS', 0);
define('COSTA_WINS', 0);		define('COSTA_TIES', 0);		define('COSTA_BONUS', 0);
define('TUNISIA_OUT', 0);		define('QATAR_OUT', 0);			define('SAUDI_OUT', 0);		define('COSTA_OUT', 0);

define('TUNISIA', serialize(array(TUNISIA_WINS, TUNISIA_TIES, TUNISIA_BONUS, TUNISIA_OUT)));
define('QATAR', 		serialize(array(QATAR_WINS, QATAR_TIES, QATAR_BONUS, QATAR_OUT)));
define('SAUDI', 	serialize(array(SAUDI_WINS, SAUDI_TIES, SAUDI_BONUS, SAUDI_OUT)));
define('COSTA',   serialize(array(COSTA_WINS, COSTA_TIES, COSTA_BONUS, COSTA_OUT)));



/*************************************************/
/****************** PLAYERS **********************/
/*************************************************/

/*************************************************/
//K
define('MBAPPE_GOALS', 2);    define('MBAPPE_BONUS', 0);
define('MESSI_GOALS', 2);   define('MESSI_BONUS', 0);
define('KANE_GOALS', 0);   define('KANE_BONUS', 0);
define('MBAPPE_OUT', 0);	 define('MESSI_OUT', 0); define('KANE_OUT', 0);

define('MBAPPE', serialize(array(MBAPPE_GOALS, MBAPPE_BONUS, MBAPPE_OUT)));
define('MESSI', serialize(array(MESSI_GOALS, MESSI_BONUS, MESSI_OUT)));
define('KANE', serialize(array(KANE_GOALS, KANE_BONUS, KANE_OUT)));


/*************************************************/
//L
define('NEYMAR_GOALS', 0);		define('NEYMAR_BONUS', 0);
define('BENZEMA_GOALS', 0);		define('BENZEMA_BONUS', 0);
define('RONALDO_GOALS', 2);		define('RONALDO_BONUS', 0);
define('NEYMAR_OUT', 0);		define('BENZEMA_OUT', 0);		define('RONALDO_OUT', 0);

define('NEYMAR', serialize(array(NEYMAR_GOALS, NEYMAR_BONUS, NEYMAR_OUT)));
define('BENZEMA', serialize(array(BENZEMA_GOALS, BENZEMA_BONUS, BENZEMA_OUT)));
define('RONALDO', serialize(array(RONALDO_GOALS, RONALDO_BONUS, RONALDO_OUT)));


/*************************************************/
//M
define('LUKAKU_GOALS', 0);		define('LUKAKU_BONUS', 0);
define('LAUTARO_GOALS', 0);		define('LAUTARO_BONUS', 0);
define('DEPAY_GOALS', 0);		define('DEPAY_BONUS', 0);
define('VINI_GOALS', 0);		define('VINI_BONUS', 0);
define('LUKAKU_OUT', 0);		define('LAUTARO_OUT', 0);		define('DEPAY_OUT', 0);		define('VINI_OUT', 0);

define('LUKAKU', serialize(array(LUKAKU_GOALS, LUKAKU_BONUS, LUKAKU_OUT)));
define('LAUTARO', serialize(array(LAUTARO_GOALS, LAUTARO_BONUS, LAUTARO_OUT)));
define('DEPAY', serialize(array(DEPAY_GOALS, DEPAY_BONUS, DEPAY_OUT)));
define('VINI', serialize(array(VINI_GOALS, VINI_BONUS, VINI_OUT)));


/*************************************************/
//N
define('RICHARLISON_GOALS', 4);		define('RICHARLISON_BONUS', 0);
define('MORATA_GOALS', 2);		define('MORATA_BONUS', 0);
define('HAVERTZ_GOALS', 0);		define('HAVERTZ_BONUS', 0);
define('LEWANDOWSKI_GOALS', 0);		define('LEWANDOWSKI_BONUS', 0);
define('RICHARLISON_OUT', 0);			define('MORATA_OUT', 0);		define('HAVERTZ_OUT', 0);		define('LEWANDOWSKI_OUT', 0);

define('RICHARLISON', serialize(array(RICHARLISON_GOALS, RICHARLISON_BONUS, RICHARLISON_OUT)));
define('MORATA', serialize(array(MORATA_GOALS, MORATA_BONUS, MORATA_OUT)));
define('HAVERTZ', serialize(array(HAVERTZ_GOALS, HAVERTZ_BONUS, HAVERTZ_OUT)));
define('LEWANDOWSKI', serialize(array(LEWANDOWSKI_GOALS, LEWANDOWSKI_BONUS, LEWANDOWSKI_OUT)));


/*************************************************/
//O
define('TORRES_GOALS', 4);		define('TORRES_BONUS', 0);
define('STERLING_GOALS', 2);		define('STERLING_BONUS', 0);
define('GNABRY_GOALS', 0);	define('GNABRY_BONUS', 0);
define('GRIEZMANN_GOALS', 0);		define('GRIEZMANN_BONUS', 0);
define('TORRES_OUT', 0);		define('STERLING_OUT', 0);		define('GNABRY_OUT', 0);		define('GRIEZMANN_OUT', 0);

define('TORRES', serialize(array(TORRES_GOALS, TORRES_BONUS, TORRES_OUT)));
define('STERLING', serialize(array(STERLING_GOALS, STERLING_BONUS, STERLING_OUT)));
define('GNABRY', serialize(array(GNABRY_GOALS, GNABRY_BONUS, GNABRY_OUT)));
define('GRIEZMANN', serialize(array(GRIEZMANN_GOALS, GRIEZMANN_BONUS, GRIEZMANN_OUT)));


/*************************************************/
//P
define('FATI_GOALS', 0);		define('FATI_BONUS', 0);
define('FODEN_GOALS', 0);		define('FODEN_BONUS', 0);
define('DEBRUYNE_GOALS', 0);		define('DEBRUYNE_BONUS', 0);
define('NUNEZ_GOALS', 0);		define('NUNEZ_BONUS', 0);
define('FATI_OUT', 0);		define('FODEN_OUT', 0);		define('DEBRUYNE_OUT', 0);		define('NUNEZ_OUT', 0);

define('FATI', serialize(array(FATI_GOALS, FATI_BONUS, FATI_OUT)));
define('FODEN', serialize(array(FODEN_GOALS, FODEN_BONUS, FODEN_OUT)));
define('DEBRUYNE', serialize(array(DEBRUYNE_GOALS, DEBRUYNE_BONUS, DEBRUYNE_OUT)));
define('NUNEZ', serialize(array(NUNEZ_GOALS, NUNEZ_BONUS, NUNEZ_OUT)));


/*************************************************/
//Q
define('VLAHOVIC_GOALS', 0);		define('VLAHOVIC_BONUS', 0);
define('SANE_GOALS', 0);		define('SANE_BONUS', 0);
define('BALE_GOALS', 2);		define('BALE_BONUS', 0);
define('GAKPO_GOALS', 4);		define('GAKPO_BONUS', 0);
define('VLAHOVIC_OUT', 0);	define('SANE_OUT', 0);		define('BALE_OUT', 0);		define('GAKPO_OUT', 0);

define('VLAHOVIC', serialize(array(VLAHOVIC_GOALS, VLAHOVIC_BONUS, VLAHOVIC_OUT)));
define('SANE', serialize(array(SANE_GOALS, SANE_BONUS, SANE_OUT)));
define('BALE', serialize(array(BALE_GOALS, BALE_BONUS, BALE_OUT)));
define('GAKPO', serialize(array(GAKPO_GOALS, GAKPO_BONUS, GAKPO_OUT)));


/*************************************************/
//R
define('BERNARDO_GOALS', 0);		define('BERNARDO_BONUS', 0);
define('MODRIC_GOALS', 0);	define('MODRIC_BONUS', 0);
define('PULISIC_GOALS', 0);		define('PULISIC_BONUS', 0);
define('SON_GOALS', 0);		define('SON_BONUS', 0);
define('BERNARDO_OUT', 0);		define('MODRIC_OUT', 0);		define('PULISIC_OUT', 0);		define('SON_OUT', 0);

define('BERNARDO', serialize(array(BERNARDO_GOALS, BERNARDO_BONUS, BERNARDO_OUT)));
define('MODRIC', serialize(array(MODRIC_GOALS, MODRIC_BONUS, MODRIC_OUT)));
define('PULISIC', serialize(array(PULISIC_GOALS, PULISIC_BONUS, PULISIC_OUT)));
define('SON', serialize(array(SON_GOALS, SON_BONUS, SON_OUT)));


/*************************************************/
//S
define('HOJBJERG_GOALS', 0);		define('HOJBJERG_BONUS', 0);
define('JIMENEZ_GOALS', 0);		define('JIMENEZ_BONUS', 0);
define('AYEW_GOALS', 2);		define('AYEW_BONUS', 0);
define('KAMADA_GOALS', 0);		define('KAMADA_BONUS', 0);
define('HOJBJERG_OUT', 0);		define('JIMENEZ_OUT', 0);		define('AYEW_OUT', 0);		define('KAMADA_OUT', 0);

define('HOJBJERG', serialize(array(HOJBJERG_GOALS, HOJBJERG_BONUS, HOJBJERG_OUT)));
define('JIMENEZ', serialize(array(JIMENEZ_GOALS, JIMENEZ_BONUS, JIMENEZ_OUT)));
define('AYEW', serialize(array(AYEW_GOALS, AYEW_BONUS, AYEW_OUT)));
define('KAMADA', serialize(array(KAMADA_GOALS, KAMADA_BONUS, KAMADA_OUT)));


/*************************************************/
//T
define('DAVIES_GOALS', 0);		define('DAVIES_BONUS', 0);
define('LARIN_GOALS', 0);		define('LARIN_BONUS', 0);
define('BUCHANON_GOALS', 0);	define('BUCHANON_BONUS', 0);
define('CAVALLINI_GOALS', 0);	define('CAVALLINI_BONUS', 0);
define('DAVID_GOALS', 0);  define('DAVID_BONUS', 0);

define('DAVIES_OUT', 0);		define('LARIN_OUT', 0);		define('BUCHANON_OUT', 0);		define('CAVALLINI_OUT', 0);  define('DAVID_OUT', 0);

define('DAVIES', serialize(array(DAVIES_GOALS, DAVIES_BONUS, DAVIES_OUT)));
define('LARIN', serialize(array(LARIN_GOALS, LARIN_BONUS, LARIN_OUT)));
define('BUCHANON', serialize(array(BUCHANON_GOALS, BUCHANON_BONUS, BUCHANON_OUT)));
define('CAVALLINI', serialize(array(CAVALLINI_GOALS, CAVALLINI_BONUS, CAVALLINI_OUT)));
define('DAVID', serialize(array(DAVID_GOALS, DAVID_BONUS, DAVID_OUT)));

