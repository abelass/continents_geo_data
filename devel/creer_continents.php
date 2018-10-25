<?php
//header("Content-Type: text/json; charset=utf-8");
$polygones = json_decode(file_get_contents('../data/continents.geojson'), TRUE);

foreach($polygones['features'] AS $feature){
	$code_iso_a2 = $feature['properties']['hc-a2'];
	print "<div>$code_iso_a2 :";


	$fp = fopen("../squelettes/continents/$code_iso_a2.html", 'w') or die("Unable to open file!");
	fwrite($fp, json_encode($feature['geometry'], JSON_UNESCAPED_UNICODE));
	fclose($fp);
	print "$fp </div>";
}

