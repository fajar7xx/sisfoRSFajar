<?php  
require_once "../config/config.php";

$id_obat = $_GET['id'];

$query_del = "DELETE FROM tb_obat WHERE id_obat = '$id_obat'";
$sql_del = mysqli_query($koneksi, $query_del) or die(mysqli_error($koneksi));

echo "<script>window.location='data.php';</script>";

?>