<?php
/**
 * Utilisations de pipelines par Donnés géométriques continents
 *
 * @plugin     Donnés géométriques continents
 * @copyright  2018
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Continents_geo_data\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Surcharger les boucles PAYS et celles qui comportent le critère gis
 * pour permettre d'accéder à la valeur du champ geo au format WKT (voir balise #GEOMETRY_PAYS)
 *
 * @param $boucle
 * @return mixed
 */
function continents_geo_data_pre_boucle($boucle) {
	if ($boucle->type_requete == 'continents' or in_array('continents', $boucle->jointures)) {
		$boucle->select[]= 'AsText(continents.geo) AS geometry_continent';
	}
	return $boucle;
}