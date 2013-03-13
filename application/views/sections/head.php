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
	<meta name="description" content="SARL AMISUN, L'expertise photovoltaïque à portée de main" />
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
	<meta name="og:description" content="Site de SARL AMISUN, L'expertise photovoltaïque à portée de main."/>

	<meta name="og:email" content="amisun.ouest@gmail.com"/>

	<title>
	<?php if (!isset($page_title)){echo "SARL AMISUN - L'expertise photovoltaïque à portée de main";} else {echo $page_title;} ?>
	</title>

	<!-- Included CSS Files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/stylesheets/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/stylesheets/style.css">
	<!-- END Stylesheet-->

	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/stylesheets/ie.css">
	<![endif]-->

	<script src="<?php echo base_url('assets/foundation'); ?>/javascripts/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <link rel="apple-touch-icon" type="assets/images/png" href="<?php echo base_url('assets/images'); ?>/icon32x32.png" />
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/icon.ico'); ?>">

	<!-- Necessary Scripts -->
	<script src="<?php echo base_url('assets/javascripts'); ?>/head.load.min.js"></script>

</head>
<body>
<div class="menu contain-to-grid">
    <nav class="top-bar">
        <ul>
            <li class="name"><?php echo anchor("",img(array('assets/images/amisun.png', 'class'=>"mobile-centered", 'id'=>"logo" )))?></li>
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
                <li><?php echo anchor("prestations", "Autres Prestations") ?></li>
                <li class="divider"></li>
                <li><?php echo anchor("coordonnees", "Coordonnées") ?></li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
</div>

<div id="top_page">
  <?php echo img(array('assets/images/fond-top.svg', 'class'=>"background" ))?>
  <div class="row">
      <div class="five columns article">
      <h2>L'entreprise AMISUN</h2><p class="lead"><nobr> spécialisée dans l’entretien des générateurs photovoltaïques. </nobr><br /> <strong> Maintenance - Nettoyage - Dépannage </strong></p> <?php echo img(array('src' => 'assets/images/qualipv2013.png', 'width' => '100px', 'class' => '')); ?></div></div>
  <div class="ribbon-wrapper-green"><div class="ribbon-green"><?php echo anchor("contact", "Contact") ?></div></div>
</div>

<div class="row page">
    <?php if(!empty($msg)) {?>
    <div class="alert-box <?= $msg[1]?>">
        <?= $msg[0] ?> <a href="" class="close">&times;</a>
    </div>
    <?php } ?>