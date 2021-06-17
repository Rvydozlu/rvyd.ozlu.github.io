<html>
<head><meta charset="utf-8"></head>
<body>
<?php
 
include("mysqlbaglan.php");


$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$tc=$_POST['tc'];
$tlf=$_POST['tlf'];
$adres=$_POST['adres'];
$sifre=$_POST['sifre'];


echo "Girdiginiz bilgiler:</br>";
echo "Adi   :$ad </br>";
echo "Soyadi:$soyad</br>";
echo "Tc :$tc</br>";
echo "Tlf  :$tlf</br>";
echo "Adres :$adres</br>";
echo "Sifre  :$sifre</br>";



$sql = "INSERT INTO uye ".
       "(ad,soyad,tc,tlf,adres,sifre) ".
       "VALUES ( '$ad','$soyad', '$tc', '$tlf', '$adres', '$sifre')";
	   
echo $sql;
echo "<br/>";

$cevap = mysqli_query( $baglanti,$sql);

      
if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    echo "Veritabanina eklendi, Kayıtları görmek için";
    echo " <a href='listele.php'> Tiklayiniz</a>\n";
}


mysqli_close($baglanti);
?>
</body>
</html>

