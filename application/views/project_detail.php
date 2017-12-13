
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
  else if($project->ExternalLink==0){
?>

<div class="row post__hero align-center">
<div class="small-12 medium-8 columns">


<div class="flex-video widescreen vimeo">
<iframe src="<?=$project->VideoPath?>" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/E-v1.js" async=""></script>
</div>



</div>
</div>
<?php }else{ ?>
  <div class="row post__hero align-center">
  <div class="small-12 medium-8 columns">


  <div class="flex-video widescreen vimeo">
  <video width="640" height="360" controls>
    <source src="<?=base_url('assets/videos/'.$project->VideoPath)?>" type="video/mp4">
    <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
  </video>
</div>
</div>
</div>
<?php }
?>
<div class="project__pagination">
  <div class="row">
       <?php if(sizeof($left)>0){
        ?>
            <div class="small-6 columns">
              
              <a href="<?=base_url('Projects/Project/'.$left[0]->ProjectId)?>">
                <div class="pagination">
                <p><svg class="icon icon-arrow-right8"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-left-long"></use></svg></p>
                <p class="hide-for-small-only"><?=$left[0]->Header?></p>
                </div>
              </a>
          
        
            </div>
        <?php
        }else{
          ?>
        <div class="small-6 columns">
          
        </div>
          <?php
        }
       ?>
     
      <?php if(sizeof($right)>0){
        ?>
             <div class="small-6 columns text-right">
      
              <a href="<?=base_url('Projects/Project/'.$right[0]->ProjectId)?>">
                <div class="pagination">
                  <p><svg class="icon icon-arrow-left8"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-right-long"></use></svg></p>
                  <p class="hide-for-small-only"><?=$right[0]->Header?></p>
                </div>
              </a>
            
            </div>
        <?php
        }
       ?>     
    </div>
</div>
<?php
if(sizeof($same)>0){
  ?>
   <div class="small-12 columns text-center">
      <h1>Benzer İçerikler</h1>
  </div>
  <?php
}

 foreach ($same as $sam) { ?>
 <center>
    <div class="small-12 medium-6 large-4 columns">
          <article class="excerpt">
            <a href="<?=base_url('Projects/Project/'.$sam->ProjectId)?>">
              <div class="excerpt__image">
                <img src="<?=base_url('assets/uploads/'.$sam->Cover)?>" alt="<?=$sam->Header?>" title="<?=$sam->Header?>" />
              </div>
            </a>
            <h3 class="excerpt__title text-center"><a href="<?=base_url('Projects/Project/'.$sam->ProjectId)?>"><?=$sam->Header?></a></h3>
            
          </article>
        </div>
</center>
<?php } ?>

</div>
</div>
</section>
</section>
</div>
</div>


