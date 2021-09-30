<section id="bottom" class="bottom">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<h3><?php echo ABOUT_ME; ?></h3>
				<div class="about_me">
					<p><?php echo PAGE_HOME_PRESENTATION; ?></p>
				</div>
			</div>
			<div class="col-sm-3">
				<h3><?php echo FOLLOW_ME_ON; ?></h3>
				<?php /* <div class="follow_me">
					<a href="<?php echo URL_RESEAU_SOCIAL_VIADEO; ?>" title="<?php echo sprintf(SEE_MY_PROFILE_ON, 'Viadeo'); ?>">
						<img src="images/social/viadeo.png" alt="Viadeo" /> Viadeo
					</a>
				</div> */ ?>
				<div class="follow_me">
					<a href="<?php echo URL_RESEAU_SOCIAL_LINKEDIN; ?>" title="<?php echo sprintf(SEE_MY_PROFILE_ON, 'LinkedIn'); ?>">
						<img src="images/social/linked_in.png" alt="LinkedIn" /> LinkedIn
					</a>
				</div>
				<div class="follow_me">
					<a href="<?php echo URL_RESEAU_SOCIAL_FACEBOOK; ?>" title="<?php echo sprintf(SEE_MY_PROFILE_ON, 'Facebook'); ?>">
						<img src="images/social/facebook.png" alt="Facebook" /> Facebook
					</a>
				</div>
				<div class="follow_me">
					<a href="<?php echo URL_RESEAU_SOCIAL_TWITTER; ?>" title="<?php echo sprintf(SEE_MY_PROFILE_ON, 'twitter'); ?>">
						<img src="images/social/twitter.png" alt="twitter" /> Twitter
					</a>
				</div>
				<?php /* <div class="follow_me">
					<a href="<?php echo URL_RESEAU_SOCIAL_TWITTER; ?>" title="<?php echo sprintf(SEE_MY_PROFILE_ON, 'Google Plus'); ?>">
						<img src="images/social/google_plus.png" alt="Google Plus" /> Google Plus
					</a>
				</div> */ ?>
			</div>
			<div class="col-sm-4">
				<h3><?php echo CONTACT_DETAILS; ?></h3>
				<div class="textwidget">
					<address>
						<strong>Benoit Guiraudou</strong><br>
						<?php echo LABEL_EMAIL_ADDRESS; ?> benoit.guiraudou@gmail.com
					</address>
				</div>
			</div>
			<?php /*
			<div class="col-sm-3">
				<h3><?php echo WEBSITES; ?></h3>
				<ul class="menu">
 					<!-- todo : format URL comme fonction \Osimatic\Helpers\Network\URL::format( -->
					<li><a href="<?php echo URL_PROJECT_SITE_PHOTOS; ?>"><?php echo URL_PROJECT_SITE_PHOTOS; ?></a></li>
					<li><a href="<?php echo URL_PROJECT_PARODIE_SERIE; ?>"><?php echo URL_PROJECT_PARODIE_SERIE; ?></a></li>
					<li><a href="<?php echo URL_PROJECT_DEFIQUIZZ; ?>"><?php echo URL_PROJECT_DEFIQUIZZ; ?></a></li>
					<li><a href="<?php echo URL_OSIMATIC_SOCIETE; ?>"><?php echo URL_OSIMATIC_SOCIETE; ?></a></li>
				</ul>
			</div>
 			*/ ?>
		</div>
	</div>
</section>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<?php echo sprintf(FOOTER_COPYRIGHT, date('Y')); ?>
			</div>
			<div class="col-sm-2">
				<p class="set_color">
					<a class="btn-preset preset_blue" href="#">&nbsp;</a>
					<a class="btn-preset preset_ocean" href="#">&nbsp;</a>
					<a class="btn-preset preset_purple" href="#">&nbsp;</a>
				</p>
			</div>
			<div class="col-sm-5">
				<ul class="pull-right">
					<li class=""><a href="<?php echo URL_INDEX; ?>"><?php echo HOME; ?></a></li>
					<li class=""><a href="<?php echo URL_CONTACT; ?>" ><?php echo CONTACT; ?></a></li>
					<?php /* <li class=""><a href="<?php echo URL_MENTIONS_LEGALES; ?>"><?php echo MENTIONS_LEGALES; ?></a></li> */ ?>
					<li class=""><a href="<?php echo URL_PLAN_DU_SITE; ?>" ><?php echo SITEMAP; ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer><!--/#footer-->

	<script type="text/javascript">
		var locale = 'fr-FR';
		var timeZone = 'Europe/Paris';
		var currency = 'EUR';
	</script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="js/helpers.js"></script>
	<script src="js/commun.js"></script>

	</body>
</html>