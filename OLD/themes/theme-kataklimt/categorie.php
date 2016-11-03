<?php include(dirname(__FILE__).'/header.php'); ?>
<div class="bg-content"> 
	<!--============================== content =================================-->
	<div id="content">
		<div class="container">
			<div class="row">
				<article class="span12">
					<h3><?php $plxShow->catName(); ?></h3>
				</article>
				<div class="clear"></div>
				<ul class="thumbnails thumbnails-1 list-services">
					<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
						<li class="span4"  role="article" id="post-<?php echo $plxShow->artId(); ?>">
							<div class="thumbnail thumbnail-1"> <img  src="<?php $plxShow->artThumbnail('#img_url'); ?>" alt="">
								<section><?php $plxShow->artTitle('link'); ?>
									<p><?php $plxShow->artChapo(); ?></p>
								</section>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
