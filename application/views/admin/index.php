

<div class="index__carousel">
  <div id="resultdiv"></div>
<!-- Flickity HTML init -->
<div class="animated fadeIn gallery">

<?php foreach($sliders as $slider ) { ?>
  <div class="gallery-cell forRemove<?=$slider->SliderId?>" style="background-image: url(<?=base_url('assets/uploads/'.$slider->Image)?>"> 
    <span class="edit-span myBtn" data-target="<?=$slider->SliderId?>" data-value="<?=$slider->Header?>" id="myBtn">Edit</span>
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
    <input type="file"  id="image_uploads"  style="width: 1px; position: absolute; margin-top: -30px" name="image_uploads" accept=".jpg, .jpeg, .png" style="position: absolute;">
    <div class="preview">
      <p>Seçili Dosya Yok</p>
    </div>

    <label class="lbl">Üzerindeki Yazı</label>
    <input type="text" name="header" id="header" class="formInput">
  </div>
  
  <div>
    <input type="submit" class="btn gray" value="Kaydet" />
  </div>
</form>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
      <span class="close" style="margin-top: -13px;">x</span>
    <div class="modal-header">
    
      <h3> Slider Güncelle</h3>
    </div>
    <div class="modal-body">
    <form method="POST" enctype="multipart/form-data"  action="<?=base_url('Admin/UpdateSlider')?>">
       <label class="lbl">Dosya Seçiniz</label>
      <input type="file" name="image_uploads" id="image_uploads" />
      <label class="lbl">Üzerindeki Yazı</label>
      <input type="text" name="header" id="headerModal" class="formInput">
      <div name="formSlider" id="formSlider"></div>
      <button type="submit" class="btn btn-default">Kaydet</button>
      </form>
    </div>
    <div class="modal-footer">
    </div>
  </div>

</div>
</div>

</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
/*
$('.myBtn').foreach(index,function(){
  $(this).onclick(function(){
    var header=$(this).parent.find()
  });
})*/
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens theı modal
var btn = document.getElementById("myBtn");
var sliderUpdate = document.getElementById("formSlider");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 

$(".myBtn").click(function() {
modal.style.display = "block";                        // Append the text to <li>
    sliderUpdate.innerHTML='<input type="text" name="sliderId" id="sliderId" style="display:none;" value="'+$(this).attr("data-target")+'"/>';
    $("#headerModal").val($(this).attr("data-value"));
});


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
<script src="<?=base_url('assets/js/preview.js')?>"></script>

<!-- End Content Wrapper -->

<!-- Footer -->
