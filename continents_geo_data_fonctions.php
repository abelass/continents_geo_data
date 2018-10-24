<?php
/**
 * Fonctions utiles au plugin Donnés géométriques continents
 *
 * @plugin     Donnés géométriques continents
 * @copyright  2018
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Continents_geo_data\Fonctions
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Balise GEOMETRY_CONTINENT pour afficher le champ geo de la table spip_pays au format WKT
 *
 * @param $p
 * @return mixed
 */
function balise_geometry_continent_dist($p) {
	$p->code = '$Pile[$SP][\'geometry_continent\']';
	return $p;
}
