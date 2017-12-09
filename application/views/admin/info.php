<div style="margin-top: 80px;">

  <form method="post" enctype="multipart/form-data">
  <div>
   <label class="lbl"> Başlık </label>
    <input type="text" name="infoheader" class="formInput" value="<?=$infoheader?>" required="">
    <label class="lbl"> Hakkımızda </label>
    <textarea class="formInput" style="height: 100px;" name="info" required="">
        <?=$info?>
    </textarea>
    <label class="lbl"> E-Posta </label>
    <input type="text" name="email" class="formInput" value="<?=$email?>"/>
        <label class="lbl"> Telefon </label>
    <input type="text" name="phone" class="formInput" value="<?=$phone?>"/>

    <label class="fileUpload" for="image_uploads">Resim Dosyası Seçin (PNG, JPG)</label>
    <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" style="position: absolute;" value="profile.jpg">
    
    <label class="lbl">Profil Fotoğrafı </label>
  </div>
  <div class="preview">
    <p>Seçili Dosya Yok</p>
  </div>
  <div>
    <button class="btn">Kaydet</button>
  </div>
</form>
</div>