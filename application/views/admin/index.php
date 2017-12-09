

<div class="index__carousel">
  <div id="resultdiv"></div>
<!-- Flickity HTML init -->
<div class="animated fadeIn gallery">

<?php foreach($sliders as $slider ) { ?>
  <div class="gallery-cell forRemove<?=$slider->SliderId?>" style="background-image: url(<?=base_url('assets/uploads/'.$slider->Image)?>">
    <span class="edit-span" id="myBtn" >Edit</span>
  	<span class="delete-span" onclick="DeleteSlider(<?=$slider->SliderId?>)">X</span>
    <div class="row carousel__text align-middle align-center">
    	<div class="shrink columns">
    	   <h1><a href="<?=base_url('Admin/DeleteSliderImage/'.$slider->SliderId)?>"><?=$slider->Header?></a></h1>
    	</div>
    </div>

  </div>
<?php }?>

</div>
</div>


<!-- End Content -->
</div>
<!-- End Animation -->
<div class="row"  >
  <div class="alert deleting" style="display: none">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Siliniyor</strong> 
</div>
 <div class="alert deleted" style="display: none">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Silindi</strong> 
</div>
<form method="post" enctype="multipart/form-data" action="<?=base_url('Admin/InsertSlider')?>" style="margin-top: 10px;">
  <div>
    <label class="fileUpload" for="image_uploads">Choose images to upload (PNG, JPG)</label>
    <input type="file"  id="image_uploadx"  style="width: 1px; position: absolute; margin-top: -30px" name="image_uploadx" accept=".jpg, .jpeg, .png" style="position: absolute;">
    <div class="preview">
      <p>Seçili Dosya Yok</p>
    </div>
    <input type="file" name="image_uploads" id="image_uploads" />
    <label class="lbl">Üzerindeki Yazı</label>
    <input type="text" name="header" id="header" class="formInput">
  </div>
  
  <div>
    <input type="submit" class="btn btn-primary" style="color: black;" value="Kaydet" />
  </div>
</form>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
     Slider Güncelle
    </div>
    <div class="modal-body">
       <label class="lbl">Dosya Seçiniz</label>
      <input type="file" name="image_uploads" id="image_uploads" />
      <label class="lbl">Üzerindeki Yazı</label>
      <input type="text" name="header" id="header" class="formInput">
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
</div>

</div>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- End Content Wrapper -->

<!-- Footer -->
