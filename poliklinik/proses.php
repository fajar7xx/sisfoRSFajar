<?php  
require_once '../config/config.php';
require_once '../libs/vendor/autoload.php';

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


    
    // echo $uuid4->toString();

    if(isset($_POST['add'])){
    	
        $total = $_POST['total'];

        for ($i=1; $i <=$total; $i++) {
            // Generate a version 4 (random) UUID object
            $uuid = Uuid::uuid4()->toString(); 
            $nama_poli = trim(mysqli_real_escape_string($koneksi, $_POST['nama'.$i]));
            $gedung_poli = trim(mysqli_real_escape_string($koneksi, $_POST['gedung'.$i]));

            $query_simpan = "INSERT INTO tb_poli(id_poli, nm_poli, gedung) VALUES('$uuid', '$nama_poli', '$gedung_poli')";
            $sql_simpan = mysqli_query($koneksi, $query_simpan) or die(mysqli_error($koneksi));
        }
        if($sql_simpan){
           echo "<script>
                alert('".$total." data berhasil di tambahkan');
                window.location='data.php';
                </script>"; 
        }
        else{
            echo "<script>
            alert('gagal menambahkan data, silahkan coba lagi'); 
            window.location='generate.php'; 
            </script>"; 
        }
    }
    else if($_POST['edit']){

        // $id_obat = $_POST['id_obat'];
        // $nama_obat = trim(mysqli_real_escape_string($koneksi, $_POST['nama_obat']));
        // $keterangan_obat = trim(mysqli_real_escape_string($koneksi, $_POST['ket_obat']));
        // $query_edit = "UPDATE tb_obat SET nm_obat = '$nama_obat', ket_obat = '$keterangan_obat' WHERE id_obat = '$id_obat'";
        // $sql_edit = mysqli_query($koneksi, $query_edit) or die(mysqli_error($koneksi));

        // echo "<script>window.location='data.php';</script>";
    }
?>