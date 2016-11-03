<?php if(!defined('PLX_ROOT')) exit; ?>
<?php require_once(dirname(__FILE__).'/switcher.php'); # couleur style intermédiaire ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title><?php $plxShow->pageTitle(); ?></title>
    <?php $plxShow->meta('description') ?>
    <?php $plxShow->meta('keywords') ?>
    <?php $plxShow->meta('author') ?>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<!--link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" /-->
        <link rel="icon" type="image/png" href="/themes/defaut/images/favicon.png" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	<?php $plxShow->templateCss() ?>
    <script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.js"></script>
</head>
<body class="home col-2-right fixed">

  <!-- page -->
  <div id="page">

    <!-- header -->
    <div class="page-content header-wrapper">
      <div id="header" class="bubbleTrigger">
        <div id="site-title" class="clearfix">
          <h1 id="logo"><a href="/"><img src="themes/defaut/images/logo-vp.png"/></h1>
          <p class="headline"><?php $plxShow->subTitle(); ?></p></a>
        </div>

      </div>
    </div>
    <!-- /header -->
    <!-- left+right bottom shadow -->
    <div class="shadow-left page-content main-wrapper">
      <div class="shadow-right">

        <!-- main content: primary + sidebar(s) -->
        <div id="main">
          <div id="main-inside" class="clearfix">
