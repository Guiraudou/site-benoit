<?php include_once(__DIR__.'/../conf.inc.php'); ?>

<?php include_once('inc/header.inc.php'); ?>
<div id="projets" class="container">
	<h1><?php echo PORTFOLIO; ?></h1>
	
	<?php foreach ($listProjects as $project) : ?>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="project">
					<h3><span data-timestamp="<?php echo $project->getDate()->getTimestamp(); ?>"></span> - <?php echo $project->getName(); ?></h3>
					<div class="row">
						<div class="col-md-5">
							<?php if (!empty($project->getPreviewFilePath())): ?>
								<a class="preview" title="" href="<?php echo $project->getPreviewFilePath(); ?>" rel="prettyPhoto">
									<img src="<?php echo $project->getPreviewFilePath(); ?>" class="thumbnail" alt="<?php echo $project->getName(); ?>" />
								</a>
							<?php endif ?>
						</div>
						<div class="col-md-7">
							<p class="desc"><?php echo $project->getDesc(); ?></p>
							<?php if (!empty($project->getUrl())): ?>
								<p><span class="gras"><?php echo LABEL_URL; ?></span> <a href="<?php echo $project->getUrl(); ?>"><?php echo $project->getUrl(); ?></a></p>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>
<script>
	$(function() {
		function formatDate(jsDate) {
			return getMonthName(jsDate, locale).capitalize()+' '+jsDate.getUTCFullYear();
		}
		$('span[data-timestamp]').each((idx, el) => $(el).text(formatDate(parseFromTimestamp($(el).data('timestamp')))));
	})
</script>
<?php include_once('inc/footer.inc.php'); ?>