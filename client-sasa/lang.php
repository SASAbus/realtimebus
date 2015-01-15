<?php
	function ___($varName)
	{
		global $lang,$vars;
		if(isset($vars[$lang.'_'.$varName]))
			print $vars[$lang.'_'.$varName];
		else print $lang.'_'.$varName;
	}

	global $vars;
	$vars = array();
	// Italiano
	$vars['it_meranotitle'] = 'SASA - Real time bus';
	$vars['it_urbani'] = 'Urbani';
	$vars['it_extraurbani'] = 'Extraurbani';
	$vars['it_deseleziona'] = 'Deseleziona';
	$vars['it_tuttelelinee'] = 'tutte le linee';
	$vars['it_varianti'] = 'Varianti';
	$vars['it_camporicerca'] = 'Indirizzo o fermata';
	$vars['it_servizio'] = 'Il Servizio';
	$vars['it_impressum'] = 'Impressum';
	$vars['it_contatti'] = 'Contatti';
	$vars['it_stazione'] = 'Stazione';
	$vars['it_prossimefermate'] = 'Prossime fermate';
	$vars['it_stimato'] = 'Stimato';
	$vars['it_nondisp'] = '* dato NON disponibile in tempo reale';
	$vars['it_fermata'] = 'Fermata';
	$vars['it_direzione'] = 'Direzione';
	$vars['it_arrivo'] = 'In arrivo';
	$vars['it_cerca'] = 'Cerca';
	$vars['it_norisultati'] = 'Nessun risultato';
	$vars['it_fermatevicine'] = 'Le fermate pi&ugrave; vicine';
	$vars['it_nuovaricerca'] = 'Prova a fare una nuova ricerca oppure usa i filtri per linea';
	$vars['it_merano'] = 'Merano - Azienda di soggiorno';
	$vars['it_linea'] = 'Linea';
	$vars['it_linkmerano'] = 'http://www.merano.eu/';
	$vars['it_linktis'] = 'http://www.tis.bz.it/open';
	$vars['it_linksasa'] = 'http://www.sasabz.it/it/';
	$vars['it_linkr3gis'] = 'http://www.r3-gis.com/it';
	$vars['it_linkmadeincima'] = 'http://www.madeincima.it/';
	$vars['it_infocontatti'] = 'Per informazioni sul servizio ';
	$vars['it_mappe'] = 'mappa';
	$vars['it_design'] = 'design';
	// Inglese
	$vars['en_meranotitle'] = 'SASA - Real time bus';
	$vars['en_urbani'] = 'Urban';
	$vars['en_extraurbani'] = 'Suburban';
	$vars['en_deseleziona'] = 'Uncheck';
	$vars['en_tuttelelinee'] = 'all lines';
	$vars['en_varianti'] = 'Variations';
	$vars['en_camporicerca'] = 'Address or bus stop';
	$vars['en_servizio'] = 'About';
	$vars['en_impressum'] = 'Impressum';
	$vars['en_contatti'] = 'Contacts';
	$vars['en_stazione'] = 'Station';
	$vars['en_prossimefermate'] = 'Next stops';
	$vars['en_stimato'] = 'Estimated';
	$vars['en_nondisp'] = '* not real time available data';
	$vars['en_fermata'] = 'Bus stop';
	$vars['en_direzione'] = 'Direction';
	$vars['en_arrivo'] = 'Arriving';
	$vars['en_cerca'] = 'Search';
	$vars['en_norisultati'] = 'No results';
	$vars['en_fermatevicine'] = 'The closest stops';
	$vars['en_nuovaricerca'] = 'Try another search or use the line-filters';
	$vars['en_merano'] = 'Meran Tourist Bureau';
	$vars['en_linea'] = 'Route';
	$vars['en_linkmerano'] = 'http://www.meran.eu/en/';
	$vars['en_linktis'] = 'http://www.tis.bz.it/open';
	$vars['en_linksasa'] = 'http://www.sasabz.it/it/';
	$vars['en_linkr3gis'] = 'http://www.r3-gis.com/en';
	$vars['en_linkmadeincima'] = 'http://www.madeincima.it/en/';
	$vars['en_infocontatti'] = 'For info about this service ';
	$vars['en_mappe'] = 'map';
	$vars['en_design'] = 'design';
	// Tedesco
	$vars['de_meranotitle'] = 'SASA - Real time bus';
	$vars['de_urbani'] = 'St&auml;dtische Busse';
	$vars['de_extraurbani'] = 'Au&szlig;erst&auml;dtische Busse';
	$vars['de_deseleziona'] = 'deselektieren'; 			// da modificare!!!
	$vars['de_tuttelelinee'] = 'Alle Linien'; 			// da modificare!!!
	$vars['de_varianti'] = 'Varianten';
	$vars['de_camporicerca'] = 'Adresse oder Haltestelle';
	$vars['de_servizio'] = 'Der Dienst';
	$vars['de_impressum'] = 'Impressum';
	$vars['de_contatti'] = 'Kontakte';
	$vars['de_stazione'] = 'Bahnhof';
	$vars['de_prossimefermate'] = 'n&auml;chste Haltestellen';
	$vars['de_stimato'] = 'gesch&auml;tzt';
	$vars['de_nondisp'] = '* nicht in Echtzeit verf&uuml;gbare Daten';
	$vars['de_fermata'] = 'Haltestelle';
	$vars['de_direzione'] = 'Richtung';
	$vars['de_arrivo'] = 'kommt in K&uuml;rze an';
	$vars['de_cerca'] = 'Suchen';
	$vars['de_norisultati'] = 'Kein Ergebnis';
	$vars['de_fermatevicine'] = 'Die n&auml;chsten Haltestellen';
	$vars['de_nuovaricerca'] = 'Versuchen Sie es mit einer neuen Suche oder benutzen Sie die Linienfilter';
	$vars['de_merano'] = 'Kurverwaltung Meran';
	$vars['de_linea'] = 'Linie';
	$vars['de_linkmerano'] = 'http://www.meran.eu/de/';
	$vars['de_linktis'] = 'http://www.tis.bz.it/open';
	$vars['de_linksasa'] = 'http://www.sasabz.it/de/';
	$vars['de_linkr3gis'] = 'http://www.r3-gis.com/de';
	$vars['de_infocontatti'] = 'F&uuml;r weitere Infos &uuml;ber den Dienst ';
	$vars['de_mappe'] = 'karte';
	$vars['de_design'] = 'design';
?>
