
<div style="margin-top: 80px;">
  <form method="post" enctype="multipart/form-data" action="<?php if(@$ActorId) echo base_url('Admin/UpdateActor'); else echo base_url('Admin/InsertActor');?>">
  <div>

    <label class="lbl">* Adı</label>
    <input type="text" required name="name" class="formInput" value="<?php if(@$Name) echo $Name;?>">
    <label class="lbl">* Soyadı </label>
    <input type="text" name="surname" class="formInput" value="<?php if(@$Surname) echo $Surname;?>">
    <label class="lbl">Adres </label>
    <input type="text" name="address" class="formInput" value="<?php if(@$Address) echo $Address;?>">
    <label class="lbl">Telefon </label>
    <input type="text" name="phone" class="formInput" value="<?php if(@$Phone) echo $Phone;?>">
    <label class="lbl">Yaş </label>
    <input type="text" name="age" class="formInput" value="<?php if(@$Age) echo $Age;?>">
   

    <label class="lbl"> * Link/Dosya </label>
    <select class="formInput" id="video-upload" name="video-upload">
      <option value="0">  Video URL ( Opsiyonel ) </option>
      <option value="1">  Video Upload  </option>
    </select>
    <input type="text" placeholder="Url giriniz" name="video-url" id="video-url" class="formInput" value="<?php if(@$ExternalLink==1){if(@$VideoPath) echo $VideoPath; }?>">
    <input type="file" name="videofile" id="videofile" accept=".mp4,.avi,.MKV">


    <label class="fileUpload" for="image_uploads">* Fotoğraf Seçin (PNG, JPG)</label>
    <input type="file" id="image_uploads" <?php if(@$ActorId) echo ""; else echo "required";?> multiple="true"  name="image_uploads[]" accept=".jpg, .jpeg, .png" style="position: absolute;" value="<?php if(@$Cover) echo $Cover;?>">
    <input type="text" id="url-upload" name="actorId" style="display: none" class="formInput" value="<?php if(@$ActorId) echo $ActorId;?>">

  </div>
  <div class="preview">
    <p>Seçili Dosya Yok</p>
  </div>
  <div>
    <button class="btn gray">Kaydet</button>
  </div>
</form>

</div>
</div>
<script type="text/javascript">
uploadchanged();
$("#video-upload").on('change',function()
{
    uploadchanged();

});
function uploadchanged(){
  if($('#video-upload').val()==0){
      $("#videofile").css("display","none");
      $("#video-url").css("display","block");
    }else{
      $("#videofile").css("display","block");
      $("#video-url").css("display","none");
    }
}
</script>


<script src="<?=base_url('assets/js/preview.js')?>"></script>