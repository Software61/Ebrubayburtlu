
<div style="margin-top: 80px;">
  <form method="post" enctype="multipart/form-data" action="<?php if(@$ProjectId) echo base_url('Admin/UpdateProject'); else echo base_url('Admin/InsertProject');?>">
  <div>
    <label class="lbl">* Proje Adı</label>
    <input type="text" required name="header" class="formInput" value="<?php if(@$Header) echo $Header;?>">
    <label class="lbl"> Yönetmen </label>
    <input type="text" name="director" class="formInput" value="<?php if(@$Director) echo $Director;?>">
    <label class="lbl"> İle </label>
    <input type="text" name="with" class="formInput" value="<?php if(@$With) echo $With;?>">
    <label class="lbl"> * Kategori </label>
    <select class="formInput" name="projecttype" id="projecttype">
      <?php foreach ($projecttypes as $cat) {?>
        <option value="<?=$cat->ProjectTypeId?>" <?php if(@$ProjectTypeId && @$ProjectTypeId==$cat->ProjectTypeId) echo 'selected="selected"';?>"><?=$cat->Name?></option>
       <?php } ?>
    </select>
    <label class="lbl"> * Vitrin </label>
    <select class="formInput" name="vitrin" id="vitrin">
        <option value="1" <?php if(@$Vitrin=='1')echo 'selected="selected"';?>    >Evet</option>
        <option value="0" <?php if(@$Vitrin=='0') echo 'selected="selected"';?> >Hayır</option>
    </select>
   

    <label class="lbl"> * Link/Dosya </label>
    <select class="formInput" id="video-upload" name="video-upload">
      <option value="0">  Video URL ( Opsiyonel ) </option>
      <option value="1">  Video Upload  </option>
    </select>
    <input type="text" placeholder="Url giriniz" name="video-url" id="video-url" class="formInput" value="<?php if(@$VideoPath) echo $VideoPath;?>">
    <input type="file" name="videofile" id="videofile" accept=".mp4,.avi,.MKV">


    <label class="fileUpload" for="image_uploads">* Kapak Fotografı Seçin (PNG, JPG)</label>
    <input type="file" id="image_uploads" <?php if(@$ProjectId) echo ""; else echo "required";?>  name="image_uploads" accept=".jpg, .jpeg, .png" style="position: absolute;" value="<?php if(@$Cover) echo $Cover;?>">
    <input type="text" id="url-upload" name="projectId" style="display: none" class="formInput" value="<?php if(@$ProjectId) echo $ProjectId;?>">

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