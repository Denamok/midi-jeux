<?php if (!defined('PLX_ROOT')) exit; ?>

<!--============================== footer =================================-->
<footer>
    <div class="container clearfix">
		<ul class="list-social pull-right">
			  <li><a class="icon-1" href="#"></a></li>
			  <li><a class="icon-2" href="#"></a></li>
			  <li><a class="icon-3" href="#"></a></li>
			  <li><a class="icon-4" href="#"></a></li>
		</ul>
		<div class="privacy pull-left">
			&copy; <?php echo date("Y") ?> <?php $plxShow->mainTitle('link'); ?> - 
			<?php $plxShow->subTitle(); ?> - 
			<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
			<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
			<?php $plxShow->httpEncoding() ?> - 
			<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>">
				<?php $plxShow->lang('ADMINISTRATION') ?>
			</a> - 

			Design par <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">TemplateMonster</a> 
		</div>
	</div>
</footer>
<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/bootstrap.js"></script>
</body>
</html>
