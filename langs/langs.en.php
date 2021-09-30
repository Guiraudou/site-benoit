<?php

// ------------------------------------------------------------
// Général
// ------------------------------------------------------------

// Commun
define('HOME', 									"Home");
define('CONTACT', 								"Contact");
define('CV', 									"CV");
define('MY_CV', 								"My CV");
define('PROJECTS', 								"Projects");
define('PORTFOLIO', 							"Portfolio");
define('MENTIONS_LEGALES', 						"Imprint");
define('SITEMAP', 								"Sitemap");
define('VERSION', 								"Versions");
define('IN_PREPARATION', 						"In preparation");
define('BACK_TO_TOP', 							"Back to top");
define('ABOUT_ME', 								"About me");
define('CONTACT_DETAILS', 						"Contact details");
define('WEBSITES', 								"Websites");
define('FOLLOW_ME_ON', 							"Follow me on");
define('SEE_MY_PROFILE_ON', 					"See my profile on %s");
define('DOWNLOAD_AS_PDF', 						"Download as PDF");
define('CONTACT_ME', 							"Contact me");
define('SEE_DETAILS', 							"See details");
define('OPEN_URL', 								"Open URL");

// Label
define('LABEL_FIRST_NAME', 						"First name:");
define('LABEL_LAST_NAME', 						"Last name:");
define('LABEL_COMPANY_NAME', 					"Company name:");
define('LABEL_EMAIL_ADDRESS', 					"Email:");
define('LABEL_PHONE_NUMBER', 					"Phone number:");
define('LABEL_MESSAGE', 						"Message:");
define('LABEL_DESC', 							"Description:");
define('LABEL_PREVIEW', 						"Preview:");
define('LABEL_URL', 							"URL:");

// Errors
define('ERROR_FIRST_NAME_NB_CHAR_MAX', 			"This first name contains too many characters.");
define('ERROR_LAST_NAME_EMPTY', 				"Please enter your last name.");
define('ERROR_LAST_NAME_NB_CHAR_MAX', 			"This last name contains too many characters.");
define('ERROR_COMPANY_NAME_NB_CHAR_MAX', 		"This company name contains too many characters.");
define('ERROR_EMAIL_EMPTY', 					"Please enter your email.");
define('ERROR_EMAIL_WRONG', 					"This email is not valid.");
define('ERROR_PHONE_NUMBER_WRONG', 				"This phone number is not valid.");
define('ERROR_MESSAGE_EMPTY', 					"Please enter your message.");


// ------------------------------------------------------------
// Balises header
// ------------------------------------------------------------

define('HEADER_TITLE_GENERAL', 					"Benoit Guiraudou");
define('HEADER_META_DESC_GENERAL', 				"Website of Benoit Guiraudou");
define('HEADER_KEYWORDS_GENERAUX', 				"benoit guiraudou, guiraudou, cv, projects, osimatic");

// ------------------------------------------------------------
// Footer
// ------------------------------------------------------------

define('FOOTER_LINK_TITLE_VALID_CSS', 			"The style sheet of this site conforms to W3C CSS 2.1 standards");
define('FOOTER_LINK_TITLE_VALID_XHTML', 		"This site conforms to W3C XHTML 1.1 standards");

define('FOOTER_COPYRIGHT', 						"Copyright &copy; %s Benoît Guiraudou. All rights reserved.");

// ------------------------------------------------------------
// Page home
// ------------------------------------------------------------

define('PAGE_HOME_TITLE', 						"Welcome on Benoit Guiraudou's website");

define('PAGE_HOME_PRESENTATION', 				"After a computer training in analysing-programming department in Paris, I am currently working for OSIMATIC's company since 2008. I develop mainly websites, although my skills also extend to creation of software.");

define('PAGE_HOME_LIST_SKILLS', [
	['title' => 'PHP development', 'desc' => 'Website or application development in Object-Oriented PHP.', 'img' => 'php.png'],
	['title' => 'HTML/CSS development', 'desc' => 'Website development in HTML 5 and CSS / CSS 3 with a responsive design compatible on all modern browsers.', 'img' => 'html5.png'],
	['title' => 'Javascript development', 'desc' => 'Application development in Javascript (nodejs) or adding features, effects,... on a website (jQuery or other).', 'img' => 'javascript.png'],
	['title' => 'iOS development', 'desc' => 'App development on iOS and submission (Objective C language)', 'img' => 'apple.png'],
	['title' => 'Android development', 'desc' => 'App development on android and submission (Java language)', 'img' => 'android.png'],
	['title' => 'Windows Phone development', 'desc' => 'App development on Windows Phone and submission (C#/Visual Basic language)', 'img' => 'windows.png'],
]);


