<?php

include("mysqlbaglan.php");


$sql = "SELECT * FROM uye WHERE kisii_id=".$_GET['id'];


$cevap = mysqli_query($baglanti,$sql);

    
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}



$gelen=mysqli_fetch_array($cevap);
?>
<html>
<head>
 <style>
	  h1{
	    color:#8F3114;
      }
	  body {
		  background-color:#7798A8;
	  }	  
	  </style>
</head> 	  
<body>
<h1 align="center"> BİLGİLERİNİZİ BU SAYFADAN GÜNCELLEYEBİLİRSİNİZ <h1>
<form align="center" action="guncelkaydet.php?id=<?php echo $_GET['id'] ?>" 
method="POST">
Adı:
<input type="text" name="ad" value="<?php echo $gelen['ad']?>" /> <br/> <br/> 

Soyadı:
<input type="text" name="soyad" value="<?php echo $gelen['soyad'] ?>" /> <br /> <br/> 

TCKN :<input type="text" name="tc" 
value="<?php echo $gelen['tc'] ?>" /> <br /><br/> 

TlfNo  : <input type="text" name="tlf" 
value="<?php echo $gelen['tlf'] ?>" />  <br /><br/>

Adres  : <input type="text" name="adres" 
value="<?php echo $gelen['adres'] ?>" />  <br /><br/>

Sifre  : <input type="text" name="sifre" 
value="<?php echo $gelen['sifre'] ?>" />  <br /><br/> 
<input type="submit" value="KAYDET"/>
</form>
</body>
</html>
