<?php
/**
 * Fichier gérant les importations en base de donnée.
 *
 * @plugin     Donnés géométriques continents
 * @copyright  2018
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Continents_geo_data\Base
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Ajoute les donnes geométriques aux continents.
 */
function peupler_continents_geo() {
	include_spip('gisgeom_fonctions');
	$json = json_decode(file_get_contents(__DIR__ . '/../data/world_continents.json', TRUE), TRUE);

	foreach($json['features'] AS $values) {
		$code_iso_a2 = $values['properties']['hc-a2'];
		$wkt = json_to_wkt(json_encode($values['geometry']));
		$wkt = sql_getfetsel("GeomFromText('$wkt')");

		$set = array(
			'geo' => $wkt,
		);

		sql_updateq('spip_continents', $set, 'code_iso_a2 LIKE' . sql_quote($code_iso_a2));
	}
}