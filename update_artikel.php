<?php
	ob_start();
	include 'koneksi.php';
	$id_artikel= $_POST['id_artikel'];
	$judul = $_POST['judul'];
	$penulis = $_POST['penulis'];
	$isi = $_POST['isi'];
	$nama_gambar = $_POST['gambar'];
	
	if(isset($_POST['insert_artikel'])){
		$dir_upload = "/img/gambar/";
		$nama_gambar = $_FILES['gambar']['name'];

		if(is_uploaded_file($_FILES['gambar']['tmp_name'])){
			$cek = move_uploaded_file($_FILES['gambar']['tmp_name'],
			$dir_upload.$nama_gambar);
		}
	}


	$query=mysqli_query($koneksi, "UPDATE artikel set judul='$judul', penulis='$penulis', isi='$isi', gambar='$nama_gambar' WHERE id_artikel='$id_artikel'");

	header('location:tampilartikel.php');
?>