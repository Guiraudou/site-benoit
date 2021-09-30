<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- title / desc / keywords-->
	<title><?php echo HEADER_TITLE_GENERAL; ?>></title>
	<meta name="description" content="<?php echo HEADER_META_DESC_GENERAL; ?>" />
	<meta name="keywords" content="<?php echo HEADER_KEYWORDS_GENERAUX; ?>" />

	<!-- robots -->
	<meta name="robots" content="all" />
	<meta name="revisit-after" content="7 days" />

	<!-- affichage -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->

	<!-- preconnect -->
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<!-- script -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

	<!-- style -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link href="css/flat_theme.min.css" rel="stylesheet">
	<link href="css/layout.css" rel="stylesheet">
</head>
<body>
<?php /*
<div class="link_lang">
	<a href="#" title="Français"><img src="image/flag_fr.png"  alt="Français" /></a><br>
	<a href="#" title="English"><img src="image/flag_en.png" alt="English" /></a>
</div>
*/ ?>
<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a class="navbar-brand" href="<?php echo URL_INDEX; ?>">Benoit Guiraudou</a>
		</div>

		<div class="hidden-xs">
			<ul id="menu-main-menu" class="nav navbar-nav navbar-main">
				<?php foreach ($listPageMenu as $pageMenu): ?>
					<li class="menu-item menu-item-type-post_type menu-item-object-page page_item <?php echo (false)?'current-menu-item  current_page_item active':'' ?>"><a title="<?php echo $pageMenu['title'] ?>" href="<?php echo $pageMenu['url']; ?>"><?php echo $pageMenu['label'] ?></a></li>
				<?php endforeach ?>
			</ul>
		</div>
		
		<div id="mobile-menu" class="visible-xs">
			<div class="collapse navbar-collapse">
				<ul id="menu-main-menu-1" class="nav navbar-nav">
					<?php foreach ($listPageMenu as $pageMenu): ?>
						<li class="menu-item menu-item-type-post_type menu-item-object-page <?php echo (false)?'current-menu-item page_item current_page_item active':'' ?>"><a title="<?php echo $pageMenu['title'] ?>" href="<?php echo $pageMenu['url']; ?>"><?php echo $pageMenu['label'] ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>
		</div><!--/.visible-xs-->
	</div>
	
</header><!--/#header-->