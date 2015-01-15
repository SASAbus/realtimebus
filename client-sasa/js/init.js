var codificaLinee = new Array();
var i = 0;
/*
Leggenda campi:
li_loc: contesto di localizzazione - 0 Urbano e 1 Extraurbano (solo nostro)
li_nr: numero della linea
str_li_var: variante
lidname: nome della linea
li_ri_nr: direzione della linea - 1 andata e 2 ritorno
li_r,li_g,li_b: colore RGB
*/

device = detectDevice();



/*
 * Linee urabne per Bolzano
 */
codificaLinee['1001'] = 0;
codificaLinee['1003'] = 0;
codificaLinee['1005'] = 0;
codificaLinee['1006'] = 0;
codificaLinee['1071'] = 0;
codificaLinee['1072'] = 0;
codificaLinee['1008'] = 0;
codificaLinee['1009'] = 0;
codificaLinee['1101'] = 0;
codificaLinee['1102'] = 0;
codificaLinee['1011'] = 0;
codificaLinee['1012'] = 0;
codificaLinee['1014'] = 0;
codificaLinee['16'] = 0;
codificaLinee['1153'] = 0;
codificaLinee['1153'] = 0;
codificaLinee['110'] = 0;
codificaLinee['111'] = 0;


/*
* Linee urabne per Merano
*/
/*
codificaLinee['1'] = 0;
codificaLinee['2'] = 0;
codificaLinee['3'] = 0;
codificaLinee['4'] = 0;
codificaLinee['6'] = 0;
codificaLinee['146'] = 0;
*/

/*
* Linee suburbane per Bolzano
*/
codificaLinee['201'] = 0;
codificaLinee['183'] = 0;


/*
* Linee suburbane per MErano
*/
/*
codificaLinee['211'] = 1;
codificaLinee['201'] = 1;
codificaLinee['212'] = 1;
codificaLinee['213'] = 1;
codificaLinee['214'] = 1;
codificaLinee['225'] = 1;
*/
if(device[0] == 'smartphone'){
	SASABus.config.rowsLimit = 2;
	SASABus.setDialogWidth(260);
	SASABus.config.pinToDialogDistance 	= 48;
	SASABus.config.pinHeight			= 40;
	SASABus.config.yOffset				= 60;
	$('.map-body').append('<div id="serverTime"><span class="label">Time</span><span class="reload"></span></div>');
}
if(device[0] == 'desktop'){
	SASABus.config.yOffset				= 20;
	SASABus.setDialogWidth(300);
	$('.panel').append('<div id="serverTime"><span class="label">Time</span> <span class="reload"></span></div>');
}
