<?php  
require_once '../config/config.php';
require_once '../libs/vendor/autoload.php';

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


    
    // echo $uuid4->toString();

    if(isset($_POST['tambah'])){
    	// Generate a version 4 (random) UUID object
    	$uuid = Uuid::uuid4()->toString();

    	$nama_dokter = trim(mysqli_real_escape_string($koneksi, $_POST['nama_dokter']));
        $spesialis = trim(mysqli_real_escape_string($koneksi, $_POST['spesialis']));
    	$alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $telp = trim(mysqli_real_escape_string($koneksi, $_POST['telp']));

    	$query_simpan = "INSERT INTO tb_dokter(id_dokter, nm_dokter, spesialis, alamat, no_telp) 
                        VALUES('$uuid', '$nama_dokter', '$spesialis', '$alamat', '$telp')";
    	$sql_simpan = mysqli_query($koneksi, $query_simpan) or die(mysqli_error($koneksi));

    	echo "<script>window.location='data.php';</script>";
    }
    else if($_POST['edit']){

        $id_dokter = $_POST['id_dokter'];

        $nama_dokter = trim(mysqli_real_escape_string($koneksi, $_POST['nama_dokter']));
        $spesialis = trim(mysqli_real_escape_string($koneksi, $_POST['spesialis']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $telp = trim(mysqli_real_escape_string($koneksi, $_POST['telp']));



        $query_edit = "UPDATE
                            tb_dokter
                        SET
                            nm_dokter = '$nama_dokter',
                            spesialis = '$spesialis',
                            alamat = '$alamat',
                            no_telp = '$telp'
                        WHERE
                            id_dokter = '$id_dokter'";

        $sql_edit = mysqli_query($koneksi, $query_edit) or die(mysqli_error($koneksi));

        echo "<script>window.location='data.php';</script>";
    }
?>