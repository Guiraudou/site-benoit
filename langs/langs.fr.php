<?php

// ------------------------------------------------------------
// Général
// ------------------------------------------------------------

// Commun
define('HOME', 									"Accueil");
define('CONTACT', 								"Contact");
define('CV', 									"CV");
define('MY_CV', 								"Mon CV");
define('PROJECTS', 								"Projets");
define('PORTFOLIO', 							"Portfolio");
define('MENTIONS_LEGALES', 						"Mentions légales");
define('SITEMAP', 								"Plan du site");
define('IN_PREPARATION', 						"En cours de rédaction");
define('BACK_TO_TOP', 							"Retourner en haut de page");
define('ABOUT_ME', 								"À propos");
define('CONTACT_DETAILS', 						"Coordonnées");
define('WEBSITES', 								"Sites");
define('FOLLOW_ME_ON', 							"Suivez moi sur");
define('SEE_MY_PROFILE_ON', 					"Voir mon profil sur %s");
define('DOWNLOAD_AS_PDF', 						"Télécharger en PDF");
define('CONTACT_ME', 							"Me contacter");
define('SEE_DETAILS', 							"Voir les détails");
define('OPEN_URL', 								"Ouvrir le lien");

// Label
define('LABEL_FIRST_NAME', 						"Prénom :");
define('LABEL_LAST_NAME', 						"Nom :");
define('LABEL_COMPANY_NAME', 					"Société :");
define('LABEL_EMAIL_ADDRESS', 					"Email :");
define('LABEL_PHONE_NUMBER', 					"Téléphone :");
define('LABEL_MESSAGE', 						"Message :");
define('LABEL_DESC', 							"Description :");
define('LABEL_PREVIEW', 						"Aperçu :");
define('LABEL_URL', 							"URL :");

// Errors
define('ERROR_FIRST_NAME_NB_CHAR_MAX', 			"Le prénom contient trop de caractères.");
define('ERROR_LAST_NAME_EMPTY', 				"Veuillez saisir votre nom.");
define('ERROR_LAST_NAME_NB_CHAR_MAX', 			"Le nom contient trop de caractères.");
define('ERROR_COMPANY_NAME_NB_CHAR_MAX', 		"Le nom de la société contient trop de caractères.");
define('ERROR_EMAIL_EMPTY', 					"Veuillez saisir votre adresse e-mail.");
define('ERROR_EMAIL_WRONG', 					"L’adresse e-mail est incorrecte.");
define('ERROR_PHONE_NUMBER_WRONG', 				"Le numéro de téléphone est incorrect.");
define('ERROR_MESSAGE_EMPTY', 					"Veuillez saisir votre message.");

// ------------------------------------------------------------
// Balises header
// ------------------------------------------------------------

define('HEADER_TITLE_GENERAL', 					"Benoit Guiraudou");
define('HEADER_META_DESC_GENERAL', 				"Site de Benoit Guiraudou");
define('HEADER_KEYWORDS_GENERAUX', 				"benoit guiraudou, guiraudou, cv, projets, osimatic");

// ------------------------------------------------------------
// Footer
// ------------------------------------------------------------

define('FOOTER_LINK_TITLE_VALID_CSS', 			"La feuille de style de ce site est conforme aux standards CSS 2.1 du W3C");
define('FOOTER_LINK_TITLE_VALID_XHTML', 		"Ce site est conforme aux standards XHTML 1.1 du W3C");
define('FOOTER_COPYRIGHT', 						"Copyright &copy; %s Benoît Guiraudou. Tous droits réservés.");

// ------------------------------------------------------------
// Page home
// ------------------------------------------------------------

define('PAGE_HOME_TITLE', 						"Bienvenue sur le site de Benoît Guiraudou");

define('PAGE_HOME_PRESENTATION', 				"Après une formation en informatique, dans le domaine de l’analyse-programmation sur Paris, je travaille actuellement pour l’entreprise OSIMATIC depuis 2008. Je réalise principalement des sites Internet, bien que mes compétences s'étendent également à la création de logiciels.");

define('PAGE_HOME_LIST_SKILLS', [
	['title' => 'Développement PHP', 'desc' => 'Développement d\'application, site Internet, extranet en PHP orienté objet.', 'img' => 'php.png'],
	['title' => 'Développement HTML/CSS', 'desc' => 'Création de site web en HTML 5, avec un design responsive et compatible sur tous les navigateurs.', 'img' => 'html5.png'],
	['title' => 'Développement Javascript', 'desc' => 'Développement d\'application (nodejs) ou ajout de fonctionnalités, effets... (librairie jQuery ou autre)', 'img' => 'javascript.png'],
	['title' => 'Développement iOS', 'desc' => 'Développement, test et mise en ligne d\'application sous iOS (langage Objective C)', 'img' => 'apple.png'],
	['title' => 'Développement Android', 'desc' => 'Développement, test et mise en ligne d\'application sous android (langage Java)', 'img' => 'android.png'],
	['title' => 'Développement Windows Phone', 'desc' => 'Développement, test et mise en ligne d\'application sous Windows Phone (langage C#/Visual Basic)', 'img' => 'windows.png'],
]);

