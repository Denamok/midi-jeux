<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/plucss.css" media="screen"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css" media="screen"/>
	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php $plxShow->template(); ?>/js/superfish.js"></script>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.easing.1.3.js"></script>	  
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/touchTouch.jquery.js"></script>
	<script type="text/javascript">
	if($(window).width()>1024){
		document.write("<"+"script src='<?php $plxShow->template(); ?>/js/jquery.preloader.js'></"+"script>");
	}	
	</script>

	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
				
	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
	</head>

	<body>
    <div class="spinner"></div> 
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="<?php $plxShow->template(); ?>/img/logo.gif"> </a></h1>

            <!-- Légère réduction de la taille par défaut du texte dans les boutons rouges du menu.  Ajuster au besoin. -->
            <style>
				.nav-collapse_ .nav li a {
				  font-size: 16px;
				}
            </style>

			<div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
                <li class="sub-menu"><a href="themes/_kataklimt/index-1.html">Catégories</a>
                    <ul>
						<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>
                  </ul>
                    </li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
