<?php  
require_once "../config/config.php";

$cek = $_POST['checked'];
if(!isset($cek)){
	echo "<script>alert('tidak ada dayang di pilih!'); window.location='data.php';</script>";
}
else{
	foreach($cek as $id){
		$query_del = "DELETE FROM tb_dokter WHERE id_dokter = '$id'";
		$sql_del = mysqli_query($koneksi, $query_del) or die(mysqli_error($koneksi));
	}

	if($sql_del){
		echo "<script>alert('".count($cek)." data berhasil di hapus');window.location='data.php';</script>";
	}
	else{
		echo "<script>alert('Gagal Hapus data, coba lagi');</script>";

	}
}
?>