<?php
// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}
 
// memanggil fungsi yang sudah dibuat
perkenalan("Apriandi s.f", "Assalammualaikum");
 
  echo "<hr>";
 
  $saya = "friangamal";
  $ucapanSalam = "Selamat Pagi";
 
// memanggilnya lagi
  perkenalan($saya, $ucapanSalam);
?>
