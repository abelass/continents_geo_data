<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2018-10-14 10:34:17
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'continents_geo_data',
    'nom' => 'Donnés géométriques continents',
    'slogan' => 'Des donnés géométriques pour continents',
    'description' => 'Ajoute des donnés géométriques au plugin continents',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '1.0.0',
    'auteur' => 'Rainer Müller',
    'auteur_lien' => '',
    'licence' => 'GNU/GPL',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.0.0;3.2.*]',
    'documentation' => 'https://github.com/abelass/continents_geo_data',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => '',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'fonctions',
      1 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
    ),
  ),
);
