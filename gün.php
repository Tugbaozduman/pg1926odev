<?php
setlocale(LC_TIME, 'tr_TR');
date_default_timezone_set('Europe/Istanbul');
echo strftime('%e %B %Y %A %H:%M:%S');
$saat = date("H");

if ( $saat>06 && $saat<10 )
{
echo "<script>alert('Günaydın')</script>"; 
}
else if ( $saat>10 && $saat<17 )
{
echo "<script>alert('İyi Günler')</script>";
}
else if ( $saat>17 && $saat<20 )
{
echo "<script>alert('İyi Akşamlar')</script>";
}
else if ( $saat>20 && $saat<00 )
{
echo "<script>alert('İyi Geceler')</script>";
}
if ( $saat>00 && $saat<06 )
{
echo "<script>alert('Esenlikler Dilerim')</script>";
}
?>