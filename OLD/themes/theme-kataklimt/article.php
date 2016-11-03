<?php include(dirname(__FILE__).'/header.php'); ?>

<div class="bg-content">       
  <!--============================== content =================================-->      
   <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container">
          <div class="row">
        <article class="span8">
			 <div class="inner-1">         
				<h1><?php $plxShow->artTitle(); ?></h1>     
				<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>" class="date-1">
				<?php $plxShow->artDate('#num_day'); ?>.
				<?php $plxShow->artDate('#num_month'); ?>.
				<?php $plxShow->artDate('#num_year(4)'); ?></time>
				<div class="name-author"><?php $plxShow->lang('WRITTEN_BY'); ?> <a href="#"><?php $plxShow->artAuthor() ?></a></div>
				<a href="#comments" class="comments"><?php $plxShow->artNbCom(); ?></a> 
				<div class="clear"></div>            
				<img alt="" src="<?php $plxShow->artThumbnail('#img_url'); ?>">                               
		
				<?php $plxShow->artContent(); ?>
		
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

			</div>  
        </article>
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
      </div>
     </div>
  </div>
 </div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
