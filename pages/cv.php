<?php include_once(__DIR__.'/../conf.inc.php'); ?>

<?php include_once('./inc/header.inc.php'); ?>

<div id="cv" class="container gris_fonce">
	<h1><?php echo PAGE_CV_TITLE; ?></h1>
	
	<div class="cv_content">
		<div class="row">
			<div class="col-md-6 col-xs-6">
				<?php echo sprintf(CV_INFOS, $age); ?>
			</div>
			<div class="col-md-6 col-xs-6 photo_profil">
				<img src="images/profil_benoit_min.jpg" class="img-circle thumbnail" alt="Benoit Guiraudou" />
			</div>
		</div>

		<h3><?php echo CV_TITRE_FORMATION; ?></h3>
		<?php foreach (CV_LIST_FORMATION as $formation): ?>
			<div class="row">
				<div class="col-md-3">
					<?php echo $formation['left'] ?>
				</div>
				<div class="col-md-9">
					<?php echo $formation['right'] ?>
				</div>
			</div>
			<br>
		<?php endforeach ?>

		<h3><?php echo CV_TITRE_SKILL; ?></h3>
		<?php foreach (CV_LIST_SKILL as $formation): ?>
			<div class="row">
				<div class="col-md-3">
					<?php echo $formation['left'] ?>
				</div>
				<div class="col-md-9">
					<?php echo $formation['right'] ?>
				</div>
			</div>
			<br>
		<?php endforeach ?>

		<h3><?php echo CV_TITRE_JOBS; ?></h3>
		<?php foreach (CV_LIST_JOBS as $formation): ?>
			<div class="row">
				<div class="col-md-3">
					<?php echo $formation['left'] ?>
				</div>
				<div class="col-md-9">
					<?php echo $formation['right'] ?>
				</div>
			</div>
			<br>
		<?php endforeach ?>

		<h3><?php echo CV_TITRE_LANG; ?></h3>
		<?php foreach (CV_LIST_LANG as $formation): ?>
			<div class="row">
				<div class="col-md-3">
					<?php echo $formation['left'] ?>
				</div>
				<div class="col-md-9">
					<?php echo $formation['right'] ?>
				</div>
			</div>
			<br>
		<?php endforeach ?>

		<h3><?php echo CV_TITRE_DIVERS; ?></h3>
		<?php foreach (CV_LIST_DIVERS as $formation): ?>
			<div class="row">
				<div class="col-md-3">
					<?php echo $formation['left'] ?>
				</div>
				<div class="col-md-9">
					<?php echo $formation['right'] ?>
				</div>
			</div>
			<br>
		<?php endforeach ?>

		<?php echo CV_CONTENT_SUPP; ?>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-6 center">
			<a href="<?php echo $lienCv; ?>"><img src="images/icone_file_pdf.png" class="icone" alt="" /> <?php echo DOWNLOAD_AS_PDF; ?></a> (<span data-file_size="<?php echo $tailleFichierCv; ?>"></span>)
		</div>
		<div class="col-md-6 center">
			<a href="<?php echo URL_CONTACT; ?>" class="lien_contact"><img src="images/icone_contact.png" class="icone" alt="" /> <?php echo CONTACT_ME; ?></a>
		</div>
	</div>
	<br>

</div>
<script>
	$(function() {
		$('span[data-file_size]').each((idx, el) => $(el).text(formatFileSize($(el).data('file_size'), 2, locale)));
	});
</script>
<?php include_once('./inc/footer.inc.php'); ?>