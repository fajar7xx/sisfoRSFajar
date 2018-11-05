<?php  
require_once '../config/config.php';
require_once '../libs/vendor/autoload.php';

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


    
    // echo $uuid4->toString();

    if(isset($_POST['tambah'])){
    	// Generate a version 4 (random) UUID object
    	$uuid = Uuid::uuid4()->toString();

        $identitas = trim(mysqli_real_escape_string($koneksi, $_POST['identitas']));
    	$nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama']));
        $jk = trim(mysqli_real_escape_string($koneksi, $_POST['jk']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $telp = trim(mysqli_real_escape_string($koneksi, $_POST['telp']));

        // cek apakah no identitas sudah ada
        $query_cek_id = "SELECT * FROM tb_pasien WHERE no_identitas = '$identitas'";
        $sql_cek_id = mysqli_query($koneksi, $query_cek_id) or die(mysqli_error($koneksi));

        if(mysqli_num_rows($sql_cek_id) > 0){
            echo "<script>alert('No Identtias sudah ada, Mohon input nomor identitas lain !');window.location='add.php';</script>";
        }
        else{ 
           $query_simpan = "INSERT INTO tb_pasien(id_pasien, no_identitas, nm_pasien, jk, alamat, no_telp) 
                        VALUES('$uuid', '$identitas', '$nama','$jk', '$alamat', '$telp')";
            $sql_simpan = mysqli_query($koneksi, $query_simpan) or die(mysqli_error($koneksi)); 

            echo "<script>window.location='data.php';</script>";
        }
    }
    else if(isset($_POST['edit'])){

        $id = $_POST['id'];

        $identitas = trim(mysqli_real_escape_string($koneksi, $_POST['identitas']));
        $nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama']));
        $jk = trim(mysqli_real_escape_string($koneksi, $_POST['jk']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $telp = trim(mysqli_real_escape_string($koneksi, $_POST['telp']));

        // cek apakah no identitas sudah ada
        $query_cek_id = "SELECT * FROM tb_pasien WHERE no_identitas = '$identitas' AND id_pasien != '$id' ";
        $sql_cek_id = mysqli_query($koneksi, $query_cek_id) or die(mysqli_error($koneksi));

        if(mysqli_num_rows($sql_cek_id) > 0){
            echo "<script>alert('No Identtias sudah ada, Mohon input nomor identitas lain !');window.location='edit.php?id=$id';</script>";
        }
        else{ 
           $query_edit = "UPDATE tb_pasien SET no_identitas = '$identitas', nm_pasien = '$nama', jk = '$jk', alamat = '$alamat', no_telp='$telp' WHERE id_pasien = '$id'";
            $sql_edit = mysqli_query($koneksi, $query_edit) or die(mysqli_error($koneksi)); 

            echo "<script>window.location='data.php';</script>";
        }
        
    }

    // import file 
    else if(isset($_POST['import'])){


        // upload file
        $file = $_FILES['file']['name'];
        $ekstensi = explode(".", $file);
        $file_name = "file-" .round(microtime(true)). "." .end($ekstensi);
        $sumber = $_FILES['file']['tmp_name'];
        $target_dir = "../file/";
        $target_file = $target_dir.$file_name;
        move_uploaded_file($sumber, $target_file);
        // $upload = move_uploaded_file($sumber, $target_file);

        // if($upload){
        //     echo "Upload Berhasil";
        // }
        // else{
        //     echo "Upload Gagal, Silahkan Ulangi kembali ?";
        // }
        
        // phpoffice skrip
        $obj = PHPExcel_IOFactory::load($target_file);
        $all_data = $obj->getActiveSheet()->toArray(null, true, true, true);

        // cek apakah data sudah masuk pada cek 3B
        // echo $all_data[3]['B'];

        $query_simpan = "INSERT INTO tb_pasien(id_pasien,no_identitas, nm_pasien, jk, alamat, no_telp) VALUES";
        for($i=3; $i<= count($all_data); $i++){
            $uuid = Uuid::uuid4()->toString();

            // cell sesuai isi data pada excel untuk d input
            $no_id = $all_data[$i]['A'];
            $nama = $all_data[$i]['B'];
            $jk = $all_data[$i]['C'];
            $alamat = $all_data[$i]['D'];
            $telp = $all_data[$i]['E'];

            $query_simpan .= "('$uuid', '$no_id', '$nama', '$jk', '$alamat', '$telp'),";
        }

        $query_simpan = substr($query_simpan, 0, -1);

        // cek apakah data sudah terbaca 
        // echo $query_simpan;

        $sql_simpan = mysqli_query($koneksi, $query_simpan) or die(mysqli_error($koneksi));

        // untuk mengahpus file yang sudah di import agar tidak banyak memakan space 
        // pada penyimpanan
        unlink($target_file);

        echo "<script>window.location='data.php';</script>";

    }


?>