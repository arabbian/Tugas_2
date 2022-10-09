<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perpustakaan</title>
</head>
<body>
		<h3>Tambah Data Mahasiswa</h3>
		<form action="proses_tambah.php" method="post">
			Nama :
			<input type="text" name="nama" value="" class="form-control">
			Nim
			<input type="text" name="nim" value="" class="form-control">
			Alamat
			<input type="text" name="alamat" value="" class="form-control">
			<br>
			<input type="submit" name="simpan" value="Tambah Mahasiswa" class="btn btn-primary">
		</form>

		 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>