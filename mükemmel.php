<html>
	<head>
	</head>
	<body>
	<form action="" method="post">
Sayı giriş : <input type="text" placeholder="Aklınızdaki sayıyı giriniz" name="sayi" />
<input type="submit" value="Gönder" />
</form>
	<?php
	$sayi = $_POST["sayi"]; //Aranan sayi
         for($a=1; $a<$sayi; $a++) {
            $sonuc = $sayi%$a;
            if($sonuc==0) {
               $dizi[]=$a;
            }
         }
			if(array_sum($dizi)==$sayi) //Bölünenlerin toplami aranan sayiya esitmi
			{
				$mesaj = "<script>alert('Bu bir mükemmel sayı')</script>";
				  echo $mesaj;
			}
			else
			{
                $mesajimiz= "<script>alert('Bu bir mükemmel sayı değil')</script>";
                 echo $mesajimiz;
			}
		?>
 </body>
</html>