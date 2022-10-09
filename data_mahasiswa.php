<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perpustakaan</title>
</head>
<body>
	<table>
		<tr>
			<th><h3>Data Mahasiswa</h3></th>
			<th></th>
			<th><a href="tambah_mahasiswa.php" class="btn btn-success">Tambah Data Mahasiswa</a></th>
		</tr>
	</table>
	<table class = "table .table-hover tabel-striped " >
		<thead class="thead-dark">
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>ALAMAT</th>
				<th>USERNAME</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "koneksi.php";
			$qry_mahasiswa=mysqli_query($koneksi, "select * from t_mahasiswa");
			$no=0;
			while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_mahasiswa['nama']?></td>
				<td><?=$data_mahasiswa['nim']?></td>
				<td><?=$data_mahasiswa['alamat']?></td>
				<td><?=$data_mahasiswa['username']?></td>
				<td><a href="edit.php?id_mahasiswa=<?$data_mahasiswa['id_mahasiswa']?>" class="btn btn-success">Edit</a>
				<a href="hapus.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"
					oneclick="return confirm('Apakah Anda Yakin menghapus data ini ?')" class="
					btn btn-danger">Delete</a></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>