<?php

include("mysqlbaglan.php");


$sql = "DELETE FROM uye WHERE kisii_id=".$_GET['id'];


$cevap = mysqli_query($baglanti,$sql);
       
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    echo "Kayıt Silindi!</br>";
    echo " <a href='silmelistesi.php'> Listele</a>\n";
}

mysqli_close($baglanti);
?>

