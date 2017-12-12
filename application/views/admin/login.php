<div style="margin-top: 150px;">
  <form method="post" action="<?=base_url('Admin/DoLogin')?>">
    <label class="lbl"> Kullanıcı Adı </label>
    <input type="text" name="username" class="formInput" value="">
    <label class="lbl"> Şifre </label>
    <input type="password" name="password" class="formInput" value="">
    <button class="btn">Giriş Yap</button>
    <?php
    	if(@$error){
    		?>
    		<label class="lbl-error" style="color: red;"> <?=$error?> </label>
    		<?php
    	}
    ?>
  </form>
  <script type="text/javascript">
      $('.index__wrapper').css('display','none');
  </script>
</div>