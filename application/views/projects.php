


<!-- Animation -->
<div class="animated fadeIn">
<!-- Content -->
<section class="content">
<section class="projects__content">
<div class="row columns text-center">
<h4 class="excerpt__highlight">Projects</h4>
</div>

<div class="row">


  <?php 
   foreach($projects as $project){
  ?>
        <div class="small-12 medium-6 large-4 columns">
          <article class="excerpt">
            <a href="#">
              <div class="excerpt__image">
                <img src="<?=base_url('assets/uploads/'.$project->Cover)?>" alt="<?=$project->Header?>" />
              </div>
            </a>
            <h3 class="excerpt__title text-center"><a href="#"><?=$project->Header?></a></h2>
            
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

