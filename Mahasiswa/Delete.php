<?php 	

if (isset($_GET['nim'])){
	require '../koneksi.php';
	
	$input_nim = $_GET['nim'];


	$query = "DELETE FROM mahasiswa WHERE nim ='$input_nim'";
	$result = mysqli_query($link, $query);

	if ($result) {

		header('location: ../mahasiswa.php');
		// echo input_nip;
		# code...
	} else {
		echo 'Gagal Dihapus : '. mysqli_error($link);
	}


}

 ?>