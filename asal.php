<html>
	<head>
	</head>
	<body>
	<form action="" method="post">
Sayı giriş : <input type="text" placeholder="Aklınızdaki sayıyı giriniz" name="sayi" />
<input type="submit" value="Gönder" />
</form>

<?php
$asal = 1;
$sayi = $_POST["sayi"];
for($i=2; $i<=$sayi-1; $i++){

   if($sayi%$i==0){
      $asal=0;
   }
}
   
if($asal==1){
    echo "$sayi sayısı asaldır.";
}
else{
    echo "$sayi sayısı asal değildir.";
}
?>
 </body>
</html>