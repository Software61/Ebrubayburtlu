
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
    <label class="lbl"> Video URL ( Opsiyonel ) </label>
    <input type="text" name="videopath" class="formInput" value="<?php if(@$VideoPath) echo $VideoPath;?>">

    <label class="fileUpload" for="image_uploads">* Kapak Fotografı Seçin (PNG, JPG)</label>
    <input type="file" id="image_uploads" required name="image_uploads" accept=".jpg, .jpeg, .png" style="position: absolute;" value="<?php if(@$Cover) echo $Cover;?>">
    <input type="text" name="projectId" style="display: none" class="formInput" value="<?php if(@$ProjectId) echo $ProjectId;?>">
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


<script src="<?=base_url('assets/js/preview.js')?>"></script>