

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Animation -->
<div class="animated fadeIn" style="margin-top: 80px;">
<!-- Content --> 


<section class="projects__content">
<div class="row columns text-center">
<h4 class="excerpt__highlight">Actors</h4>
</div>
<div class="row">
  <div class="containerSnake">
  <?php 
   foreach($actors as $actor){
      $data=explode(",",$actor->Photo); ?>
      <div class="mainSnake snake small-12 medium-6 large-4 columns">
          <div class="overlaySnake">
            <span class="title">Ad: <?=$actor->Name?></span>
            <span class="title">Soyad: <?=$actor->Surname?></span>
            <span class="title">
            <h3 class="excerpt__title text-center">
              <a href="<?=base_url('Actors/ActorDetail/'.$actor->ActorId)?>">Detay</a>
            </h3>
          <span class="description"></span>
          </div>
          <img class="" src="<?=base_url('assets/actors/'. $data[0])?>"/>
      </div>

   
  <?php } ?>
 </div>

</div>

</section>

<!-- End Content -->
</div>
<!-- End Animation --> 
</div>

<script src="<?=base_url('assets/js/snake.js')?>" >
  
</script>
<script>$(".snake").snakeify({speed: 200});</script>

