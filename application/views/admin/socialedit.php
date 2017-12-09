








<div style="margin-top: 80px;">
  <form method="POST" action="<?=base_url('Admin/SocialUpdate')?>">
      <label class="lbl"> İMDB </label>
    <input type="text" name="imdb" id="imdb" class="formInput" value="<?=$imdb?>">
        <label class="lbl"> VİMEO </label>
    <input type="text" name="vimeo" id="vimeo" class="formInput" value="<?=$vimeo?>">
    <label class="lbl"> FACEBOOK </label>
    <input type="text" name="facebook" id="facebook" class="formInput" value="<?=$facebook?>">
    <label class="lbl"> TWITTER </label>
    <input type="text" name="twitter" id="twitter" class="formInput" value="<?=$twitter?>">
    <label class="lbl"> INSTAGRAM </label>
    <input type="text" name="instagram" id="instagram" class="formInput" value="<?=$instagram?>">
     <input type="submit" class="btn btn-primary" style="color: black;" value="Kaydet" />
  </form>
</div>