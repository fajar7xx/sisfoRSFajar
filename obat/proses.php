<?php  
require_once '../config/config.php';
require_once '../libs/vendor/autoload.php';

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


    
    // echo $uuid4->toString();

    if(isset($_POST['tambah'])){
    	// Generate a version 4 (random) UUID object
    	$uuid = Uuid::uuid4()->toString();

    	$nama_obat = trim(mysqli_real_escape_string($koneksi, $_POST['nama_obat']));
    	$keterangan_obat = trim(mysqli_real_escape_string($koneksi, $_POST['ket_obat']));

    	$query_simpan = "INSERT INTO tb_obat(id_obat, nm_obat, ket_obat) VALUES('$uuid', '$nama_obat', '$keterangan_obat')";
    	$sql_simpan = mysqli_query($koneksi, $query_simpan) or die(mysqli_error($koneksi));

    	echo "<script>window.location='data.php';</script>";
    }
    else if($_POST['edit']){

        $id_obat = $_POST['id_obat'];
        $nama_obat = trim(mysqli_real_escape_string($koneksi, $_POST['nama_obat']));
        $keterangan_obat = trim(mysqli_real_escape_string($koneksi, $_POST['ket_obat']));
        $query_edit = "UPDATE tb_obat SET nm_obat = '$nama_obat', ket_obat = '$keterangan_obat' WHERE id_obat = '$id_obat'";
        $sql_edit = mysqli_query($koneksi, $query_edit) or die(mysqli_error($koneksi));

        echo "<script>window.location='data.php';</script>";
    }
?>