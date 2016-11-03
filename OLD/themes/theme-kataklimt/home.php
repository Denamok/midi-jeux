<?php include(dirname(__FILE__).'/header.php'); ?>

<div class="bg-content">
	<div class="container">
		<div class="row">
			<div class="span12"> 
				<!--============================== slider =================================-->
				<div class="flexslider">
					<ul class="slides">
						<?php $plxShow->lastArtList('<li><a href="#art_url"><img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=770&h=393&crop-to-fit"></a></li>',5); ?>
					</ul>
				</div>
				<span id="responsiveFlag"></span>
				<div class="block-slogan">
					<h2>Bienvenue!</h2>
					<div>
						<p>Un petit texte invitant installé sous le carrousel.  Libre à vous de le modifier pour y mettre votre propre contenu.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
      
      <!--============================== content =================================-->
	<div id="content" class="content-extra">
		<div class="row-1">
			<div class="container">
				<div class="row">
					  <ul class="thumbnails thumbnails-1">
						<?php $plxShow->lastArtList(' <li class="span3">
						<div class="thumbnail thumbnail-1">
							<h3>Catégorie 1</h3>
							<img  src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=270&h=146&crop-to-fit" alt="#img_alt">
							<section> <strong>#art_title</strong>
								<p>#art_chapo</p>
								<a href="#art_url" class="btn btn-1">Voir</a>
							 </section>
						</div>
						</li>','1',1); ?>
		 
						<?php $plxShow->lastArtList(' <li class="span3">
						  <div class="thumbnail thumbnail-1">
						<h3>Catégorie 1</h3>
							<img  src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=270&h=146&crop-to-fit" alt="#img_alt">
						<section> <strong>#art_title</strong>
							  <p>#art_chapo</p>
							  <a href="#art_url" class="btn btn-1">Voir</a>
						  </section>
					  </div>
						</li>','1',1); ?>
		 
						<?php $plxShow->lastArtList(' 
						<li class="span3">
							<div class="thumbnail thumbnail-1">
								<h3>Catégorie 1</h3>
							<img  src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=270&h=146&crop-to-fit" alt="#img_alt">
								<section> <strong>#art_title</strong>
								  <p>#art_chapo</p>
								  <a href="#art_url" class="btn btn-1">Voir</a>
								</section>
							</div>
						</li>','1',1); ?>
		 
						<?php $plxShow->lastArtList('
						<li class="span3">
							<div class="thumbnail thumbnail-1">
								<h3>Catégorie 1</h3>
							<img  src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=270&h=146&crop-to-fit" alt="#img_alt">
								<section> <strong>#art_title</strong>
									<p>#art_chapo</p>
									<a href="#art_url" class="btn btn-1">Voir</a>
								</section>
							</div>
						</li>','1',1); ?>
				  </ul>
				</div>
			 </div>
		</div>
		<div class="container">
			<div class="row">
				<article class="span6">
					<h3>À propos de moi</h3>
					<div class="wrapper">
						<?php $plxShow->lastArtList('
						<figure class="img-indent"><img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=270&h=321&crop-to-fit" alt="#img_alt" /></figure>
						<div class="inner-1 overflow extra">
							<div class="txt-1">#art_chapo</div>
							#art_content
							<div class="border-horiz"></div>',1,'1'); ?>
							<div class="overflow">
								<ul class="list list-pad"> 
									<?php $plxShow->catList('','
									<li id="#cat_id">
										<a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a>
									</li>'); ?>
								</ul>
								<ul class="list">
									<?php $plxShow->catList('','
									<li id="#cat_id">
										<a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a>
									</li>'); ?>
								</ul>
								<!--ul class="list list-pad">
									  <li><a href="#">Campaigns</a></li>
									  <li><a href="#">Portraits</a></li>
									  <li><a href="#">Fashion</a></li>
									  <li><a href="#">Fine Art</a></li>
									</ul>
								<ul class="list">
									  <li><a href="#">Advertising</a></li>
									  <li><a href="#">Lifestyle</a></li>
									  <li><a href="#">Love story</a></li>
									  <li><a href="#">Landscapes</a></li>
									</ul-->
							</div>
						</div>
					</div>
				</article>
				<article class="span6">
					<h3>En images</h3>
					<ul class="list-photo">
						<?php $plxShow->lastArtList('<li><a href="#img_url" class="magnifier"><img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=120&h=86&crop-to-fit&f=grayscale"></a></li>',12); ?>
					</ul>
				</article>
			</div>
		</div>
	</div>
</div>
<?php include(dirname(__FILE__).'/footer.php'); ?>
