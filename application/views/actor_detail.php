
<!-- Animation -->
<div class="animated fadeIn" style="margin-top: 80px;">
<!-- Content -->
<section class="content">
<section class="project">
<!-- Post Title -->
<div class="row project__meta">
  <div class="small-12 columns text-center">

  </div>
</div>

<div class="row post__hero align-center">

</div>

<?php
 $data=explode(",",$actor->Photo);




?>
			<div class="animated fadeIn gallery" style="width: 33%; float: left;">
<?php 
 foreach ($data as $item) { ?>

     <div class="gallery-cell" alt=">" title="" style="background-image: url(<?=base_url('assets/actors/'.$item)?>">
    <div class="row carousel__text align-middle align-center">
    	<div class="shrink columns">

    	</div>
    </div>
  </div>


<?php } ?>



</div>


	<div class="row contact">
		<div class="small-12 columns text-center">
			<h4 class="excerpt__highlight"><?=$actor->Name?> <?=$actor->Surname?></h4>
		</div>
	</div>
	<div class="row align-center text-center">
		<div class="small-11 medium-10 large-8 columns">
			<p><?php if($actor->Address!="")echo 'Adres:'.$actor->Address ?><br>
			<?php if($actor->Phone!="")echo 'Telefon:'.$actor->Phone ?><br>
			<?php if($actor->Age!=0)echo 'Yaş:'.$actor->Age ?><br>
			<p>

			<?php if($actor->VideoPath!="" && $actor->ExternalLink==0){?>
			<div class="flex-video widescreen vimeo">
			  <video width="640" height="360" controls="">
			    <source src="<?=base_url('assets/actors/videos/'.$actor->VideoPath)?>" type="video/mp4">
			    <source src="movie.ogg" type="video/ogg">
			  Your browser does not support the video tag.
			  </video>
			</div>
<?php }else if($actor->VideoPath!="" && $actor->ExternalLink==1){ ?>
				
		<div class="row post__hero align-center">
			<div class="small-12 medium-8 columns">
				<div class="flex-video widescreen vimeo">
				<iframe id="iframe" src="<?=$actor->VideoPath?>" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/E-v1.js" async=""></script>
				</div>
			</div>
		</div>	

	<?php } ?>
		</div>
	</div>




</div>
</div>


</div>
</div>
</section>
</section>
</div>
</div>
