<!DOCTYPE html>
<html lang="en">

</head>
<body class="bg-light">
  <div class="container inputan-kelompok4">
    <div class="py-5 text-center">
      <h2>Tugas Kelompok 1</h2>
    </div>
    <body class="text-center">
      <div class="container">
      <div class="py-3 text-center">
        <h2>Hasil</h2>
      </div>
      <?php
      $no = 0;
        
      foreach ($_POST['nilai'] as $key => $value) {
      $no++;
          if($value < 0 || $value > 100) {
          echo "<script>
          alert('DATA SALAH SILANGKAN ULANGI')
          window.location.replace('index.php')
          </script>";
          break;
          }else{
              echo "Input Nilai ke-".$no. " = " . $value . "<br />";   
  
           }
         
      }
      function Gabung($nilai) {
      $jmlindeks = count($_POST['nilai']);
          foreach ($_POST['nilai'] as $key => $nilai) {
              $jmlkey = $key+1;
              if($jmlkey != $jmlindeks){
                  echo $nilai . "+";
              }
              else{
                  echo $nilai;
              }
          }
      }
      function Operasi($nilai){
          $jmlindeks = count($_POST['nilai']);
         
          $perjumlahan = array_sum($nilai);
        
          $nilaiAkhir = $perjumlahan / $jmlindeks;
          return $nilaiAkhir;
  
      }
   
      function nilaiMutu($nilai){
          switch ($nilai) {
              case $nilai >= 80:
               echo "Nilai Mutu : A";
                break;
              case $nilai >= 70:
                  echo "Nilai Mutu : B";
                break;
              case $nilai >= 60:
                  echo "Nilai Mutu : C";
                break;
                
              case $nilai >= 50:
                  echo "Nilai Mutu : D";
                break;
                
              case $nilai <=49:
                  echo "Nilai Mutu : E";
                break;
              default:
              echo "No Data Inputed";
            }
      }
  
      function Status($nilai){
          if($nilai >= 65){
              echo "Status : LULUS";
          }else{
              echo "Status : COBA LAGI TAHUN DEPAN!";
          }
      }
      
      echo "Nilai Akhir = ( " ;
      echo Gabung($_POST['nilai']) . " ) / " . count($_POST['nilai']) . ' = ';
      echo Operasi($_POST['nilai']) . "</br>";
      $nilaiAkhir = Operasi($_POST['nilai']);
      echo nilaiMutu($nilaiAkhir) . "</br>";
      echo Status($nilaiAkhir);
      echo "</br>";
  
     ?>
      </div>
      <a href="index.php" class="btn btn-primary mt-4">Back to Home</a>
      <?php include('partial/js.php');?>

      <div class="container inputan-kelompok4">
    
    <div class="py-5 text-center">
      <h2>Input Nilai</h2>
      <p class="lead">Input Nilai Anda</p>
    </div>

<form method="POST" action="nilai.php">
    <?php
        $ulang = $_POST['banyak'];

        for($x = 1; $x<=$ulang; $x++ )
        {
            echo "Nilai Ke ",$x," <input
                type='number' class='form-control' name='nilai[]'
                size=5 required/><br>";
        }

    ?>
    <input type="submit" class="btn btn-primary mb-2" value="Submit">
    <a href="index.php" class="btn btn-success mb-2">Kembali ke halaman depan</a>
    </form>


    <form method="post" action="nilai.php">
    <label for="inputBanyakNilai">Banyak form input nilai</label>
    <input type="number" name="banyak" class="form-control" id="inputBanyakNilai" aria-describedby="Banyaknilai" placeholder="Input banyak nilai" required>
    <small id="Banyaknilai" class="form-text text-muted">Masukan untuk menyediakan berapa form input nilai yang akan disediakan.</small>
      <hr class="mb-4">
      <button class="btn btn-primary btn-lg btn-block" type="submit" >Submit</button>
    </form>

</body>

</html>