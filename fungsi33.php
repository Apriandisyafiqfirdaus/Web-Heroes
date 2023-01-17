<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<br>

 <h4>Tampil Barang</h4>

		 
<table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
	<th>Harga</th>
	<th>Stok</th>
      </tr>
    </thead>
    <?php 
	include "koneksi.php";
	$sql="select * from barang order by id_barang desc";
	
	$hasil=mysqli_query($kon,$sql);
	$no=0;
	while ($data = mysqli_fetch_array($hasil)) {
	$no++;

	?>
	<tbody>
           <tr> 
		<td><?php echo $no;?></td> 
		<td><?php echo $data["nama_barang"]; ?></td> 
		<td><?php echo $data["harga"];   ?></td> 
		<td><?php echo $data["stok"];   ?></td> 
           </tr>
       </tbody>  
	<?php 
	}
	?>		    
</table>
</div>
</body>
</html>