<?php include(dirname(__FILE__).'/header.php'); ?>

<div class="bg-content">       
	<!--============================== content =================================-->      
	<div id="content">
		<div class="container">
			<div class="row">
				<article class="span8" role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">
					<header>
						<h1>
							<?php $plxShow->lang('ERROR'); ?>
						</h1>
					</header>
					<section>
						<?php $plxShow->erreurMessage(); ?>
					</section>
				</article>
				<?php include(dirname(__FILE__).'/sidebar.php'); ?>
			</div>
		</div>
	</div>
</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
