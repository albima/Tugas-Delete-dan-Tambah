<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Update Data</div>

		<?php 

		require '../koneksi.php';
		// menampilkan data ke form
		if (isset($_GET['nim'])){
			$input_nim= $_GET['nim'];
			$query= "SELECT * FROM mahasiswa WHERE nim= '$input_nim'";
			$result= mysqli_query($link, $query);
			
			while ($isi= mysqli_fetch_object($result)) {
				# code...
			
		// if (isset($_POST['simpan'])) {
		// 	$input_nip = $_POST['txtnip'];
		// 	$input_nama = $_POST['txtnama'];
		// 	$input_alamat = $_POST['txtalamat'];

			// $query = "UPDATE dosen SET nama_dosen='$input_nip', '$input_nama', '$input_alamat'
			// 	WHERE nip='$input_nip'";
			// $result = mysqli_query($link, $query);
			// $isi = mysqli_fetch_object($result);

			
		 ?>


		<form  action="" method="post">
			<div class="form-group">
				<label for="">NIP</label>
				<input type="text" class="form-control"name="txtnim" 
					value="<?= $isi->nim; ?>" readonly>

			</div>

			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama" 
					value="<?=$isi->nama_mahasiswa;?>">
			</div>

			<div class="form-group">
			<label for="">Alamat</label>
			<input type="text" class="form-control" name="txtprodi" 
					value="<?= $isi->prodi;?>">
			</div>

			<input type="submit" class="btn btn-primary"name="simpan" 
					value="Edit Data">

			<?php 
			}
		}?>
			<a href="../mahasiswa.php" class="btn btn-warning">Batal</a>

		</form>
		<?php 
		if (isset($_POST['simpan'])) {
			$input_nim = $_POST['txtnim'];
			$input_nama = $_POST['txtnama'];
			$input_prodi = $_POST['txtprodi'];

			$query = "UPDATE mahasiswa SET nama_mahasiswa='$input_nama', prodi = '$input_prodi'
				WHERE nim='$input_nim'";
			$result = mysqli_query($link, $query);
			$isi = mysqli_fetch_object($result);
			if ($result) {
				header('location: ../mahasiswa.php');
			} else {
			
				echo 'Gagal disimpan ; ' , mysqli_error($link); 	
			
			
				# code...
					}
				
				
				}
 
				
			
			?>
</head>
<body>

</body>
</html>