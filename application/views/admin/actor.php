


<!-- Animation -->
<div class="animated fadeIn" style="margin-top: 80px;">
<!-- Content --> 


<section class="projects__content">
<div class="row columns text-center">
<h4 class="excerpt__highlight">Actors</h4>
</div>
<div class="row">
      <button class="btn-primary" onclick="GoAddActor()">+</button>
  <?php 
   foreach($actors as $actor){
          $dataActor=explode(",",$actor->Photo);
  ?>

        <div class="small-12 medium-6 large-4 columns" style="border:#ccc solid 1px; padding: 5px;">
           <button class="btn-success" onclick="EditActor(<?=$actor->ActorId?>);" >Düzenle</button>
           <button class="btn-danger" onclick="DeleteActor(<?=$actor->ActorId?>)">Sil</button>
          <article class="excerpt">
          <img class="" src="<?=base_url('assets/actors/'. $dataActor[0])?>"/>
          </article>
        </div>
  <?php } ?>


</div>

</section>
<!-- End Content -->
</div>
<!-- End Animation -->

</div>
<script type="text/javascript">
    function GoAddActor(){
    window.location="AddActor";
  }
  function EditActor($id){
    window.location="EditActor/"+$id;
  }
</script>