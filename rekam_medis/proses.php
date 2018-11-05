<?php  
require_once '../config/config.php';
require_once '../libs/vendor/autoload.php';

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


    
    // echo $uuid4->toString();

    if(isset($_POST['tambah'])){
    	// Generate a version 4 (random) UUID object
    	$uuid = Uuid::uuid4()->toString();

    	$pasien = trim(mysqli_real_escape_string($koneksi, $_POST['pasien']));
        $keluhan = trim(mysqli_real_escape_string($koneksi, $_POST['keluhan']));
        $dokter = trim(mysqli_real_escape_string($koneksi, $_POST['dokter']));
        $diagnosa = trim(mysqli_real_escape_string($koneksi, $_POST['diagnosa']));
        $poli = trim(mysqli_real_escape_string($koneksi, $_POST['poli']));
        $tanggal = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal']));
        
    	$query_simpan = "INSERT INTO tb_rekammedis(id_rm, id_pasien, keluhan, id_dokter, diagnosa, id_poli, tgl_periksa)
                        VALUES('$uuid',
                               '$pasien',
                               '$keluhan',
                               '$dokter',
                               '$diagnosa',
                               '$poli',
                               '$tanggal')";
    	$sql_simpan = mysqli_query($koneksi, $query_simpan) or die(mysqli_error($koneksi));


        $obat = $_POST['obat'];

        foreach($obat as $ob){
            $query_simpan1 = "INSERT INTO tb_rm_obat(id_rm, id_obat) 
                            VALUES('$uuid', '$ob')";
            $sql_simpan1 = mysqli_query($koneksi, $query_simpan1) or die(mysqli_error($koneksi));
        }

    	echo "<script>window.location='data.php';</script>";
    }


    // else if($_POST['del']){



    //     $query_edit = "";

    //     $sql_edit = mysqli_query($koneksi, $query_edit) or die(mysqli_error($koneksi));

    //     echo "<script>window.location='data.php';</script>";
    // }
?>