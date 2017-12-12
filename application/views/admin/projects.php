


<!-- Animation -->
<div class="animated fadeIn" style="margin-top: 30px;">
<!-- Content --> 


<section class="projects__content">
<div class="row columns text-center">
<h4 class="excerpt__highlight">Projects</h4>
</div>
<div class="row">
      <button class="btn-primary" onclick="GoAddProject()">+</button>
      <button class="btn btn-pType"  onclick="GoEditProjectType()">Proje Tipi Ekle</button>

  <?php 
   foreach($projects as $project){
  ?>

        <div class="small-12 medium-6 large-4 columns" style="border:#ccc solid 1px; padding: 5px;">
           <button class="btn-success" onclick="EditProject(<?=$project->ProjectId?>);" >Düzenle</button>
           <button class="btn-danger" onclick="DeleteProject(<?=$project->ProjectId?>)">Sil</button>
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

<!-- End Content -->
</div>
<!-- End Animation -->

</div>
<script type="text/javascript">

  function GoAddProject(){
    window.location="AddProject";
  }
   function EditProject(id){
    window.location="EditProject/"+id;
  }
   function GoEditProjectType(id){
    window.location="EditProjectType";
  }

</script>
<!-- End Content Wrapper -->

