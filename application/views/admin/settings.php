<div style="margin-top: 80px;">

<h3 style="text-align:center; color: white; ">Bilgileri Güncelle</h3>
<div class="container" style="width: 40%;margin-left: 30%;">
  <form action="<?=base_url('Admin/UpdateAdmin');?>" method="POST">
    <label for="usrname">Kullanıcı Adı</label>
    <input type="text" id="username" name="username" required>
    <label for="psw">Şifre</label>
    <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Parola küçükharf,büyük harf,rakamlar dahil olmak üzere en az 8 karakter içermelidir" required>
    <label for="psw">Şifre Tekrar</label>
    <input type="password" id="passwordagain" name="passwordagain" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Parola küçükharf,büyük harf,rakamlar dahil olmak üzere en az 8 karakter içermelidir" required>
    <input type="submit" class="btn gray" style="color: black;" value="Kaydet" />
    <?php if(@$response) echo $response; ?>
  </form>
</div>

</div>