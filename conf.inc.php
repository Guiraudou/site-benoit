<?php

include_once(__DIR__.'/vendor/autoload.php');

ini_set('default_charset', "utf-8");

// Langue
define('LOCALE', 'fr-FR');
define('LANGUAGE', substr(LOCALE, 0, 2));
include_once(__DIR__.'/langs/langs.'.LANGUAGE.'.php');

// URL site
define('URL_INDEX', 'home');
define('URL_CV', 'cv');
define('URL_PROJETS', 'projects');
define('URL_CONTACT', 'contact');
define('URL_PLAN_DU_SITE', 'plan-du-site');
define('URL_MENTIONS_LEGALES', 'mentions-legales');

$listPageMenu = [
	['url' => URL_INDEX, 'label' => HOME, 'title' => HOME],
	['url' => URL_CV, 'label' => CV, 'title' => CV],
	['url' => URL_PROJETS, 'label' => PORTFOLIO, 'title' => PORTFOLIO],
	['url' => URL_CONTACT, 'label' => CONTACT, 'title' => CONTACT],
];

// URL Réseaux sociaux
define('URL_RESEAU_SOCIAL_VIADEO',		"http://www.viadeo.com/fr/profile/benoit.guiraudou");
define('URL_RESEAU_SOCIAL_LINKEDIN',	"http://fr.linkedin.com/in/benoitguiraudou");
define('URL_RESEAU_SOCIAL_FACEBOOK',	"http://facebook.com/benoit.guiraudou");
define('URL_RESEAU_SOCIAL_TWITTER',		"http://twitter.com/#!/BenoitGuiraudou");

// Data
$listProjects = App\Project::getList();

$birthDate = new \DateTime('1988-06-20 00:00:00');
$age = (int) $birthDate->diff(new \DateTime())->y;

$lienCv = 'data/cv/benoit-guiraudou-cv.'.LANGUAGE.'.pdf';
$tailleFichierCv = filesize(__DIR__.'/'.$lienCv);
