<div style="margin-top: 80px;">

  <form method="POST" enctype="multipart/form-data" action="<?=base_url('Admin/UpdateInfo')?>">
  <div>
   <label class="lbl"> Sayfa Başlığı </label>
    <input type="text" name="infoheader" class="formInput" value="<?=$infoheader?>" required="">
    <label class="lbl"> Tanıtım </label>
    <textarea class="formInput" style="height: 100px;" name="info" required=""><?=$info?></textarea>
    <label class="lbl">İletişim Başlığı</label>
    <input type="text" name="contactheader" class="formInput" value="<?=$contactheader?>">
    <label class="lbl"> E-Posta </label>
    <input type="text" name="email" class="formInput" value="<?=$email?>"/>
        <label class="lbl"> Telefon </label>
    <input type="text" name="phone" class="formInput" value="<?=$phone?>"/>

    <label class="fileUpload" for="image_uploads">Logo Seçin (PNG, JPG)</label>
    <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" style="position: absolute;display: none;" value="profile.jpg">
    
  </div>
  <div class="preview">
    <p>Seçili Dosya Yok</p>
  </div>
  <div>
        <input type="submit" class="btn gray"  value="Kaydet" />
</form>
</div>
<script src="<?=base_url('assets/js/preview.js')?>"></script>