<!DOCTYPE html>
<html lang="en">



</head> 
<body>
<div class="container inputan-kelompok4">
    
    <div class="py-5 text-center">
      <h2>Input Nilai</h2>
      <p class="lead">Input Nilai Anda</p>
    </div>

<form method="POST" action="program1.php ">
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
    <a href="inputprogram.php" class="btn btn-success mb-2">Kembali ke halaman depan</a>
    </form>
    <img src="serigala2.jpeg" weidth="50">
</body>
</html>