<form action="" method="POST">
<input type="text" name="ad" placeholder="Adınız-Soyadınız" required> <br>
<input type="email" name="email" placeholder="ornek@mail.com" required> <br>
<input type="text" name="captcha" placeholder="Doğrulama kodunu girin" required>
 <?= $kontrol = rand(1111,9999) ?>
 
<br> <br>

<input type="submit" name="submit" value="Gönder">
<input type="hidden" name="hCaptcha" value="<?=$kontrol ?>" >


</form>
<?php
if(@$_POST["submit"]){
    if($_POST["captcha"] == $_POST["hCaptcha"]) {
        // eğer captcha doğruysa
        echo "<b>Form başarıyla gönderildi...</b>";
    }else {
        echo "<b>Doğrulama kodunu kontrol ediniz...!</b>";
    }
}






?>