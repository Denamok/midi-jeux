<?php if(!defined('PLX_ROOT')) exit; ?>

<article class="span4">
	<h3 class="extra">Recherche</h3>
	<form id="search" action="search.php" method="GET" accept-charset="utf-8" >
		<div class="clearfix">
		<input type="text">
		<a href="#" class="btn btn-1">Go</a> </div>
	</form>
	<h3>
		<?php $plxShow->lang('CATEGORIES'); ?>
	</h3>
	<ul class="list extra extra1">           
		<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
	</ul>
	<h3>
		<?php $plxShow->lang('LATEST_ARTICLES'); ?>
	</h3>
	<div class="wrapper">
		<ul class="list extra2 list-pad ">
			<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		</ul>
	</div>
</article>

<article class="span4">
	<h3>En images</h3>
	<ul class="list-photo">
		<?php $plxShow->lastArtList('<li><a href="#img_url" class="magnifier"><img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=165&h=110&crop-to-fit&f=grayscale"></a></li>',6); ?>
	</ul>
</article>

<article class="span4">
	<h3>
		<?php $plxShow->lang('TAGS'); ?>
	</h3>

	<ul class="tag-list">
		<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>'); ?>
	</ul>
</article>

<article class="span4">
	<h3>
		<?php $plxShow->lang('LATEST_COMMENTS'); ?>
	</h3>
	<ul class="lastcom-list unstyled-list">
		<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
	</ul>
</article>
<article class="span4">
	<h3>
		<?php $plxShow->lang('ARCHIVES'); ?>
	</h3>
	<ul class="arch-list unstyled-list">
		<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
	</ul>
</article>
<article class="span4">
	<h3>
		RSS
	</h3>
	<ul class="rss-list unstyled-list">
		<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
		<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
	</ul>
</article>
