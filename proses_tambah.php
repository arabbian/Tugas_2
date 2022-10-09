<?php
if ($_POST){
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$alamat=$_POST['alamat'];

	if(empty($nama)){
		echo "<script>alert('Nama Mahasiswa tidak boleh kosong');
		location.href = 'tambah_mahasiswa.php'</script>";

	} elseif (empty($nim)) {
		echo "<script>alert('Nim tidak boleh kosong');
		location.href = 'tambah_mahasiswa.php'</script>";

	} elseif (empty($alamat)) {
		echo "<script>alert('Alamat tidak boleh kosong');
		location.href = 'tambah_mahasiswa.php'</script>";
	}
	else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into t_mahasiswa(nama, nim, alamat)
			value ('".$nama."','".$nim."','".$alamat."')") or die (mysqli_error($koneksi));
		if($insert){
			echo "<script>alert('Sukses menambahkan data mahasiswa');
		location.href = 'data_mahasiswa.php'</script>";	
		} else {
		echo "<script>alert('Gagal menambahkan data mahasiswa');
		location.href = 'data_mahasiswa.php'</script>";
		}
	}

}
?>