// ------------------------------------------------------------
// Page Contact
// ------------------------------------------------------------

define('PAGE_CONTACT_DESC',
	"For contact me, you can use form bellow. I will reply as soon as possible.<br/>
	You can also contact me by email or phone. My mailing address is on my CV.");

// ------------------------------------------------------------
// Page CV
// ------------------------------------------------------------

define('PAGE_CV_TITLE', 			"My resume");
define('PAGE_CV_DESC', 				"Here is my resume. You can download it in PDF format.");

define('CV_INFOS', '
	<dl class="dl-horizontal">
		<dt>Name:</dt>
		<dd>Benoit GUIRAUDOU</dd>
		<dt>Home address:</dt>
		<em>address</em><br/>
		<em>address</em><br/>
		France</dd>
		<dt>Phone number:</dt>
		<dd><em>phone number</em></dd>
		<dt>E-mail:</dt>
		<dd>benoit.guiraudou@gmail.com</dd>
		<dt>Date of birth:</dt>
		<dd>20 June 1988 (%d years old)</dd>
	</dl>
');

define('CV_TITRE_FORMATION', 'Education');
define('CV_LIST_FORMATION', [
	['left' => '2009', 'right' => 'Degree in Computer science (sandwich degree), specialization in software development, University of Paris Descartes and Villetaneuse'],
	['left' => '2008', 'right' => 'Technological University Diploma in Computer science, University of Paris Descartes'],
	['left' => '2006', 'right' => 'French equivalent of A-levels, scientific section'],
]);

define('CV_TITRE_SKILL', 'Computer skills');
define('CV_LIST_SKILL', [
	['left' => 'Operating system', 'right' => 'Windows, Linux'],
	['left' => 'Languages', 'right' => 'C, C++, Java, VB NET, COBOL, HTML, CSS, JavaScript, PHP, SQL, PL/SQL, Merise, UML'],
	['left' => 'Softwares', 'right' => 'MS Office / Project, The Gimp, Visual Studio, Eclipse, PHPStorm'],
]);

define('CV_TITRE_JOBS', 'Professional experience');
define('CV_LIST_JOBS', [
	['left' => 'From September 2009', 'right' => '
		Permanent employment at OSIMATIC<br/>
		– Development of websites (mytime.fr, audiotel.me)<br/>
		– Customer relationship management<br/>
		– Providing training for junior employees and apprentices</p>
	'],
	['left' => 'September 2008 to August 2009', 'right' => '
		Apprenticeship contract at OSIMATIC<br/>
		– Development of websites interconf.fr and myconf.com</p>
	'],
	['left' => 'April to July 2008', 'right' => '
		Training then Temporary employment at OSIMATIC in Saint-Germainen-Laye (Yvelines)<br/>
		– Development of websites wikitel.fr and agorafoot.fr
	'],
	['left' => 'July 2007', 'right' => '
		Training at OFIVALMO in Paris (17th)<br/>
		– Computing Department
	'],
	['left' => 'July 2006', 'right' => '
		Interim at RENAULT in Flins (Yvelines) – Keys manufacturing
	'],
]);

define('CV_TITRE_LANG', 'Languages');
define('CV_LIST_LANG', [
	['left' => 'French', 'right' => 'Mother tongue'],
	['left' => 'English', 'right' => 'Intermediate level (studying in England for 2 months)'],
]);

define('CV_TITRE_DIVERS', 'Interests');
define('CV_LIST_DIVERS', [
	['left' => 'Sports', 'right' => 'Judo, Table tennis and Handball'],
	['left' => 'Travel', 'right' => 'England (2 months), USA (2 months), Berlin, Dublin, Milan, Greece, Seville'],
	['left' => 'Hobbies', 'right' => 'Cinema, Computer games, Music, Reading (science-fiction and detective novels), Cycling'],
]);

define('CV_CONTENT_SUPP', 'Driving Licence');

// ------------------------------------------------------------
// Page projects
// ------------------------------------------------------------

define('PAGE_PORTFOLIO_DESC', 					"Here there are my projects.");
define('PAGE_PROJECTS_PROJECT_DATE', 			"Project developed in %s");


// ------------------------------------------------------------
// Page Mentions légales
// ------------------------------------------------------------

// ------------------------------------------------------------
// Page Sitemap
// ------------------------------------------------------------

