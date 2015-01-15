<?php 
$browser_language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$lang = 'it';
switch($browser_language):
case 'de':
  $lang = 'de';
break;
case 'en':
$lang = 'en';
break;
endswitch;

/*global $lang;
  $lang = 'it';*/
if(isset($_GET['l'])) $lang = $_GET['l'];
if($lang != 'it' && $lang != 'en' && $lang != 'de')
  $lang = 'it';
include 'lang.php';
?>
<!DOCTYPE html>
<html dir="ltr">
  <head>
  <meta charset="utf-8" />
  <title><?php ___("meranotitle"); ?></title>
  <!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
        
  <!-- Stylesheets -->
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.css" type="text/css" media="all" />
  <link href="css/standard.css" rel="stylesheet" media="screen,projection,print" type="text/css" />
  <link href="css/smartphone.css" media="only screen and (max-width: 671px)" rel="stylesheet" /> <!-- max-device-width: 671px -->
  <!--<link href="css/smartphoneLandscape.css" media="only screen and (max-width: 671px) and (orientation: landscape)" rel="stylesheet" /> --> <!-- max-device-width: 671px -->
  <!-- media="only screen and (orientation: landscape) -->
	<script src="js/detect_device.js" type="text/javascript"></script>
        <script src="js/OpenLayers/OpenLayers.sasabus.js"></script>
        <!--<script src="http://sasatest.r3-gis.com/js/OpenLayers/lib/OpenLayers.js"></script>-->
  <script src="js/OpenLayers/proj4js.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script src="js/sasabus.js"></script>
  <script>  
  var txtVariante = '<?php ___("varianti"); ?>';
</script>
		
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.css" type="text/css" media="all" />
  <style>
  .ui-dialog {z-index:1000;}
  </style>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="default" /> 
  </head>
  <!--[if IE 8]>
  <body class="lte-8 ie-8 map-body">
  <![endif]-->
  <!--[if lte IE 7]>
  <body class="lte-8 lte-7 map-body">
  <![endif]-->
  <!--[if gt IE 8]>
  <body class="map-body ie-9">
  <![endif]-->
  <!--[if !IE]><!-->
  <body class="map-body <?php echo $lang ?>">
  <script>  
  if (/*@cc_on!@*/false) {  
document.documentElement.className+=' ie10';  
}  
  </script>
  <!--<![endif]-->
  <div class="map-container" id="map" style="width:100%;height:100%">
  </div>
	        
  <div class="panel">
  <header class="header" id="header">
  <h1 id="logo">SASA SpA-AG</h1>
  </header>
  <main class="main main-map" id="main">

  <div class="panel-content-out">
  <div class="scroll" id="scroll">
  <div class="scroll-content">
  <div class="panel-content">
  <div id="variants">
  <div class="tabbed-content">

<div class="tab-container">
     <div class="tab-content">
     <ul class="tick" id="urbani">
     <li class="tick-list"></li>
     </ul>
     </div>
     <div class="tab-content">
     <ul class="tick" id="extra">
     <li class="tick-list"></li>
     </ul>
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>
     </main>
     </div>
            
     <div id="busPopup" style="display:none;">
     <h2 class="bus c-${lidname}"><?php ___('linea'); ?> ${lidname}</h2>
     <p class="noData" style="display: none;">Questo autobus non è in servizio.</p>
     <table>
     <thead>
     <tr>
     <th><?php ___('prossimefermate'); ?></th>
     <th class="time"><?php ___('stimato'); ?></th>
     </tr>
     </thead>
     <tbody>
     <tr class="${odd} ${last}">
     <td>${ort_ref_ort_name}</td>
     <td class="time">${time_est}</td>
     </tr>
     </tbody>
     </table>
     <span class="tip"></span>
     </div>
     <div id="stopPopup" style="display:none;">
     <h2><?php ___('fermata'); ?> ${ort_ref_ort_name}</h2>
     <p class="noData" style="display: none;">Nelle prossime ore non sono previsti passaggi in questa fermata.</p>
     <table>
     <thead>
     <tr>
     <th><?php ___('arrivo'); ?></th>
     <th class="time"><?php ___('stimato'); ?></th>
     </tr>
     </thead>
     <tbody>
     <tr class="${odd} ${last}">
     <td class="bus c-${lidname}"><?php ___('linea'); ?> ${lidname}</td>
     <td class="time">${bus_passes_at}</td> <!-- temporaneo, non ho ancora i dati sull'orario -->
	                    </tr>
	                </tbody>
	            </table>
	            <span class="tip"></span>
	        </div>
	        <a href="#" id="zoomToMyPosition"></a>
	        <p id="credits"><?php ___('mappe'); ?> <a href="<?php ___('linkr3gis'); ?>" rel="external">R3Gis</a> - <?php ___('design'); ?> <a href="<?php ___('linkmadeincima'); ?>" rel="external">Madeincima</a></p>
            
            <script src="js/iscroll.js" type="text/javascript"></script>
            <!--[if lte IE 8]>
                <script src="scripts/PIE_IE678.js" type="text/javascript"></script>
            <![endif]-->
            <script src="js/jquery.easyListSplitter.js" type="text/javascript"></script>
			<script src="js/init.js" type="text/javascript"></script>
            <script src="js/utility.js" type="text/javascript"></script>
            <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
            <![endif]-->
        <!--</div>-->
    </body>
</html>
