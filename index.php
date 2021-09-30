<?php include_once('./conf.inc.php'); ?>

<?php include_once('./pages/inc/header.inc.php'); ?>

<section id="services" class="emerald2 blanc">
	<div class="container">
		<div class="row">
			<?php foreach (PAGE_HOME_LIST_SKILLS as $skill) : ?>
				<div class="col-md-4 col-sm-6">
					<div class="skill center">
						<img src="images/skill/<?php echo $skill['img']; ?>" class="img_skill" alt="">
						<h3 class="service-heading"><?php echo $skill['title']; ?></h3>
						<p class="sevice-text"><?php echo $skill['desc']; ?></p>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>

<section id="portfolio" class="portfolio gris_fonce">
	<div class="container">
		<h2><?php echo PORTFOLIO; ?></h2>
		<p>&nbsp;</p>

		<div class="row">
			<?php /** @var App\Project[] $listProjects */ ?>
			<?php foreach (array_slice($listProjects, 0, 6) as $project) : ?>
				<div class="col-md-4 col-sm-6">
					<div class="portfolio-item">
						<div class="item-inner">
							<img src="<?php echo $project->getThumbnailFilePath(); ?>" class="apercu_site" alt="<?php echo $project->getName(); ?>" title="<?php echo $project->getName(); ?>" />
							<h5><?php echo $project->getName(); ?></h5>
							<div class="overlay">
								<a class="preview btn btn-default" title="<?php echo SEE_DETAILS; ?>>" href="<?php echo URL_PROJETS; ?>" ><img src="images/icon_zoom_in.png" alt=""></a>
								<a class="preview btn btn-default" title="<?php echo OPEN_URL; ?>" href="<?php echo $project->getUrl(); ?>" ><img src="images/icon_link.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>

<?php include_once('./pages/inc/footer.inc.php'); ?>