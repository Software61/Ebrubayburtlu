<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="Ömür BURUK, http://www.facebook.com/WeBuruk" />
<meta property="og:title" content="Ebru Bayburtlu Casting" />
<meta property="og:locale" content="en_US" />
<meta name="keywords" content="İstanbul Casting,Cast,Directör,Casting,Ebru,Bayburtlu,Ebru Bayburtlu,Castdirektör,casting,project,info,reklam,advert,film,kısa film,televizyon,television,">
<meta name="author" content="Ömür BURUK">
<meta name="description" content="İstanbul - Cast direktörü Ebru Bayburtlu, kontrollü olarak projelerde çalışma, yönetim ve planlama." />
<meta property="og:description" content="İstanbul - Cast direktörü Ebru Bayburtlu, kontrollü olarak projelerde çalışma, yönetim ve planlama." />
<link rel="canonical" href="index.html" />
<meta property="og:url" content="index.html" />
<meta property="og:site_name" content="Ebru Bayburtlu Casting" />
<meta property="og:image" content="<?=base_url('assets/icons/logo.ico')?>" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@" />
<meta name="google-site-verification" content="CrJH-kVLym9He_sw0P3ddlqRIWlFL8XslSYYJN9tLEk" />
<script type="application/ld+json">
{"name":"Ebru Bayburtlu","description":"İstanbul - Cast direktörü Ebru Bayburtlu, kontrollü olarak projelerde çalışma, yönetim ve planlama.","author":"Ömür BURUK","@type":"WebSite","url":"http://ebrubayburtlu.com/","image":"http://ebrubayburtlu.com/assets/img/logo.jpg","publisher":{"@type":"Organization","logo":{"@type":"ImageObject","url":"http://ebrubayburtlu.com/assets/img/logo.jpg"}},"headline":"Ebru Bayburtlu","dateModified":null,"datePublished":null,"sameAs":null,"mainEntityOfPage":null,"@context":"http://schema.org"}</script>
<title><?=$title?></title>
<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/icons/apple-touch-icon.png')?>">
<link rel="icon" type="image/png" href="<?=base_url('assets/icons/logo.ico')?>" sizes="32x32">
<link rel="icon" type="image/png" href="<?=base_url('assets/icons/logo.ico')?>" sizes="16x16">
<link rel="manifest" href="<?=base_url('assets/icons/manifest.json')?>">
<link rel="icon" href="<?=base_url('assets/icons/logo.ico')?>" type="image/x-icon" />
<meta name="msapplication-config" content="<?=base_url('/assets/icons/browserconfig.xml')?>">
<meta name="theme-color" content="#f2f2f2">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/app.css')?>">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86496505-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-left-long" viewBox="0 0 16 16">
<title>left-long</title>
<path class="path1" d="M16 7.5h-14.085l2.795-2.795-0.71-0.705-4 4 4 4 0.705-0.705-2.79-2.795h14.085v-1z"></path>
</symbol>
<symbol id="icon-right-long" viewBox="0 0 16 16">
<title>right-long</title>
<path class="path1" d="M0 8.5h14.085l-2.795 2.795 0.71 0.705 4-4-4-4-0.705 0.705 2.79 2.795h-14.085v1z"></path>
</symbol>
</defs>
</svg>
<script>document.body.className += ' fade-out';</script>
<div class="overlay" id="overlay" data-toggler=".open">
  <nav class="overlay-menu">
    <ul>
       <?php foreach ($projecttypes as $projectType) {?>
        <li class="element"><a href="<?=base_url('/Projects/Type/'.$projectType->Name)?>"><?=$projectType->Name?></a></li>
      <?php } ?>
        <li class="element"><a href="<?=base_url('/Info')?>">Info</a></li>
         <?php 
        foreach($social as $soc){
          ?>
             <center><li class="element"><a target="blank"  href="<?=$soc->value?>"><img alt="<?=$soc->name?>" title="<?=$soc->name?>" src="<?=base_url('assets/icons/'.$soc->image)?>" /></a></li></center>
            <?php
        }
      ?>
    </ul>
  </nav>
</div>
<div class="content-wrapper"> 
<div class="animated fadeIn">
<section class="content">
<div class="index__wrapper">
<div class="title-bar show-for-small-only" >
  <img class="profile-img"  alt="<?=$title?>" src="<?=base_url('assets/uploads/'.$logo)?>" />
  <div class="title-bar-title"><a href="<?=base_url('/Home')?>" class="header__home"><?=$title?></a></div>
    <button class="hamburger hamburger--collapse" id="toggle" data-toggler=".is-active" type="button" data-toggle="overlay toggle">
      <span class="hamburger-box">
      <span class="hamburger-inner hamburger-inner-dark"></span>
      </span>
    </button> 
</div>
<div class="top-bar hide-for-small-only">
  <div class="top-bar-left">
  <ul class="vertical medium-horizontal dropdown menu primary-menu" data-dropdown-menu>
  <img class="profile-img" alt="<?=$title?>" title="<?=$title?>" src="<?=base_url('assets/uploads/'.$logo)?>" />
  <li class="hide-for-small-only"><a href="<?=base_url('/Home')?>" class="header__home"><?=$title?></a></li>

<li>
    <a href="<?=base_url('/Projects')?>">Projects</a>
    <ul class="menu">
     <?php foreach ($projecttypes as $projectType) {?>
      <li><a href="<?=base_url('/Projects/Type/'.$projectType->Name)?>"><?=$projectType->Name?></a></li>
     <?php } ?>
    </ul>
</li>

<li>
<a href="<?=base_url('/Info')?>">Info</a>
</li>
  </ul>
  </div>
  <div class="top-bar-right hide-for-small-only">
    <ul class="menu align-right">
      <?php 
        foreach($social as $soc){
          ?>
            <li><a target="blank" href="<?=$soc->value?>"><img alt="<?=$soc->name?>" title="<?=$soc->name?>" src="<?=base_url('assets/icons/'.$soc->image)?>" /></a></li>
            <?php
        }
      ?>
    </ul>
  </div>
</div>
</div>