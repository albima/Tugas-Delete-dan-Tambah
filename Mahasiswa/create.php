<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Tambah Data Mahasiswa</div>

		<?php 

		require '../koneksi.php';
		if (isset($_POST['simpan'])) {
			$input_nim = $_POST['txtnim'];
			$input_nama = $_POST['txtnama'];
			$input_prodi = $_POST['txtprodi'];

			$query = "INSERT INTO mahasiswa VALUES('$input_nim', '$input_nama', '$input_prodi')";
			$result = mysqli_query($link, $query);

			if ($result) {

				header('location: ../mahasiswa.php');
				# code...
			} else {

				echo 'Gagal disimpan :' . mysqli_error($link) ;
			}
			# code...
		}


		 ?>


		<form  action="" method="post">
			<div class="form-group">
				<label for="">NIP</label>
				<input type="text" class="form-control" name="txtnim">
			</div>

			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama">
			</div>

			<div class="form-group">
			<label for="">Alamat</label>
			<input type="text" class="form-control" name="txtprodi">
			</div>

			<input type="submit" class="btn btn-primary"
					name="simpan" value="Simpan Data">

			<a href="index.php" class="btn btn-warning">Batal</a>

		</form>
</head>
<body>

</body>
</html>