
<!-- Animation -->
<div class="animated fadeIn" style="margin-top: 80px;">
<!-- Content -->
<section class="content">
<section class="project">
<!-- Post Title -->
<div class="row project__meta">
  <div class="small-12 columns text-center">
    <h1><?=$project->Header?></h1>
    <p class="excerpt__director"><span class="project_meta_detail">Director:</span> <?=$project->Director?></p>
    
    
    <p class="excerpt__with"><span class="project_meta_detail">With:</span> <?=$project->With?></p>
    
  </div>
</div>
<?php

if($project->VideoPath==""){

?>

<div class="row post__hero align-center">
<div class="small-12 medium-8 columns">

<img src="<?=base_url('assets/uploads/'.$project->Cover)?>" alt="<?=$project->Header?>">


</div>
</div>



<div class="row post__content">
  <div class="small-12 columns text-center">
    

  </div>
</div>

<?php }
  else {
?>

<div class="row post__hero align-center">
<div class="small-12 medium-8 columns">


<div class="flex-video widescreen vimeo">
<iframe src="<?=$project->VideoPath?>" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/E-v1.js" async=""></script>
</div>



</div>
</div>
<?php } ?>


<div class="project__pagination">
  <div class="row">
        
        <div class="small-6 columns">
          
    <a href="/projects/philip-k-dicks-electric-dreams-the-commuter/">
        <div class="pagination">
        <p><svg class="icon icon-arrow-right8"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-left-long"></use></svg></p>
        <p class="hide-for-small-only">Philip K. Dick's Electric Dreams: The Commuter</p>
        </div>
      </a>
      
    
    </div>
                         
        
        <div class="small-6 columns text-right">
      
    <a href="/projects/philip-k-dicks-electric-dreams-crazy-diamond/">
        <div class="pagination">
          <p><svg class="icon icon-arrow-left8"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-right-long"></use></svg></p>
          <p class="hide-for-small-only">Philip K. Dick's Electric Dreams: Crazy Diamond</p>
        </div>
      </a>
    
    </div>
    
    </div>
</div>

</div>
</div>
<!-- End Pagination -->

<!-- Post Share Bottom -->
<!--
<div class="row project__share">
  <div class="small-12 columns text-center">
    <ul class="menu simple align-center">
      <li>
<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.insideretail.com&t=" target="_blank" title="Share on Facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;">
<svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg>
</a>
</li>

<li>
<a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fwww.insideretail.com&text=:%20http%3A%2F%2Fwww.insideretail.com" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;">
<svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg>
</a>
</li>

<li>
<a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.insideretail.com" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><svg class="icon icon-google-plus"><use xlink:href="#icon-google-plus"></use></svg></a>
</li>
      </ul>
  </div>
</div>
-->
<!-- End Post Share Bottom -->

</section>



</section>
<!-- End Content -->
</div>
<!-- End Animation -->

</div>
<!-- End Content Wrapper -->

