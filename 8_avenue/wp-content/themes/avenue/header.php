<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--<link rel="icon" type="image/png" href="" />-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <meta name="robots" content="noindex,nofollow">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/js/fancybox/source/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/theme-style.css">
  <?php wp_head(); ?>
</head>
<body>

<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 logo">
        <a href="<?php bloginfo('url') ?>">
          <img src="<?php bloginfo('template_directory') ?>/img/logo.png">
        </a>
        <button aria-controls="bs-navbar" aria-expanded="false" class="collapsed navbar-toggle" data-target="#bs-navbar" data-toggle="collapse" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="col-md-10 menu">
        <ul class="top-menu list-inline">
          <li><a href="<?php bloginfo('url') ?>" class="<?php if(is_home()){ echo "selected"; } ?>">Accueil</a></li>
          <li><a href="<?php bloginfo('url') ?>/creez-une-alerte-email/">Créer une alerte-email</a></li>
          <li><a href="<?php bloginfo('url') ?>/deposez-une-recherche/">Déposez votre recherche</a></li>
          <li><a href="<?php bloginfo('url') ?>/vendre-un-bien/">Vendre un bien</a></li>
          <li><a href="<?php bloginfo('url') ?>/news/">News</a></li>
          <li><a href="https://www.facebook.com/agence8thavenue" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        <ul class="bottom-menu list-inline">
          <li><a href="<?php bloginfo('url') ?>/locations/">Location</a>
            <ul class="list-unstyled sous_menu">
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-location/?cat=appartements">Appartements</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-location/?cat=appartements-meubles">Appartements meublés</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-location/?cat=villas">Villas</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-location/?cat=villas-meubles">Villas meublés</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-location/?cat=bureaux">Bureaux</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-location/?cat=locaux-commerciaux">Locaux commerciaux</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-location/?cat=locaux-industriel">Locaux industriel</a></li>
            </ul>
          </li>
          <li><a href="<?php bloginfo('url') ?>/vente/">Vente</a>
            <ul class="list-unstyled sous_menu">
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-vente/?cat=appartements">Appartements</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-vente/?cat=villas">Villas</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-vente/?cat=bureaux">Bureaux</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-vente/?cat=locaux-commerciaux">Locaux commerciaux</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-vente/?cat=locaux-industriel">Locaux industriel</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-vente/?cat=terrains">Terrains</a></li>
              <li><a href="<?php bloginfo('url') ?>/tx-categorie-vente/?cat=riad">Riad</a></li>
            </ul>
          </li>
          <li><a href="<?php bloginfo('url') ?>/gestion-locative/">Gestion Locative</a></li>
          <li><a href="<?php bloginfo('url') ?>/commercialisation/">Commercialisation</a></li>
          <li><a href="<?php bloginfo('url') ?>/maitrise-doeuvre-delegue/">Maitrise d'oeuvre délégué</a></li>
          <li><a href="javascript:void(0)">Galerie</a>
          <ul class="list-unstyled sous_menu">
            <li><a href="<?php bloginfo('url') ?>/galerie-photo/">Photos</a></li>
            <li><a href="<?php bloginfo('url') ?>/videos/">Videos</a></li>
          </ul>
          </li>
          <li><a href="#">Dico immobilier</a></li>
          <li><a href="<?php bloginfo('url') ?>/contact/">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>