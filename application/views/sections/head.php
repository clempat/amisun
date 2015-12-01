<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Descriptive Meta Tags -->

	<meta name="keywords" content="Expert, Maintenance, Photovoltaïque, solaire, Bureau d'étude, PV, Laval, Rennes, Alençon, Le Mans, Amiens, Montflours, ingenieur" />
	<meta name="description" content="ARL AMISUN - Entretien de votre installation photovoltaïque, maintenance, nettoyage, dépannage, onduleur, panneau solaire - Mayenne, Sarthe, Ille et Vilaine, Orne, Maine et Loire." />
	<meta name="copyright" content="Copyright (c) AMISUN 2013" />
	<meta name="language" content="fr-FR" />
	<meta name="author" content="Clément Patout, clement.patout@gmail.com">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Open Graph Meta Tags -->

	<meta name="og:title" content="AMISUN - Expert Photovoltaïque"/>
	<meta name="og:type" content="SARL AMISUN"/>
	<meta name="og:url" content="<?php echo current_url(); ?>"/>
	<meta name="og:image" content="<?php echo base_url('images/'); ?>/amisun_noir.png"/>
	<meta name="og:site_name" content="SARL AMISUN"/>
	<meta name="og:description" content="Site de SARL AMISUN - Entretien de votre installation photovoltaïque, maintenance, nettoyage, dépannage, onduleur, panneau solaire - Mayenne, Sarthe, Ille et Vilaine, Orne, Maine et Loire."/>

	<meta name="og:email" content="amisun.ouest@gmail.com"/>

	<title>
	<?php if (!isset($page_title)){echo "SARL AMISUN - Entretien de votre installation photovoltaïque, maintenance, nettoyage, dépannage, onduleur, panneau solaire - Mayenne, Sarthe, Ille et Vilaine, Orne, Maine et Loire.";} else {echo $page_title;} ?>
	</title>

    <!-- Included CSS Files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/stylesheets/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/stylesheets/style.css?v=1448967189">
	<!-- END Stylesheet-->

	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/stylesheets/ie.css">
	<![endif]-->
    <script type="text/javascript">
        var $buoop = {};
        $buoop.ol = window.onload;
        window.onload=function(){
            try {if ($buoop.ol) $buoop.ol();}catch (e) {}
            var e = document.createElement("script");
            e.setAttribute("type", "text/javascript");
            e.setAttribute("src", "http://browser-update.org/update.js");
            document.body.appendChild(e);
        }
    </script>
    <script src="<?php echo base_url('assets'); ?>/javascripts/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <link rel="apple-touch-icon" type="assets/images/png" href="<?php echo base_url('assets/images'); ?>/icon32x32.png" />
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/icon.ico'); ?>">

	<!-- Necessary Scripts -->

    <script src="<?php echo base_url('assets/javascripts'); ?>/head.load.min.js"></script>

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-39549487-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=222397754637658&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="menu contain-to-grid">
    <nav class="top-bar">
        <ul>
            <li class="name">
                <?php echo anchor("",img(array('assets/images/amisun.png', 'class'=>"mobile-centered", 'id'=>"logo", 'alt' => 'Logo entreprise AMISUN' )))?>
            </li>
            <li class="toggle-topbar"><a href="#"></a></li>
        </ul>
        <section>
            <ul class="right">
                <li class="divider"></li>
                <li><?php echo anchor("maintenance", "Maintenance") ?></li>
                <li class="divider"></li>
                <li><?php echo anchor("nettoyage", "Nettoyage") ?></li>
                <li class="divider"></li>
                <li><?php echo anchor("depannage", "Dépannage") ?></li>
                <li class="divider"></li>
                <li><?php echo anchor("prestations", "Installations") ?></li>
                <li class="divider"></li>
                <li><?php echo anchor("coordonnees", "Coordonnées") ?></li>
                <li class="divider"></li>
                <!--<li><?php echo anchor("actualites", "Actualités") ?></li>
                <li class="divider"></li>-->
            </ul>
        </section>
    </nav>
</div>

<div id="top_page">
  <?php echo img(array('assets/images/fond-top.png', 'class'=>"background"))?>
  <div class="row">
      <div class="five columns article">
        <h2>AMISUN</h2>
        <p class="lead">
          <nobr>est spécialisée dans l’entretien des installations photovoltaïques.</nobr>
          <br />
          <strong> Maintenance - Nettoyage - Dépannage - Installation </strong>
        </p>
        <a href="http://www.qualit-enr.org/amisun/" target="_blank"><?php echo img(array('src' => 'assets/images/qualipv.png', 'height' => '88px', 'class' => '')); ?></a>
        <a href="http://france.pvcycle.org/" target="_blank"><?php echo img(array('src' => 'assets/images/pvcycle2.png', 'height' => '88px', 'class' => 'pvcycle')); ?></a>
        </div>
    </div>
    <div class="ribbon-wrapper-red"><div class="ribbon-red"><?php echo anchor("contact", "Contact <br> Demande de devis") ?></div></div>
</div>

<div class="row page">
    <div class="row">
        <div class="offset-by-nine hide-for-small two columns facebook text-center">
            <a href="https://www.facebook.com/amisun53" target="_blank"><?php echo img(array('src' => 'assets/images/facebook.png', 'width' => '250px', 'class' => '')); ?></a><br>
            <div class="fb-like" data-href="https://www.facebook.com/amisun53" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        </div>
    </div>
    <?php if(!empty($msg)) {?>
    <div class="alert-box <?= $msg[1]?>">
        <?= $msg[0] ?> <a href="" class="close">&times;</a>
    </div>
    <?php } ?>