// ------------------------------------------------------------
// Page Contact
// ------------------------------------------------------------

define('PAGE_CONTACT_DESC',
	"Pour me contacter, vous pouvez utiliser le formulaire ci-dessous. Je vous répondrais dans les plus brefs délais.<br/>
	Vous pouvez également me contacter par email ou par téléphone. Mon adresse postale est indiquée sur mon CV.");

// ------------------------------------------------------------
// Page CV
// ------------------------------------------------------------

define('PAGE_CV_TITLE', 			"Curriculum vitæ");
define('PAGE_CV_DESC', 				"Voici mon Curriculum vitæ. Il est possible de le télécharger au format PDF.");

define('CV_INFOS', '
	<strong>Benoit GUIRAUDOU</strong><br/>
	<em>adresse</em><br/>
	<em>adresse</em><br/>
	<em>téléphone</em><br/>
	benoit.guiraudou@gmail.com<br/>
	%d ans, célibataire<br/>
');

define('CV_TITRE_FORMATION', 'Formation');
define('CV_LIST_FORMATION', [
	['left' => 'Juin 2009', 'right' => 'Licence professionnelle informatique SIL par apprentissage, option Génie Logiciel, IUT de Paris Descartes / IUT de Villetaneuse'],
	['left' => 'Juin 2008', 'right' => 'DUT informatique,  IUT de Paris Descartes'],
	['left' => 'Juin 2006', 'right' => 'Baccalauréat Scientifique, spécialité Sciences de la Vie et de la Terre, Académie de Versailles, mention Assez bien'],
]);

define('CV_TITRE_SKILL', 'Compétences informatiques');
define('CV_LIST_SKILL', [
	['left' => 'Systèmes d’exploitation', 'right' => 'Windows, Linux'],
	['left' => 'Langages', 'right' => 'C, C++, Java, VB NET, COBOL, HTML, CSS, JavaScript, PHP, SQL, PL/SQL, Merise, UML'],
	['left' => 'Logiciels', 'right' => 'MS Office / Project, The Gimp, Visual Studio, Eclipse, PHPStorm'],
]);

define('CV_TITRE_JOBS', 'Expériences professionnelles');
define('CV_LIST_JOBS', [
	['left' => 'Depuis Septembre 2009', 'right' => '
		CDI à OSIMATIC<br/>
		– Développement de sites Internet/Extranet (mytime.fr, audiotel.me, etc.)<br/>
		– Développement d’applications mobile<br/>
		– Gestion de la relation client<br/>
		– Formation des stagiaires et alternants
	'],
	['left' => 'Septembre 2008 à Août  2009', 'right' => '
		Contrat d’apprentissage à OSIMATIC.<br/>
		– Développement des sites interConf.fr et myConf.com
	'],
	['left' => 'Avril à Juillet 2008', 'right' => '
		Stage puis CDD à OSIMATIC à Saint-Germain-en-Laye (Yvelines)<br/>
		– Création des sites Internet wikitel.fr et agorafoot.fr
	'],
	['left' => 'Juillet 2007', 'right' => '
		Stagiaire au service informatique d’OFIVALMO à Paris (17ème)<br/>
		– Maintenance et réparation des pannes du matériel informatique
	'],
	['left' => 'Juillet 2006', 'right' => '
		Intérimaire à RENAULT à Flins (Yvelines) – Fabrication de clefs
	'],
]);

define('CV_TITRE_LANG', 'Langues');
define('CV_LIST_LANG', [
	['left' => 'Anglais', 'right' => 'Bon niveau'],
	['left' => 'Allemand', 'right' => 'Notions'],
]);

define('CV_TITRE_DIVERS', 'Divers');
define('CV_LIST_DIVERS', [
	['left' => 'Sports', 'right' => 'A pratiqué le Judo, le Tennis de table et le Handball'],
	['left' => 'Voyages', 'right' => 'Angleterre (2 mois), États-Unis (2 mois), Berlin, Dublin, Milan, Grèce, Séville...'],
	['left' => 'Loisirs', 'right' => 'Cinéma, Jeux vidéo, Musique, Lecture, V.T.T.'],
]);

define('CV_CONTENT_SUPP', 'Titulaire du Permis de conduire');


// ------------------------------------------------------------
// Page projects
// ------------------------------------------------------------

define('PAGE_PORTFOLIO_DESC', 					"Voici la liste de mes projets.");

define('PAGE_PROJECTS_PROJECT_DATE', 			"Projet réalisé en %s");


// ------------------------------------------------------------
// Page Mentions légales
// ------------------------------------------------------------

// ------------------------------------------------------------
// Page Sitemap
// ------------------------------------------------------------



