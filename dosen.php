<!DOCTYPE html>
<html>
<head>
	<title> Data Dosen </title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<body>
	<div class="container">
		<div class="alert alert-info"> Data Dosen </div>
		<table class=" table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nip</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>


				</tr>
			</thead>
			<tbody>
				<?php
				require './koneksi.php';
				$query = "SELECT * FROM dosen";
				// jalankan query diatas
				$result = mysqli_query($link, $query);

				$no= 1;

				while ($isi = mysqli_fetch_object($result)) {
					# code...
				

				  ?>
				<tr>
					<td><?= $no++;  ?></td>
					<td><?= $isi->nip; ?></td>
					<td><?= $isi->nama;?></td>
					<td><?= $isi->alamat;?></td>
					<td>
						<a href="" class=" btn btn-danger">Del</a>

						<a href="" class=" btn btn-warning">Edit</a>



					</td>


				</tr>
			<?php } ?>
			</tbody>

		</table>



	</div>

</body>
</html>
