<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from shaheenbaigcasting.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Dec 2017 18:32:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="SoftWare61, http://SoftWare61.com" />

<!-- Begin Jekyll SEO tag v2.3.0 -->
<meta property="og:title" content="Ebru Bayburtlu Casting" />
<meta property="og:locale" content="en_US" />
<meta name="description" content="İstanbul cast direktörlüğü kontrollü olarak projelerde çalışma" />
<meta property="og:description" content="İstanbul cast direktörlüğü kontrollü olarak projelerde çalışma" />
<link rel="canonical" href="index.html" />
<meta property="og:url" content="index.html" />
<meta property="og:site_name" content="Ebru Bayburtlu Casting" />
<meta property="og:image" content="<?=base_url('assets/img/meta/og-image.png')?>" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@" />
<meta name="google-site-verification" content="CrJH-kVLym9He_sw0P3ddlqRIWlFL8XslSYYJN9tLEk" />
<script type="application/ld+json">
{"name":"Shaheen Baig Casting","description":"London-based casting director working on projects as diverse as Control, Black Mirror and The Impossible","author":null,"@type":"WebSite","url":"http://shaheenbaigcasting.com/","image":"http://shaheenbaigcasting.com/assets/img/meta/og-image.png","publisher":{"@type":"Organization","logo":{"@type":"ImageObject","url":"http://shaheenbaigcasting.com/assets/img/layout/logo.svg"}},"headline":"Shaheen Baig Casting","dateModified":null,"datePublished":null,"sameAs":null,"mainEntityOfPage":null,"@context":"http://schema.org"}</script>
<!-- End Jekyll SEO tag -->

<title><?=$title?></title>

<!-- Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/icons/apple-touch-icon.png')?>">
<link rel="icon" type="image/png" href="<?=base_url('assets/icons/favicon-32x32.png')?>" sizes="32x32">
<link rel="icon" type="image/png" href="<?=base_url('assets/icons/favicon-16x16.png')?>" sizes="16x16">
<link rel="manifest" href="<?=base_url('assets/icons/manifest.json')?>">
<link rel="shortcut icon" href="<?=base_url('assets/icons/favicon.ico')?>">
<meta name="msapplication-config" content="<?=base_url('/assets/icons/browserconfig.xml')?>">
<meta name="theme-color" content="#f2f2f2">

<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/app.css')?>">
		


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

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


<!-- Menu -->  
<!-- Overlay Menu -->
<div class="overlay" id="overlay" data-toggler=".open">
  <nav class="overlay-menu">
    <ul>
       <?php foreach ($projecttypes as $projectType) {?>
        <li class="element"><a href="<?=base_url('/Projects/Type/'.$projectType->Name)?>"><?=$projectType->Name?></a></li>
      <?php } ?>
        <li class="element"><a href="<?=base_url('/Info')?>">Info</a></li>
    </ul>
  </nav>
</div>
<!-- End Overlay Menu -->
<!-- End Menu --> 

<!-- Content Wrapper -->
<div class="content-wrapper">	
  


<!-- Animation -->
<div class="animated fadeIn">
<!-- Content -->
<section class="content">
<div class="index__wrapper">
<div class="title-bar show-for-small-only" >
	<img style="width:60px; height:60px;" src="<?=base_url('assets/uploads/proje1.webp')?>" />
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
	<img style="width:60px; height:60px;" src="<?=base_url('assets/uploads/proje1.webp')?>" />
	<li class="hide-for-small-only"><a href="<?=base_url('/Home')?>" class="header__home"><?=$title?></a></li>
	
    
        
<!-- check to see if the data file has a submenu, and if so display it -->

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
    	<li><a href="../www.facebook.com">FB</a></li>
    	<li><a href="../twitter.com">TW</a></li>
    	<li><a href="../www.instagram.com">IN</a></li>
    </ul>
  </div>
</div>
</div>