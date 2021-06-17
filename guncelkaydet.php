<?php

include("mysqlbaglan.php");


extract($_POST);


$sql ="UPDATE uye ".
      "SET ad='$ad',soyad='$soyad',tc='$tc',tlf='$tlf',adres='$adres',sifre='$sifre' ".
      "WHERE kisii_id=".$_GET['id'];

$cevap = mysqli_query( $baglanti,$sql);

      
if(!$cevap){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
    echo "Kayıt Güncellendi.";
    echo " <br><a href='listele.php'> Listele</a>\n";
}


mysqli_close($baglanti);
?>

