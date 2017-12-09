

<div class="index__carousel">
<!-- Flickity HTML init -->
<div class="animated fadeIn gallery">

<?php foreach($sliders as $slider ) { ?>
  <div class="gallery-cell" style="background-image: url(<?=base_url('assets/uploads/'.$slider->Image)?>">
  	
    <div class="row carousel__text align-middle align-center">
    	<div class="shrink columns">
    	   <h1><a href="#"><?=$slider->Header?></a></h1>
    	</div>
    </div>

  </div>

<?php }?>

</div>
</div>

<section class="index__content">
<div class="row">
	<div class="columns">
		<p class="text-center excerpt__highlight">Casting Director</p>
	</div>
</div>

<div class="row">



  <?php 
   foreach($projects as $project){
  ?>
        <div class="small-12 medium-6 large-4 columns">
          <article class="excerpt">
            <a href="<?=base_url('Projects/Project/'.$project->ProjectId)?>">
              <div class="excerpt__image">
                <img src="<?=base_url('assets/uploads/'.$project->Cover)?>" alt="<?=$project->Header?>" />
              </div>
            </a>
            <h3 class="excerpt__title text-center"><a href="<?=base_url('Projects/Project/'.$project->ProjectId)?>"><?=$project->Header?></a></h2>
            
          </article>
        </div>
  <?php } ?>



</div>

</section>
</section>
<!-- End Content -->
</div>
<!-- End Animation -->

</div>
<!-- End Content Wrapper -->

<!-- Footer -->
