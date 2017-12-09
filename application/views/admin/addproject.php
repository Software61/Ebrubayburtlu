
<div style="margin-top: 80px;">
  <form method="post" enctype="multipart/form-data">
  <div>
    <label class="lbl">Proje Adı</label>
    <input type="text" name="" class="formInput">
    <label class="lbl"> Yönetmen </label>
    <input type="text" name="" class="formInput">
    <label class="lbl"> İle </label>
    <input type="text" name="" class="formInput">
    <label class="lbl"> Kategori </label>
    <select class="formInput">
      <option value="">Film</option>
      <option value="">Televizyon</option>
    </select>
    <label class="lbl"> Vitrin </label>
     <select  name="vitrin" class="formInput">
      <option value="1">Evet</option>
      <option value="0">Hayır</option>
    </select>
  <label class="lbl"> URL </label>
  <input type="text" name="" class="formInput">

    <label class="fileUpload" for="image_uploads">Resim Dosyası Seçin (PNG, JPG)</label>
    <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" style="position: absolute;">
    
  <label class="lbl">Kapak Fotoğraf </label>
  </div>
  <div class="preview">
    <p>Seçili Dosya Yok</p>
  </div>
  <div>
    <button class="btn">Kaydet</button>
  </div>
</form>

</div>
</div>


<script type="text/javascript">
  var input = document.getElementById('image_uploads');
var preview = document.querySelector('.preview');

input.style.opacity = 0;input.addEventListener('change', updateImageDisplay);function updateImageDisplay() {
  while(preview.firstChild) {
    preview.removeChild(preview.firstChild);
  }

  var curFiles = input.files;
  if(curFiles.length === 0) {
    var para = document.createElement('p');
    para.textContent = 'No files currently selected for upload';
    preview.appendChild(para);
  } else {
    var list = document.createElement('ol');
    preview.appendChild(list);
    for(var i = 0; i < curFiles.length; i++) {
      var listItem = document.createElement('li');
       if(validFileType(curFiles[i])) {
       var image = document.createElement('img');
        image.src = window.URL.createObjectURL(curFiles[i]);
        listItem.appendChild(image);
      } 

      list.appendChild(listItem);
    }
  }
}var fileTypes = [
  'image/jpeg',
  'image/pjpeg',
  'image/png'
]

function validFileType(file) {
  for(var i = 0; i < fileTypes.length; i++) {
    if(file.type === fileTypes[i]) {
      return true;
    }
  }

  return false;
}function returnFileSize(number) {
  if(number < 1024) {
    return number + 'bytes';
  } else if(number > 1024 && number < 1048576) {
    return (number/1024).toFixed(1) + 'KB';
  } else if(number > 1048576) {
    return (number/1048576).toFixed(1) + 'MB';
  }
}
</script>